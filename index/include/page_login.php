<!-- If not loged in -->
<input id="nav-toggle" type="checkbox">
<ul class="rightside-navbar">
    <li><button class="login-btn" onclick="openLogin()"><a>Login</a></button></li>
    <li><a href="../index/register.php">Register</a></li>
</ul>
<label for="nav-toggle" class="burger-nav">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</label>

<!-- Login Popup -->
<div class="login-popup" id="loginForm">
    <form action="../php/login.php" class="login-box" method="post">
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" placeholder="Password" required>
        <button type="submit" name="login" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeLogin()">Close</button>
    </form>
</div>

<!-- Login Popup Script -->
<script>
    function openLogin() {
        if(document.getElementById("loginForm").style.display == "block"){
            document.getElementById("loginForm").style.display = "none";
        } else {
            document.getElementById("loginForm").style.display = "block";
        }
    }

    function closeLogin() {
        document.getElementById("loginForm").style.display = "none";
    }
</script>