@echo off
@rmdir /s/q vendor runtime
composer update --profile --prefer-dist --optimize-autoloader
composer dump-autoload --optimize