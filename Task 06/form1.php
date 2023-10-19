<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>
<body>

    <form action="form1.php" method="post">
        <label for="username">Username</label>:&emsp;
            <input type="text" name="username" id="username">
            <br>
            <br>
        <label for="password">Password</label>:&nbsp;&emsp;
            <input type="password" name="password" id="password">
            <br>
            <br>
        <label for="city">City Of<br>Employment</label>:
            <input type="text" name="city" id="city">    
            <br>
            <br>
        <label for="webserver">Web Server</label>:&ensp;
            <select name="options" id="options">
                <option value="choose a server">--Choose a server--</option>
                <option value="Linux">Linux</option>
                <option value="Windows">Windows</option>
            </select>   
            <br>
            <br>
        <label for="role">Please specify<br>your role</label>  
            &emsp;&emsp; &nbsp;<input type="radio" name="role" value="admin">Admin
            <br>
            &emsp; &emsp; &emsp; &emsp; &ensp; &nbsp; &nbsp;<input type="radio" name="role" value="Engineer">Engineer
            <br>
            &emsp; &emsp; &emsp; &emsp; &ensp; &nbsp; &nbsp;<input type="radio" name="role" value="Manager">Manager
            <br>
            &emsp; &emsp; &emsp; &emsp; &ensp; &nbsp; &nbsp;<input type="radio" name="role" value="Guest">Guest

            <br>
            <br>
            <label for="single">Single Sign-on<br>to The following!</label>:
                <input type="checkbox" name="single[]" value="Mail">Mail
                <br>
                &emsp; &emsp; &emsp; &emsp; &ensp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="checkbox" name="single[]" value="Payroll">Payroll
                <br>
                &emsp; &emsp; &emsp; &emsp; &ensp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="checkbox" name="single[]" value="Self-service">Self-service
                <br>
                <br>

        <button type="submit" name="login">Login</button>        
        <button type="submit">Reset</button>        
    </form>

    <?
        if(isset($_POST['login'])){
            // echo "The Button is clicked";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $city     = $_POST['city'];
            $options  = $_POST['options'];
            $role     = $_POST['role'];
            $single   = $_POST['single']; # The Output is an Array
            

            //echo $options;
            if(empty($username) || empty($password) || empty($city) || empty($role) || empty($_POST['single'])){
                echo "All Fields Are Required";
            }elseif($options == "choose a server" ){
                echo "Please Choose a Server";
                // Because we ave a Default Value on the options which means it's Not EMPTY at all
            }
            else {
                echo $username."<br>";
                echo $password."<br>";
                echo $city."<br>";
                echo $options."<br>";
                echo $role."<br>";
                // Incase The Inputs was multiple checkboxs
                foreach($single as $user){
                    echo $user."<br>";
                }
            }


        }
    ?>
    
</body>
</html>