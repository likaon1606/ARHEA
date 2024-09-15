# Wordpress Gulp Boilerplate
Conjunto de utilidades para crear un template de Wordpress usando Gulp como task runner de desarrollo.

## Características
- Optimiza, concatena y minifica CSS y JS.
- Genera Critical CSS automáticamente
- Comprime y convierte imágenes a webp.
- Genera tamaños de imágenes para responsive.
- Recarga automática al hacer cambios en código e imágenes.


## Requerimientos
El template fue probado con las versiones señaladas, y aunque podría funcionar con versiones anteriores, es recomendable usar estas o futuras compatibles para el correcto funcionamiento.
| Paquete  | Versión |
| ------------- | ------------- |
| [Node](https://nodejs.org/en/)  | ^18.18  |
| Gulp  | ^2.3.0  |


## Instalación
1. Instalar la utilidad global de gulp-cli:
```sh
npm install --global gulp-cli
```

2. Clonar el repositorio dentro de **/wp-content/themes**:
```sh
cd ../wp-content/themes/
mkdir nuevoproyecto
cd nuevoproyecto
git clone https://github.com/medinnna/wordpress-gulp-boilerplate.git .
```

3. Instalar dependencias del proyecto
~~~
npm install
~~~

5. Iniciar el proyecto con el comando `gulp`. La primera vez que se inicie, se mostrará una interfaz para configurar el proyecto, al terminar de configurar se abrirá una ventana nueva del navegador.
6. Al terminar, cerramos el proceso con Ctrl + C.

## Documentación

### Critical CSS
La generación del CSS para cada sección es de manera automática, este es generado al cerrar el proceso de gulp con Ctrl + C, pero si se requiere generarlo sin cerrar el proceso o después de haberlo cerrado, se puede generar con el siguiente comando:

```sh
gulp criticalCSS
```


### Procesado de imágenes
Las imágenes del template se deben ubicar en la carpeta `src/img`, y una vez iniciado Gulp, pasan por distintas etapas antes de poder ser utilizadas en el sitio:  
1. Primero cada imagen superior a `1920px` de ancho (exceptuando gif y svg) es redimensionada a dicha resolución reemplazando la imagen en su ubicación actual, esto con el objetivo de no mantener imágenes tan grandes en hosting que puedan causar problemas de espacio en disco.
2. Después se generan 5 tamaños más, los cuales serán utilizados para distintas resoluciones:
    - 576: Utilizado en resolución menores o igual a 576
    - 768: Utilizado en resolución entre 577 y 768
    - 992: Utilizado en resolución entre 769 y 992
    - 1200: Utilizado en resolución entre 993 y 1200
    - 1400: Utilizado en resolución entre 1201 y 1919
3. Se comprimen las imágenes `JPG` y `PNG`
4. Se convierten a `WebP` para reducir aún más su peso (las imágenes que ya estén en este formato se mantienen igual)
5. Todas las imágenes se guardan en la carpeta `assets/img` y solo las originales se mantienen en `src/img`.

#### Actualización de imágenes

El proceso anterior se ejecuta una vez al iniciar Gulp, pero si durante el desarrollo se hace algún cambio como agregar o eliminar imágenes el proceso se volverá a ejecutar solo para la imagen que haya cambiado.

#### Estructura de carpetas

La organización de carpetas utilizada dentro de `src/img` es paralela a la estructura final de carpetas utilizada en `assets/img`, por lo cual si una imagen está ubicada en `src/img/home/sponsors` su carpeta final será `assets/img/home/sponsors`.

### Uso de imágenes

Para imágenes dentro del template existe la siguiente función que muestra todos los tamaños para la imagen pasada como primer parámetro:

```php
siteImage($url, $clase, $alt, $lazy)
```

<!-- <details>
<summary>Ver parámetros</summary> -->

- **$url**: *string, obligatorio*
  - La URL local de la imagen sin incluir `assets/img/` ni el formato de imagen (excepto si la imagen es svg o gif)
- **$clase**: *string, opcional*
  - Lista de clases utilizadas por la imagen  
  *Default: null*
- **$alt**: *string, opcional*
  - Texto alternativo para la imagen  
  *Default: null*
- **$lazy**: *boolean, opcional*
  - Modo de carga de la imagen  
  *Default: true*

<!-- </details> -->

#### Ejemplo de entrada

```php
  <php siteImage("home/cover", "home-cover", "Cover"); >
```

#### Ejemplo de salida

```html
<picture class='home-cover'>
  <source media='(max-width: 576px)' srcset='assets/img/home/cover-sm.webp' />
  <source media='(max-width: 768px)' srcset='assets/img/home/cover-md.webp' />
  <source media='(max-width: 992px)' srcset='assets/img/home/cover-lg.webp' />
  <source media='(max-width: 1200px)' srcset='assets/img/home/cover-xl.webp' />
  <source media='(max-width: 1400px)' srcset='assets/img/home/cover-xxl.webp' />
  <source media='(min-width: 1401px)' srcset='assets/img/home/cover.webp' />

  <img loading='lazy' src='assets/img/home/cover.webp' alt='Cover' class='home-cover'>
</picture>
```

Para imágenes cargadas dentro de Wordpress, existe una función similar, esta de igual manera muestra todos los tamaños, los cuales son generados automáticamente al subir la imagen:

```php
siteImageUpload($post_id, $clase, $lazy)
```

- **$post_id**: *integer, obligatorio*
  - ID de la imagen
- **$clase**: *string, opcional*
  - Lista de clases utilizadas por la imagen  
  *Default: null*
- **$lazy**: *boolean, opcional*
  - Modo de carga de la imagen  
  *Default: true*


### Uso de videos

Al igual que para las imágenes, existe una función para videos con la siguiente estructura:
```php
siteVideo($url, $clase, $atributos)
```


<!-- <details>
<summary>Ver parámetros</summary> -->

- **$url**: *string, obligatorio*
  - La URL del video sin incluir `assets/video/` ni el formato de video   
  *Default: null*
- **$clase**: *string, opcional*
  - Lista de clases utilizadas por el video  
  *Default: null*
- **$atributos**: *string, opcional*
  - Atributos utilizados por el video.  
  *Default: playsinline autoplay muted loop*
  
<!-- </details> -->

#### Ejemplo de entrada

```php
  <php siteVideo("about/tour", "about-tour", "autoplay muted"); >
```

#### Ejemplo de salida

```html
<video class='about-tour' autoplay muted>
  <source type='video/webm' src='assets/video/about/tour.webm'>
  <source type='video/mp4' src='assets/video/about/tour.mp4'>
</video>
```