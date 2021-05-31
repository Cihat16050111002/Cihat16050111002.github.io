<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $username = $_POST['username'];

    $password = $_POST['password'];

    $address = $_POST['address'];

    $country = $_POST['country'];

    $zipcode = $_POST['zipcode'];

    $sex = $_POST['sex'];

    $language = $_POST['lang'];

    $about = $_POST['about'];


    if (empty($name)){
        $name = "Not Provided";
    }

    if (empty($username)){
        $username = "Not Provided";
    }

    if (empty($password)){
        $password = "Not Provided";
    }

    if (empty($address)){
        $address = "Not Provided";
    }

    if (empty($country)){
        $country = "Not Provided";
    }

    if (empty($zipcode)){
        $zipcode = "Not Provided";
    }

    if (empty($sex)){
        $sex = "Not Provided";
    }

    if (empty($language)){
        $language = "Not Provided";
    }

    if (empty($about)){
        $about = "Not Provided";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity5 Preview</title>
</head>
<body>
    <h1>Preview</h1>
    <p>name: <?php echo $name; ?></p>
    <p>username: <?php echo $username; ?></p>
    <p>password: <?php echo $password; ?></p>
    <p>address: <?php echo $address; ?></p>
    <p>country: <?php echo $country; ?></p>
    <p>zipcode: <?php echo $zipcode; ?></p>

    <p>sex: <?php
        foreach ($sex as $value) {
            echo $value;
        }
        ?></p>

    <p>language: <?php
        foreach ($language as $lang) {
            echo $lang, " ";
        }
        ?></p>

    <p>about: <?php echo $about; ?></p>

</body>
</html>
