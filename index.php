<!DOCTYPE>
<html>
<head>
<title>Exercice5</title>
<meta  charset="UTF-8">
</head>
<body>
 <?php
  function vrai()
  {return true;}
  echo vrai();
 ?>
 <hr>
 <?php
  function para()
  {return "parametre";}
  echo para();
  ?>
<hr>
  <?php
    function retour($caract1 = "la", $caract2 = "concatenation")
    {return $caract1." ".$caract2;}
    echo retour();
   ?>
 <hr>
   <?php
    function nombre($nombre1, $nombre2)
    {if($nombre1 > $nombre2)
    {echo "Le premier nombre est plus grand";}
    elseif ($nombre1 < $nombre2)
    {echo "Le premier nombre est plus petit";}
    else
    {echo "Les deux nombres sont identiques";}}
    echo  nombre(31, 13);
   ?>
   <hr>
   <?php
    function score($but, $but2, $equipe)
    {return $but." ".$but2." ".$equipe;}
    echo score(2, 1, "pour l'OM");
  ?>
</body>
</html>
