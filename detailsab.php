<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="language" content="NL">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Bas Lepelaar">
	<meta name="keywords" content="">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>Ekko Energy</title>
</head>
<body>
    <header>
        <div class="menu-wrap">
  		    <input type="checkbox" class="toggler">
  		    <div class="hamburger">
  			    <div>
                </div>
  		    </div>
            <div class="menu">
  			    <div>
  				    <div>
						<ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Producten</a></li>
                            <li><a href="#">Evenementen</a></li>
                            <li><a href="#">Aanbiedingen</a></li>
                            <li><a href="#">Over Ons</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
  				    </div>
  			    </div>
  		    </div>
  	    </div>
        <article class="logo">
            <a href="index.php">
                <img src="images/logo.png" alt="Ekko">
            </a>
        </article>
        <nav id="navigatie">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Producten</a></li>
                <li><a href="#">Evenementen</a></li>
                <li><a href="#">Aanbiedingen</a></li>
                <li><a href="#">Over Ons</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php
        include 'core/dbconnect.php';

        $sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id=" . $_GET['id'];
        if ($result = $conn->query($sql)) {
            $row = $result->fetch_object();
            echo "<section class='info-ab'>" . $row->titel . "</section>";
            echo "<section class='info-ab'>" . $row->omschrijving . "</section>";
            $result->close();
        }
    ?>
    <footer>
        <article class="item-footer">
            <p class="copyright">2021 EKKO</p>
            <p><a href="#">Contact</a></p>
            <p><a href="#">Privacy</a></p>
            <p><a href="#">FAQ</a></p>
        </article>
    </footer>
</body>
</html>