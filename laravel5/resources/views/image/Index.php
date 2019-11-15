<?php
include("connexion.php");

?>


<?php

$requete="SELECT * FROM image";
$exec=mysql_query($requete);
while ($ligne=mysql_fetch_array($exec)) {
	?>
	<img src="<?php echo $ligne['lien'];?>"/>
	<?php
}
?>