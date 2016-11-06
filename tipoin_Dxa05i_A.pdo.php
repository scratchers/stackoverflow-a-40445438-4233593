<?php
return (function(){
    $hostname = 'localhost';
    $database = 'tipoin_Dxa05i';
    $username = 'tipoin_Dxa05i_A';
    $password = 'W5Kxsu)!4GNw,{W7ulT1^cM2yi)ZUUJ#';

    $pdo = new PDO("mysql:host=$hostname;
        charset=UTF8;
        dbname=$database",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
})();
