#!/bin/bash
mysql -uhomestead -psecret  -e 'drop database motoon'
mysql -uhomestead -psecret  -e 'create database motoon'
php artisan migrate
