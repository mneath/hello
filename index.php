<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
  <?php echo '<h1>Sent Email</h1>'; ?> 
 
 <?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("neathmj@gmail.com","My subject",$msg);
?>



<?php
echo <p>Cassy</p>;
$fp = fopen("resource.txt", "a+");

fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);


?>

 </body>
</html>