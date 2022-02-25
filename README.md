# Cloud
repositorio para clase de cloud


# para montar el contenedor de la basa de datos correr el siguente comando en ruta, este estrá en el puerto 3030

docker-compose up -d 

# para montar el contenedor con la imagen creada por un docker file correr los siguientes comandos desde ruta, este estará en el puerto 85

cd cont_dockerfile
docker-compose up -d 

# para montar el contenedor con la imagen tomada del dockerhub correr los siguientes comandos desde ruta, este estrá en el puerto 82

cd cont_hub
docker-compose up -d
