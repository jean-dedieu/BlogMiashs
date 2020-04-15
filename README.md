

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).






<h1>INSTALLER LE PROJET<h1>


           Cette partie est un guide qui permet d’installer notre application en local sur un ordinateur 
           disposant des prérequis Laravel. 

Prerequis

Pour installer notre projet vous devez disposer au minimum PHP 7.2.5 car nous l’avons développé avec Laravel 7.0, nous devons préciser que Laravel 6.2 la version sur la quelle nous avions commencé le projet nous a refusé d'implémenter l'authentification (php artisan make:auth), dès lors nous avons procédé à la migration de notre projet vers Laravel 7.0. 
Assurez-vous d’avoir également Node Js qui sera indispensable pour l’installation des packages json. 
Pour installer ce projet, vous aurez également besoin de git sur votre machine.

Pour installer ce projet, veuillez suivre l’ensemble des étapes ci-dessous:
    
Etape 1. Cloner notre projet

    Faites git clone +lien de notre projet (https://github.com/JEANDEDIEUTWAGIRUMUHOZA/BlogMiashs.git)

Etape 2. Composer install

      Faire composer install

Etape 3. Npm install

     Faire npm install

Etape 4. Fichier .env

     Faire: cp .env.example .env ou copy .env.example .env (pour windows)
    
Maintenant avant de passer à l’étape suivante, vous allez configurer le fichier d’environnement(.env). Vous trouverez sans doute cette étape longue, ne vous inquiétez pas, c’est normal.

Créez maintenant un fichier database.sqlite dans le dossier database de cette application
Veuillez indiquer le chemin de votre base de données dans le fichier .env dans la variable DB_DATABASE= (exemple chemin: /Users/jeandedieu/Projets/BlogMiashs/database/database.sqlite) et précisez le serveur DB_CONNECTION=sqlite et d’autres configurations suivant votre environnement de serveur, comme ports etc, notre application est par défaut sur le port 3306 de MySQL et en localhost(127.0.0.1) pour apache.
      
    Dans .env APP_NAME =Laravel, veuillez remplacer Laravel Par EchoMiashs
Veuillez ajouter database dans la variable QUEUE_DRIVER  (QUEUE_DRIVER = database)
Pour pouvoir tester les fonctionnalités de notre application en matière d’envoi des mails, vous allez continuer la configuration du fichier .env pour ajouter des données mailtrap: 
         
Veuillez créer un compte mailtrap (mailtrap.io)si vous en avez pas un , c’est plus facile avec votre compte google car il fait un sync. 
Une fois vous avez votre compte, veuillez créer une boîte de réception(Inbox).
 Si vous cliquez à gauche sur le nom de votre Inbox, vous aurez des données de configuration que vous allez utilisez dans le .env de l’application.

Ajouter dans .env le username qui vous a été fourni par mailtrap ainsi que le mot de passé. Exemple username et mot de passe:

  user_name => '4e3f50e1f95082',
  password => '09e9c43777489d',

Dans .env, assurez-vous que votre protocole de transfert(MAIL_DRIVER=smtp) de mail est bien smtp et que vous utilisez le port 2525. Veuillez configurer également l’adresse de l’envoi. Voici l’ensemble des champs à remplir dans votre .env nécessaire pour l’envoi de mail:

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=4e3f50e1f95082 (remplacer par vos données de mailtrap sans simple quote)
MAIL_PASSWORD=09e9c43777489d (remplacer par vos données de mailtrap sans simple quote)
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=jeandedieu.emploi@gmail.com(mettez par exemple votre mail)

Etape 5. Générer la clé de l’application
     
     Faire: php artisan key:generate

Etape 6. Les migrations
    
     Faire : php artisan migrate

Etape 7. Les seeds

     Faire: php artisan db:seed

Etape 8. Lancement du serveur
      
   Faire: php artisan serve
 Etape 9.
 Port Sur cette étape, vous êtes capable d'accéder à notre application qui est par défaut sur le port 8000.

FONCTIONNALITÉS DE L’APPLICATION(après TP2) ET MOYENS DE
                                                 LES TESTER




Fonctionnalité 1. Authentification et droits d’accès au pages
    
                            Explications: Vous n’aurez le droit de visiter la page d’accueil,articles,contacts qu’une fois connecté, en tant que visiteur non connecté, vous n’avez pas le droit de visiter la page d’accueil et articles car elle contiennent des articles d’actualités réservées à nos membres. Vous ne pourrez pas non plus nous envoyer un message car le middleware ‘auth’ protège l’accès à cette page également. 

                           Comment tester?: Veuillez cliquer sur les boutons de navigation, vous n’aurez pas droit au pages protégées. Ensuite veuillez vous enregistrer(bouton Devenir membre) et puis vous connecter(bouton se connecter), vous serez directement redirigé vers la page Accueil et vous aurez le droit d’accéder à toutes les pages. Veuillez constater également que vous pouvez vous déconnecter depuis n’importe quel page de l’application.

Fonctionnalité 2. Identification qui protège l’accès à l’administration

                           Explications: Nous avons implémenté la fonctionnalité identification/Authentification qui protège l’accès au panel d’administration. Nous avons implémenté les gates et les redirections. dans cette partie, l’admin et auteur auront le droit d’accès à la page d’administration des utlisateur. L'utilisateur ne pourra pas y avoir accès. 
 Comment tester?:    Pour voir le panel d’administration vous devez vous connecter avec l’un de ces deux   identifiant ci-dessous, puis entrez l’url : http://localhost:8000/admin/users

     





Identifiants créés(que vous allez utiliser)

    Admin:
                             Email: admin@admin.com
                             Password: password
   Auteur:
                             Email: auteur@auteur.com
                             Password: password

Nota bene: L’utilisateur n’aura pas l’accès au panel d’administration, veuillez vous connecter en tant qu'utilisateur et essayez d'accéder à la page http://localhost:8000/admin/users. Vous n’avez pas droit.

   Utilisateur:
                             Email: utilisateur@utilisateur.com
                             Password: password


Fonctionnalité 3. Rôles des utilisateurs
                          
                           Explications: Nous avons implémenter dans cette partie les role admin, auteur et utilisateur. Un utilisateur qui s’enregistre, il a le rôle utilisateur par défaut.Admin a tous les droits, il s’agit ici la modification d’un rôle de l’utilisateur ou le supprimer. L’auteur aura l'accès à la page des utilisateurs mais ne dispose aucun droit en matière de modification de rôle ni de suppression d’un utilisateur.



Comment tester?: Veuillez vous connecter avec les identifiants ci -dessous et constater les droits dont vous disposer. Veuillez également vous enregistrer pour constater que le rôle utilisateur vous est attribué par défaut.

Rappel identifiant de l’administration:

       Admin:
                             Email: admin@admin.com
                             Password: password
      Auteur:
                             Email: auteur@auteur.com
                             Password: password
      Utilisateur:
                             Email: utilisateur@utilisateur.com
                             Password: password
                          

Fonctionnalité 4. Active page

Explications: pour améliorer l’expérience utilisateur(UX) de notre application, nous avons mis en place les fonctions helpers, ces dernières qui se trouvent dans le fichier helpers.php dans app nous permettront de récupérer dynamiquement la page courante pendant la navigation de l’utilisateur, ça lui permettra se reconnaître où il se trouve.

Comment tester?: Hormis la page d’Accueil, veuillez cliquer sur n’importe quel menu de navigation, vous allez constatez que ça marque une couleur de fond sur la page active, par exemple ici la page active est: Contacts




Fonctionnalité 5. Événement envoi de message

Explication: Pour interagir avec l’utilisateur lor de la soumission, du formulaire de contacts, nous avons avons ajouté un message de confirmation ‘envoi de son message. Sur cette étape nous avons utilisé la librairie flashy avec JQuery.

Comment tester?: Veuillez cliquez sur le menu Contacts, envoyez un message, vous serez redirigé vers la page d’accueil et un message de confirmation s'affiche sur votre écran et disparaît après quelques instants.



                             







Fonctionnalité 6. Les files d’attentes ou les OUEUES

Pourquoi? : En Tant que développeurs d’application Laravel, plus tard on pourra résoudre des erreurs par exemple si le client n'arrive pas à recevoir un mail pour activer son compte. Dans ce cas nous ferons par exemple:    php artisan queue:failed pour voir des activité en file d’attente qui ont échouées et faire    php artisan queue:retry avec l’ID du job échoué. Cette fonctionnalité nous permettra également de réagir à la demande de l’utilisateur même si sa demande est en attente, de ce fait nous ne pouvons pas perdre ce client.

Travail effectué

Dans App/config/queue.php -> nous avons utilisé database au lieu de homestead

     Faire des migration pour les queues:
             
   Création dela table jobs
  php artisan queue:table
              
   Pour traiter des activités en attente
                  php artisan queue:work
   Pour voir des activités échouées
    php artisan queue:failed
  Ajout de la variable d’environnement dans .env
                     QUEUE_DRIVER = database
     Ajout de mail envoyé dans la file d’attentes

                   ContactsController ligne:
         ->queue(new ContactsMessageCreated($message));


Fonctionnalité 7 . Tests unitaires

Explication
Sur cette fonctionnalités, avec Tests/Unit/Helpers.php nous testons fonctionnalité par fonctionnalité de notre application, faute de temps nous n’avons pas pu réaliser plusieurs tests. Sur l’exemple ci-dessous, nous avons tester le bon fonctionnement de nos fonctions helper qui nous permettent de récupérer les titres des pages pour la page active.








Comment tester?:

         En cmd(Terminal), faire: ./vendor/bin/phpunit
         Vous pouvez modifier les valeurs des titres, quand la valeur est fausse, le test échoue.

