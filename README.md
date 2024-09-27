# Resolucion de tickets

### aca va a estar paso a paso como copiar y pegar el sistema, y como mostrar y chequear que funcione cada ticket correctamente + imagenes

## Requisitos:

Antes que nada, al descargar el repositorio, van a tener que descargar Composer:  
[Click aca para descarga](https://getcomposer.org/download/)

Aparecerá una página así:  
![latest.png](latest.png)  
Clickear donde dice "latest stable" y se descargará automáticamente.

⚠️ Asegurarse que se descargó en la carpeta descargas para evitar errores ⚠️

Hacer click derecho en el archivo que se descargó y clickear en donde diga "propiedades".  
Aparecerá una ventana así:  
![propiedades.png](propiedades.png)

Copiar la ruta que aparece en Ubicación.  
Apretar Windows y buscar "Editar variables de entorno" y abrir el que se ve así:  
![variables.png](variables.png)

Clickear en donde dice "variables de entorno" y se va a abrir una ventana así:  
![path.png](path.png)

Hacer click en donde dice "Path" y después en "Editar" _(esto hacer tanto en el de arriba como en el de abajo)_.  
Hacer click en "Nuevo" y pegar la dirección que copiamos en las propiedades del archivo de Composer.  
![direccion.png](direccion.png)

Aceptar todo y cerrar.

## Importar la base de datos

En PhpMyAdmin, clickamos en crear una nueva base de datos.  
**Obviamente hace falta tener iniciado XAMPP con MySQL y Apache.**  
![nueva.png](nueva.png)

Poner el nombre exactamente como se muestra en la imagen y creamos, sin crear ninguna tabla ni nada:  
![name.png](name.png)

Vamos a donde dice "Importar":  
![imp.png](imp.png)

Donde dice "Seleccionar archivo", seleccionamos el archivo que está en la carpeta "sql" de la carpeta que descargamos de GitHub:  
![archimp.png](archimp.png)

Bajar y darle al botón de "Importar".  
**Es normal que salga un error de que ya existe "X" tabla, ignorar.**

Ir a la tabla "carteles" y clickear donde dice "Insertar".  
![inser.png](inser.png)

Poner cualquier cosa excepto en el campo que dice "AGENDA", reemplazar por "Ayuda" _(con la mayúscula al inicio)_.  
![cat.png](cat.png)

Click en "Continuar" y listo.

## 3.2

- Apuntar a las URL's de los CDN de internet todos los archivos necesarios del Bootstrap, JS, etc.
- Eliminar los archivos innecesarios del directorio Bootstrap de la raíz del sitio.

_Este ya viene hecho en el código, no hace falta hacer nada._

## 3.3

- Personalizar la aplicación con tu nombre, poniendo un logo en el menú como se muestra en la imagen:

Vamos al archivo llamado `menu_bs.php`, lo abrimos, hacer Ctrl + F y buscar "mariano", ahí reemplazamos con tu nombre y listo:  
![nombre.png](nombre.png)

El punto estaría hecho.

## 3.4

- Unificar el archivo `config.php` para que los datos de conexión a MySQL se encuentren en un único archivo.

_Esto también viene hecho, no hace falta hacer nada._

## 3.5

- Agregar dos nuevos diseños a las plantillas de la cartelera.

Iniciar sesión con el usuario "lp" y usando la contraseña 1234:  
![logi.png](logi.png)

Ir a "Cartelera" y en las categorías están las distintas plantillas, es lo que se pide mostrar:  
![cartel.png](cartel.png)

## 3.6

- Agregar al menú de acceso público una nueva opción ("Ayuda") y una nueva categoría de carteles ("Ayuda") que solo se cargan cuando se accede a la nueva opción del menú.

En el archivo `menu_bs.php`, ir a la parte donde se encuentra la navbar:  
![nav.png](nav.png)

La línea de código que se agregó es la siguiente (por si se pide mostrarla):  
![line.png](line.png)

Ir a donde dice "Ayuda" y aparecerá lo siguiente, es lo que hay que mostrar:  
![ayuda.png](ayuda.png)

## 3.7

- En la sección de publicaciones digitales ya existente, agregar la posibilidad de vista previa para material de distinto tipo como audios y videos.

Descargar primero un video y un audio en formato **MP4** para el video y **MP3** para el audio.  
Ir a "Libros digitales" y hacer click en el botón que dice "Alta":  
![audvideo.png](audvideo.png)

Rellenar con el nombre y título, autor, etc., en donde dice tipo, para el video poner "video" y para el audio poner "audiotexto". Luego, dar click en "Choose File".  
Guardar el archivo en la carpeta llamada `libros_d`:  
![librod.png](librod.png)

Dar click en "Agregar".  
Para verlo, clickear en "Buscar", buscar nuestro video y audio, y apretar el botón "min":  
![min.png](min.png)

En su caso, se va a ver el video o audio.

## 3.8

- Agregar la opción de material impreso (libros) y la posibilidad de controlar y administrar los préstamos que se realizan a los socios de la biblioteca. Para ello, crear las tablas necesarias en la base de datos ya existente y las nuevas librerías.

**Es el que falta, si alguien sabe hacerlo me lo dice, graciasss.**

## 3.9

- Agregar en la pantalla del administrador (dentro del menú principal) un indicador en tiempo real de los usuarios que en ese momento hayan iniciado sesión en el sitio (utilizar websockets).

Vamos al archivo `server.php`, pulsar Ctrl + Shift + P para abrir una terminal, y en la terminal escribir lo siguiente:  
![server.png](server.png)

Dar Enter, ir a la página y recargarla hasta que el contador aparezca en uno. Para ver si sube, abrir otra pestaña con la página y debería sumar como otro usuario conectado:  
![user.png](user.png)

## Eso es todo

Si algo no funciona, me avisan. Si hay que cambiar algo, aviso por el grupo y hago el respectivo cambio acá. Si funciona, se agradece que alguien me compre algo ❤️❤️
