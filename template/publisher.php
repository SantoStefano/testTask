<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Издатель</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1><?php echo $result[0]['publisher'] ?></h1>
    
    <?php require_once "_table.php" ?>

    <div class="link"><a href="/">Назад на главную</a></div>
</body>
</html>