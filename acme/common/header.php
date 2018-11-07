<section class="headerTop">
    <h6 class="invisible">HeaderTop</h6>
    <img class="logoImg" src="/acme/images/site/logo.gif" alt="The ACME Logo">
    <?php
    if (isset($cookieFirstname)) {
        echo "<span>Welcome $cookieFirstname</span>";
    }
    ?>
    <p>       
        <img class="accountImg" src="/acme/images/site/account.gif" alt="An image of a red folder">
        <a href="/acme/accounts/?action=login" title="My Account">My Account</a>
    </p>
</section>
<nav>
<?php echo $navList; ?> 
</nav>