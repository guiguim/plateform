
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Nouveau stagIaire</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
	</head>
	<body>		
		<div class="container">
			<br>
			
			<div class="panel panel-primary">
				<div class="panel-heading">Nouvelle poubelle</div>
				<div class="panel-body">
					<form method="post" action="insertStagiaire.php" class="form" enctype="multipart/form-data">
					
						<div class="form-group">
							<label for="NOM" class="control-label">Nom de l'abonné</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Prénom de l'abonné</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
                        </div>
                        
                        <div class="form-group">
							<label for="NOM" class="control-label">Nom de l'entreprise/association</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Contacts</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
						</div>
                        
                        <div class="form-group">
							<label for="NOM" class="control-label">Numero de la poubelle</label>
							<input type="text" name="NOM" id="NOM" class="form-control"/>
						</div>
						
						<div class="form-group">
							<label for="PRENOM" class="control-label">Localité</label>
							<input type="text" name="PRENOM" id="PRENOM" class="form-control"/>
						</div>
											
						<button type="submit" class="btn btn-primary">Enregistrer</button>
							
					</form>
				</div>
			</div>
			
			
				
		</div>
	</body>
</html>



