<?php
    //Start session
    session_start();
    
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
    </head>
    
    <body>
        <form name = "loginform" action = "login_exec.php" method = "post">
        <table width = "309" border = "0" align = "center" cellpadding = "2" cellspacing = "5">
            <tr>
                <td width = "116"><div align = "right">Username</div></td>
                <td width="177"><input name = "username" type = "text"/></td>
            </tr>
            
            <tr>
                <td><div align = "right">Password</div></td>
                <td><input name = "password" type = "text" /></td>
            </tr>
            
            <tr>
                <td><div align = "right"></div></td>
                <td><input name = "" type = "submit" value = "Login"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>