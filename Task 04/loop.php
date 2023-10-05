<? include"../include/data.php";?>
<?

# Make the variable global so we can use it
global $names;

# print_r the array
print_r($names);

echo "<br>";
echo "<br>";

// loop
foreach($names as $name){
    echo $name."<br>";
}



?>