## Pruebas Bootcamp Cari

Este repositorio es para que podamos probar las tecnologias sin miedo a romper y arruinar nuestros proyectos.

## Clonar repositorio desde consola

```
# crear una carpeta para pruebas
mkdir pruebas
cd pruebas/

# Clonar repositorio
git clone <url-del-resositorio>

# Crear rama propia
git checkout -b <nombre-de-rama>
```

## Levantar el proyecto
### Crear .env
Crear un archive .env en la raiz del proyecto en base a .env.example
```
APP_KEY=base64:jhiTJ66If2dchd9nreos5wuJh/jHSyZ7ilAe06DUb74=

DB_PASSWORD=password

REDIS_HOST=redis

# Agregar al final
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://meilisearch:7700

MEILISEARCH_NO_ANALYTICS=false

```
### Levantar contenedores
```
./vendor/bin/sail up -d

docker exec -it 
```
