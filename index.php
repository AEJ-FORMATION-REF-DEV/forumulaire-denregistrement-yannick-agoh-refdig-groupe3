<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>BIENVENUE CHEZ YANN VEUILLEZ VOUS INSCRIT POUR UN ENTRETIEN</h2>  
<form action="action.php" method="post">
        <Fieldset class="centrer">
        <div class="form-group">
            <label for="nom" >Nom</label>
            <input id="nom" type="text" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input id="prenom" type="text" name="prenoms">
        </div>
        <div class="form-group">
            <label>Numéro AEJ</label>
            <input type="text" name="num_aej">
        </div>
        <div class="form-group">
            <label>Téléphone</label>
            <input type="text" name="tel">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div class="form-group">
            <label>Fonction</label>
            <select name="fonction">
                <option value="referent digital">referent Digital</option>
                <option value="developpeur web / mobile">developpeur web / mobile</option>
                <option value="Data IA">Data IA</option>
            </select>
        </div>
        <div class="bouton">
            <button name="valider">Valider</button>        
        </div>
        </Fieldset>
        
    </form>
    <BUtton><a href="consultation.php" class="button">afficher liste</a></BUtton>
</body>
</html>