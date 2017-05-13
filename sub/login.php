<?php
    session_start();
    $db = pg_connect('host=localhost dbname=muhammadazri51 user=postgres password=cplusplus123');
    if(!$db) {
      echo "Error : Unable to open database\n";
    } else {
      echo "\n";
      $setsearchpath = "SET search_path to TOKOKEREN";
      pg_query($db, $setsearchpath);
      return $db;
    }
    print_r($_POST['login']);
    if (isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $isAdmin = isAdmin($db, $email, $password);
        if ($isAdmin == true){
            header("Location: ..\index.php");
        }

        $sql = 'SELECT * FROM PENGGUNA';
        $result = pg_query($db, $sql);

        // Check connection
        if (!$db) {
            die("Connection failed ");
        }

        if ($result> 0) {
            // output data of each row
            while($row = pg_fetch_assoc($result)) {
                if($row['email'] == $email && $row['password'] == $password ){
                    $_SESSION['email'] = "email";
                    $_SESSION['role'] = 'user';
                    $_SESSION['real_email'] = $email;
                    header("Location: ..\indexuser.php");
                    break;
                }
            }
        }

        pg_close($db);
    }

    function isAdmin($db, $email, $password){
        $getAdmin = 'SELECT * FROM PENGGUNA P WHERE P.email NOT IN (SELECT email FROM PELANGGAN)';
        $result = pg_query($db, $getAdmin);


        // Check connection
        if (!$db) {
            die("Connection failed ");
        }

        if ($result > 0) {
            // output data of each row
            while($row = pg_fetch_assoc($result)) {
                if($row['email'] == $email && $row['password'] == $password ){
                    $_SESSION['email'] = "email";
                    $_SESSION['role'] = 'admin';
                    $_SESSION['real_email'] = $email;
                    pg_close($db);
                    return true;
                }
            }
        }

        return false;

    }

?>
