<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 3</title>
</head>
<body>

<?

    # Constant i PHP
    /* 1- define(string name, string value , case_insenstive) */

    # Constans are Global Scope
    define("name", "Hisham");

    function sayHi(){

        echo "Hi ".name;
    }

    sayHi();

    # Line Break
    echo "<br>";

    # Variable is Local Scope
    $full_name = "Hisham Saad";

    # Function is Block Scope
    function greeting(){
        
        # We use global key word to make the variable GLOBAL!
        global $full_name;
        echo "Hello $full_name";

    }

    # Invoking Function
    greeting();

    # Line Break
    echo "<br>";

    /**
     * Getting Data Type
     * Truthy & Falsey 
     * If Statement
     */


    # gettype()
    echo gettype($full_name);
    
    # Line Break
    echo "<br>";

    # var_dump() || Constant holding String Value
    var_dump(name);

    # Line Break
    echo "<br>";

    # Truthy and Falsey
    $is_admin = true;
    $sallary  = null;

    if($is_admin == true){
        echo "Yes your're an Admin!";
    }else {
        echo "You're Not an Admin!";
    }

    # Line Break
    echo "<br>";

    /* The OUTPUT is Falsey Because NULL is Falsey Value */
    if($sallary){
        echo "Truthy";
    }else {
        echo "Falsey";
    }



?>
    
</body>
</html>