<?php






include 'functions.php';
// Your PHP code here.


// Home Page template below.
?>


<?=template_header('Home')?>


<div class="content">
    <h1><?=$_SESSION['username']?></h1>
	<h1><?=$_SESSION['email']?></h1>
    <h2>Home</h2>
    <p>Welcome to the home page!</p>
</div>


<?=template_footer()?>
