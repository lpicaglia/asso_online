<link rel="stylesheet" href="css/fileinput.min.css" />
<link rel="stylesheet" href="css/bootstrapValidator.min.css">

<script src="js/fileinput.min.js"></script>
<script src="js/fileinput_locale_fr.js"></script>
<script src="js/bootstrapValidator.min.js"></script>

<div class="col-md-9">
	<form action="valid_registration" method="post" id="form_registration">		

			<div class="form-group registration col-md-6 col-md-offset-3">
				<label>Importer une image représentative de votre association</label>
				<input type="file" class="file" id="logo" name="logo" data-show-upload="false" data-show-remove="false"/>
			</div>

			<script type="text/javascript">
				
				$("#logo").fileinput({
					initialPreview: [
						"<img src='img/unknown.png' class='file-preview-image' alt='Unknown' title='Unknown'>"
					],
					overwriteInitial: true,
					initialCaption: "Sélectionner une image"
				});

			</script>

			<div class="col-md-12">
				<i>Identification</i><hr />
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="name">Nom de l'association *</label>
				<input type="text" class="form-control input input_registration" id="name" name="name" placeholder="Nom" value=<?php echo '"'.$name.'"'; ?> required/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="mail">Adresse mail (sert également d'identifiant à la connexion) *</label>
				<input type="email" class="form-control input input_registration" id="mail" name="mail" placeholder="Mail" value=<?php echo '"'.$mail.'"'; ?> required/>
			</div>
			
			<div class="form-group col-md-12 col-md-offset-3">
				<label for="pwd">Mot de passe de connexion *</label>
				<input type="password" class="form-control input input_registration" id="pwd" name="pwd" placeholder="Mot de passe" required/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="confirmPwd">Confirmation du mot de passe *</label>
				<input type="password" class="form-control input input_registration" id="confirmPwd" name="confirmPwd" placeholder="Confirmation" required/>
			</div>

			<div class="col-md-12">
				<i>Coordonnées</i><hr />
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="adr">Adresse de l'association</label>
				<input type="text" class="form-control input input_registration"  name="adresse" placeholder="Adresse"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="adr2">Complément d'dresse</label>
				<input type="text" class="form-control input input_registration" id="adr2" name="cplt_adresse" placeholder="Complément d'adresse"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="cp">Code postale</label>
				<input type="text" class="form-control input input_registration" id="cp" name="cp" placeholder="Code postale" pattern="[0-9]{5}"/>
			</div>
		
			<div class="form-group col-md-12 col-md-offset-3">
				<label for="ville">Ville</label>
				<input type="text" class="form-control input input_registration" id="ville" name="ville" placeholder="Ville"/>
			</div>
			
			<div class="form-group col-md-12 col-md-offset-3">
				<label for="tel">Téléphone</label>
				<input type="text" class="form-control input input_registration" id="tel" name="tel" placeholder="Téléphone"/>
			</div>

			<div class="col-md-12">
				<i>L'association</i><hr />
			</div>

			<div class="form-group">
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

			<div class="form-group col-md-12 col-md-offset-3">
				<textarea class="form-control input_registration" id="desc" name="desc" placeholder="Description de l'asso" rows="4" maxlength="500"></textarea>
				<span>(Max. 500 caractères)</span>
			</div>

			<div class="col-md-12">
				<i>Liens</i><hr />
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="fb">Lien vers la page facebook</label>
				<input type="text" class="form-control input input_registration" id="fb" name="facebook" placeholder="Facebook"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="twt">Lien vers la page twitter</label>
				<input type="text" class="form-control input input_registration" id="twt" name="twitter" placeholder="Twitter"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="twt">Autre lien</label>
				<input type="text" class="form-control input input_registration" id="link" name="link" placeholder="Lien"/>
			</div>

			<div class="col-md-12">
				<hr />
			</div>

			<div class="form-group col-md-12" align="center">
				<button class="btn btn-success" type="submit">Inscription</button>
			</div>

			<div class="col-md-12" align="right">
				<i>* Champs obligatoire</i>
			</div>
		
	</form>
</div>

<script>

// =================================================================================
// Chainega des listes déroulantes
// =================================================================================

	$("#theme").chained("#domaine");

// =================================================================================
// Controle des saisies
// =================================================================================

	$(document).ready(function() {

	    $('#form_registration').bootstrapValidator({
	        framework: 'bootstrap',
	   		icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            name: {
	                validators: {
	                    notEmpty: {
	                        message: 'Veuillez saisir un nom'
	                    },
	                    stringLength: {
	                        max: 50,
	                        message: 'Le nom ne doit pas faire plus de 50 caractères'
	                    }
	                }
	            },
	            mail: {
	                validators: {
	                    notEmpty: {
	                        message: 'Veuillez saisir une adresse mail valide'
	                    },
	                }
	            },
	            confirmPwd: {
	                validators: {
	                    notEmpty: {
	                        message: 'Veuillez saisir un mot de passe'
	                    },
	                    identical: {
	                    	field: 'pwd',
	                    	message: 'Mot de passes différents'
	                    }
	                }
	            }
	        }
	    });
	});

</script>