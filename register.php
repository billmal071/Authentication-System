<?php include_once('lib/header.php');
 require_once('functions/alert.php');
if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}
// include_once('lib/header.php');

?>
<div>
    <div>
        <h3>Register</h3>
    </div>
    <div>
        <p><strong>Welcome, Please Register</strong></p>
    </div>
    <div>
        <p>All Fields are required</p>
    </div>
    <div>

        <form method="POST" action="processregister.php">
        <p>
            <?php  print_alert(); ?>
        </p>
            <p>
                <label>First Name</label><br />
                <input  
                <?php              
                    if(isset($_SESSION['first_name'])){
                        echo "value=" . $_SESSION['first_name'];                                                             
                    }                
                ?>
                type="text" name="first_name" placeholder="First Name" />
            </p>
            <p>
                <label>Last Name</label><br />
                <input
                <?php              
                    if(isset($_SESSION['last_name'])){
                        echo "value=" . $_SESSION['last_name'];                                                             
                    }                
                ?>
                type="text" name="last_name" placeholder="Last Name"  />
            </p>
            <p>
                <label>Email</label><br />
                <input
                
                <?php              
                    if(isset($_SESSION['email'])){
                        echo "value=" . $_SESSION['email'];                                                             
                    }                
                ?>

                type="text" name="email" placeholder="Email"  />
            </p>

            <p>
                <label>Password</label><br />
                <input type="password" name="password" placeholder="Password"  />
            </p>
            <p>
                <label>Gender</label><br />
                <select name="gender" >
                <?php              
                    if(isset($_SESSION['department'])){
                        echo "value=" . $_SESSION['department'];                                                             
                    }                
                ?>
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Female</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Male</option>
                </select>
            </p>
        
            <p>
                <label>Designation</label><br />
                <select name="designation" >
                
                    <option value="">Select One</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Medical Team (MT)'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Medical Team (MT)</option>
                    <option 
                    <?php              
                        if(isset($_SESSION['designation']) && $_SESSION['designation'] == 'Patient'){
                            echo "selected";                                                           
                        }                
                    ?>
                    >Patient</option>
                </select>
            </p>
            <p>
                <label class="label" for="department">Department</label><br />
                <input
                <?php              
                    if(isset($_SESSION['department'])){
                        echo "value=" . $_SESSION['department'];                                                             
                    }                
                ?>
                type="text" id="department" name="department" placeholder="Department"  />
            
            </p>
            <p>
                <button type="submit">Register</button>
            </p>
            <p>
                    <a href="forgot.php">Forgot Password</a><br />
                    <a href="login.php">Already have an account? Login</a>
            </p>
        </form>

    </div>

</div>
<?php include_once('lib/footer.php'); ?>