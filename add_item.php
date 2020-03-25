<html lang="en-GB">
<head>
	<title>Cocktails</title>
	<link rel="stylesheet" type="text/css" href="normalize.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link href="https://fonts.googleapis.com/css?family=Mrs+Sheppards|Sen&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<div class="container_top">
            <h1>Add another cocktail</h1>
		</div>
    </header>

    <div class="form_container">
		<form method="post">
			<label for "name">Cocktail Name: </label>
			<input type="text" id="name" name="name" required/><br>
			<label for "alcohol_base">Alcohol Base: </label>
			<input type="text" id="alcohol_base" name="alcohol_base" required/><br>
			<label for "taste_profile">Taste Profile: </label>
			<select id="taste_profile" name="taste_profile" size="1">
				<option value="bitter">Bitter</option>
				<option value="sweet">Sweet</option>
				<option value="fruity">Fruity</option>
				<option value="refreshing">Refreshing</option>
				<option value="sour">Sour</option>
			</select><br>
			<label for "ingredients">Ingredients: </label>
			<textarea id="ingredients" name="ingredients" rows="5" cols="20"></textarea><br>
			<label for "method">Method: </label>
			<textarea id="method" name="method" rows="8" cols="20"></textarea><br>
			<label for "strength">Strength of drink: </label>
			<select id="strength" name="strength" size="1">
				<option value="bitter">Strong</option>
				<option value="sweet">Medium</option>
				<option value="fruity">Weak</option>
				<option value="refreshing">Non-Alcoholic</option>
			</select><br>
			


		</form>
    </div>

    <div class="container_link">
		<a href="./index.php">Back</a>
    </div>
        
</body>
</html>


<!-- <form method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required/><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required/><br>
    <input type="submit"/>
    </form> -->