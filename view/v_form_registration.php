<link rel="stylesheet" href="css/fileinput.min.css" />
<link rel="stylesheet" href="css/bootstrapValidator.min.css">

<script src="js/fileinput.min.js"></script>
<script src="js/fileinput_locale_fr.js"></script>

<script src="js/bootstrapValidator.min.js"></script>
<script src="js/fr_FR.js"></script>

<div class="col-md-9">
	<form action="valid_registration" method="post" id="form_registration" enctype="multipart/form-data">		

			<div class="form-group registration col-md-6 col-md-offset-3">
				<label>Importer une image représentative de votre association</label>
				<input 	id 					= "logo" 
						name 				= "logo" 
						type 				= "file" 
						class 				= "file"  
						data-show-upload	= "false" 
						data-show-remove	= "false"
						accept				= "image/*"/>
			</div>

			<div class="col-md-12">
				<i>Identification</i><hr />
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="name">Nom de l'association *</label>
				<input id 		 	= "name"
					   name			= "name" 
					   type			= "text"
					   class 		= "form-control input input_registration" 
					   placeholder 	= "Nom" 
					   value 		= <?php echo '"'.$name.'"'; ?> 
					   maxlength 	= "50" 
					   required/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="mail">Adresse mail (sert également d'identifiant à la connexion) *</label>
				<input id 			= "mail" 
					   name 		= "mail" 
					   type 		= "email"
					   class 		= "form-control input input_registration" 
					   placeholder 	= "Mail" 
					   value 		= <?php echo '"'.$mail.'"'; ?> 
					   required/>
			</div>
			
			<div class="form-group col-md-12 col-md-offset-3">
				<label for="pwd">Mot de passe de connexion *</label>
				<input 	id 			= "pwd" 
						name 		= "pwd" 
						type 		= "password"
						class 		= "form-control input input_registration" 
						placeholder	= "Mot de passe" 
						required/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="confirmPwd">Confirmation du mot de passe *</label>
				<input 	id 			= "confirmPwd" 
						name 		= "confirmPwd" 
						type 		= "password"
						class 		= "form-control input input_registration" 
						placeholder	= "Confirmation" 
						required/>
			</div>

			<div class="col-md-12">
				<i>Coordonnées</i><hr />
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="adr">Adresse de l'association</label>
				<input 	id  		= "adr"
						name 		= "adr"
						type 		= "text" 
						class 		= "form-control input input_registration" 
						placeholder	= "Adresse"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="adr2">Complément d'dresse</label>
				<input 	id 			= "adr2" 
						name 		= "adr2" 
						type 		= "text" 
						class 		= "form-control input input_registration" 
						placeholder	= "Complément d'adresse"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="cp">Code postale</label>
				<input 	id 			= "cp" 
						name 		= "cp"
						type 		= "text" 
						class 		= "form-control input input_registration" 
						placeholder	= "Code postale"/>
			</div>
		
			<div class="form-group col-md-12 col-md-offset-3">
				<label for="ville">Ville</label>
				<input 	id 			= "ville" 
						name 		= "ville" 
						type 		= "text" 
						class 		= "form-control input input_registration" 
						placeholder = "Ville"/>
			</div>
			
			<div class="form-group col-md-12 col-md-offset-3">
				<label for="tel">Téléphone</label>
				<input 	id 			= "tel" 
						name 		= "tel" 
						type 		= "text" 
						class 		= "form-control input input_registration" 
						placeholder	= "Téléphone"/>
			</div>

			<div class="col-md-12">
				<i>L'association</i><hr />
			</div>

			<div>
				<div class="col-md-6 form-group" align="center">
					<select id="domaine" name="domaine" style="width: 250px;" required>
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

				<div class="col-md-6 form-group" align="center">
					<select id="theme" name="theme" style="width: 250px;" required>
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
				<label for="desc">Expliquez, en quelques mot, le but de votre association</label>
				<textarea 	id 			="desc" 
							name 		="desc" 
							class 		="form-control input_registration" 
							placeholder	="Description de l'asso" 
							rows="4"></textarea>
				<span class="help-block">(Max. 500 caractères)</span>
			</div>

			<div class="col-md-12">
				<i>Liens</i><hr />
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="fb">Lien vers la page facebook</label>
				<input 	id  		= "fb"
						name 		= "facebook"
						type 		= "url" 
						class 		= "form-control input input_registration"  
						placeholder	= "Facebook"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="twt">Lien vers la page twitter</label>
				<input 	id 			= "twt"
						name		= "twitter"
						type		= "url" 
						class 		= "form-control input input_registration" 
						placeholder	= "Twitter"/>
			</div>

			<div class="form-group col-md-12 col-md-offset-3">
				<label for="twt">Autre lien</label>
				<input 	id 			= "link"
						name 		= "link"
						type 		= "url" 
						class 		= "form-control input input_registration" 
						placeholder	= "Lien"/>
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
// Aperçu d'image
// =================================================================================

	$("#logo").fileinput({
		initialPreview: [
			"<img src='img/uploads/unknown.png' class='file-preview-image' alt='Unknown' title='Unknown'>"
		],
		overwriteInitial: true,
		initialCaption: "Sélectionne une image"
	});

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
	            invalid: 'glyphicon glyphicon-remove'
	        },
	        locale: 'fr_FR',
	        fields: {
	            name: {
	                validators: {
	                    notEmpty: {
	                        message: 'Saisis un nom'
	                    },
	                    stringLength: {
	                        max: 50,
	                        message: 'Maximum 50 caractères'
	                    }
	                }
	            },
	            mail: {
	                validators: {
	                    notEmpty: {
	                        message: 'Saisis une adresse mail'
	                    },
	                }
	            },
	            pwd: {
	                validators: {
	                    notEmpty: {
	                        message: 'Saisis un mot de passe'
	                    },
	                    stringLength: {
	                        min: 6,
	                        message: 'Au moins 6 caractères'
	                    }
	                }
	            },
	            confirmPwd: {
	                validators: {
	                    notEmpty: {
	                        message: 'Confirme ton mot de passe'
	                    },
	                    identical: {
	                    	field: 'pwd',
	                    	message: 'Confirmation non valide'
	                    }
	                }
	            },
	            tel: {
	                validators: {
	                    stringLength: {
	                        min: 10,
	                        message: 'Téléphone incorrect (ex. : 0553535353)'
	                    }
	                }
	            },
	            domaine: {
	                validators: {
	                    notEmpty: {
	                        message: 'Sélectionne un domaine'
	                    }
	                }
	            },
	            theme: {
	                validators: {
	                    notEmpty: {
	                        message: 'Sélectionne un thème'
	                    }
	                }
	            }
	        }
	    });
	});
</script>