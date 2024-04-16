<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mail Sender</title>
</head>
<body>

    <!-- Check for admins, if no go to index.php (To be edited)-->
    <?php
        session_start();
        $id = $_SESSION["id"];
        if (!($id === '100017')) {
            header("location: ../index/index.php");
        }
    ?>

    <!-- Header Include -->
    <?php include('../index/include/header.php');?>

    <!-- Main -->
    <main>
        <h2 class="section-title">SEND MAIL TO SUBSCRIBERS</h2>
        <form action="../php/send-mail.php" class="register-form" method="post">
            <label for="subject">*Subject</label>
            <input type="text" name="subject">
            <label for="content">*Content</label>
            <input type="text" name="content">
            <label for="alt-content">Content (non-HTML mail clients)</label>
            <input type="text" name="alt-content">
            <input type="submit" name="submit" class="btn reg-btn" value="Send Mail">
        </form>
    </main>

    <!-- Footer Include -->
    <?php include('../index/include/footer.php') ?>

</body>
</html>