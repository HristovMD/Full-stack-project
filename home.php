<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:index.html');
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>

    <body>
        <div class="container">
            <div class="col-md-12">
                <a href="logout.php" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">LOG OUT</a>
                <div class="moreinfo">
                    <h6>
			Beer is the third most common drink in the world after water and tea. 
			The law for beer purity
			(Reinheitsgebot) is the oldest law for food and beverages dating in 1516 year. 
Beer is a hobby and way of life, culture and way of communication from centuries.
Look, shake, smell , taste and create new memory.
<br>
Enjoy!
		</h6>
                </div>
                <ul class="info">
                    <a href="img/beer-types.jpg">
                        <li>Beer types</li>
                    </a>
                    <a href="img/glasses.jpg">
                        <li>Glass types</li>
                    </a>
                    <a href="img/colors.jpg">
                        <li>Color and bitterness</li>
                    </a>
                </ul>
                <a href="rate_template.php" class="rate btn-warning btn-lg active" role="button" aria-pressed="true">RATE</a>
            </div>
        </div>

        <p class="float-right">Welcome,
            <?php echo $_SESSION['username']; ?>
        </p>

    </body>

    </html>