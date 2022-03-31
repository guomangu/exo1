<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title></title> 
</head>

<body>
    <?php include('header.php') ?>

    <div class="main">

    <form action="add.php" method="POST" style="margin:50px" enctype='multipart/form-data'>
    <div class="form-group">
        <label for="titre">Diapo de départ</label>
        <input type="text" name="first" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="legende">Diapo d'arrivée</label>
        <input type="text" name="last" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    <?php include('footer.php') ?>

    <script src="script.js"></script>

</body>