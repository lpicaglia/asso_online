<?php
if(isset($_SESSION['id_asso']) && !empty($_SESSION['id_asso'])){
?>
	<div class="col-md-6">
		<div class="panel panel-default panel-add-news">
			<form action="" method="post">
				<div>
					<textarea name="contentNews" placeholder="News de l'association" rows="2"></textarea>
				</div>
				<div align="right">
					<input name="sendNews" type="submit" class="btn btn-default btn-sm" value="Publier"/>
				</div>
				<input type="hidden" name="page" value="addNews" />
			</form>
		</div>
		<?php
		if(intval(getNbNews($_SESSION['id_asso'])) === 0){
		?>
			<div class="jumbotron">
				<h2><b>Bienvenue sur ta page</b></h2>
				<p>Tu devrais commencer par écrir ta première news, ça donnera plus de visibilité à ton association.</p>
			</div>
		<?php
		}else{
			foreach(getNews($_SESSION['id_asso']) as $news){
		?>
				<div class="panel panel-default panelNews">
					<div class="panel-heading">
						<p class="headerNews">
							<img class="img-responsive" src="<?= $asso['logo_asso']; ?>" alt="<?= $asso['nom_asso']; ?>">
							<?= $asso['nom_asso'] ?>
						</p>
						<p>
							<i><?= date("d/m/Y H:i:s", strtotime($news['maj_news']));?></i>
						</p>
					</div>
					<div class="panel-body">
						<?= $news['lib_news']?>
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modalComment_<?= $news['id_news'];?>">
							Commenter
						</button>
						<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modalModif_<?= $news['id_news'];?>">
							Modifier
						</button>
						<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modalSuppr_<?= $news['id_news'];?>">
							Supprimer
						</button>
					</div>
					<div class="modal fade" id="modalComment_<?= $news['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="Commenter une news">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Commenter la news</h4>
								</div>
								<div class="modal-body">
									<p><?= $news['lib_news']?></p>
									<hr/>
									<textarea name="commentNews" class="areaModal" rows="3" placeholder="Saisi ici ton commentaire."></textarea>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
									<button type="button" class="btn btn-primary" disabled>Commenter</button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalModif_<?= $news['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="Modifier une news">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form action="" method="post" name="modif_news">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Modification de la news</h4>
									</div>
									<div class="modal-body">
										<textarea name="modifNews" class="areaModal" rows="3"><?= $news['lib_news']?></textarea>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
										<button type="submit" class="btn btn-primary">Modifier</button>
										<input type="hidden" name="page" value="modif_news" />
										<input type="hidden" name="idNews" value="<?= $news['id_news']; ?>" />
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="modal fade" id="modalSuppr_<?= $news['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="Supprimer une news">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form action="" method="post" name="suppr_news">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Supprimer la news</h4>
									</div>
									<div class="modal-body">
										<p>Est-tu sur de vouloir supprimer cette news ?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
										<button type="submit" class="btn btn-primary">Supprimer</button>
										<input type="hidden" name="page" value="suppr_news" />
										<input type="hidden" name="idNews" value="<?= $news['id_news']; ?>" />
									</div>
								</form>
							</div>
							</div>
						</div>
					</div>
		<?php
			}
		}
		?>
	</div>
<?php	
}
else{
?>
	<div class="col-md-6 col-md-offset-3">
		<?php
		if(intval(getNbTotalNews()) === 0){
		?>
			<div class="jumbotron">
				<h2><b>Désolé, aucune news pour le moment</b></h2>
				<p>Reviens consulter le site régulièrement, pour voir les news des associations inscrites.</p>
			</div>
		<?php
		}else{
		?>
			<div class="jumbotron">
		    	<h2><b>Actualité des associations</b></h2>
		    	<p>Voici les dernières news publiés par les associations.</p>
		  		<div align="center">
	       			<button class="btn btn-primary" onclick="history.go(-1)">Page d'accueil</button>
	    		</div>
			</div>
			<?php
			foreach(getAllNews() as $news){
				$asso = getInfoNews($news['id_asso']);
			?>
				<div class="panel panel-default panelNews">
					<div class="panel-heading">
						<p class="headerNews">
							<img class="img-responsive" src="<?= $asso['logo_asso']; ?>" alt="<?= $asso['nom_asso']; ?>">
							<?= $asso['nom_asso'] ?>
						</p>
						<p>
							<i><?= date("d/m/Y H:i:s", strtotime($news['maj_news']));?></i>
						</p>
					</div>
					<div class="panel-body">
						<?= $news['lib_news']?>
					</div>
					<div class="panel-footer">
						<button type="button" class="btn btn-sm" data-toggle="modal" data-target="#modalComment_<?= $news['id_news'];?>">
							Commenter
						</button>
					</div>
					<div class="modal fade" id="modalComment_<?= $news['id_news'];?>" tabindex="-1" role="dialog" aria-labelledby="Commenter une news">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Commenter la news</h4>
								</div>
								<div class="modal-body">
									<p><?= $news['lib_news']?></p>
									<hr/>
									<textarea name="commentNews" class="areaModal" rows="3" placeholder="Saisi ici ton commentaire."></textarea>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
									<button type="button" class="btn btn-primary" disabled>Commenter</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php
			}
		}
		?>
	</div>
<?php
}
?>