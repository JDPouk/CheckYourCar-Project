<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CheckYourCar</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="css/uikit.css">
        <link rel="stylesheet" href="css/uikit-rtl.css">
        <script src="js/uikit.js"></script>
    </head>

    <body>

        <nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">
        <img src="images/RECALL.svg" alt="Italian Trulli"  width="500" height="600">

        <a class="uk-navbar-item uk-logo" href="index.html">CheckYourCar</a>
          
        <ul class="uk-navbar-nav">
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                    Login
                </a>
            </li>
        </ul>

        <div class="uk-navbar-item">
            <div> <a href="signup.php">Sign Up</a></div>
        </div>

        <div class="uk-navbar-item">
            
        </div>

    </div>
</nav>

	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Welcome!</h3>
						<form action ="registration.php" method= "post" >
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: mail"></span>
									<input class="uk-input uk-form-large" type="text" name="username">
								</div>
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input class="uk-input uk-form-large" type="password" name="password">	
								</div>
							</div>
							<div class="uk-margin">
								<button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Sign Up</button>
							</div>
							<div class="uk-text-small uk-text-center">
								registered? <a href="#">Lognin</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

        
        
    </body>
</html>