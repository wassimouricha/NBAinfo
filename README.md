# NBAinfo

Applications permettant de manière fictive de reserver une loge vip :
- possibilité de s'inscrire
- possibilité de se connecter
- possibilité d'ajouter modifier supprimer et afficher une réservations , les reservations du profil connecté (CRUD - Create Read Update Delete)
- possibilité de se connecter en tant qu'admin et donc de consulter toutes les réservations et les profils des utilisateurs
- page indiquant les différentes offres des loges
- menu sidebar permettant de naviguer dans les différentes pages de l'application , la sidebar est évolutive selon si un profil est connecté ou non et si l'admin est connecté ou non 
- Homepage, page d'inscription , page de connexion , page de connexion admin 
- tout les formulaires et donc la partie Backend sont réalisés en PHP avec des requetes MYSQL liées à la base de donnée local sur PhpMyAdmin , une base de donné comportant les utilisateurs et les reservations . chaques réservations est relié à un utilisateur grace a son id_auteur qui est l'id du profil qui a réaliser l'action de la reservation
- Toute la partie frontend est réalisé en PHP ( en séparant les différents widgets) HTML CSS JAVASCRIPT JQUERY 
- le site est hébergé en localhost avec utilisation d'un serveur Xampp

projet terminé a 80% 

Modifications à ajouter peut etre : 
- Footer ?? pas nécessaire mais à réfléchir 
- ajouter page d'actualités ???
- ajouter une page blog crud livre d'or ???

Autres : 
- Github : https://github.com/wassimouricha/NBAinfo
- maquettes de l'applications également disponibles  dans le dossier (future mise a jours des maquettes à venir car changement de plusieurs choses au fur et a mesure du projet)
- Trello disponibles (demandez moi le lien sinon : https://trello.com/b/gooMt1gz/nbainfo)