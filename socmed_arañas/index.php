<?php include "views/header.php" 
?>
        <div class="reg-form">
             <p class="title">REGISTER</p>
            <form method="POST" action="models/register_account.php">
                <label for="email">Email</label>
                    <input type="email" name="email" placeholder="steph@gmail.com" >
                <label for="firstname"> Firstname</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Stephane" >
                <label for="lastname"> Lastname</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Arañas" >
                <label for="password"> Password</label>
                    <input type="password" name="password" id="password">
                <label for="cpassword"> Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword">
            <input type="submit" value="Signup" >   
                 
            </form>
        </div>
<?php
include "views/footer.php";
