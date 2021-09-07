

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>VISITORS COUNT</title>
  </head>
  <body>

<?php 

$file = "counter.txt";
$count = 0;
$count = strval(file_get_contents($file));
$count = (int)$count; 
file_put_contents($file, $count+1);

    
echo"<h1 style='color: blue;'>Visits </h1> <hr><h2 style='color: green;'>".$count."</h2><hr>";

echo "<p style='text-align: center;'>KALLURU SUBBI REDDY-1CR18CS083</p>";


?>
  </body>

  </html>