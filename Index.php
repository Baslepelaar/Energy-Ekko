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
    <script src="core/js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>Ekko Energy</title>
	</head>
<body>
    <header>
        <article id="logo">
            <img src="images/logo.png" alt="Ekko">
        </article>
        <nav id="navigatie">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Producten</a></li>
                <li><a href="#">Evenementen</a></li>
                <li><a href="#">Aanbiedingen</a></li>
                <li><a href="#">Over Ons</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="h-drie-blikjes">
            <img src="images/can strawbeerries home.png" alt="Strawbberries">
            <img src="images/can goldmode home.png" alt="Goldmode">
            <img src="images/can sugar free home.png" alt="Sugar Free">
        </section>
        <section id="slide-show">
            <div class="w3-content w3-display-container" style="max-width:800px">
                <img class="slidShow" src="images/can strawbeerries home.png" style="width:100%">
                <img class="slideShow" src="images/can goldmode home.png" style="width:100%">
                <img class="slideShow" src="images/can sugar free home.png" style="width:100%">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>
        </section>
        <section id="articles">

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
</body>
</html>