<?php

    session_start();

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<style>
    body {
    background-color:lightskyblue;
  }
    div {
    background-color: lightblue;
  }
</style>

<body>
    <header>
        <nav>
            <a href ="#">
                <img src="img/dist.png" width="40%" height="70%" alt="People queue up for relief materials in Hyderabad during lockdown. (PTI)" title="People queue up for relief materials in Hyderabad during lockdown. (PTI)">
                <img src="img/logo.png" alt="logo" title="COVID-19">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ73Zf6HaZNmjXiSBGThOsU7j6BKhcWlh4pl_Ef1J8T-wGZaC9E&usqp=CAU" alt="coronavirus" height="30%" width="30%" title="Corona Virus">

            </a> 
            <a href="post-Lockdown.html" target="_blank">Strategies of Post-Lockdown</a>    

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>

            <p>Coronavirus India State Wise Cases Latest Updates, Lockdown 5 News:  With 9,985 new COVID-19 cases and 279 deaths being reported in the last 24 hours, India’s total COVID-19 tally has now reached 2,76,583. The death toll now stands at 7,745, Ministry of Health and Family Welfare said in its latest update on Wednesday. There are 1,33,632 active cases while 1,35,206 people have been cured/discharged/migrated, it added. Mumbai now has more than 51,000 coronavirus cases, more than China’s Wuhan where the highly contagious diseases first emerged in December last year. Delhi has reported 31,309 cases and the death toll in the national capital now stands at 905. Meanwhile, Delhi Deputy Chief Minister Manish Sisodia has said that the city will 5.5 lakh coronavirus cases by July 31 of the current doubling rate continues. “5.5 lakh COVID-19 cases are expected in Delhi by July 31. We will need 80,000 beds by then,” Sisodia said after a meeting with Lieutenant Governor Anil Baijal. Sisodia also said that as per the Central government officials there is no community spread of coronavirus in Delhi so far. </p><br>
            <p>India’s recovery rate is said to be one of the best in the world. However, the World Health Organisation (WHO) has warned that the COVID-19 pandemic is ‘worsening’ globally. It said that while the situation in Europe, which witnessed thousands of deaths due to coronavirus in past few months, is improving, American, South Asian and African nations are witnessing high number of cases daily. WHO chief Tedros Adhanom Ghebreyesus said there are encouraging signs from several countries , but added that ‘complacency’ could be a big threat.<br></p>

            <div class="header-login">
            <?php
                if(isset($_SESSION['userId'])){
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>';
                }else{
                    echo  '<form action="includes/login.inc.php" method="post">
                    <form class="pure-form pure-form-aligned">
                    <div class="pure-control-group">
                    <input type="text" name="mailuid" placeholder="Username/Email...">
                    <div class="pure-control-group">
                    <input type="password" name="pwd" placeholder="Password...">
                    <div class="pure-control-group">
                    <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>';

                }
            ?>
               
</form>
</div>
</nav>
</header>





        

