<?php
  include ('DbConnection.php');
  include ('regHandler.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Team Galaxy | Register</title>
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
    <?php
$onSub = isset($_POST['submit']);
if ($onSub) {
    $regFormHand = new regGal();
    $regFormHand->regHandler($_POST['email'], $_POST['pass'], $_POST['Cpass']);
  } else {
    // echo "not set!";
  };
?>
    <div class="container">
      <form id="log-in-form" Method="POST">
        <fieldset class="border rounded shadow-sm">
          <p class="subheading text-center h3">Register</p>
          <?php
    if (isset($regFormHand->msg)) {?>

        <p style="color:red;"> <?php  echo "*".$regFormHand->msg?></p>
<?php }?>
          <div class="form-group">
            <label for="Email">Email address</label>
            <input
            name="email"
              type="email"
              class="form-control"
              id="Email"
              placeholder="Enter email address"
              required
            />

                        <!--I (@jovial) added required here. Please don't tamper withh it. it is very neccessary -->
          </div>
          <div class="form-group">
            <label for="EnterPassword">Password</label>
            <input
            name="pass"
              type="password"
              class="form-control"
              id="EnterPassword"
              placeholder="Enter Password"
              onkeyup="checkLength()"
              minlength="8"
              required
            />
            <!--I (@jovial) added required here. Please don't tamper withh it. it is very neccessary -->
            <small class="form-text text-muted" id="lengthErr"
              >Password must be at least 8 characters</small
            >
          </div>
          <div class="form-group">
            <label for="ConfirmPassword">Confirm Password</label>
            <input
              name ="Cpass"
              type="password"
              class="form-control"
              id="ConfirmPassword"
              placeholder="Re-enter Password"
              onkeyup="checksimilar()"
              required
            />
            <small class="form-text text-muted" id="matchText"
              >Passwords do not match</small
            >

                        <!--I (@jovial) added required here. Please don't tamper withh it. it is very neccessary -->
          </div>
          <input
            type="submit"
            id="submitButton"
            class="btn btn-primary action-button d-block mt-4 mx-auto"
            value="Register"
            name="submit"
          />
          <script>
          var confirmtext = document.getElementById("ConfirmPassword"),
          passwordText = document.getElementById("EnterPassword"),
          submitButton = document.getElementById("submitButton"),
          matchText = document.getElementById("matchText"),
          lengthErr = document.getElementById("lengthErr")
          function checkLength() {
              if(passwordText.value.length>=8){
                  lengthErr.style.visibility="hidden"
              }
          }
          function checksimilar(){
              if(passwordText.value != confirmtext.value){
                  submitButton.setAttribute("disabled", "disabled")
                  matchText.style.visibility="visible"
              }
              if(passwordText.value === confirmtext.value){
                  submitButton.removeAttribute("disabled")
                  matchText.style.visibility="hidden"
              }
          }
          </script>
          <!-- <input type="submit" class="btn btn-primary action-button" onclick="return false" value="Log In">  onclick="return false"-->
          <!-- <button type="button" class="btn btn-primary" value="Facebook"><i class="fa fa-facebook"></i> facebook</button>
            <button type="button" class="btn btn-primary" value="Google"><img src="./assets/googleIcon.png" alt=""> Google</button> -->
          <p class="text-center mt-4">
            Already registered? <a href="login.php"> Login</a>
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
          <a href="team.html">Team Galaxy</a>
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
  </body>
</html>
