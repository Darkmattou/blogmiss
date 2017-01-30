<?php 

class CommandeRepository
{

	//Récupère la liste de tous les clients en base de données
	public function getAll($pdo) {

		//Effectuer la requête en bdd pour récupérer l'ensemble des clients enregistrés en bdd
		$resultats = $pdo->query('SELECT p.nom, p.prenom, cp.com_id, cp.prd_id, cp.quantite, c.client_id, c.ref FROM personne p INNER JOIN commande c ON p.id = c.client_id INNER JOIN commande_produit cp ON c.id = cp.com_id');

		$resultats->setFetchMode(PDO::FETCH_OBJ);

		//Boucler sur tous les enregistrements récupérés grâce à votre requête SELECT
		//et pour chaque enregistrement :
		// 1 -  instancier un objet client
		// 2 -  hydrater ses attributs avec les valeurs récupérées en bdd
		// 3 - pour chaque objet client instanciés et hydratés, les ajouter dans un tableau
		// 4 - retourner ensuite ce tableau avec l'instruction return

		$listeCommande = array();

		while($obj = $resultats->fetch()){	

			$commande = new Client();
			$commande->setNom($obj->nom);
			$commande->setPrenom($obj->prenom);
			$commande->setCom($obj->com_id);
			$commande->setPrd($obj->prd_id);
			$commande->setQuantite($obj->quandtite);
			$commande->setClientid($obj->client_id);
			$commande->setRef($obj->ref);

			$listeCommande[] = $commande;

		}

		return $listeCommande;
	}

