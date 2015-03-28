<div class="col-md-9">
	<form action="#" method="post">		
		<div  class="form-group">
			<div class="row">
				<div class="col-md-12" align="center">
					<img src="img/unknown.png" class="img-thumbnail" alt="Inconnu" width="150" height="150"/>
					<input type="file" name="logo"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" align="center">
					<input type="text" class="form-control input input_registration" name="nom" placeholder="Nom de l'asso"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" align="center">
					<input type="email" class="form-control input input_registration" name="mail" placeholder="Mail"/>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-12" align="center">
					<input type="text" class="form-control input input_registration" name="adresse" placeholder="Adresse"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" align="center">
					<input type="text" class="form-control input input_registration" name="cplt_adresse" placeholder="Complément d'adresse"/>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12" align="center">
					<input type="text" class="form-control input input_registration" name="cp" placeholder="Code postale"/>
				</div>
			</div>
		
			<div class="row">
				<div class="col-md-12" align="center">
					<input type="text" class="form-control input input_registration" name="ville" placeholder="Ville"/>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12" align="center">
					<textarea class="form-control input_registration" name="desc" placeholder="Description de l'asso" rows="4"></textarea>
				</div>
			</div>

			<hr />

			<div class="row">
				<div class="col-md-6" align="center">
					<select id="domaine" name="domaine" style="width: 250px;">
						<option value="">-- Domaines --</option>
					<?php

					foreach($domaines as $domaine){
						if(strlen($domaine['lib_domaine']) > 30){
							echo '<option title="'.$domaine['lib_domaine'].'" value="'.$domaine['id_domaine'].'">'.substr($domaine["lib_domaine"], 0, 27).' ...</option>';
						}
						else{
							echo '<option title="'.$domaine['lib_domaine'].'" value="'.$domaine['id_domaine'].'">'.$domaine['lib_domaine'].'</option>';
						}
					}

					?>
					</select>
				</div>

				<div class="col-md-6" align="center">

					<select id="theme" name="theme" style="width: 250px;">
						<option value="">-- Thèmes --</option>
					<?php

					foreach($themes as $theme){
						if(strlen($theme['lib_theme']) > 30){
							echo '<option title="'.$theme['lib_theme'].'" value="'.$theme['id_theme'].'" class="'.$theme['id_domaine'].'">'.substr($theme["lib_theme"], 0, 27).' ...</option>';
						}
						else{
							echo '<option title="'.$theme['lib_theme'].'" value="'.$theme['id_theme'].'" class="'.$theme['id_domaine'].'">'.$theme['lib_theme'].'</option>';	
						}
					}

					?>
					</select>

				</div>
			</div>

			<hr />

			<div class="row">
				<div class="col-md-12" align="center">
					<button class="btn btn-success" type="submit">Inscription</button>
				</div>
			</div>

		</div>
	</form>
</div>