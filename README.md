PHP training: create a page protected by a password (TP-OpenClassrooms_PHP/MySQL)

# Objectifs
Vous voulez mettre en ligne une page web pour donner des informations confidentielles à certaines personnes. Cependant, pour limiter l'accès à cette page, il faudra connaître un mot de passe.
Les données confidentielles seront les codes d'accès au serveur central de la NASA (soyons fous !). Le mot de passe pour pouvoir visualiser les codes d'accès sera kangourou.
Sauriez-vous réaliser une page qui n'affiche ces codes secrets que si l'on a rentré le bon mot de passe ?

# Comment procéder ?
Sur papier brouillon dans un premier temps.

# Problème posé
Protéger l'accès à une page par un mot de passe. La page ne doit pas s'afficher si l'on n'a pas le mot de passe.

# Schéma du code
Créer un formulaire. Celui-ci appellera la page protégée et lui enverra le mot de passe.
L'accès au contenu de la page ne sera autorisé que si le mot de passe fourni par l'utilisateur est kangourou.

--> Créer les fichiers:
formulaire.php
secret.php
