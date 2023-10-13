<?

/*
1. Write a function to calculate the factorial of a number, 
The function accepts the number as an argument.
*/

function myNumbers($num1 , $num2):int|float
{
    return $num1 + $num2;
}

echo "The Total is ".myNumbers(num2:10, num1:5.7);

echo "<br>";

/*
 2. Write a function to reverse any inputs you give ( if you give it ahmed it return demha )
 */

 function reverse_function($name) :string
 {
    return strrev($name);
 }

 echo "The Revese Of The Name IS ".reverse_function("Hisham");

 echo "<br>";

 /*
 3. search on recursive function and make an example
 */


 /*
 4. Write a PHP script to get the first word of a sentence
 */

 $sentence = "Welcome To PHP";
 echo $sentence[0];

 echo "<br>";

 /*
 5. Write a PHP script to generate simple random password from a given string 
 (password will be from => '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz')
 */

 $pass = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
 function pass_random()
 {
    global $pass;
    $rand_pass = null;
    $length = strlen($pass);
    $randomString = "";
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $pass[random_int(0, $length - 1)];
    }
    return $randomString;
 }

 echo pass_random();

 echo "<br>";

 /*
 6. Write a PHP script that displays 1 2 3 4 5 6 7 8 9 10 numbers on one line
 */

 function disply_numbers(...$nums)
 {
    foreach($nums as $num){
        echo $num;
    }
 }

 disply_numbers(1,2,3,4,5,6,7,8,9,10);

?>