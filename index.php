<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->
<?php 
//variabili
$answer = 'Ma non rompere i coglioni';
$badword = $_GET['badword'];

if (strpos($answer, $badword)) {
    $answer = str_replace($badword, '***', $answer);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<h1>Ti consideri una persona socievole?</h1>
<p><?php echo $answer ?></p>
<p><?php echo "La lunghezza del paragrafo è di: " .strlen($answer) ." caratteri"?></p>


    
</body>
</html>