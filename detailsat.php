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
                            <li><a href="product.php">Producten</a></li>
                            <li><a href="#">Evenementen</a></li>
                            <li><a href="#">Aanbiedingen</a></li>
                            <li><a href="overons.html">Over Ons</a></li>
                            <li><a href="contact.php">Contact</a></li>
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
                <li><a href="product.php">Producten</a></li>
                <li><a href="#">Evenementen</a></li>
                <li><a href="#">Aanbiedingen</a></li>
                <li><a href="overons.html">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php
        include 'core/dbconnect.php';

        $sql = "SELECT * FROM artiesten
        LEFT JOIN evenementen ON evenementen.artiest_id = artiesten.artiest_id
        LEFT JOIN locaties ON  evenementen.locatie_id = locaties.locatie_id
         WHERE artiesten.artiest_id=" . $_GET['id'] . " AND evenementen.artiest_id=" . $_GET['id'];
        if ($result = $conn->query($sql)) {
            $row = $result->fetch_object();
            echo "<article class='info'><section class='info-at'>" . $row->naam . "</section>";
            echo "<section class='info-at'>" . $row->max_bezoekers . "</section>";
            echo "<section class='info-at'>" . $row->plaatsnaam . " " . $row->gebouw . "</section></article>";
            echo "<section class='images-at'><img src='images/" . $row->naam . ".jpg' alt='" . $row->naam . "'></section>";
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