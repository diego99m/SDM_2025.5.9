# SDM_2025.5.9 - CRUD de Usuarios en Laravel por Diego Moya

---

## 📦 Requisitos

- PHP >= 8.1  
- Composer  
- Laravel 10  
- XAMPP (Apache y MySQL)  

---
### 1. Clonar el repositorio

```bash
git clone https://github.com/diego99m/SDM_2025.5.9.git
cd SDM_2025.5.9
---
---
### 2. Instalar dependencias de Laravel
composer install
---
### 3. Copia el archivo de entorno .env
cp .env.example .env
---
### 4. Configura la base de datos en el archivo .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_diego
DB_USERNAME=root
DB_PASSWORD=
#Asegúrate de haber creado una base de datos llamada crud_diego en tu MySQL o phpMyAdmin.
---
### 5. Genera la clave de la aplicación
php artisan key:generate
---
### 6. Migrar la base de datos
#Esto creará la tabla tbl_usuarios e insertará usuarios de ejemplo automáticamente.
php artisan migrate --seed
---
### 7. Ejecutar el servidor de desarrollo
php artisan serve
---
### 8. Accede desde esta ruta
http://localhost:8000/usuarios

## Estructura de la tabla tbl_usuarios
## | Campo         | Tipo      |
| ------------- | --------- |
| id            | bigint    |
| nombre        | varchar   |
| apellido      | varchar   |
| edad          | int       |
| requerimiento | varchar   |
| created\_at   | timestamp |
| updated\_at   | timestamp |

## 🚩 IMPORTANTE: 
### Los datos precargados se insertan automáticamente al correr 
php artisan migrate --seed.