"# addressbook"

bash下指令:
-----------------------------------
git clone https://github.com/CODEbyPoHsiang/addressbook
cd addressbook
composer install --no-plugins --no-scripts
cp .env.example .env
--------------------------------------------
在 phpmyadmin 手動建立同名資料庫或另用DB指令新增
-------------------------------
"# phpmyadmin create database, only doing once"
DB name:marathon
select:utf8mb4_unicode_ci
mysql -u root -p
--> create database if not exists marathon default character set utf8mb4 collate utf8mb4_unicode_ci;
--> exit
-----------------------------------
php指令:
----------------------------------
php artisan migrate (自動建表)
php artisan db:seed (自動寫入假資料)

php artisan key:generate (創立key)
php artisan serve (運行)
