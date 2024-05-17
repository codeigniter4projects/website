#!/bin/sh -e

# Deploys the official site to the production server.
# See ../workflows/deploy.yml

REPO="/opt/website"
RELEASE_DIR="/home/public_html/site/releases"
SHARED_DIR="/home/public_html/site/shared"
USERGUIDE_DIR="/home/public_html/userguides"
CONFIG_FILE="/home/public_html/config/.env.site"

RELEASE=`date +"%Y-%m-%d-%H-%M-%S"`

echo $'Update website repository\n'
cd $REPO
git switch master
git pull

echo $'Copy current release\n'
cd $RELEASE_DIR
sudo cp -pr $REPO ./$RELEASE

echo $'Install composer dependencies\n'
cd $RELEASE_DIR/$RELEASE
composer install --no-dev

if [ ! -d "$SHARED_DIR" ]; then
    echo $'Create shared directory\n'
    sudo mkdir -p "$SHARED_DIR"
    echo $'Setup folder permissions\n'
    sudo chown -R www-data:www-data writable
    sudo chmod -R 755 writable
    sudo cp -rp writable "$SHARED_DIR"
fi

echo $'Link writable\n'
sudo rm -rf writable
sudo ln -nsf "$SHARED_DIR/writable" writable

echo $'Link .env\n'
sudo ln -nsf $CONFIG_FILE .env

echo $'Link user guides\n'
ln -nsf $USERGUIDE_DIR/userguide4 public/user_guide
ln -nsf $USERGUIDE_DIR/userguide3 public/userguide3
ln -nsf $USERGUIDE_DIR/userguide2 public/userguide2

echo $'Deploy: update symlink\n'
cd $RELEASE_DIR
sudo ln -nsf $RELEASE_DIR/$RELEASE "../current"

echo $'Reload PHP8.1-FPM\n'
sudo service php8.1-fpm reload
