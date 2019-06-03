<?php
        $username_add = $_POST['username_add'];
        $title_add = htmlspecialchars($_POST['title_add']);
        //$start_date_add = $_POST[start_date_add];
        //$end_date_add = $_POST[end_date_add];
        //$start_time_add = $_POST[start_time_add];
        //$end_time_add = $_POST[end_time_add];
        //$location_add = $_POST[location_add];
        echo '$title_add';
        echo "$title_add";
        echo "$username_add";
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="calendar.css">
    </head>
    <body>
        <?php
            try
            {
            $dbUrl = getenv('DATABASE_URL');
            
            $dbOpts = parse_url($dbUrl);
            
            $dbHost = $dbOpts["host"];
            $dbPort = $dbOpts["port"];
            $dbUser = $dbOpts["user"];
            $dbPassword = $dbOpts["pass"];
            $dbName = ltrim($dbOpts["path"],'/');
            
            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $ex)
            {
            echo 'Error!: ' . $ex->getMessage();
            die();
            }

            echo "$title_add";
            //$db->query("INSERT INTO EVENT (USERNAME, TITLE, START_DATE, END_DATE, START_TIME, END_TIME, LOCATION) VALUES
            //($username_add, $title_add, $start_date_add, $end_date_add, '06:00 AM', '05:00 PM', $location_add)";

            //$new_page = "add.php?username=$username_add";
            //header("LOCATION: $new_page");
            //die();
            ?>
    </body>
</html>