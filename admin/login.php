<?php require_once("includes/login-header.php"); ?>

<body>

<?php
/*if ($session->is_signed_in()) {
    redirect("index.php");
}*/

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user_found = User::verify_user($username, $password);

    if ($user_found) {
        $session->login($user_found);
        redirect("index.php");
    } else {
        $the_message = "De gebruikersnaam of het paswoord is incorrect";
    }
} else {
    $username = "";
    $password = "";
}

?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/login-img.jpg" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Dashboard Portfolio SC
					</span>

                <div class="wrap-input100 validate-input" data-validate="Voer uw gebruikersnaam in">
                    <input class="input100" type="text" name="username" placeholder="Gebruikersnaam">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Voer uw paswoord in">
                    <input class="input100" type="password" name="password" placeholder="Paswoord">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" name="submit" value="Login" class="login100-form-btn">
                </div>

                <div class="text-center p-t-12">
                    <a class="txt2" href="#">
                        Gebruikersnaam of Paswoord
                    </a>
						<span class="txt1">
							vergeten?
						</span>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Maak een account aan
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once("includes/login-footer.php"); ?>