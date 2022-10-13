<?php 
$age=19;
$p="Ali";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les variables    </title>
</head>
<body>
    <h1 style="color:red"><?php echo 'prenom est  $p'; ?> a <?php echo $age; ?> ans</h1>
   <?php echo "<h1 style='color:green'>$p a $age ans</h1>"; ?>
   <?php echo '<h1 style="color:green">$p a $age ans</h1>'; ?>
   <h3><?=  $p   ?> a <?=$age?> ans</h3>
   <h3><?php echo   $p   ?> a <?php echo $age?> ans.</h3>
   bye bye

</body>
</html>