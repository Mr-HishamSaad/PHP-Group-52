<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
</head>
<body>

       
    <form action="form2.php" method="post">
            <fieldset>
                <legend>Personal Details</legend>
                Salutation
                <br>
              <select name="" id="">
                    <option value="">--None--</option>
                </select>
                <br>
                <br>
                <label for="firstname">First name:</label>
                <input type="text" name="firstname" id="">
                <br>
                <br>
                <label for="lastname">Last name:</label>
                <input type="text" name="lastname">
                <br>
                <br>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <br>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
                <br>
                <br>
                <label for="date">Date of Birth:</label>
                <input type="date" name="date">
                <br>
                <br>
                <label for="address">Address</label>:
                <br>
                <textarea name="textarea" cols="30" rows="10"></textarea>
                <br>
                <br>
                <button type="submit" name="submit">Submit</button>
            </fieldset>
           
    </form>

    <?
        if(isset($_POST['submit'])){
            // echo "The Button Is Clicked";
            // echo "<br>";
           $firstname = $_POST['firstname'];
           $lastname  = $_POST['lastname'];
           $gender    = $_POST['gender'];
           $email     = $_POST['email'];
           $date      = $_POST['date'];
           $textarea  = $_POST['textarea'];
           
           if(empty($firstname)||empty($lastname)||empty($gender)||empty($email)||empty($date)||empty($textarea)){
                echo "All Fields are Required!";
           }else{
            echo $firstname."<br>";
            echo $lastname."<br>";
            echo $gender."<br>";
            echo $email."<br>";
            echo $date."<br>";
            echo $textarea;
           }
           
            
        }
    
    ?>


</body>
</html>