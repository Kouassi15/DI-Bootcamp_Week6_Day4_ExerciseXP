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
    $tableau1 = array('b','2','4','6','8');
    $tableau2 = array('b','6');

    if (array_intersect($tableau2, $tableau1) === $tableau2) {
        echo "tableau2 est un sous ensemble de tableau1 ";
      } else {
         echo "tableau n'est pas un sous ensemble du tableau1";
      }
//
    ?>
</body>
</html>