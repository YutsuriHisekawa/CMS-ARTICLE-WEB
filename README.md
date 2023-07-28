<p align="center"><a href="https://yutsurihisekawa.github.io/PortofolioFahrizal/" target="_blank"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/499c570b-7931-4a84-9121-8c4a1c02a470/dfyq34u-9b8f0a02-18bd-4343-ae1a-d6acae746378.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQ5OWM1NzBiLTc5MzEtNGE4NC05MTIxLThjNGExYzAyYTQ3MFwvZGZ5cTM0dS05YjhmMGEwMi0xOGJkLTQzNDMtYWUxYS1kNmFjYWU3NDYzNzgucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.jRuVhS8Ftl40m_5ocqLl0mfqmQu7ydEM_BPTEfa1Mz0" width="400" alt="Laravel Logo"></a></p>

## Hello Im Fahrizal

Hello , this is my project laravel.


## Instalasi
#### Via Git
```bash
git clone https://github.com/YutsuriHisekawa/CMS-ARTICLE-WEB.git
```

### Download ZIP
[Link](https://github.com/YutsuriHisekawa/CMS-ARTICLE-WEB/archive/refs/heads/main.zip)

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
```
Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:QGRW4K7UVzS2M5HE2ZCLlUuiCtOIzRSfb38iWApkphE=
APP_DEBUG=true
APP_URL=http://example-app.test
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve