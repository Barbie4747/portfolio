  <?php
include('./components.php');
include('./data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Barbare Tsikhelashvili - Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">

</head>
<body>

  <?php
    setheader();
    setaboutme($About_me);
    setprojects();
    setresume();
    setcontact();
  ?>

</body>
</html>