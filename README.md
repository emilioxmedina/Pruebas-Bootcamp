# Pruebas Bootcamp Cari

Este repositorio es para que podamos probar las tecnologias sin miedo a romper y arruinar nuestros proyectos.

## Clonar repositorio desde consola

```bash
# crear una carpeta para pruebas
mkdir pruebas

cd pruebas/

# Clonar repositorio
git clone <url-de-clonacion>

cd app-ejemplo

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
```bash
./vendor/bin/sail up -d

docker exec -it app-ejemplo-laravel.test-1 /bin/bash
```

### Ingresar al localhost en el navegador
```
localhost/admin
```

### Credenciales de ingreso
- email: test@test.com
- contraseña: test123

Si no les permite ingresar ingresen el siguiente comando dentro del contenedor
```
php artisan migrate:fresh --seed
```

Ya deberian ser capaces de ver el dashboard con los recursos que cree, ya tienen agregadas las funcionalidades CRUD y conexion a la base de datos para que puedan ver como funcionan.

### Apagar contenedores
```bash
./vendor/bin/sail down
```

## Cualquier duda no tengan pena de preguntarme.
