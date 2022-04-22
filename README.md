# Documentation du site yadelair.


# yadelair
yadelair est un site de type webmagazine "webzine", permettant après inscription sur le site de publier ses oeuvres "photos ou videos".

# Environnement de développement

### Pré-requis
    *Symfony 6
    *PHP 8.1
    *Symfony CLI
    
    Vous pouvez vérifier les pré-requis avec la commande: 

symfony check:requirements

# Mise en place d'un CI "Intégration continue" avec github actions
    J'ai choisis de controler les dépendances de composer avec un plugin d'intégration continu

    *Pour la gestion du clean code j'utilise un autre plugin "static-code-analysis"avec inclus:
        -PHPStan
        -Post run action'gestion de mon github'

    *Pour une gestion global du framwork Symfony j'utilise 
        -Symfony-tests (controle du dossier ".env",controle du repo, controle de l'authentification, lance les tests de PHPUNIT...)

### lancer des tests avec PHPunit:
    *commande pour lancer les tests:
   
         php bin/phpunit --testdox
                    ou 
        CTR+MAJ+P (raccourcis clavier avec visualstudiocode)

### installation du webpack encore
    *commande d'installation:

        yarn install 

# configuration webpack encore
 Pour créer les éléments, exécutez la commande suivante si vous utilisez le gestionnaire de packages Yarn :
    *compiler automatiquement les assets sans les recharger:

        yarn encore dev --watch
    
    *deployer ou mettre à jour un build:

        yarn build

# intalation et configuration du sass-Loader
    Pour utiliser Sass, renommez le app.css fichier app.scsset mettez à jour l' import instruction
        *redémarrer Encore avec la commande:

            -yarn add sass-loader@^12.0.0 sass --dev
                et
            -yarn encore dev --watch

# Création du HomeController
    Pour obtenir une liste de toutes les routes de votre système avec "debug:router", utilisez la commande:

        php bin/console debug:router

    *vous pourrez créer un controller avec la commande:

        symfony console make:controller 'Nomducontroller'

# Mise place des vues avec twig
    *lancer la commande:
        composer require twig

     *lancer le serveur de développement symfony avec la commande suivante:
        symfony server:start
