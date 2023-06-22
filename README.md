# API de EasyBroker
Se utiliza php8.0 para mostrar un listado de propiedades consumiendo la API EasyBroker.
---
# Instalacion con docker

- Clonar este repositorio
- configurar .env
- Ejecutar `docker-compose up`.

# Instalacion

- Clonar este repositorio
- Entrar a cd code/ 
- Ejecutar php -S localhost:8080

---

## Configuración y uso - Codigo
### index.html 
Se utiliza jquery, bootstrap, ajax, para consumir la api de EasyBroker y listar las propiedades
El usuario puede interactuar con una paginacion y un listado con la cantidad de propiedades a ver por pagina 

se tienen 2 funciones principales
#### doSearch()
    a travez de ajax se hace una peticion get al php ´routerApi.php´ con los parametros 
    - task="getProperties"
    - limit // cantidad de propiedades a visualizar por pagina
    - page // numero de pagina a visualizar
    
#### makepagination()
    Encargada de crear la paginacion, con los valores devueltos de la consulta a la API 

### routerApi.php
    Tiene el objetivo de filtrar segun el task recibido  

### ApiEasyBrokerController.php
    Clase encargada de hacer la peticion a la API de EasyBroker. Se definen 3 variables principales:
    - $urlApi -- se define con el valor del dominio principal de la API `https://api.stagingeb.com/`
    - $versionApi -- Se define con la version a utilizar de la API `v1`
    - $tokenAuthentication -- Token de acceso a la API 



