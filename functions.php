<?php
// Images sizes  
add_theme_support(
  "title-tag",
  "post-thumbnails"
);

add_image_size("sm", 576);
add_image_size("md", 768);
add_image_size("lg", 992);
add_image_size("xl", 1200);
add_image_size("xxl", 1400);


// Enqueue files
function add_theme_scripts() {
  // Variables
  $site_parameters = array(
    "ajax_url"   => admin_url('admin-ajax.php'),
    "site_url"   => get_bloginfo("url")
  );

  // Styles
  wp_enqueue_style("slick", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array(), "1.9.0");
  wp_enqueue_style("slick-theme", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css", array(), "1.9.0");
  wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", array(), "6.5.1");
  wp_enqueue_style("style", get_stylesheet_uri());

  //Scripts
  wp_enqueue_script("modernizr", "https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", array(), "2.8.3", false);
  wp_enqueue_script("slick", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js", array('jquery'), "1.9.0", true);
  // wp_enqueue_script("hubspot", "//js.hsforms.net/forms/embed/v2.js", array(), "2.0", false);
  wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array('jquery'), "1.0", true);
  wp_localize_script('main', 'site_parameters', $site_parameters);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');


// Images sizes
function siteImage($path, $classes = null, $alt = null, $lazy = true) {
  $path = get_bloginfo("template_url") . "/assets/img/" . $path;
  $format = isset(pathinfo($path)["extension"]) ? pathinfo($path)["extension"] : 'jpg';

  if ($format != "svg" && $format != "gif") {
    $url = str_replace(":" . $_SERVER['SERVER_PORT'], "", $path . ".webp");
    $full_width = getimagesize($url)[0];
    $full_height = getimagesize($url)[1];
    $sizeInfo = function ($size, $path, $id) {
      $url = str_replace(":" . $_SERVER['SERVER_PORT'], "", "{$path}-{$id}.webp");
      $width = getimagesize($url)[0];
      $height = getimagesize($url)[1];

      return "<source media='(max-width: {$size}px)' srcset='{$path}-{$id}.webp' width='{$width}' height='{$height}' />";
    };

    echo "<picture class='{$classes}'>";

    if ($full_width > 576 & $full_height >= $full_width) {
      echo $sizeInfo("576", $path, "sm");
    }

    if ($full_width > 768 & $full_height >= ($full_width * 0.5)) {
      echo $sizeInfo("768", $path, "md");
    }

    if ($full_width > 992) {
      echo $sizeInfo("992", $path, "lg");
    }

    if ($full_width > 1200) {
      echo $sizeInfo("1200", $path, "xl");
    }

    if ($full_width > 1400) {
      echo $sizeInfo("1400", $path, "xxl");
    }

    if ($full_width >= 1920) {
      echo "<source media='(min-width: 1401)' srcset='{$path}.webp' width='{$full_width}' height='{$full_height}' />";
    }

    echo "<img " . ($lazy ? "loading='lazy'" : "") . " src='{$path}.webp' width='{$full_width}' height='{$full_height}' alt='{$alt}'></picture>";
  } else {
    echo "<img " . ($lazy ? "loading='lazy'" : "") . " src='{$path}' alt='{$alt}' class='{$classes}'>";
  }
}

function siteImageUpload($post_id, $classes =  null, $lazy = true) {
  $sizes = array(
    "sm" => 576,
    "md" => 768,
    "lg" => 992,
    "xl" => 1200,
    "xxl" => 1400,
    "full" => 1401
  );

  $upload = function ($size) use ($post_id) {
    return wp_get_attachment_image_url($post_id, $size);
  };

  echo "<picture " . ($classes ? "class='{$classes}'" : "") . ">";

  foreach ($sizes as $size => $width) {
    echo "<source media='(" . ($width > 1400 ? "min-width: {$width}px" : "max-width: {$width}px") . ")' srcset='{$upload($size)}'>";
  }

  echo "<img " . ($lazy ? "loading='lazy'" : "") . " src='{$upload("full")}' alt='Imagen'>";
  echo "</picture>";
}


// Videos path
function siteVideo($url, $classes = null, $params = null) {
  $path = get_bloginfo("template_url") . "/assets/video/" . $url;
  $params = isset($params) ? $params : 'playsinline autoplay muted loop';

  echo "<video class='{$classes}' {$params}>
            <source type='video/webm' src='{$path}.webm'>
            <source type='video/mp4' src='{$path}.mp4'>
          </video>";
}


function hsForm($portalId, $formId, $class = "") { ?>
  <div class="global__hs-form" id="form-<?php echo $class; ?>">
    <script type="module">
      hbspt.forms.create({
        region: "na1",
        portalId: "<?php echo $portalId; ?>",
        formId: "<?php echo $formId; ?>"
      });
    </script>
  </div>
<?php }


//Remove jQuery migrate
function remove_jquery_migrate($scripts) {
  if (!is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];

    if ($script->deps) {
      $script->deps = array_diff($script->deps, array('jquery-migrate'));
    }
  }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');


// Remove CF7 p/br tags
add_filter('wpcf7_autop_or_not', '__return_false');


// Add keywords field on pages/posts
function add_keywords_field() {
  global $post, $current_screen;

  if ($current_screen->id == "page" || $current_screen->id == "post") {
    add_post_meta($post->ID, "keywords", "", true);
    delete_post_meta($post->ID, "inline_featured_image");
  }
}

add_action('admin_head', 'add_keywords_field');


// Remove Gutenberg
function remove_block_css() {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style');
  wp_dequeue_style('storefront-gutenberg-blocks');
}

add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_action('wp_enqueue_scripts', 'remove_block_css', 100);


// Defer CSS
function defer_scripts($tag, $handle) {
  $css = [
    'style',
    'slick',
    'slick-theme',
    'font-awesome',
    'contact-form-7'
  ];

  $js = [
    #'jquery-core',
    'bodhi-dompurify-library',
    'bodhi_svg_inline',
    'main',
    'slick',
    'modernizr'
  ];

  if (in_array($handle, $css) && str_contains($tag, "<link")) {
    return str_replace(
      "rel='stylesheet'",
      "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"",
      $tag
    );
  } elseif (in_array($handle, $js) & (str_contains($tag, "<script"))) {
    return str_replace(
      "<script",
      "<script defer ",
      $tag
    );
  }

  return $tag;
}

if (!is_admin()) {
  add_filter('style_loader_tag', 'defer_scripts', 10, 2);
  add_filter('script_loader_tag', 'defer_scripts', 10, 2);
}


