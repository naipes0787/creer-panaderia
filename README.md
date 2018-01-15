# creer-panaderia
Proyecto para la panadería de Jose de Lajonquiere

Para levantar el proyecto es preciso tener npm. Con el mismo se deberá instalar bower.
Y por último, utilizando bower, instalar bootstrap y font-awesome.

Se recomienda utilizar lite-server (https://github.com/johnpapa/lite-server) como servidor local. Para instalarlo:
  1) Dentro del proyecto ejecutamos npm install lite-server --save-dev
  2) Agregar las siguientes líneas en el package.json:
        "scripts": {    
          "dev": "lite-server"
         },
  3) Ya podría levantarse (Corre en el puerto 3000) con la instrucción npm run dev
