@echo off
@title Composer Plugs Update and Optimize
@rmdir /s/q vendor runtime
composer update --profile --prefer-dist --optimize-autoloader
composer dump-autoload --optimize
exit