<section>
	<h2>Mon accueil</h2>	
	<p>
		Le contenu de mon accueil
	</p>
	<h4>Abonnez-vous à notre newsletter</h4>
	<form method="get">
		<input type="email" name="email" placeholder="Votre email" required>
		<input type="hidden" name="traitementClass" value="Newsletter">
		<button type="submit">Envoyer</button>
	</form>
	<div class="feedback">
		<?php  
		//Affichage du message de retour 
		$this->afficherVarGlob("Newsletter"."Message"); 
		?>
	</div>
</section>


