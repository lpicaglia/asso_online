<link rel="stylesheet" href="css/bootstrapValidator.min.css">
<script src="js/bootstrapValidator.min.js"></script>
<script src="js/fr_FR.js"></script>

<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Inscription (gratuite)</h3>
		</div>
		<div class="panel-body">
			<form action="registration" id="registration" method="post">
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="Nom de l'asso" required/>
				</div>
					
				<div class="form-group">
					<input type="email" class="form-control" id="mail" name="mail" placeholder="Adresse mail" required/>
				</div>
					
				<div class="form-group">
					<input type="email" class="form-control" id="confirmMail" name="confirmMail" placeholder="Confirmer l'adresse mail" required/>
				</div>

				<div class="form-group" align="center">
					<button class="btn btn-success" type="submit" align="center" disabled>Inscription</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>

// =================================================================================
// Controle des saisies
// =================================================================================

	$(document).ready(function() {

	    $('#registration').bootstrapValidator({
	        framework: 'bootstrap',
	        icon: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
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
	            confirmMail: {
	                validators: {
	                    notEmpty: {
	                        message: 'Confirme ton adresse mail'
	                    },
	                    identical: {
	                    	field: 'mail',
	                    	message: 'Confirmation non valide'
	                    }
	                }
	            }
	        }
	    });
	});
</script>
