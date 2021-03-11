<?php

session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./beranda.php");</script>';
} else {
?>

<center>
<form action="./ceklogin.php" method="post" style="width: 300px; padding: 40px; background: #191919; text-align: center;">
<h1 style="color: white;">Form Login</h1>
<input type="text" name="email" placeholder="Username" alt="Username" required="required" style="border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #3498db;

padding: 14px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;"/>
<input type="password" name="password" placeholder="Password" alt="password" minlength="6" required="required" style="border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #3498db;

padding: 14px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;"/>
<input type="text" value="1545" required="required" disabled style="border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #3498db;

padding: 14px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;"/>
<input type="text" name="captcha" placeholder="Captcha" alt="Captcha" required="required" style="border: 0;

background: none;

display: block;

margin: 20px auto;

text-align: center;

border: 2px solid #3498db;

padding: 14px 10px;

width: 200px;

outline: none;

color: white;

border-radius: 24px;

transition: 0.25s;"/>
<input type="submit" name="submit" value="Submit" alt="submit"/>
</form><br/>
<h4>Copyright &copy; <font color="red" alt="Rachmad Fadillah">Rachmad Fadillah</font> </h4>
</center>
<?php } ?>