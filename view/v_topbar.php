<nav class="navbar navbar-custom">
	<div class="container-fluid">
		<div class="navbar-left">
			<h2><a class="navbar-link" href="#">Asso-Online.fr</a></h2>
		</div>

		<div class="navbar-right">
			<?php
			if (isset($_SESSION)) {
				# code ...
			} else {
			?>
			<form action="#" class="navbar-form navbar-right" method="post" role="connexion">
				<input type="email" class="form-control input-sm" placeholder="Email" name="mail"/>
				<input type="password" class="form-control input-sm" placeholder="Mot de passe" name="pwd"/>
				<button class="btn btn-default btn-sm" type="submit">Connexion</button>
			</form>
			<?php
			}
			?>
		</div>
	</div>
</nav>
