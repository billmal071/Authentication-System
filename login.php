<?php include_once('lib/header.php');
      require_once('functions/alert.php');

if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}

?>
<div>
    <div>
        <h3>Login</h3>
    </div>
    <div>
        <p>
        <?php  print_alert(); ?>
        </p>
        <form method="POST" action="processlogin.php">
    
                
            <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="text" class="form-control" name="email" placeholder="Email"  />
            </p>

            <p>
                <label>Password</label><br />
                <input type="password" name="password" placeholder="Password"  />
            </p>       
        
        
            <p>
                <button type="submit">Login</button>
            </p>
            <p>
                <a href="forgot.php">Forgot Password</a><br />
                <a href="register.php">Don't have an account? Register</a>
            </p>
        </form>
    </div>
</div>
<?php include_once('lib/footer.php'); ?>