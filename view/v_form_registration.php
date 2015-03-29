<div class="col-md-9">
	<form action="valid_registration" method="post">		
		<div  class="form-group">

			<div class="row row_registration">
				<div class="col-md-3 col-md-offset-3">
					<img src="img/unknown.png" class="img-thumbnail" alt="Inconnu" width="150" height="150"/>
				</div>
				<div class="col-md-6">
					<label>Importer une image représentative de votre association</label>
					<input type="file" name="logo"/>
				</div>
			</div>

			<p><i>Identification</i></p>
			<hr />

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="name">Nom de l'association *</label>
					<input type="text" class="form-control input input_registration" id="name" name="name" placeholder="Nom" value=<?php echo '"'.$name.'"'; ?>/>
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="mail">Adresse mail (sert également d'identifiant à la connexion) *</label>
					<input type="email" class="form-control input input_registration" id="mail" name="mail" placeholder="Mail" value=<?php echo '"'.$mail.'"'; ?>/>
				</div>
			</div>
			
			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="pwd">Mot de passe de connexion *</label>
					<input type="password" class="form-control input input_registration" id="pwd" name="pwd" placeholder="Mot de passe"/>
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="pwd2">Confirmation du mot de passe *</label>
					<input type="password" class="form-control input input_registration" id="pwd2" name="pwd2" placeholder="Confirmation"/>
				</div>
			</div>

			<p><i>Coordonnées</i></p>
			<hr />

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="adr">Adresse de l'association</label>
					<input type="text" class="form-control input input_registration" id="adr" name="adresse" placeholder="Adresse"/>
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="adr2">Complément d'dresse</label>
					<input type="text" class="form-control input input_registration" id="adr2" name="cplt_adresse" placeholder="Complément d'adresse"/>
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="cp">Code postale</label>
					<input type="text" class="form-control input input_registration" id="cp" name="cp" placeholder="Code postale"/>
				</div>
			</div>
		
			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="ville">Ville</label>
					<input type="text" class="form-control input input_registration" id="ville" name="ville" placeholder="Ville"/>
				</div>
			</div>
			
			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="tel">Téléphone</label>
					<input type="text" class="form-control input input_registration" id="tel" name="tel" placeholder="Téléphone"/>
				</div>
			</div>

			<p><i>L'association</i></p>
			<hr />

			<div class="row row_registration">
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
					</select> *
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
					</select> *
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<textarea class="form-control input_registration" name="desc" placeholder="Description de l'asso" rows="4"></textarea>
				</div>
			</div>

			<p><i>Liens</i></p>
			<hr />

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="fb">Lien vers la page facebook</label>
					<input type="text" class="form-control input input_registration" id="fb" name="facebook" placeholder="Facebook"/>
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="twt">Lien vers la page twitter</label>
					<input type="text" class="form-control input input_registration" id="twt" name="twitter" placeholder="Twitter"/>
				</div>
			</div>

			<div class="row row_registration">
				<div class="col-md-12 col-md-offset-3">
					<label for="twt">Autre lien</label>
					<input type="text" class="form-control input input_registration" id="link" name="link" placeholder="Lien"/>
				</div>
			</div>

			<hr />

			<div class="row row_registration">
				<div class="col-md-12" align="center">
					<button class="btn btn-success" type="submit">Inscription</button>
				</div>
			</div>

			<p align="right"><i>* Champs obligatoire</i></p>
		</div>
	</form>
</div>