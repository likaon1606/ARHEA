// Gulp
import gulp from 'gulp';
const { watch, src, dest, series, parallel } = gulp;
import config from './config.js';
let url_list;
let base_url = config.base_url;

// Plugins
import fs from 'fs';
import inquirer from 'inquirer';
import figlet from 'figlet';
import path from 'path';
import flatmap from 'gulp-flatmap';
import mergeStream from 'merge-stream';
import { deleteAsync } from 'del';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import autoprefixer from 'gulp-autoprefixer';
import penthouse from "penthouse";
import concat from 'gulp-concat';
import terser from 'gulp-terser';
import filter from 'gulp-filter';
import rename from "gulp-rename";
import rezzy from 'gulp-rezzy';
import imagemin from 'gulp-imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import webp from 'gulp-webp';
import browserSync from 'browser-sync';
import { imageSize } from 'image-size';

async function wizard(done) {
  if (config.base_url == null) {
    console.clear();

    console.log(
      figlet.textSync("WP Boilerplate")
    );

    const answers = await inquirer.prompt([
      {
        type: 'input',
        name: 'theme_name',
        message: '¿Cuál es el nombre del proyecto?',
      },
      {
        type: 'input',
        name: 'theme_uri',
        message: '¿Cuál es el dominio del sitio? (por ejemplo: proyecto.com)',
      },
      {
        type: 'input',
        name: 'base_url',
        message: '¿Cuál es la URL local? (por ejemplo: localhost/proyecto)',
      }
    ]);

    base_url = answers.base_url;

    fs.readFile("src/sass/style.sass", "utf-8", (err, data) => {
      if (err) throw err;

      const info = data
        .replace(
          "Theme Name: null", `Theme Name: ${answers.theme_name}`)
        .replace(
          "Theme URI: null", `Theme URI: https://${answers.theme_uri}`)
        .replace(
          "Description: null", `Description: Template para el sitio de ${answers.theme_name}`);

      fs.writeFile("src/sass/style.sass", info, "utf-8", (err) => {
        if (err) throw err;
      });
    });

    fs.readFile("config.js", "utf-8", (err, data) => {
      if (err) throw err;

      var url = data.replace("base_url: null", `base_url: "${answers.base_url}"`);

      fs.writeFile("config.js", url, "utf-8", (err) => {
        if (err) throw err;
      });
    });

    console.clear();

    done();
  } else {
    done();
  }
};

function styles(done) {
  return src([
    'src/sass/style.sass'
  ])
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .on('error', done)
    .pipe(autoprefixer())
    .pipe(dest('./'))
    .pipe(browserSync.stream());
}

function pageCriticalCSS() {
  const url = url_list.pop();

  if (!url) {
    return Promise.resolve()
  }

  return penthouse({
    url: `http://${base_url}/${url.slug}`,
    css: 'style.css',
    width: 1300,
    height: 900,
    keepLargerMediaQueries: true,
    userAgent: 'Penthouse Critical Path CSS Generator',
    puppeteer: {
      getBrowser: undefined
    }
  })
    .then(data => {
      fs.mkdirSync('assets/critical-css/', { recursive: true });
      fs.writeFileSync('assets/critical-css/' + url.slug + '.css', data.replace(/@font-face[^{]*{([^{}]|{[^{}]*})*}/gi, ''));

      return pageCriticalCSS()
    })
    .catch(err => {
      console.log(err);
    })
}

async function criticalCSS(done) {
  const response = await fetch(`http://${base_url}/wp-json/wp/v2/pages`).then(res => res.json());

  url_list = response.map((page) => {
    return {
      slug: page.slug
    }
  });

  Promise.all([
    pageCriticalCSS(),
    pageCriticalCSS()
  ])
    .then(() => {
      done();
    })
}

function concatJS() {
  return src([
    "js/global.js",
    "js/**/*.js",
    "!js/main.js"
  ])
    .pipe(concat("main.js"))
    .pipe(terser())
    .pipe(dest("js"))
    .pipe(browserSync.stream());
}

function processImages(filePath) {
  let srcFolder,
    destFolder1,
    destFolder2;

  if (typeof filePath === "function") {
    srcFolder = "src/img/**/*.{jpg,png,gif,svg,webp}";
    destFolder1 = "src/img/";
    destFolder2 = "assets/img/";
  } else {
    srcFolder = filePath;
    destFolder1 = path.dirname(filePath);
    destFolder2 = destFolder1.replace("src", "assets");
  }

  const limitResolutionFilter = filter(
    (file) => {
      const dimensions = imageSize(file.contents);

      if (dimensions.width > 1920 && dimensions.type != "svg" && dimensions.type != "gif") {
        return true;
      }

      return false;
    },
    { restore: true }),
    imageOptimizeFilter = filter([
      '**',
      '!**/*.gif',
      '!**/*.svg'
    ], { restore: true });

  return src([srcFolder], {
    buffer: true,
    removeBOM: false
  })
    .pipe(limitResolutionFilter)
    .pipe(rezzy([
      {
        width: 1920,
        suffix: "-temp"
      }
    ]))
    .pipe(rename((filePath) => {
      filePath.basename = filePath.basename.replace("-temp", "");
      return filePath.basename;
    }))
    .pipe(limitResolutionFilter.restore)
    .pipe(dest(destFolder1))
    .pipe(imageOptimizeFilter)
    .pipe(flatmap((stream, file) => {
      let dimensions = imageSize(file.contents),
        merged = mergeStream(stream);

      if (dimensions.width > 576) {
        merged.add(stream.pipe(rezzy([{ width: 576, suffix: '-sm' }])));
      }

      if (dimensions.width > 768) {
        merged.add(stream.pipe(rezzy([{ width: 768, suffix: '-md' }])));
      }

      if (dimensions.width > 992) {
        merged.add(stream.pipe(rezzy([{ width: 992, suffix: '-lg' }])));
      }

      if (dimensions.width > 1200) {
        merged.add(stream.pipe(rezzy([{ width: 1200, suffix: '-xl' }])));
      }

      if (dimensions.width > 1400) {
        merged.add(stream.pipe(rezzy([{ width: 1400, suffix: '-xxl' }])));
      }

      return merged
    }))
    .pipe(imagemin([
      imageminMozjpeg({
        quality: config.images_quality.jpg,
        progressive: true
      }),
      imageminPngquant({
        strip: true,
        quality: [config.images_quality.png.min / 100, config.images_quality.png.max / 100]
      })
    ])
    )
    .pipe(webp({
      quality: config.images_quality.webp
    }))
    .pipe(imageOptimizeFilter.restore)
    .pipe(dest(destFolder2));
}

function liveReload(done) {
  browserSync.init({
    proxy: "http://" + base_url,
    notify: false
  });

  watch("src/sass/**/*.sass", series(styles));
  watch(["js/**/*.js", "!./js/main.js"]).on('change', concatJS);
  watch("**/*.php").on('change', browserSync.reload);
  watch("src/img/**/*.{jpg,jpeg,png,gif,svg,webp}").on('add', (path) => {
    processImages(path);

    setTimeout(() => {
      browserSync.reload();
    }, 5000);
  }).on('unlink', (filePath) => {
    const fileSrc = filePath.replace("src", "assets").replace(path.extname(filePath), "");

    deleteAsync([fileSrc] + "{,-sm,-md,-lg,-xl,-xxl}.{jpg,jpeg,png,webp,gif,svg}");

    browserSync.reload();
  });

  done();
}

process.on('SIGINT', () => {
  console.log('');
  console.log('Generando Critical CSS...');

  criticalCSS(() => {
    process.exit();
  });
});

export { processImages }
export default series(wizard, parallel(styles, concatJS), liveReload)