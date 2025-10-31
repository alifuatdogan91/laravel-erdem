# Proje Adı

Bu proje Laravel ile geliştirilmiştir.

## Kurulum

1. Repo klonlanır: `git clone https://github.com/alifuatdogan91/laravel-erdem`
2. Composer ile bağımlılıklar yüklenir: `composer install`
3. `.env` oluşturulur ve ayarlar yapılır. `cp .env.example .env` 
4. Uygulama key oluşturulur: `php artisan key:generate`
5. Migration çalıştırılır: `php artisan migrate --seed`
6. Storage link oluşturulur: `php artisan storage:link`
7. Server başlatılır: `php artisan serve`
