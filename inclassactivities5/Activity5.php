<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="Activity5-preview.php" method="post">
    <h2>Registration Form</h2>
    <div class="fields">
        <label>Name:</label>
        <input type="text" name="name">
    </div>
    <div class="fields">
        <label>Username:</label>
        <input type="text" name="username">
    </div>
    <div class="fields">
        <label>Password:</label>
        <input type="password" name="password">
    </div>
    <div class="fields">
        <label>Address: </label>
        <input type="text" name="address">
    </div>
    <div class="fields">
        <label>Country:</label>
        <select name="country" id="country">
            <option value="tr">Turkey</option>
            <option value="en">England</option>
            <option value="usa">United States</option>
            <option value="ger">Germany</option>
        </select>
    </div>
    <div class="fields">
        <label>ZIP Code:</label>
        <input type="number" name="zipcode">
    </div>
    <div class="fields">
        <label>Sex:</label>
        <input type="radio" name="sex[]" value="male" checked> Male
        <input type="radio" name="sex[]" value="female"> Female
    </div>
    <div class="fields">
        <label>Language: </label>
        <input type="checkbox" name="lang[]" value="English" checked> English
        <input type="checkbox" name="lang[]" value="French"> French
        <input type="checkbox" name="lang[]" value="Germany"> Germany
    </div>
    <div class="fields">
        <label>About: </label>
        <textarea name="about" id="about" cols="30" rows="5"></textarea>
    </div>

    <button type="submit" name="submit">Submit</button>


</form>

</body>
</html>
