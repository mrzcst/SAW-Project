<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Search</title>
    </head>
    <body>
        <!-- Header Include -->
        <?php include('../index/include/header.php');?>

        <main>
            <h2 class="section-title">COSMO Searching</h2>
            <section class="newsletter">
                <form class="news-form" action="" method="get">
                    <input type="text" name="key" placeholder="Search..." autocomplete="off" required>
                    <button class="btn sub-btn" type="submit" name=""><i class="fa fa-search"></i></button>
                </form>
            </section>
            
            <!-- Show results -->
            <section class= "search_results">
                    <!-- Include the PHP script -->
                    <?php include("../php/search_engine.php") ?>
            </section>
        </main>

        <!-- Footer Include -->
        <?php include('../index/include/footer.php') ?>
    </body>
</html>