<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Review</title>
</head>
<body>

    <form action="index.php" method = "get">
        <lable> name:</label><br/>
        <input type="text" name = "name">
        <lable> age:</label><br/>
        <input type="text" name = "age">
        <input type="submit"value="login">
    </form>
    <form action="index.php" method = "post">
        <lable> quantity:</label><br/>
        <input type="text" name = "quantity">
        <input type="submit"value="total">
    </form>
    
</body>
</html>

<?php

echo "{$_GET["name"]} <br>";
echo "{$_GET["age"]} <br>";


$name ="nina";
echo "hello {$name}"; 
$email = "@email";
echo "{$email}";


$item ="pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = $quantity * $price;
echo "you have ordered {$quantity}*{$item}/s";
echo "The price is \${$price}";


$age = 30;
if($age >= 18){
    echo "you may enter this site";
}elseif($age <= 0){
    echo "That was't a valid age";
}else{
    echo "you much be 18+ to enter";
}


$foods = array("apple","orange");
echo $foods[0] ."<br>";
foreach($foods as $food){
    echo $food ."<br>";
}

array_push($food,"pineaple");

//associative array = an array made of key and value
$capitals = array("USA"=>"washington D.C",
                "Japan"=>"toyko");
echo $capitals["USA"];
foreach($capitals as $key=>$value){
    echo "{$key}{$value}<br>";
}
$keys = array_keys($capitals);
$values = array_values($capitals);

setcookie("fav_food","pizza",time()+(99));

if(isset($_COOKIE["fav_foo"])){
 echo "buy some {$_COOKIE["fav_food"]}!!!";
}else{
    echo "i dnot know your favorite food";
}

//session : store information on a user to be used across multiple pages
//a user is assigned a session-id ex login crdentials

    
    ?>


