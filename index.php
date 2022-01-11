<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Homepage</title>
    </head>

    <body>
        <header class="global-header">
            <nav class="navbar">
                <a href=""><img src="images/logo.png" class="logo" alt="logo"></a>
                <ul class="leftside-navbar">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <input id="nav-toggle" type="checkbox">
                <ul class="rightside-navbar">
                    <li><a href="">Login</a></li>
                    <li><a href="">Register</a></li>
                </ul>
                <label for="nav-toggle" class="burger-nav">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>
        </header>
        <main>
            <section class="intro">
                <header>
                    <h2 class="section-title">WHAT A BEAUTIFUL WEBSITE</h2>
                </header>
                <p>This is my website project for the incoming exam at SAW course. I had no idea about what kind of topic should I use for my website, so I decided to just make this demonstrative one, with no real purpose beside the exam. Beside the mandatory features for everyone that a website should have, there were some at choice and we should use atleast one of them, I am going with the Cart feature.</p>
            </section>
            <section class="about-me">
                <header>
                    <h2 class="section-title">WHO AM I?</h2>
                </header>
                <p>My name is Morozan Constantin, a 21 years old student. I am studying Computer Engineering, in my third year at the moment. First time I arrived in Italy, from Republic of Moldova, 3 years ago to begin my studies here, that I really enjoy doing till now.</p>
                <p>This was my short presentation, to see more things I have done make yourself comfortable and <span>Register Now</span></p>
            </section>

            <section class="products">
            <header>
                <h2 class="section-title">SOME OF MY PRODUCTS</h2>
            </header>
                <div class="products-row">               
                    <div class="product">
                        <img src="images/useless-book.jpg" alt="useless book" class="prod-img">
                        <h3>The Useless Book</h3>
                        <p>Here is enough useless information for everyone. In "The Book of Totally Useless Information", Don Voorhees has compiled over two hundred explanations for the not-so-important questions in life.Chockful of fascinating trivial facts and anecdotes, "The Book of Totally Useless Information" will entertain readers of all ages. Illustrated throughout, this useful book will satisfy the curiosity of everyone who wonders why.</p>
                        <p><span>Personal Opinion:</span> The Useless Book is one of my favorite product on this page. It does really helped me a lot when I found out all the useless information that it contains.</p>
                    </div>
                    <div class="product">
                        <img src="images/not-so-useless-book.jpg" alt="not so useless book" class="prod-img">
                        <h3>The not so Useless Book</h3>
                        <p>The Not So Useless Facts book is bursting with 208 pages of all sorts of amazing, arcane, interesting, and shocking bits of information about everything under the sun—and then some. Put together by an expert team of fact finders and pop culture specialists, this collection includes fascinating facts that could be useful to students, collectors, tourists, and enthusiasts alike.</p>
                        <p><span>Personal Opinion:</span> This is my second most favorite book, that I really enjoyed reading. The only problem that I found in this book is that there are some useful facts.</p>
                    </div>
                    <div class="product">
                        <img src="images/useful-book.jpg" alt="" class="prod-img">
                        <h3>The Useful Book</h3>
                        <p>This book contains the most essential information, charts, conversion tables, and formulas for everyday use, travel, or for times when you find yourself without internet access. It will have you prepared for various life situations.</p>
                        <p><span>Persoanl Opinion:</span> The Most Useful Book is not even near being one of my favorite books. Here you can find some useful information, that I really didn't enjoy reading.</p>
                    </div>
                </div>
                <div class="button-group">
                    <a href="" class="btn seemore-btn">See More Products</a>
                </div>
            </section>
        </main>
        <footer>
            <ul class="footer-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Shop</a></li>
                <li><a href="">Mail Me</a></li>
            </ul>
            <ul class="footer-contact"> 
                <li><a href=""><img class="social-img" src="images/instagram.png" alt="instagram"></a></li>
                <li><a href=""><img class="social-img" src="images/facebook.png" alt="facebook"></a></li>
                <li><a href=""><img class="social-img" src="images/aulaweb.png" alt="aulaweb"></a></li>
            </ul>                          
        </footer>
    </body>
</html>