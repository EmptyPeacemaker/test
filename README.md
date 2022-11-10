# Install library to Laravel
```bash
composer require empty-peacemaker/test
```
# How used library:
1) open file `config/app.php` and go to section providers
2) replace `Illuminate\Mail\MailServiceProvider::class` by `\EmptyMail\MailServiceProvider::class`
3) publish config file using the command
```bash
php artisan vendor:publish --provider="EmptyMail\ServiceProvider"
```
4) replace parameter `send_to` in file `config/empty_email.php` with mail, where everything will be sent