# Déploiement
ssh o2switch 'cd ~/sites/kooalapp.com && git pull origin main && make install'

# Installation
install: vendor/autoload.php |.env public/storage public/build/manifest.json
php artisan cache:clear
php artisan migrate

# Configuration de l'environnement
.env:
cp .env.example .env
php artisan key:generate

# Stockage public
public/storage:
php artisan storage:link

# Autoload du vendeur
vendor/autoload.php: composer.lock
composer install
touch vendor/autoload.php

# Manifeste de construction public
public/build/manifest.json: package.json
npm i
npm run build
