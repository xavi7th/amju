If you change the main folder, make sure to reflect the changes in index.php and also in web pack.mix.js
Also set up your configs as you'd prefer

Set Up

## Create folders

```
#!terminal

cp .env.example .env && mkdir bootstrap/cache storage storage/framework && cd storage/framework && mkdir sessions views cache

```

## Folder permissions

```
#!terminal

sudo chown :www-data app storage bootstrap -R
sudo chmod 775 app storage bootstrap -R

```

## Install dependencies

```
#!terminal

composer install

```

