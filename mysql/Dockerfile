# Comando para utilizar imagen publica de mysql
FROM mysql

# Asignación de la variable de ambiente que hace referencia a la clave del usuario root
ENV MYSQL_ROOT_PASSWORD my-secret-pw

# En la creación del esquema de datos para mysql, se debe pasar el archivo .sql y guardarlo en la carpeta "docker-entrypoint-initdb.d"
ADD ./conf/schema.sql /docker-entrypoint-initdb.d/schema.sql
