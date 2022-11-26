<?php $Scrivi = $_GET["Scrivi"];
var_dump($_GET);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link  href="style.css" rel="stylesheet">
</head>
<body>


<form action="paragrafo.php" method="GET">
  <label for="Scrivi">Scrivi</label>
  <input type="text" id="Scrivi" name="Scrivi">
  <br>
  <button type="Submit">Invio</button>
</form>

<?php echo $Scrivi;?>
 
<?php $paragrafo = "lorem22 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis porro nobis et consequuntur tempore, itaque consectetur quae atque tenetur alias minus nemo sapiente aperiam tempora, aliquid repellendus. Temporibus, reprehenderit"; ?>
 <p><?php echo $paragrafo;?></p>



 <h1>Cambio la parola ,,ipsum" con le "***"</h1>
 <?php $nuovo_paragrafo = str_replace("ipsum", "***", $paragrafo);?>


 <p><?php echo $nuovo_paragrafo;?></p>
</body>
</html>