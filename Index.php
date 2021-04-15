<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="language" content="NL">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ekke Energy is een ">
	<meta name="author" content="Bas Lepelaar">
	<meta name="keywords" content="">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>Ekko Energy</title>
</head>
<body>
<section class="mobile-background">
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
                            <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
                            <li><a href="over-ons.php">Over Ons</a></li>
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
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
                <li><a href="over-ons.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
</section>
    <main>
        <article>
            <section id="h-drie-blikjes">
                <img src="images/can strawbeerries home.png" alt="Strawbberries">
                <img src="images/can goldmode home.png" alt="Goldmode">
                <img src="images/can sugar free home.png" alt="Sugar Free">
            </section>
            <section>
                
            </section>
        </article>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="images/can vegan.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="images/can strawbeerries.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="images/can ijskoffie.png" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <section id="articles">
            <section>
                <article>
                    <?php 
                        include 'core/dbconnect.php';

                        $sql = "SELECT * FROM artiesten WHERE artiest_id LIKE '122'";
                        if ($result = $conn->query($sql)) {
                            while($row = $result->fetch_object()) {
                                echo "<section class='article-php'><a href='detailsat.php?id=".$row->artiest_id."'><img src='images/duncan.jpg' alt='Duncan'></a></section>";
                            }
                            $result->close();
                        }
                    ?>
                </article>
                <article><img src="images/ultra choco home.png" alt="Ultrachoco"></article>
                <article>
                    <?php 
                        include 'core/dbconnect.php';

                        $sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id LIKE '1'";
                        if ($result = $conn->query($sql)) {
                            while($row = $result->fetch_object()) {
                                echo "<section class='article-php'><a href='detailsab.php?id=".$row->aanbiedingen_id."'><img src='images/goldmode home.png' alt='goldmode'></a></section>";
                            }
                            $result->close();
                        }
                    ?> 
                </article>
            </section>
            <section>
                <article>
                    <?php 
                        include 'core/dbconnect.php';

                        $sql = "SELECT * FROM artiesten WHERE artiest_id LIKE '103'";
                        if ($result = $conn->query($sql)) {
                            while($row = $result->fetch_object()) {
                                echo "<section class='article-php'><a href='detailsat.php?id=".$row->artiest_id."'><img src='images/post.jpg' alt='Post Malone'></a></section>";
                            }
                            $result->close();
                        }
                    ?>
                </article>
                <article>
                    <?php 
                        include 'core/dbconnect.php';

                        $sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id LIKE '2'";
                        if ($result = $conn->query($sql)) {
                            while($row = $result->fetch_object()) {
                                echo "<section class='article-php'><a href='detailsab.php?id=".$row->aanbiedingen_id."'><img src='images/sugar free home.png' alt='sugar free'></a></section>";
                            }
                            $result->close();
                        }
                    ?> 
                </article>
                <article><img src="images/mercedes.png" alt="Mercedes F1"></article>
            </section>
        </section>
    </main>
    <footer>
        <article class="item-footer">
            <p class="copyright">2021 EKKO</p>
            <p><a href="#">Contact</a></p>
            <p><a href="#">Privacy</a></p>
            <p><a href="#">FAQ</a></p>
        </article>
    </footer>

    <script>
        var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
    </script>
</body>
</html>