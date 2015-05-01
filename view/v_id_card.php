<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><b><?php echo $asso['nom_asso']; ?></b></h3>
		</div>

		<ul class="list-group">
			<?php
			if(!isset($_SESSION['id_asso'])){
			?>
			
			<li class="list-group-item">
				<img class="img-responsive" src="<?= $asso['logo_asso'] ?>" alt="<?= $asso['nom_asso']?>">
			</li>

			<?php
			}
			?>

			<li class="list-group-item">
				<label>Coordonnées</label>

				<div><?= $asso['adr_asso'];?></div>
				<div><?= $asso['cplt_adr_asso'];?></div>
				<div><?= $asso['cp_asso'];?></div>
				<div><?= $asso['ville_asso'];?></div>

			<?php
			
			if(!empty($asso['tel_asso'])){
				echo "<div>Tel. : ".$asso['tel_asso']."</div>"; 
			}
			?>

				<div><a href="<?= $asso['mail_asso']; ?>"><?= $asso['mail_asso']; ?></a></div>
			</li>
			
			<?php
			if(!empty($asso['descr_asso'])){
			?>
				<li class="list-group-item">
					<label>Description</label>
					<div><?= $asso['descr_asso']; ?></div>
				</li>
			
			<?php
			}
			if(!empty($asso['fb_asso']) || !empty($asso['twt_asso']) || !empty($asso['link_asso'])){
			?>
				<li class="list-group-item">
					<label>Liens</label>
					<div><a href="<?= $asso['fb_asso'] ?>"><?= $asso['fb_asso'] ?></a></div>
					<div><a href="<?= $asso['twt_asso'] ?>"><?= $asso['twt_asso'] ?></a></div>
					<div><a href="<?= $asso['link_asso'] ?>"><?= $asso['link_asso'] ?></a></div>
				</li>
			<?php
			}
			?>
	</div>
</div>