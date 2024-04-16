<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <title>Profile</title>
  </head>

  <body>
    <?php
        //Header Section
        include('../index/include/header.php');

        //Check Session
        if(!isset($_SESSION['id'])) {
          header("location: ../index/index.php");
        }
    ?>

    <!-- Main Section -->
    <main>
      <div class="main-body">
        <div class="card">
          <div class="card-body">
            <h4>Your Photo</h4>
            <p>Your</p>
            <p>Description</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">    
            <form action="../php/update-pwd-verification.php" class="info-edit-box" method="post">
                <label for="pass">Old Password:</label>
                <input type="password" name="pass" required>
                <label for="new_pass">New Password</label>
                <input type="password" name="new-pass" required>
                <button type="submit" name="submit" class="btn edit-btn">Save Password</button>
            </form>
            <a class="btn " href="../php/show_profile.php">Back</a>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer Include -->
    <?php include('../index/include/footer.php') ?>
  </body>
</html>