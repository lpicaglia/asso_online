<div class="col-md-6">
	<?php
	if(intval(getNbNews($_SESSION['id_asso']))==0){
	?>
   	
   	<div class="jumbotron">
        <h2><b>Bienvenue sur ta page</b></h2>
        <p>Pour commencer, écris la première news de ton association pour, par exemple, expliquer le but de celle-ci.</p>
        
        <div align="center">
     	   <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addNews">
  				Ecrire une news
			</button>
		</div>

		<div class="modal" id="addNews" tabindex="-1" role="dialog" aria-labelledby="modalAddNews" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		        <form action="" method="post">
		        	<input type="hidden" name="page" value="addnews" />
				    <div class="modal-header">
				    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="modalAddNews">Ajouter une news</h4>
				    </div>
				    <div class="modal-body">
				    <div>
				       	<input class="areaNews" placeholder="Titre" type="text">
				    </div>
				    <div>
				    	<textarea class="areaNews" placeholder="Saisi une news" rows="10"></textarea>
				    </div>	

				    </div>
				    <div class="modal-footer">
				       	<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				       	<input type="submit" class="btn btn-primary" value="Enregistrer"/>
				     </div>
		      	</form>
		    </div>
		  </div>
		</div>

    </div>
    
    <?php
	}else{

	}
    ?>
</div>