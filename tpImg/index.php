<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>import de fichier</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data"
<h2>importer une image</h2>
<input type="file" name="file">
<p><button type="submit">importer</button></p>
</form>
<?php
function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);
    $cpt = "";
    
}
?>
</html>