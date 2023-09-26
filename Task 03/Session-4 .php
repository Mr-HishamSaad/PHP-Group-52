<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 4 -||- Array</title>
</head>
<body>

<?php

/* 
Ex1 - try to imagine this array and see the result using print_r  ||  var_dump
try to echo Kansas &  Nova Scotia
*/

$countryList = [
    'CA'        => 'Canada',
    'US'        => 'United States'];

$stateList['CA'] = [
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon'];

$stateList['US'] = [
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming'
    ];

   echo "<b>print_r()</b>";
   echo "<br>";
   echo "<br>";
   print_r($countryList);  # 
   echo "<br>";
   echo "------------------------------------------------------------------------------------------";
   echo "<br>";
   echo "<b>var_dump()</b>";
   echo "<br>";
   echo "<br>";
   var_dump($countryList); # 
   echo "<br>";
   echo "------------------------------------------------------------------------------------------";
   echo "<br>";
   var_dump($stateList); # 
   echo "<br>";
   echo "------------------------------------------------------------------------------------------";
   echo "<br>";
   print_r($stateList);
   echo "<br>";
   echo "-------------------------------------------------------------------------------------------";
   echo "<br>";

   // echo Kansas &  Nova Scotia 

   // Access echo Kansas &  Nova Scotia in Array and store the value in Variables then output
   echo "<b>echo Array Elements</b>";
   echo "<br>";
   echo "<br>";
   $state_name = ($stateList['US']['KS']);
   $city_name  = ($stateList['CA']['AB']);
   echo "The State of <u>$state_name</u> is in the <mark>United State</mark> while <u>$city_name</u> is in <mark>Canada</mark>";
   echo "<br>";

   echo "-------------------------------------------------------------------------------------------";
   echo "<br>";

   /* 
Ex2 -  try using a builtin function to get max int number system can hold and assign it to $max_int 
      try to explain what happen in the following array

        $arr = [];
        $arr[1] = 'last name'; 

        $arr[ $max_int ] = 'this is max of array '; 

        $arr[0] = 'first name'; 

        $arr[]  = 'this may be at the last of array'; 
*/

$max_int = PHP_INT_MAX;

echo "The Maximum Number is ---> ".$max_int;

$arr = []; // This is Intilization of a Array

$arr[1] = 'last name'; // Add Second Element in Array

$arr[ $max_int ] = 'this is max of array '; // Adding The $max_int as the End of a Array

$arr[0] = 'first name'; // Add a value to the first Element of the Array

//$arr[]  = 'this may be at the last of array'; 
/*
 Error Because we reach the end of an Array because we add $max_int as the last Element
 
*/

echo "<br>";
print_r($arr);

echo "<br>";
echo "-------------------------------------------------------------------------------------------";
echo "<br>";


/*
Ex3  search and use the following array methods ( count , in_array , array_key_exists , array_keys , array_values , array_sum , end , array_rand , array_merge , array_replace , array_shift , array_unshift , array_push , array_pop , array_slice , array_splice )
 make 1 example on each of the following array methods
*/

# Count Method
echo count($arr); # The Output is 3
echo "<br>";


# in_array Method
$names = ["Hisham","Mohamed","Hashim"]; # Creating New Array
echo in_array("Mohamed", $names); # The output is 1 Because its return a Boolean and i's true
echo "<br>";



# array_key_exists Method
echo array_key_exists(1 , $arr);  # The output is True and it will be shown as 1
echo "<br>";



# array_keys Method
$associative_array = ["name"=>"Hisham","age"=>"41","city"=>"Obour City"]; # Creating Associative Array
print_r (array_keys($associative_array)); # The Output is The Array Keys
echo "<br>";


# array_values Method
print_r(array_values($associative_array)); # The Output is The Array Values
echo "<br>";



# array_sum Method
print_r(array_sum($associative_array)); 
# The output is 41 Because the String is FALSY and it will as ZERO so 0+41+0 = 41
echo "<br>";


// Using array_sum With Number Index Array
$numbers = [5,5,5,15]; # The Output is 30
echo array_sum($numbers);
echo "<br>";



# end Method
echo end($associative_array); # The Output will be The last Element of an Array
echo "<br>";



# array_rand Method
$array_rand = [10,20,30,40,50];
print_r(array_rand($array_rand)); // it will return RANDOM key each time it ran
echo "<br>";




# array_merge Method
$arr1 = [10,20,30];
$arr2 = [40,50,60];
print_r(array_merge($arr1, $arr2)); // it will merge the 2 array together

echo "<br>";

# We can store the merge arrays into new single array for future use
$merged_array = [];
//var_dump($merged_array);
$merged_array = array_merge($arr1,$arr2);
print_r($merged_array);

echo "<br>";



# array_replace Method
$arr_replace = [1,2,3];
// Using array replace method will replace values of the array to other array's values
print_r(array_replace($arr_replace, $arr1));

echo "<br>";


# array_shift Method
$array_shift = ["I","Love","PHP"];
# Will Remove 1st Element of the array
array_shift($array_shift);

echo "<br>";

# print the array elements after we use array_shift method

print_r($array_shift);

echo "<br>";



# array_unshift Method
print_r(array_unshift($array_shift, "I'm")); // adding element in the first index of an array

echo "<br>";

print_r($array_shift);

echo "<br>";



# array_push Method
$arr_push = [10,20,30];
array_push($arr_push, "40"); // Adding element in the last Index

echo "<br>";

print_r($arr_push);




# array_pop Method
$arr_pop = [10,20,30];
array_pop($arr_pop); // Removing element in the last Index

echo "<br>";

print_r($arr_pop);


# array_slice Method
$arr_slice = [1,2,3,4,5];
print_r(array_slice($arr_slice, 2)); // Means start array from the 3rd element ad return the rest of the array

echo "<br>";

// We can Control the start and the end of the array by giving array_slice 2 arrguments
print_r(array_slice($arr_slice, 1, 3)); // It will start from 2nd elemet till the 4th

echo "<br>";



# array_splice Method
$arr_splice = ["Hate", "PHP"]; // it will remove selected rage
array_splice($arr_splice, 0, 1);
print_r($arr_splice);


?>
    
</body>
</html>