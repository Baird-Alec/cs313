<?php
    $username = $_GET['username'];
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Event</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
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
        ?>

        <?php echo "<h1>$username";
        echo '\'s Events:</h1>'; ?>

        <?php
        foreach ($db->query("SELECT TITLE from EVENT where username = USERNAME") as $row)
        {
            echo 'Event: ' . "$row[title]";
            echo "<br/>";
        }
        ?>
        <form methood="post" action="insert.php">
            Username: <textarea name="username_add"></textarea><br>
            Title: <textarea name="title_add"></textarea><br>
            Start Date (mm/dd/yyyy): <textarea name="start_date_add"></textarea><br>
            End Date (mm/dd/yyyy): <textarea name="end_date_add"></textarea><br>
            Start Time (hh:dd AM/PM): <textarea name="start_time_add"></textarea><br>
            End Time (hh:dd AM/PM): <textarea name="end_time_add"></textarea><br>
            Location: <textarea name="location_add"></textarea><br>
        </form>
    </body>
</html>