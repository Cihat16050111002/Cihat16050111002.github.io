<?php

$from_currency = "usd";
$currencyto = "usd";

$from_value = 0.0;
$currency_value = 0.0;

$options = array("usd" => "USD Dollar", "cad" => "Canadian Dollar", "eur" => "Euro");

$currency_array = array("usdtocad" => 1.25, "cadtousd" => 0.79,
    "usdtoeur" => 0.83, "eurtousd" => 1,20,
    "cadtoeur" => 0.66, "eurtocad" => 1.52);

if (isset($_POST['submit'])){

    $from_value = $_POST['from_value'];

    $from_currency = $_POST['currencyfrom'];

    $currencyto = $_POST['currencyto'];

    $to_value = $_POST['to'];

    if ($from_currency == "usd" && $currencyto == "cad"){
        $currency_value = $from_value * $currency_array["usdtocad"];
    }

    elseif ($from_currency == "usd" && $currencyto == "eur"){
        $currency_value = $from_value * $currency_array["usdtoeur"];
    }

    elseif ($from_currency == "cad" && $currencyto == "usd"){
        $currency_value = $from_value * $currency_array["cadtousd"];
    }

    elseif ($from_currency == "cad" && $currencyto == "eur"){
        $currency_value = $from_value * $currency_array["cadtoeur"];
    }

    elseif ($from_currency == "eur" && $currencyto == "usd"){
        $currency_value = $from_value * $currency_array["eurtousd"];
    }

    elseif ($from_currency == "eur" && $currencyto == "cad"){
        $currency_value = $from_value * $currency_array["eurtocad"];
    }

    # If client wants to convert same currency type, show the same currency value
    else{
        $currency_value = $from_value;
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
    <title>Currency Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form action="" method="post">
    <h2>Currency Calculator</h2>

    <div>
        <label>From:</label>
        <input type="number" name="from_value" value="<?php echo $from_value; ?>">

        <label>Currency:</label>
        <select name="currencyfrom" id="currencyfrom">
            <?php echo "<option value='$from_currency' selected>$options[$from_currency]</option>";

            foreach ($options as $key => $value){
                if($key != $from_currency){
                    echo '<option value="'.$key.'">'.$value.'</option>';
                }
            }
            ?>

        </select>
    </div>
    <div>
        <label class="label_align">To:</label>
        <input type="number" name="to" value="<?php echo $currency_value ?>" />
        <label>Currency:</label>
        <select name="currencyto" id="currencyto">
            <?php echo "<option value='$currencyto' selected>$options[$currencyto]</option>";

            foreach ($options as $key => $value){
                if($key != $currencyto){
                    echo '<option value="'.$key.'">'.$value.'</option>';
                }
            }

            ?>
        </select>
    </div>

    <button type="submit" name="submit">Convert</button>
</form>


</body>
</html>
