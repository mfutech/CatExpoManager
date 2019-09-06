

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CCG Inscription Villeneuve 2019</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
			lastEntry = $(this).parents('.entry:last'),
            newEntry = $(currentEntry.clone());
		
		newEntry.appendTo(controlForm);
		$(':submit').remove();
		$('.controls form:first').append('<input type="submit" class="btn btn-primary" value="Envoi Inscription"></p>');

        //newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
		$('#main-form').validator('update');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();
		$(':submit').remove();
		$('.controls form:first').append('<input type="submit" class="btn btn-primary" value="Envoi Inscription"></p>');

		e.preventDefault();
		$('#main-form').validator('update');
		return false;
	});
});
</script>
<head>
<body background='/images/center.jpg'>
 <div class="container">
	<div class="row">
<table border="0">
  <tr valign="top"> 
    <td height="197"><img src="/index/top.jpg" width="827" height="212"></td>
    <td height="197"><br>
      <img src="/index/logo.jpg" width="173" height="169"> </td>
  </tr>
</table>
        <div class="control-group" id="fields">
            <label class="control-label" for="field1"><h1>Inscription pour Exposition de Villeneuve (6 et 7 avril 2019)<br>Registration for Villeneuve cat show (April 6-7, 2019)</h1></label>
            <div class="controls"> 
                <form role="form" autocomplete="on" id="main-form" action="action.php" method="post" data-toggle="validator">

<div class='col-sm-6'>
				<div class="form-group has-feedback">
					<label for="Nom">Nom et Prénom de l'Exposant / Firstname and Lastname:</label>
					<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom et Prénom de l'exposant" 
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>

				</div>
				<div class="form-group has-feedback">
					<label for="Nom">Adresse complète / Address:</label>
					<input type="text" class="form-control" name="adresse" id="adresse" placeholder='addresse, rue, NPA, Lieu, Pays'
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
				<div class="form-group has-feedback">
					<label for="Nom">Nombre de cage / Number of cages:</label>
					<input type="text" class="form-control" name="nbcage" id="nbcage" placeholder='nombre de cage souhaité'
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
 
</div>
<div class='col-sm-6'>
				<div class="form-group has-feedback">
					<label for="Nom">Téléphone / Phone number:</label>
					<input type="text" class="form-control" name="telephone" id="telephone" placeholder='numéro de téléphone complet'
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
				<div class="form-group has-feedback">
					<label for="Nom">E-mail:</label>
					<input type="email" class="form-control" name="email" id="email" placeholder='adresse de courrier électronique'
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
				<div class="form-group has-feedback">
					<label for="Nom">A quel club êtes-vous affilié / Affiliation:</label>
					<input type="text" class="form-control" name="club" id="club" placeholder='le nom de votre club'
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
				<div class="form-group">
					<label for="Nom">J'aimerai être à côté de / I'd like to be placed by:</label>
					<input type="text" class="form-control" name="acotede" id="acotede" placeholder="A côté de qui ..." />
				</div>
 
</div>		


<div class="col-sm-12">
	<input type="submit" class="btn btn-primary" value="Envoi Inscription / Send Registration"></p>

	<h2>Chat(s)</h2>
</div>
				<div class="entry input-group col-sm-12">
<div class='col-sm-6'>
<!--					<label class="control-label" for="entry"><h2>Chat</h2></label>
-->					<div class="form-group has-feedback">
						<label for="nom_chat">Nom du Chat / Cat name:</label>
                        <input class="form-control" name="noms[]" type="text" placeholder="Nom du Chat"
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group">
						<label for="nom_chat">Sexe / Sex:</label>
						<select class="form-control" id="sel1" name="sexes[]">
							<option>Male / Male</option>
							<option>Femelle / Female</option>
							<option>Male Neutré / Male neutred</option>
							<option>Femelle Neutrée / Female neutred</option>
						</select>
					</div>
					<div class="form-group has-feedback">
						<label for="date naissance">Date Naissance / Birthdate :</label>
                        <input class="form-control" name="date_nais[]" type="text" placeholder="Date de naissance" 
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="race">Race / Breed</label>
                        <input class="form-control" name="races[]" type="text" placeholder="Race du chat" 
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="nom_chat">Couleur / Color:</label>
                        <input class="form-control" name="couleurs[]" type="text" placeholder="Couleur" 
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="nom_chat">Couleur des yeux / Eyes color:</label>
                        <input class="form-control" name="yeux[]" type="text" placeholder="Couleur des yeux" />
					</div>
</div>
<div class='col-sm-6'>					
<!--					<label class="control-label" for="entry"><h2>&nbsp;</h2></label>
-->					<div class="form-group has-feedback">
						<label for="nom_chat">Livre des origines 
							<br>
							Book of origines registration number 
							
						</label>
                        <input class="form-control" name="livre_origines[]" type="text" placeholder="Numéro du Livre des Origines " 
						data-error="merci de remplir ce champ" required />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group has-feedback">
						<label for="nom_eleveur">Eleveur / Breeder:</label>
                        <input class="form-control" name="eleveurs[]" type="text" placeholder="Nom de l'éleveur" 
						data-error="merci de remplir ce champ" >
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
					<div class="form-group">
						<label for="nom_chat">Père / Father:</label>
                        <input class="form-control" name="peres[]" type="text" placeholder="Père du Chat" />
					</div>
					<div class="form-group">
						<label for="nom_chat">Mère / Mother:</label>
                        <input class="form-control" name="meres[]" type="text" placeholder="Mère du Chat" />
					</div>
					<div class="form-group">
						<label for="nom_chat">Classe / Class:</label>
						<select class="form-control" id="sel1" name="classes[]">
							<option>Classe d'Honneur/Ehrenklasse</option>
							<option>Chat de maison/Hauskatzen</option> 
							<option>Grand Champ./premiorat d'Europe (GCACE/GCAPE)</option>	
							<option>Championnat/premiorat d'Europe (CACE/CAPE)</option>
							<option>Grand Champ./Grand prem.international (CAGCI/CAGPI)</option> 	
							<option>Championnat/premiorat international (CACIB/CAPIB</option>	
							<option>Championnat/premiorat (CAC/CAP) dès 9 ou 10 mois</option>	
							<option>6-9 mois/Monate (ou 6-10 mois/monate)</option>
							<option>3-6 mois/Monate</option> 
							<option>Portée/Wurf (jusqu’à 4 mois/bis 4 monaten)</option>
							<option>Hors concours/Ausser Konkurrenz</option>
						</select>
					</div>
</div>
<div class='col-sm-12'>					
					<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                </div>
 </div>
            </form>
            <br>
            <small>Utilisez <span class="glyphicon glyphicon-plus gs"></span> pour ajouter un chat <br>
			Use <span class="glyphicon glyphicon-plus gs"></span> to add a cat</small>
            </div>
        </div>
	</div>
</div>

</body>
</html>
