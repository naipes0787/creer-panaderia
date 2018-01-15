# creer-panaderia
Proyecto para la panadería de Jose de Lajonquiere

Para levantar el proyecto es preciso tener npm. Con el mismo se deberá instalar bower.
Y por último, utilizando bower, instalar bootstrap y font-awesome. Los pasos a seguir serían:
  1) Descargar la versión LTS de https://nodejs.org/en/ e instalarla
  2) Verificar que la instalación se haya hecho correctamente tipeando por consola: 
        node -v 
        npm -v
  3) Una vez instalados, puede ejecutarse en el mismo directorio que se encuentra el archivo package.json la instrucción: npm install
  4) Ahora que bower está instalado, ejecutar: bower install para agregar fontawesome y bootstrap

Se utiliza lite-server (https://github.com/johnpapa/lite-server) como servidor local. Ya está listo para ser levantado (Corre en el puerto 3000) ejecutando en el directorio donde se encuentra el package.jspn la instrucción: npm run dev
