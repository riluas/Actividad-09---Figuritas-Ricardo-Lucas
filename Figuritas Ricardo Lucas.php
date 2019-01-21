<?php
$a=0;
$tres="* * * * *";
$asteriscos="*";
$asteriscos4="*";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //1
    while ($a <= 4) {
      $a++;
      echo "*";
      echo "<br>";
    }
        echo "<br>";
        echo "<br>";
  //2
    for ($i=0; $i <5 ; $i++) {
      echo "$tres";
      for ($e=0; $e <2 ; $e++) {
        echo "<br>";
      }
    }
        echo "<br>";
        echo "<br>";
  //3
  echo "$asteriscos<br>";
for ($i=0; $i <7; $i++) {
  $asteriscos=$asteriscos. "*";
  echo "$asteriscos";
  echo "<br>";
}
        echo "<br>";
        echo "<br>";
  //4
  for ($i=0; $i < 4  ; $i++) {
      for ($j=1; $j <$i ; $j++) {
            echo $asteriscos4;
            if ($j%4!=1) {
              echo $asteriscos4;
            }
      }
  echo "<br>";
      }
  if ($i>=4) {
    for ($i=4; $i >0 ; $i--) {
      for ($j=1; $j <$i ; $j++) {
          echo $asteriscos4;
        if ($j%4!=1) {
          echo $asteriscos4;
      }
      }
      echo "<br>";

    }
  }
  echo "<br>";
  echo "<br>";
//5
for ($i = 0; $i < 9; $i = $i +2) {
      echo "<br>";
    for ($a = 0; $a < 9 - $i - 1; $a++) {
        echo "&nbsp";
    }
    for ($a = 0; $a <= $i; $a++) {
        echo $asteriscos4;
    }
    echo "<br/>";
}

    ?>
  </body>
</html>
