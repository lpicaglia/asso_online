<div class="col-md-9">
	<form action="#" method="post">		
		<div  class="form-group">
			<p>
				<img src="img/unknown.png" class="img-thumbnail" alt="Inconnu" width="150" height="150"/>
				<input type="file" name="logo"/>
			</p>
			<p>
				<input type="text" class="form-control input input_registration" name="nom" placeholder="Nom de l'asso"/>
			</p>
			<p>
				<input type="email" class="form-control input input_registration" name="mail" placeholder="Mail"/>
			</p>
			<p>
				<input type="text" class="form-control input input_registration" name="adresse" placeholder="Adresse"/>
			</p>
			<p>
				<input type="text" class="form-control input input_registration" name="cplt_adresse" placeholder="Complément d'adresse"/>
			</p>
			<p>
				<input type="text" class="form-control input input_registration" name="cp" placeholder="Code postale"/>
			</p>
			<p>
				<input type="text" class="form-control input input_registration" name="ville" placeholder="Ville"/>
			</p>
			<p>
				<textarea class="form-control input_registration" name="desc" placeholder="Description de l'asso" rows="4"></textarea>
			</p>

			<p>
				<table style="width:100%;">
					<tr>
					<?php
						$i = 0;

						foreach($domaines as $domaine){
							echo'<td title="'.$domaine["lib_domaine"].'"\><div class="checkbox"><label>';
							if(strlen($domaine['lib_domaine']) > 30){
								echo'<input type="checkbox"> '.substr($domaine["lib_domaine"], 0, 25).' ...';			
							}
							else{
								echo'<input type="checkbox"> '.$domaine["lib_domaine"];
							}
							echo'</label></div></td>';
							$i++;
							
							//$themes = getTheme($domaine["id_domaine"]);
							//echo $themes['id_theme'];

							
							if($i == 3){
								$i = 0;
								echo "</tr><tr>";
							}
						}
					?>
					</tr>
				</table>
			</p>
		</div>
	</form>
</div>