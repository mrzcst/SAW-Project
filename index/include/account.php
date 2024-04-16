<!-- Navbar when logged in -->
<input id="nav-toggle" type="checkbox">
<ul class="rightside-navbar">
    <!-- Action needed -->
    <button class="myaccount-btn" onclick="MyAccount()"><a>My Account</a></button>
</ul>
<label for="nav-toggle" class="burger-nav">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</label>

<!-- Account Popup -->
<div class="account-popup" id="accountForm">
    <ul class="account-box">
        <li><button class="account-btn"><a href="../php/show_profile.php">Profile</a></button></li>
        <li><button class="account-btn"><a>Cart</a></button></li>
        <li><button class="account-btn"><a href="../index/newsletter_page.php">Send Mail</a></button></li>
        <li><button class="account-btn"><a href="../index/search_page.php">Search</a></button></li>
        <li><button class="account-btn"><a href="../php/logout.php">Logout</a></button></li>
    </ul>
</div>

<!-- Account Popup Script -->
<script>
    function MyAccount() {
        if(document.getElementById("accountForm").style.display == "block"){
            document.getElementById("accountForm").style.display = "none";
        } else {
            document.getElementById("accountForm").style.display = "block";
        }
    }
</script>