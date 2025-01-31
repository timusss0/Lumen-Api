# 🌟 Lumen API Project

## Deskripsi
Proyek ini adalah API yang dibangun menggunakan Lumen, framework PHP yang ringan dan cepat. API ini dirancang untuk memberikan akses ke data secara efisien dan dapat diintegrasikan dengan berbagai aplikasi.

## Instruksi Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/timusss0/Lumen-Api.git


2. **Masuk ke Direktori Proyek**
3 ```bash
   cd Lumen-Api
   
4. **Instalasi Dependensi**
5. ```bash
    composer install

6.  **Konfigurasi Variabel Lingkungan**
8. ```bash
    cp .env.example .env

9. **Generate Kunci Aplikasi**
    php artisan key:generate

10. **Migrasi Database**
    php artisan migrate
   
**Menjalankan Aplikasi Secara Lokal**
**Untuk menjalankan server pengembangan, gunakan perintah berikut:**

php -S localhost:8000 -t public

**Akses aplikasi melalui browser di http://localhost:8000.**

### 2. File `.env.example`

```plaintext
# .env.example

APP_NAME=Lumen
APP_ENV=local
APP_KEY=base64:YOUR_APP_KEY
APP_DEBUG=true
APP_URL=http://localhost

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lumen-db
DB_USERNAME=root
DB_PASSWORD=

# Other Environment Variables
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
