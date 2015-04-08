<nav class="navbar navbar-inner">
	<div class="container">
		<div class="navbar-right">
			<?php
			if (isset($_SESSION)) {
				# code ...
			} else {
			?>
			<form action="#" class="navbar-form navbar-right" method="post" role="connexion">
				<input type="email" class="form-control input-sm" placeholder="Email" name="mail"/>
				<input type="password" class="form-control input-sm" placeholder="Mot de passe" name="pwd"/>
				<button class="btn btn-primary btn-sm" type="submit">Connexion</button>
			</form>
			<?php
			}
			?>
		</div>
	</div>
</nav>
