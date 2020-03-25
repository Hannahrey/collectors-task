<?php
//linking to DB
require './getDB_function.php';


require './getCocktails_function.php';


require './outputCocktails_function.php';
?>

<html lang="en-GB">
	<head>
		<title>Cocktails</title>
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards|Sen&display=swap" rel="stylesheet">
	</head>

	<body>
		<!-- top banner -->
		<header>
			<div class="container_top">
				<h1>Cocktails</h1>
			</div>
		</header>

		<div class="container_main">
			<div class="container_link">
                <!-- Link goes to the "add cocktail" page -->
			    <a href="./add_item.php">Add new cocktail</a>
			</div>

			<div class="cocktails_box">

                <?php
				// to get the cocktails data from the db
				$result = getCocktails();

				//echoing results of db to website
				$cocktail_details = outputCocktails($result);
				echo outputCocktails($result);


                ?>

            </div>

        </div>
    </body>
</html>
