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
    
    
    <!-- Création d'un container -->

    
    <?php include('header.php')?>

    <div id="main">

        <div class="form-group">
            <label for="titre">Diapo de départ</label>
            <input type="text" name="first" id="first" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="legende">Diapo d'arrivée</label>
            <input type="text" name="last" id="last" class="form-control" required>
        </div>

        <input type="button" id='btn' class="btn btn-primary" value="Submit">
        
        <div class="container">

            <div id="volcano" class="carousel slide" data-ride="carousel">

                

                <div class="carousel-inner" role="listbox">
                    

                    <div id="images">

                    </div>

                </div>

            
                <!-- On créé les bouton next et prévious -->
                <a href="#volcano" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#volcano" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>

            </div>
        </div>
        
    </div>
    

    <aside>

    </aside>

    
    <script src="script.js"></script>
    
    <?php include('footer.php')?>

</body>

</html>
