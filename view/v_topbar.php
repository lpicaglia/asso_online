<nav class="navbar navbar-inner">
	<div class="container">
		<div class="navbar-right">
			
			<?php
			if (!isset($_SESSION['id_asso'])) {
			?>

			<form action="" class="navbar-form navbar-right" method="post" role="connexion">
				<input type="hidden" name="page" value="main" />
				<input type="email" class="form-control input-sm" placeholder="Email" name="mail"/>
				<input type="password" class="form-control input-sm" placeholder="Mot de passe" name="pwd"/>
				<button class="btn btn-primary btn-sm" type="submit">Connexion</button>
			</form>
			
			<?php 
			}else{
			?>

			<div class="btn-group">
				<img class="logo_top" class="img-responsive" src="<?= $asso['logo_asso']; ?>" alt="<?= $asso['nom_asso']; ?>">
				<button type="button" class="btn btn-default btn-sm dropdown-toggle menu_logo_top" data-toggle="dropdown" aria-expanded="false">
					Menu
					<span class="caret">
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="" onClick="profil.submit();">Profil</a>
					</li>
					<li>
					    <a href="" onClick="disconnect.submit();">Déconnexion</a>
					</li>
				</ul>
			</div>

			<form action="" method="post" name="profil">
				<input type="hidden" name="page" value="profil" />
			</form>

			<form action="" method="post" name="disconnect">
				<input type="hidden" name="page" value="disconnect" />
			</form>
			
			<?php
			}
			?>

		</div>
	</div>
</nav>