<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <br>
    <div class="home-page">
        <h2>Wlecome to Baba Inc!</h2>
        <?php
            $username = $_SESSION['username'];
            if($username != NULL) {
                if($username == "Admin"){
                    echo "<p>You are logged in as: " . $username . "istrator</p>";
                }
                else {
                    echo "<p>You are logged in as: $username</p>";
                }
            }
            else {
                echo "<p><span class='bold'>You are not logged in yet.</span><br>Login to access all site fetures.</p>";
            }
        ?>
    </div>
</body>
</html>
