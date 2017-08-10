<section>
	<h2>Contactez-nous</h2>
	<form id="formContact">
		<input type="email" name="email" placeholder="Entrez votre email">
		<input type="texte" name="nom" placeholder="Entrez votre nom">
		<textarea name="message" cols=20 rows=10 placeholder="Entrez votre message"></textarea>
		<input type="hidden" name="traitementClass" value="Contact">
		<button>Envoyer</button>
	</form>
	<div id="messageContact">		
	<?php  $this->afficherVarGlob("Contact"."Message"); ?>
	</div>
</section>