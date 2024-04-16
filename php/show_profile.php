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
        
        //Get Info
        include('../php/get-info.php');
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
            <div>
              <h4>Full Name</h4>
            </div>
            <div>
              <?php echo $user_firstn." ".$user_lastn ?>
            </div>
            <hr>
            <div>
              <h4>Email</h4>
            </div>
            <div>
              <?php echo $user_mail ?>
            </div>
            <hr>
            <div>
              <a class="btn" href="../index/update_profile_page.php">Edit</a>
            </div>
            <div>
              <a class="btn" href="../index/update-pwd.php">Change Password</a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer Include -->
    <?php include('../index/include/footer.php') ?>
  </body>
</html>
