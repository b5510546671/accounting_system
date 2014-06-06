<?php
	require_once('auth.php');
    loginsuccess($_SESSION['SESS_USERNAME']);

    function loginsuccess($name){
        echo "<h3>Login Success</h3>";
        echo "<h4>Welcome $name</h4>";
        echo "<hr>";
        echo "<br>";
        echo "<a href=.../addProductForm.php> Add new Products form</a>";
        echo "<br>";
        echo "<a href=.../editProductForm.php> Edit Products form</a>";
        echo "<br>";
        echo "<a href=index.php> Log Out </a>";
    }
?>













