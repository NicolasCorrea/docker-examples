# Docker de PHP y MYSQL

Para que el proyecto funcione primero se debe ejecutar el siguiente comando, el cual inicializara el contenedor de *MYSQL*

```docker run --detach --name=<MYSQL_CONTAINER_NAME> --env="MYSQL_ROOT_PASSWORD=<YOUR_PASSWORD>" --publish 4407:3306 mysql:5.7 --max-connections=200 --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci```

despues se debe ejecutar los comandos para iniciar el servidor apache

``docker build -t <TAG_NAME> .``

``docker run --name <PHP_CONTAINER_NAME> --publish 8181:80 --detach --link <MYSQL_CONTAINER_NAME>:mysql <TAG_NAME>``
