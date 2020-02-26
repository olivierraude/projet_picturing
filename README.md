# projet_picturing

## site utile
### traduction
* https://www.linguee.fr/
* https://www.wordreference.com/
### générateur de couleurs
https://coolors.co/

## correction à faire
* tableau (css): rajouter le overscroll sur d'autre media query
* alert (css) : le fond transparent est perdu lorsque l'on scroll vers le bas
* creation d'une annonce possible sans photo ni description
* le bouton ajouter annonce apparait sur les listes membres
* l'effet hover sur les icones des medias sociaux ne fonctionne
* page home admin : lorsque tous les users sont activés seul l'entete du tableau reste affiché (au lieu d'une phrase)
* page display_all_member : l'action activer donne une erreur 404.
* rediriger les superviseurs vers admin_home.
* ajouter un radio button pour le type de fournisseur 'gratuit' ou 'or'

## amélioration à faire
* ajouter une page 'mon compte' qui affiche profil / annonces et possibilité de modifier / supprimer
* activer la recherche
* différencier les services des produits (label/tag? code couleur? icone?...) 
* ajouter un plugin seo
* ajouter un plugin pour connection par facebook
* priviligier un pluggin pour le rating
* plugin messagerie https://github.com/jrmadsen67/Mahana-Messaging-library-for-CodeIgniter
* faire le header en sticky (ou avoir le menu toujours accessible)

## Plan du site
### utilisateur non connecté / client
#### page accueil 
page accueil = tuiles des annonces (supprimer le bouton 'ajouter annonce')
#### menu 
* annonces : 
	- produits
	- services
* à propos
* s'enregistrer / mon compte (si client) (avec icone lettre si nouveau message)
	- mon profil (si client)
	- mes annonces (si client)
	- mes messages (si client)

#### page mon profil
page de profil du client avec bouton modifier et supprimer

### Fournisseur
#### page accueil 
page accueil = tuiles des annonces du fournisseur avec une tuile 'ajout annonces' 
#### menu 
idem client
#### note
possibilité de modifier et supprimer une annonce
possibilité de voir le client qui soumissionne à une annonce

### Fournisseur Or
idem fournisseur avec possibilité de voir tous les clients


## Note
* Password pour les utilisateurs = 1234 (sauf admin@admin.com = password)
* 		$user_value = [
			'Client' => 10,
			'Fournisseur' => 20,
			'Fournisseur Or' => 30,
			'Superviseur' => 40,
			'admin' => 50,
		];
