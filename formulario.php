<?php

/**
 * Name: Simple PHP Login & Registration Script
 * Tutorial: https://tutorialsclass.com/code/simple-php-login-registration-script
 */
?>
<html>

<head>
    <title>Formulario</title>
</head>

<body>
    <br>
    <form action="register.php"  method="post" name="form1">
        <table width="35%">
            <tr>
                <td>Texto</td>
                <td><input type="text" name="texto" required></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><input type="text" name="color" required></td>
            </tr>
            <td>Icono</td>
            <td><input type="text" name="icono" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
        </table>

<?php
        
        // Check If form submitted, insert user data into database.
        if (isset($_POST['enviar'])) {
            $texto = $_POST['texto'];
            $color = $_POST['color'];
            $icono = $_POST['icono'];

            
            // If email already exists, throw error
            $email_result = mysqli_query($mysqli, "select 'email' from users where email='$email' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$email'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($mysqli, "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
            }
        }

        ?>
</form>
</body>

</html>