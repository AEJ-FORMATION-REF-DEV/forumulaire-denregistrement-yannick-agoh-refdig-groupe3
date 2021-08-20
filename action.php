<?php
    include('laity.php'); /*appel de la data base */
?>

<?php /* inscription*/

if(isset($_POST['valider']))/* si le bouton iscription est rempli*/
{
   /*affectation des valeurs des champs du formulaire dans des variables*/
    $nomm = htmlspecialchars($_POST['nom']);
    $prenomm =htmlspecialchars($_POST['prenoms']);
    $num_aejj =htmlspecialchars($_POST['num_aej']);
    $tell =htmlspecialchars($_POST['tel']);
    $maill =htmlspecialchars($_POST['email']);
    $fonctionn =htmlspecialchars($_POST['fonction']);
/*fin des affectations*/

/*initialisation de la requete*/




    $query = "INSERT INTO etudiant(nom,prenoms,num_aej,tel,email,fonction) VALUES ('$nomm','$prenomm','$num_aejj','$tell','$maill','$fonctionn')";
    $query_run = mysqli_query($connection,$query);
            
        if($query_run)/* condition pour voir si la requete c'est bien passé*/
        {
           header('location: index.php');
        }
        else{
            echo('erreur');
        }
}
?>

