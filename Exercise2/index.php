<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $delete_mois= 'Juin';
    $mois= array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novenbre','Decembre');
    foreach (array_keys($mois, $delete_mois) as $key) {
        unset($mois[$key]);
    }
     print_r($mois);
    ?>
</body>
</html>