
<?php 
define('P)r&f)!)', true); //change the pass phrase 
$page = 'Home';
$pageScript ='homeScript.js';
          include('inc/header.php');
          ?>
          
    <!-- title name start -->
    <body>
    <div class="home_wrapper">
    <?php include('inc/navbar.php');?>
<div id="name-title">
    
    <h1>Simon Morgan</h1>
    <!-- moving underliine start -->
    <div class="underline">
        <div class="box-left"></div>
        <div class="box-right"></div>
        <div class="box-right-break"></div>
        <div class="box-right-continue"></div>
    </div>
<!-- moving underliine end -->
<div class="sub-title disabled">
<h2>Web Developer</h2><div class="icon-wrapper"><a href="javascript:setTimeout(()=>{window.location = 'https://www.linkedin.com/in/si-morgan/' },2500);" ><i id="linkedinIcon" class="fab fa-linkedin linkedin-icon"></i></a></div>
</div>
</div>
<!-- title name end -->
</div>
<!-- script sheet -->
<script src="">
    // responive nav start
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-items');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        console.log('burger clicked');
    })
}

navSlide()
// responive nav end
</script>
</body>
</html>