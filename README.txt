Enunciado de la Tarea: Sistema de Comentarios Dinámico con Cookies
--- Descripción:
El proyecto consiste en implementar un sistema de comentarios dinámico en una página web donde los usuarios pueden dejar comentarios en tiempo real sin necesidad de recargar la página. Los comentarios se guardarán en una base de datos MySQL junto con el nombre del usuario que los haya realizado. Al cargar la página, se mostrarán todos los comentarios realizados anteriormente, junto con el nombre de las personas que los escribieron.

--- Requisitos del sistema:
Formulario de Comentarios Dinámico:

Un formulario donde el usuario escribirá su nombre y comentario.
Los comentarios se enviarán al servidor sin necesidad de recargar la página utilizando AJAX.
Una vez enviado, el comentario aparecerá automáticamente en la página sin que esta se recargue.

* Almacenamiento en Base de Datos (MySQL):Los comentarios y el nombre de usuario se almacenarán en una tabla de base de datos. La base de datos tendrá una única tabla que almacenará el nombre del usuario, el comentario y la fecha en que se realizó el comentario.

* Recuperación de Comentarios:Al cargar la página, todos los comentarios previos se cargarán desde la base de datos y se mostrarán en la página web, junto con el nombre de quien los hizo. Los nuevos comentarios aparecerán automáticamente al ser enviados.

* Visualización de Comentarios en Tiempo Real:Los nuevos comentarios se mostrarán inmediatamente en la página mediante AJAX, sin necesidad de recargar la página.

--- Tecnologías a Usar:
+ HTML: Para la estructura básica del formulario y la visualización de comentarios.
+ CSS: Para el estilo y diseño del formulario y la lista de comentarios.
+ JavaScript (AJAX): Para enviar y recibir los comentarios al servidor de manera asíncrona, sin recargar la página.
+ PHP: Para gestionar la lógica del servidor, recibir y procesar los comentarios, y guardarlos en la base de datos.
+ MySQL: Para almacenar los comentarios y los nombres de los usuarios.