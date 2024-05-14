#!/bin/sh -e

# Deploys to the production server.

RELEASE_DIR="/home/public_html/site/releases/"
RSYNC_DIR="/home/public_html/site/latest/"
USERGUIDE_DIR="/home/public_html/userguides"
CONFIG_FILE="/home/public_html/config/.env.site"

cd ~/
RELEASE=`date +"%d-%m-%Y-%H-%M-%S"`

echo $'Copy current release\n'
cd $RELEASE_DIR
cp -r ../latest ./$RELEASE

echo $'Install composer dependencies\n'
cd $RELEASE_DIR/$RELEASE
composer install --no-dev

echo $'Setup FS\n'
cd $RELEASE_DIR/$RELEASE
sudo chmod -R 777 writable
sudo chmod -R a+rx vendor
sudo ln -nsf $CONFIG_FILE .env

echo $'Link current user guide\n'
sudo ln -nsf $USERGUIDE_DIR/userguide4 public/user_guide

echo $'Set up Links\n'
cd $RELEASE_DIR
sudo ln -nsf $RELEASE_DIR/$RELEASE "../current"
sudo service php8.1-fpm reload
