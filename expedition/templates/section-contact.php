<section id="section_contact_1">
	
		<h2>
			<figure>
				<img src="<?php echo $urlRoot;?>/assets/img/header/picto_1.png"></img>
				Contactez-nous
			</figure>
		</h2>

		<form id="formContact">
			<input type="texte" name="nom" placeholder="nom">
			<input type="texte" name="prenom" placeholder="prénom">
			<input type="email" name="email" placeholder="email">
			
			<textarea name="message" cols=20 rows=10 placeholder="message"></textarea>
			<input type="hidden" name="traitementClass" value="Contact">
			<div class="g-recaptcha" data-sitekey="6Lc1cSwUAAAAAKHiQ0HX9jhvx46VCHFbqZDBFmVS"></div>
			<button>Envoyer</button>
		</form>
		
		<div id="messageContact">		
		<?php  $this->afficherVarGlob("Contact"."Message"); ?>
		</div>
	
</section>