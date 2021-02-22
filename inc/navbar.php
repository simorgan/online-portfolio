<?php
if (!defined('P)r&f)!)')) {
    die("this doc will not run on its own");
}?>
<!-- main nav start -->
<nav id="sticky-main-navbar" class="navbar main-nav navbar-expand-lg navbar-light">
<ul class="nav-items">
    <li><a href="index.php" id="home-link" class="<?php echo ($page == "Home" ? "active-nav" : "");?>">Home</a></li>
    <li><a href="about.php" id="about-link" class="<?php echo ($page == "About" ? "active-nav":"");?>">About Me</a></li>
    <li><a href="portfolio.php" id="portfolio-link" class="<?php echo ($page == "Portfolio" ? "active-nav" : "");?>">Portfolio</a></li>
    <li><a href="contact.php" id="contact-link" class="<?php echo ($page == "Contact" ? "active-nav" : "");?>">Contact Me</a></li>
</ul>
</nav>
<!-- main nav end -->
<!-- responsive burger icon start -->
<div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
</div>

<!-- responsive burger icon end -->