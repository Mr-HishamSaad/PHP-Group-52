<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasko1 - Different Between echo and print</title>
</head>
<body>
   
   <?
    
    #Variables 
    
    $fname = 'Hisham';
    $lname = 'Mohamed';
    
    echo "My First name is $fname and my last name is $lname <br>";
    
    #Concatenation
    
    $full_name = $fname." ".$lname;
    echo $full_name."<br>";
    
    
    # Different Between ech and print
    /*
        1- echo is faster than print
        2- print can return a value of 1 , While echo Not - So we can use print in expressions
        3- echo can take multiple parameters wihle print can't
    */
    
    echo "echo ", "can ", "take ", "multiple ", "parameters";
    echo "<br>";
    //print "print ", "can't ", "take ", "multiple ", "parameters";
    
    ?>
    
</body>
</html>