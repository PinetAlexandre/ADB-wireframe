



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex bootstrap</title>

    <link rel="stylesheet" href ="./src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/83f4286022.js" crossorigin="anonymous"></script>
</head>
<header>
</header>

<nav class="navbar sticky-top navbar-transparent bg-transparent">
    <div class="container-fluid">

        <a class="navbar-brand text-white" href="Acceuil.html"> <i class="fas fa-space-shuttle fa-flip-horizontal"></i> Hello from Space <i class="fas fa-space-shuttle"></i></a>

        <ul class="nav nav-tabs">

            <li class="nav-item">
            <a class="nav-link text-white" href="Acceuil.html">Acceuil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Contact.php">Contact</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="Produits.html" role="button" aria-expanded="false">Produits</a>
                <ul class="dropdown-menu">
                    <li>Classe Eco</li>
                    <li><a class="dropdown-item" href="Produits.html">Lune Eco</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Mars Eco</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Jupiter Eco</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Soleil Eco</a></li>
                    <li><hr class="dropdown-divider" >Classe Standard</li>
                    <li><a class="dropdown-item" href="Produits.html">Lune Standard</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Mars Standard</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Jupiter Standard</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Soleil Standard</a></li>
                    <li><hr class="dropdown-divider" >Classe VIP</li>
                    <li><a class="dropdown-item" href="Produits.html">Lune VIP</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Mars VIP</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Jupiter VIP</a></li>
                    <li><a class="dropdown-item" href="Produits.html">Soleil VIP</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="Photos.html">Photos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="Nous trouver.html">Nous trouver</a>
            </li>

        </ul>
    </div>
</nav>
    


<body class="bg-dark" id="contact">

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <form method="post" action="Contact.php">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label class="text-white">Nom</label>
                        <input class="form-control" name="firstname" value="<?php echo $firstname; ?>" type="text" placeholder="Entrez votre nom" required="required" data-validation-required-message="Entrez votre nom." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label class="text-white">Prénom</label>
                        <input class="form-control" name="lastname" value="<?php echo $lastname; ?>" type="text" placeholder="Entrez votre prénom" required="required" data-validation-required-message="Entrez votre prénom." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label class="text-white">E-mail</label>
                        <input class="form-control" name="email" value="<?php echo $email; ?>" type="email" placeholder="E-mail" required="required" data-validation-required-message="Entrez votre adresse E-mail." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label class="text-white">Message</label>
                        <textarea class="form-control" name="message" value="<?php echo $message; ?>" type="text" rows="5" placeholder="Votre message..." required="required" data-validation-required-message="Entrez un message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                    <label for="destination" class="text-white">Choisissez une destination:</label>
                    <select name="destination" id="destination">
                        <option value="">-Veuillez choisir une destination-</option>
                        <option value="luneeco" <?php echo $destination["luneeco"]; ?>>Lune Classe Eco</option>
                        <option value="marseco" <?php echo $destination["marseco"]; ?>>Mars Classe Eco</option>
                        <option value="jupitereco" <?php echo $destination["jupitereco"]; ?>>Jupiter Classe Eco</option>
                        <option value="soleileco" <?php echo $destination["soleileco"]; ?>>Soleil Classe Eco</option>
                        <option value="lunestandard" <?php echo $destination["lunestandard"]; ?>>Lune Classe Standard</option>
                        <option value="marsstandard" <?php echo $destination["marsstandard"]; ?>>Mars Classe Standard</option>
                        <option value="jupiterstandard" <?php echo $destination["jupiterstandard"]; ?>>Jupiter Classe Standard</option>
                        <option value="soleilstandard" <?php echo $destination["soleilstandard"]; ?>>Soleil Classe Standard</option>
                        <option value="lunevip" <?php echo $destination["lunevip"]; ?>>Lune Classe VIP</option>
                        <option value="marsvip" <?php echo $destination["marsvip"]; ?>>Mars Classe VIP</option>
                        <option value="jupitervip" <?php echo $destination["jupitervip"]; ?>>Jupiter Classe VIP</option>
                        <option value="soleilvip" <?php echo $destination["soleilvip"]; ?>>Soleil Classe VIP</option>
                    </select>
                <fieldset>
                    <legend class="text-white">Veuillez sélectionner le type de voyage</legend>
                    <div>
                      <input type="checkbox" name="aller" <?php echo $aller; ?> checked>
                      <label for="aller" class="text-white">Trajet Aller</label>
                    </div>
                    <div>
                      <input type="checkbox" name="retour" <?php echo $retour; ?>>
                      <label for="retour" class="text-white">Trajet Retour</label>
                    </div>
                </fieldset>
                <br/>
                <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Envoyer</button></div>
            </form>
        </div>
    </div>


    <footer class="bg-dark fixed-bottom">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Hello from Space 2021</p></div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>


<?php
    
    function getArrayValue(array $array, string $value)
    {
    if (isset($array[$value]))
        return htmlspecialchars ($array[$value]) ;
    return "";
    }

$firstname = getArrayValue($_POST, "firstname") FILTER_SANITIZE_STRING;
$lastname = getArrayValue($_POST, "lastname") FILTER_SANITIZE_STRING;
$email = getArrayValue($_POST, "email") FILTER_VALIDATE_EMAIL;
$message = getArrayValue($_POST, "message") FILTER_SANITIZE_STRING;

$destination["luneeco"] = getArrayValue($_POST, "destination") == "luneeco" ? "selected" : "";
$destination["marseco"] = getArrayValue($_POST, "destination") == "marseco" ? "selected" : "";
$destination["jupitereco"] = getArrayValue($_POST, "destination") == "jupitereco" ? "selected" : "";
$destination["soleileco"] = getArrayValue($_POST, "destination") == "soleileco" ? "selected" : "";
$destination["lunestandard"] = getArrayValue($_POST, "destination") == "lunestandard" ? "selected" : "";
$destination["marsstandard"] = getArrayValue($_POST, "destination") == "marsstandard" ? "selected" : "";
$destination["jupiterstandard"] = getArrayValue($_POST, "destination") == "jupiterstandard" ? "selected" : "";
$destination["soleilstandard"] = getArrayValue($_POST, "destination") == "soleilstandard" ? "selected" : "";
$destination["lunevip"] = getArrayValue($_POST, "destination") == "lunevip" ? "selected" : "";
$destination["marsvip"] = getArrayValue($_POST, "destination") == "marsvip" ? "selected" : "";
$destination["jupitervip"] = getArrayValue($_POST, "destination") == "jupitervip" ? "selected" : "";
$destination["soleilvip"] = getArrayValue($_POST, "destination") == "soleilvip" ? "selected" : "";

$aller = getArrayValue($_POST, "aller") == true ? "checked" : "";
$retour = getArrayValue($_POST, "retour") == true ? "checked" : "";

?>
