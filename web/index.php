<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $user_ip=$_SERVER["REMOTE_ADDR"];
        echo 'IPV6 127.0.0. -> '.$user_ip.'<br />';
        $timezone = date_default_timezone_get();
        echo "The current server timezone is: " . $timezone."<br>";
        echo date('l jS \of F Y h:i:s A');
        ?>
        <br />
        explore the links below:
    </body>
</html>
