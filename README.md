## Langkah Instalasi

1. Clone Project dengan command "git clone".
2. Jalankan command composer install, apabila error, update composer terlebih dahulu dengan command composer update.
3. Tulis command "cp .env.example .env".
4. Lalu tulis lagi command "php artisan key:generate".
5. Buat database pada phpmyadmin dengan nama wfp_uas.
6. Jalankan command php artisan migrate:fresh.
7. Lalu jalankan command php artisan db:seed untuk mengisi table pada database.
