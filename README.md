Symfony Mailer Command Bundle
=============================

Adds a simple `mailer:send` command to the project, which works the same as the old `swiftmailer:email:send` command.

To enable, add

```php
InspiredMinds\SymfonyMailerCommandBundle\SymfonyMailerCommandBundle::class => ['all' => true]
```

to your `config/bundles.php`.
