## PHP DOCUMENTOR
1- Instalamos el archivo phpdoc.phar desde la web `https://www.phpdoc.org/` e introducirlo en la carpeta de php a la altura de calculadoraPrecios.php

2- una vez el archivo a la altura de nuestro archivo calculadoraPrecios.php lanzamos el siguiente comando: `php phpdoc.phar -d ./php -t ./docs/php`

3- Una vez generado el index.html que se encontrará en docs/php/ le das clic y se te abrirá el index.html


## JSDOC
1- Necesitaremos tener instalado node.js
2- Lanzamos el comando `npx jsdoc calculadoraPrecios.js -d ./docs/js`