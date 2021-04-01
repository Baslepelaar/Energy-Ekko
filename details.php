<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="language" content="NL">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Bas Lepelaar">
	<meta name="keywords" content=""> 

	<title>Ekko Energy</title>
</head>
<body>
    <?php
        include 'core/dbconnect.php';

        $sql = "SELECT * FROM artiesten WHERE artist_id=" . $_GET['id'];
        if ($result = $conn->query($sql)) {
            $row = $result->fetch_object();
            echo "<section>" . $row->titel . "</section>";
            echo "<section>" . $row->omschrijving . "</section>";
            echo "<section>" . $row->afbeelding . "</section>";
            $result->close();
        }
    ?>
</body>
</html>