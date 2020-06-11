<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                    echo '<p class="signuperror">Fill in all Fields!</p>';      
                }
                else if($_GET["error"] == "invaliduidmail"){
                    echo '<p class="signuperror">Invalid username & email!</p>';
                }
                else if($_GET["error"] == "invaliduid"){
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if($_GET["error"] == "invalidmail"){
                    echo '<p class="signuperror">Invalid mail!</p>';
                }  
                else if($_GET["error"] == "passwordcheck"){
                    echo '<p class="signuperror">Your password do not match!</p>';
                }
                else if($_GET["error"] == "usertaken"){
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
            }
            else if ($_GET["signup"] == "success"){
                    echo '<p class="signupsuccess">Signup successful!</p>';
            }
            ?>
            <form action="includes/signup.inc.php" method="post">
            <form class="pure-form pure-form-aligned">
            <div class="pure-control-group">
            <input type="text" name="uid" placeholder="Username"></div>
            <div class="pure-control-group">
            <input type="text" name="mail" placeholder="Email"></div>
            <div class="pure-control-group">
            <input type="password" name="pwd" placeholder="password"></div>
            <div class="pure-control-group">
            <input type="password" name="pwd-repeat" placeholder="repeat password"></div>
            <div class="pure-control-group">
            <input type="text" name="uid" placeholder="Username"></div>
            <button type="submit" name="signup-submit">Signup</button>
</form>
</section>
</div>
</main>













<?php
require "footer.php";
?>
