# Bibliotheque
Projet pour jury de formation Doranco dev web Fullstack.


## Fonctionnalités
### Incomplet

DE BASE:
- [ ] Inscription/connexion/deconnexion
- [ ] Barre de recherche
- [ ] Changer la langue du site (français, anglais)

SUR LE PROFIL:
- [ ] Accéder à/modifier ses informations
- [ ] Ajouter des liens vers nos réseaux sociaux
- [ ] Accéder à/modifier ses abonnements
- [ ] Possibilité de publier des posts sur son profil
Paramètres:
- [ ] Possibilité de rendre publique ou privés sa bibliothèque et certaines de ses informations
- [ ] Supprimer définitivement son compte

PRINCIPALES:
V1:
- [ ] Possibilité de partage d'histoires/de nouvelles créées par soi-même
- [ ] Abonnement possible à des profils
- [ ] Filtre (dans la page de flux) des histoires en fonction de leur catégorie (+ possibilié de cacher des histoires avec des mots clés)
- [ ] Affichage du contenu adapté à l'âge de l'utilisateur
- [ ] Newsletter des nouvelles crées (les mieux votés sont proposés à certains utilisateurs aléatoirement) 

V2:
- [ ] Partager un aperçu de livres (papier) lus avec des commentaires sur ces livres
- [ ] Date limite pour rendre les livres empruntés
- [ ] Avoir un lien redirigeant les utilisateurs intéressés par un livre papier partagé par un utilisateur vers un site qui vendrait ce livre (ex: fnac ...)
- [ ] Pouvoir indiquer aux autres utilisateurs que nous proposons au partage/don ( john propose *Les quatre filles du reverend Latimer* au partage 

BIBLIOTHEQUE:
- [ ] Ajouter/retirer une histoire de la bibliothèque
- [ ] Possibilité de lire les histoires publiées par les autres utilisateurs 
- [ ] Possibilité de commenter et de mettre un j'aime sur l'histoire 


## Pages
### Incomplet

- [ ] Inscription/connexion
- [ ] Accueil
- [ ] Son Profil
- [ ] (Consulter le) Profil d'un utilisateur
- [ ] Page de flux d'histoires d'autres utilisateurs (triés par date de création décroissante**)
- [ ] Page de flux de livres papier
- [ ] Aperçu d'une histoire (photo, synopsis, mots clés, ...)

- [ ] Créer la couverture de l'histoire (photo, titre, synopsis, catégories, mots clés, lectorat visé, langue (fr ou en), droits d'auteur, contenu choquant ou non)
- [ ] Ecrire l'histoire (nom du chapitre puis textarea, bouton d'enregistrement/suppression

(footer)
- [ ] Mentions légales : Politique de confidentialité, conditions générales d'utilisation, directives relatives au contenu, rgpd
- [ ] A propos
- [ ] Equipe
- [ ] Gestion des préférences concernant les cookies

** plus tard trier en fonction des goûts de l'utilisateur 

## BDD

<img width="328" alt="image" src="https://user-images.githubusercontent.com/100844563/199115712-8974e39b-9a93-43f0-bcc7-30a646da5ac2.png">


Utilisateur
- nom
- prenom
- email
- mdp
- adresse ** //@ **
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




