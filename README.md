# creer-panaderia
Proyecto para la panadería de Jose de Lajonquiere

Para levantar el proyecto es preciso tener npm. Con el mismo se deberá instalar bower.
Y por último, utilizando bower, instalar bootstrap y font-awesome. Los pasos a seguir serían:
  1) Descargar la versión LTS de https://nodejs.org/en/ e instalarla
  2) Verificar que la instalación se haya hecho correctamente tipeando por consola: 
        node -v 
        npm -v
  3) Una vez instalados, puede ejecutarse en el mismo directorio que se encuentra el archivo package.json la instrucción: npm install
  4) Ahora que bower está instalado, ejecutar: bower install para agregar fontawesome, bootstrap y lightbox
  5) Para instalar PHP en Windows se puede usar esta guía: https://www.youtube.com/watch?v=5Ta1NE1ugqE
  6) Composer es un instalador de paquetes de php que es útil para incorporar funcionalidades a nuestro sitio web (https://getcomposer.org/). Para poder instalarlo se necesita php (Paso 5). Una vez instalado, para utilizarlo necesitaremos ejecutar en el directorio de nuestro sitio web: php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));" y por último php composer.phar install, esto instalará todos los paquetes que se encuentren en el archivo composer.json
  7) Para la galería se utiliza la biblioteca LightBox, por default ésta viene en inglés. El único texto que debe modificarse al pasarse la biblioteca al hosting se encuentra en lightbox.min.js, se debe modificar: albumLabel:"Image %1 of %2" por albumLabel:"Imagen %1 de %2"
  8) Pasos opcionales
		a) Recomiendo utilizar como IDE: Atom (https://atom.io/)
		

Para ejecutarlo en un servidor local deberíamos utilizar MAMP (https://www.mamp.info/en/). Descargarlo e instalarlo. El código debería estar en el directorio htdocs del MAMP. Luego iniciamos MAMP y ya podríamos acceder de la siguiente forma: http://localhost/creer-panaderia



Instrucciones para poder configurar el envío de emails:
1) Abrir Gmail con un navegador estando solamente logueado en la cuenta que estamos tratando de utilizar (Es importante desloguearse de aquellas cuentas que no son las que nos interesan para este propósito)
2) Ir al siguiente enlace y clickear en "Continuar": https://accounts.google.com/b/0/displayunlockcaptcha
3) Agregar la cuenta al programa de mail (Es posible que se haya hecho al clickear en Continuar)

Si para nuestra cuenta de Google utilizamos el mecanismo de verificación de dos pasos para loguearse, tendremos que ingresar a este link: https://security.google.com/settings/u/1/security/apppasswords
Luego clickear en Settings y generar un nuevo password que es el que utilizaremos en nuestra configuración de email (Parámetro $mail->password del archivo mail.php).