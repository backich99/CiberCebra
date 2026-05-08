# Cebra

Directorio comunitario de doctores especialistas en enfermedades raras, construido de pacientes para pacientes.

## Requisitos

- Docker

## Levantar el proyecto

```bash
docker compose up
```

Visitar http://localhost:8000

## Comandos útiles

```bash
# Correr migraciones y seed
docker run --rm -u $(id -u):$(id -g) -v $(pwd):/app:Z -w /app php:8.4-cli php artisan migrate --seed

# Resetear base de datos
docker run --rm -u $(id -u):$(id -g) -v $(pwd):/app:Z -w /app php:8.4-cli php artisan migrate:fresh --seed
```

## Estructura del dominio

```
app/Models/Doctor.php              # Nombre, especialidad, estado, ciudad, contacto
app/Models/Recommendation.php      # Tipo (diagnóstico/tratamiento), cuerpo, advertencia
app/Http/Controllers/DoctorController.php  # Listado con búsqueda + detalle
routes/web.php                     # GET / y GET /doctores/{doctor}
```

## Funcionalidad actual (walking skeleton)

- Listado de doctores con búsqueda por nombre, especialidad o ciudad
- Perfil de doctor con información de contacto
- Recomendaciones con distinción diagnóstico vs. tratamiento
- Campo de advertencia por recomendación
- Paginación

## Stack

- Laravel 13 / PHP 8.4
- SQLite (desarrollo)
- Docker
