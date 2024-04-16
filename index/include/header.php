<!--  This is the Website Header  -->
<header class="global-header">
    <nav class="navbar">

        <!-- Session ID start -->
        <?php 
            if(!isset($_SESSION)) {
            session_start();
            } 
        ?> 

        <!-- Permanent Navbar -->
        <a href="../index/index.php"><img src="../images/logo.png" class="logo" alt="logo"></a>
        <ul class="leftside-navbar">
            <li><a href="../index/index.php">Home</a></li>
            <li><a href="../index/about-me.php">About</a></li>
            <li><a href="../index/shop.php">Shop</a></li>
            <li><a href="../index/contact.php">Contact</a></li>
        </ul>

        <!-- Verify if logged in (session var [email] isset) -->
        <?php
            if (!isset($_SESSION['id'])){
                include('../index/include/page_login.php');
            } else {
                include('../index/include/account.php');
            }
        ?>
    </nav>
</header>