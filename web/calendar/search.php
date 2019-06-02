require "home.php";
Results:
<?php
    foreach ($db->query('SELECT USERNAME from user_info') as $row)
    {
    echo 'user: ' . $row['username'];
    echo '<br/>';
    }
?>