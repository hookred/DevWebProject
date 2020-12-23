# Projet de développement web pour l'université

Ce projet est disponible sur Github à l'adresse suivante:

https://github.com/hookred/DevWebProject

## Organisation des répertoires

* **/app/:**: les fichiers propres à l'application PHP
* **/database/**: documents permetant de remplacer une base de données.
* **/lib/**: les fichiers génériques, il peuvent être réutiliser ailleurs
* **/dist/**: fichiers contenant les sources, destiné à être utilisé en production
* **/src/**: fichiers JS et SCSS permettant de gérer toutes les dépendances (celles de bootstrap)
* **/tools/**: fichiers nécessaire à la configuration du serveur Web. Il contient également les différentes images Docker
* **/views/**: les fichiers PHP contenant quasi exclusivement du code HTML.

## Logiciels nécessaires

Pour faire fonctionne ce projet, il est nécessaires d'installer plusieurs applications. Voici la liste :
 * Docker
 * Docker-compose
 * NodeJS (optionnel pour le développement mais nécessaire pour la production)
 * Make (optionnel)


## Lancer l'application en production

Pour lancer le serveur de production et créer les différents fichiers compressées, il faut entrer la commande suivante:

``` sh
make prod
```


## Lancer l'application en développement

Pour lancer le serveur de développement et utiliser le serveur de webpack, il faut utiliser la command suivante:

``` sh
make dev
```

Afin de profiter de l'application avec le serveur de développement, il faut effectuer une modification dans le fichier `views/layouts/default.php`.

Remplacer:

``` html
<!-- Script à utiliser pour le développement -->
<!-- <script type="text/javascript" src="http://localhost:3000/bundle.js"></script> -->
```

par:

``` html
<!-- Script à utiliser pour le développement -->
<script type="text/javascript" src="http://localhost:3000/bundle.js"></script>
```

et commenter la ligne

``` html

<script type="text/javascript" src="/dist/bundle.js"></script>
```

Vous pouvez également commenter la ligne qui utilise le style CSS car Webpack va automatique utiliser le CSS contenu dans le fichier `bundle.js` du serveur de développement.
