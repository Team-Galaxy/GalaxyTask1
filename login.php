<?php
include('DbConnection.php');
 include ('loginHand.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Team Galaxy | Login</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./assets/css/main.css" />
    <link rel="stylesheet" href="./assets/css/footer.css" />
  </head>

  <body>
    <nav class="navbar text-white py-3">
      <div class="mx-auto h5">Team Galaxy</div>
    </nav>
    <!--Log In Body-->
    <div class="container">
<?php
  $onSub = (isset($_POST['submit']));
  if($onSub) {
   $loghtml = new logHan;
   $loghtml->logIndexHan($_POST['email'], $_POST['pass']);
  }
?>

      <form id="log-in-form" Method="POST">
        <fieldset class="border rounded shadow-sm">
          <p class="subheading text-center h3">Login</p>
          <div class="form-group">
            <label for="EnterEmail">Email address</label>

            <?php
              if(isset($loghtml->msg)){?>
              <p style="color:red;"><?php echo "*".$loghtml->msg ?></p>
             <?php }?>
            
            <input
              type="email"
              name="email"
              class="form-control"
              id="EnterEmail"
              aria-describedby="emailHelp"
              placeholder="Enter email"
              required
            />
          </div>
          <div class="form-group">
            <label for="EnterPassword">Password</label>
            <input
              type="password"
              name="pass"
              class="form-control"
              id="EnterPassword"
              placeholder="Password"
              required
            />
            <!-- <small class="form-text text-muted">Forgot Password?</small> -->
          </div>
          <!-- <div class="form-check"> -->
          <!-- <input type="checkbox" class="form-check-input" id="RememberMe"> -->
          <!-- <label class="form-check-label" for="RememberMe">Remember Me</label> -->
          <!-- </div> -->
          <input
            
            type="submit"
            class="btn btn-primary action-button d-block mt-4 mx-auto"
            value="Login"
            name="submit"
          />

          
          <!-- <input type="submit" class="btn btn-primary action-button" onclick="return false" value="Log In"> onclick="return false" -->
          <!-- <button type="button" class="btn btn-primary" value="Facebook"><i class="fa fa-facebook"></i> facebook</button>
            <button type="button" class="btn btn-primary" value="Google"><img src="./assets/googleIcon.png" alt=""> Google</button> -->
          <p class="text-center mt-4">
            Create an account <a href="index.php">Signup</a>
          </p>
        </fieldset>
      </form>
    </div>
    <!-- Footer -->
    <div id="footer">
      <footer class="text-white">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
          &copy; 2019
          <a href="index.php">Team Galaxy</a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
    <!-- Footer -->

    <!-- Scripts -->
    <!--CDN-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <!--Custom-->
    <script src="./js/main.js"></script>
  </body>
</html>
