<!-- NewsLetter Section -->
<header>
    <h2 class="section-title">SUBSCRIBE TO OUR NEWSLETTER</h2>
</header>
<p>Get the daily email that makes reading the news actually enjoyable. Stay informed and entertained, for free. <span>No SPAM will be sent!</span></p>
<form class="news-form" onsubmit="return doSubscribe();" method="post">
    <input type="email" id="subscriberEmail" placeholder="Enter your email..." required>
    <button class="btn sub-btn" type="submit">Subscribe</button>
    <p id="subscribe-message"></p>
</form>

<!-- NewsLetter Script -->
<script type="text/javascript">
    function doSubscribe() {
        var subscriberEmail = document.getElementById("subscriberEmail").value;
         
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "../php/subscribe-newsletter.php", true);
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         
        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("subscribe-message").innerHTML = "You have been subscribed to my newsletter.";
            }
        };
 
        ajax.send("subscriberEmail=" + subscriberEmail);
        return false;
    }
</script>