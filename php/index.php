<!DOCTYPE html>
<html lang="en">
<head>
<title>The Calculator</title>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<h1>The Goal</h1>
<p>Through my studies of coding languages i have come to realize that just about every coding langauage no matter how different the syntax can handle user input and variables and produce and output. With this being said i wanna make an interactive calculator for each coding language and then advance on each one and see which language can produce the best calculator!</p>

<main>
<h2>PHP Calculator</h2>
<form method="post">
<input type="number" name="value1" value="value1" class="number-box">
<br>
<select name="operator">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>
<br>
<input type ="number" name="value2" value="value2" class="number-box">
<br>
<input type ="submit" name="submit" class="submit-button">
</form>
<?include("calculator.php")?>




</main>
</header>




</body>
</html>
