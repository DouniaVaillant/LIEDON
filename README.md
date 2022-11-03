# Bibliotheque
Projet pour jury de formation Doranco dev web Fullstack.
Il y a deux principales fonctionnalités: 
- "histoire" = les histoires/nouvelles créées par les utilisateurs 
- "livre papier" = numérisation de la couverture des livres papiers lus par les utilisateurs avec leur commentaire sur ce livre et une potentielle proposition au partage/don


## Fonctionnalités

##### DE BASE:
- [ ] Inscription/connexion/deconnexion
- [ ] Barre de recherche
- [ ] Changer la langue du site (français, anglais)
- [ ] Contacter les gérants du site

##### SUR SON PROFIL:
- [ ] Accéder à/modifier ses informations
- [ ] Ajouter des liens vers ses réseaux sociaux
- [ ] Accéder à/modifier ses abonnements
- [ ] Possibilité de publier des posts sur son profil
- [ ] Ajouter un livre papier 
- [ ] Mettre au partage/don de livre papier
- [ ] Partager son emplacement géographique (adresse)
##### Paramètres:
- [ ] Possibilité de rendre publique ou privés sa bibliothèque et certaines de ses informations
- [ ] Supprimer définitivement son compte
- [ ] Pouvoir masquer la partie histoire ou livres papier (c-à-d ne voir que les histoires créées par les utilisateurs ou que les livres papiers partagés) 

##### PRINCIPALES:
##### V1:
- [ ] Possibilité de publication/modif/supp d'histoires/de nouvelles créées par soi-même (l'ecriture de l'histoire sur le site)
- [ ] Abonnement/désabonnement à des profils
- [ ] Filtre (dans la page de flux) des histoires en fonction de leur catégorie (+ possibilié de cacher des histoires avec des mots clés)
- [ ] Affichage du contenu adapté à l'âge de l'utilisateur
- [ ] Newsletter des histoires/nouvelles crées (les mieux votés sont proposés à certains utilisateurs aléatoirement) 

##### V2:
- [ ] Partager un aperçu de livres (papier) lus avec des commentaires sur ces livres
- [ ] Pouvoir indiquer aux autres utilisateurs que nous proposons au partage/don nos livres ( john propose *Le petit prince* au partage )
- [ ] Voir la disponibilité des livres
- [ ] Date limite pour rendre les livres empruntés
- [ ] Avoir un lien redirigeant les utilisateurs intéressés par un livre papier partagé par un utilisateur vers un site qui vendrait ce livre (ex: fnac ...) 

##### BIBLIOTHEQUE:
- [ ] Ajouter/retirer une histoire de la bibliothèque
- [ ] Possibilité de lire les histoires publiées par les autres utilisateurs 
- [ ] Possibilité de commenter et de mettre un j'aime sur l'histoire 

<!--
## Pages

- [ ] Inscription/connexion
- [ ] Accueil
- [ ] Son Profil
- [ ] (Consulter le) Profil d'un utilisateur
- [ ] Page de flux d'histoires d'autres utilisateurs (triés par date de création décroissante**)
- [ ] Page de flux de livres papier
- [ ] Aperçu d'une histoire (photo, synopsis, mots clés, ...)

- [ ] Créer la couverture de l'histoire (photo, titre, synopsis, catégories, mots clés, lectorat visé, langue (fr ou en), droits d'auteur, contenu choquant ou non)
- [ ] Ecrire l'histoire (nom du chapitre puis textarea, bouton d'enregistrement/suppression

- [ ] Créer la description d'un livre papier

- [ ] Gérer mes histoires
- [ ] Gérer mes livres papiers proposés au partage / et non proposé au partage (pages diff)

(footer)
- [ ] Mentions légales : Politique de confidentialité, conditions générales d'utilisation, directives relatives au contenu, rgpd
- [ ] A propos
- [ ] Equipe
- [ ] Gestion des préférences concernant les cookies

** plus tard trier en fonction des goûts de l'utilisateur 
-->

## BDD

<img width="461" alt="image" src="https://user-images.githubusercontent.com/100844563/199120183-0b0e84e0-51e0-492b-badf-dcba3a138182.png">


Utilisateur
- nom
- prenom
- email
- mdp
- voie
- rue 
- ville
- code_postale
- roles
- date_naissance
- photo_profil
- photo_bannière
- date_inscription

Histoire
- id_utilisateur (auteur)
- titre
- synopsis
- photo
- catégorie (choice)
- mots clés
- lectorat visé (choice)
- langue (fr ou en) (choice)
- droits d'auteur (choice)
- contenu mature (oui ou non) (choice)
- date_creation

Chapitre
- id_histoire
- ordre (num du chapitre)
- titre
- contenu
- date_creation
- date_modification

Bibliothèque
- id_utilisateur 
- id_histoire

Avis
- id_utilisateur (commentateur)
- id_histoire
- commentaire (null)
- j'aime (bool) (null)
- date_publication

Livre_papier
- id_utilisateur
- titre
- auteur
- synopsis
- date_publication
- editeur
- categorie
- mot_cle
- photo 

Emprunt
- id_utilisateur (preteur)
- id_utilisateur (emprunteur)
- id_livre_papier
- date_emprunt
- date_rendu

<img width="495" alt="image" src="https://user-images.githubusercontent.com/100844563/199799306-4482545d-ef69-455e-9e0f-5d25fa96daac.png">
