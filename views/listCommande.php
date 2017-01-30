<a href="./index.php?action=formAddClient">Ajouter</a>
<table>
  <thead>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Commande</th>
    <th>Produit</th>
    <th>Quandtite</th>
    <th>id client</th>
    <th>Reference</th>
  </thead>
  <tbody>
    <?php
    foreach ($listeClients as $client) {
      echo '<tr>';
      echo '<td>' . $client->getNom() . '</td>';
      echo '<td>' . $client->getPrenom() . '</td>';
      echo '<td>' . $client->getCom() . '</td>';
      echo '<td>' . $client->getPrd() . '</td>';
      echo '<td>' . $client->getQuantite() . '</td>';
      echo '<td>' . $client->getClientid() . '</td>';
      echo '<td>' . $client->getRef() . '</td>';
      echo '</tr>';  
    }
    ?>
  </tbody>
</table>
<!-- Afficher ici le message d'erreur ou de confirmation lors d'une suppression -->
<label><?php if(isset($message)) echo $message ?></label>