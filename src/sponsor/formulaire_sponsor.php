<?php 
require './SponsorManager.php';

$sponsorManager = new SponsorManager();
$getAllSponsor = $sponsorManager->getAllSponsor();

if (!empty($_POST['brand']) ) {
    $newSponsor = new Sponsor();

    $newSponsor->setBrand($_POST['brand']);
    

    $sponsorManager->create($newSponsor);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./formulaire_sponsor.css">
    <title>Formulaire Sponsor</title>
</head>
<body>
    <section class="page">
        <form method="POST" action="">
           <h1>Sponsor</h1>
           <div class="séparation">
            <div class="corps-formulaire">
                <div class="contenu">
                    <div class="boite">
                        <label>Brand</label>
                        <input type="text" name="brand" minlength="3" maxlength="50">
                    </div>
                </div>
            </div>
            <div class="pied-formulaire">
                <button name="submit" value="add sponsor" ><strong>submit</strong></button>
            </div>
           </div>
        </form>
    </section>
    <script type="module" src="sponsor.js"></script> 

</body>


</html>