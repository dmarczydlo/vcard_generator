#!/usr/bin/env bash

DIR_BIN="$( cd "$( dirname "$0" )" && pwd )"
cd $DIR_BIN
cd ..
echo "+++++++++++++++++=Create DB=+++++++++++++++++"
mkdir db
touch ./db/db.sqlite
cp .env-template .env
echo "+++++++++++++++++=generate APP_KEY=+++++++++++++++++"
KEY=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | head -c 32);
echo "Your APP_KEY IS $KEY"
sed -i "/APP_KEY=/c APP_KEY=$KEY" .env
sed -i "/DB_DATABASE=/c DB_DATABASE=./db/db.sqlite" .env
echo "+++++++++++++++++=install dependencies=+++++++++++++++++"
composer install
echo "+++++++++++++++++=run migrations=+++++++++++++++++"
artisan migrate
echo "+++++++++++++++++=add test user=+++++++++++++++++"
artisan db:seed
echo "+++++++++++++++++=installation completed=+++++++++++++++++"