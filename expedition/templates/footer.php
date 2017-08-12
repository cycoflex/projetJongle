	</main>
	<footer>
		<p>&copy;l'expedition - tous droits réservés</p>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- cdn massonry -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script type="text/javascript" src="<?php echo $urlRoot; ?>/assets/js/main.js"></script>

<!-- js initilaize massonry -->
<script type="text/javascript" src="<?php echo $urlRoot; ?>/assets/js/massonry.js"></script>
<script type="text/javascript" language="javascript">
         $(function () {
             var $window = $(window);
             $window.scroll(function () {
                 if ($window.scrollTop() != 0){
                     $('#logo').fadeIn(1000);
                     $('#div-magique').fadeIn(1000);

                 }
                 else if($window.scrollTop() == 0){
                 	$('#logo').hide();
                 	$('#div-magique').hide();
                 }
             });
         });
    </script>  
</script>
</body>
</html>