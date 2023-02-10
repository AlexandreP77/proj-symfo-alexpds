- Symfony 5.4
- Easy Admin
- Twig
- Bootstrap
- Stripe
- Mailjet


Comment installer le projet 🔨

composer install

créer data base
Importer la base de données e-commerce-symfo.sql manuellement


DATABASE_URL="mysql://user_name:password@127.0.0.1:3306/database_name?serverVersion=mariadb-10.3.25"
APP_ENV=dev

Si nécessaire, videz le cache :

php bin/console cache:clear

############################################################"
Extension nécessaire PHP.ini ! pour 
(Problème d'activation de l'extension PHP Intl lors de l'utilisation de champs date/heure dans les backends EasyAdmin)
pour accéder au backOffice

;extension=gmp
extension=intl
;extension=imap
And restart server.


alexandredasilva.piedade@gmail.com
admin

pour les identifiants admin

