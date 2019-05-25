<?php


class Connection_pdo{

    static $connection;
    static function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wstdb";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connection=$conn;

            // var_dump(self::$connection);exit('exit');
            // self::insert();

            
            // self::$connection="ospdospdos";    
        }
        catch(PDOException $e)
            {
            echo "Connection failed:_ " . $e->getMessage();
            }
    }

    static function insert(){
        
        $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`) VALUES (NULL, 'stefan', 'stefan@gmail.com', '123123', TIMESTAMP('2019-05-30 07:21:00.000000'));
        ";
        self::$connection->exec("INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`) VALUES (NULL, 'stefan', 'stefan@gmail.com', '123123', TIMESTAMP('2019-05-30 07:21:00.000000'));
        ");
    }
    static function selectAll(){
        // $sql = "select * from users";
        // $result = self::$connection->query($sql);
        // self::$connection->exec($result);
        // var_dump($result);
        // getting the last registered user
        $stmt = self::$connection->query("SELECT * FROM users;");
        // $user = $stmt->fetch();
        echo "<pre>";
        while ($row = $stmt->fetch()) {
            var_dump($row);
        }
        echo "<pre>____________________--";var_dump($user);
        
    }
    static function isExist($user_email){
        $stmt = self::$connection->query("SELECT * FROM users where email='$user_email' ORDER BY id DESC LIMIT 1");
        $user = $stmt->fetch();
        return $user;
    }
}

