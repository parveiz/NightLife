
<div class="login-page">
    <div class="form">
        <div class="close-frm-login">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <form class="register-form"  >
            <input type="text" placeholder="name" /> 
            <input type="password" placeholder="password" /> 
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">
                Already registered? <a href="#">Sign In</a>
            </p>
        </form>
        <form class="login-form" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <input type="text" placeholder="username" name="useremail" />
            <input type="password" placeholder="password" name="password" />
            <button type="submit">login</button>
            <p class="message">
                Not registered? <a href="#">Create an account</a>
            </p>
        </form>
    </div>
</div>

<section class='section-top-header'>
    <div class='top-header'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class='top-contact'>
                        <i class="fa fa-phone"></i><span>+12 123 456 789</span><i class="fa fa-envelope"></i><span>info@loyalty.com</span>
                    </div>
                    <div class='top-login'>
                        <?php if(isset($_SESSION['firstname'])){
                        	echo "<a class='reg-top frm-clk' href='#'>Hi ". $_SESSION['firstname'] . ",</a><i class='fa fa-lock'></i>";
                        }
                        ?>
                        
                        <i class="fa fa-plus"></i><a class='reg-top frm-clk' href='#'>Register</a><i class="fa fa-lock"></i><a class="frm-clk"
                                                                                                                               href='#'>Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

