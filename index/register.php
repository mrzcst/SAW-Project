<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>Registration</title>
    </head>
    <body>

        <?php 
            // Check if user is logged in, if so restrict access to [Registration] page
            session_start();
            if(isset($_SESSION['id'])){
                header('location: ../index/index.php');
            }
        ?>

        <!-- Header Include -->
        <?php include('../index/include/header.php') ?>

        <!-- Registration Form -->
        <main>
            <section class="reg-welcome">
                <h2 class="section-title">I am glad that you decided to register to my modest website!</h2>
            </section>
            <section class="register-section">
                <form action="../php/registration.php" class="register-form" method="post">
                    <label for="firstname">First Name: </label>
                    <input type="text" id="firstname" name="firstname" required>
                    <label for="lastname">Last name: </label>
                    <input type="text" id="lastname" name="lastname" required>
                    <label for="email">E-Mail: </label>
                    <input type="email" id="email" name="email" required>
                    <label for="pass">Password: </label>
                    <input type="password" id="pass" name="pass" required>
                    <label for="confirm">Confrm Password: </label>
                    <input type="password" id="confirm" name="confirm" required>
                    <input type="submit" name="submit" class="btn reg-btn" value="Register">
                </form>
            </section>
        </main>

        <!-- Footer Include -->
        <?php include('../index/include/footer.php') ?>
    </body>
</html>
