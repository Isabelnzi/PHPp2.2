<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>exercice2</title>
</head>
<body>
  <p>
    <?php
    $isEasy = true;
    if ($isEasy == true)
    {
      echo 'c/est facile !!';
    }
    elseif($isEasy == False)
    {
      echo 'c/est difficile !!!';
    }
    ?>
    <?php
    $isEasy = true;
    if ($isEasy)
    {
      echo 'c/est facile !!';
    }
    else
    {
      echo 'c/est difficile !!!';
    }
    ?>
  </p>
