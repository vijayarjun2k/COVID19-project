<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css">
    <section class="section-default">
    <?php
    if(isset($_SESSION['userId'])){
        echo '<p class="login-status">You are logged in!</p>';
    }else{
        echo '<p class="login-status">You are logged out!</p>';

    }
?>
</section>
</div>
</main>

<?php
require "footer.php";
?>
