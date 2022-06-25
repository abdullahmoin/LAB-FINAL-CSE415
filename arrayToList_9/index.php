<?php
$color = array('white','greed','red');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    

<div class="container">
    
<p>
<ol type="A">
  <li>
      <?php
      echo implode(" ",$color);
      ?>
  </li>
  <li>
      <?php
        echo '<ul>';
        echo '<li>' . implode( '</li><li>', $color) . '</li>';
        echo '</ul>';
    ?>
    </li>
  
</ol> 
    
</p>

</div>


</body>
</html>