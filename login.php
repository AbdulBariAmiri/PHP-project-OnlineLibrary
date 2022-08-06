
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstarp -->
    <link rel="stylesheet" href="style/bootstrap.min.css" />
    <!-- custom Css -->
    <link rel="stylesheet" href="style/style.css" />
    <title>Online_Library</title>
</head>
<body>
	<section class="form my-4 mx-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="img/logo1.png" class="img-fluid" alt="">
				</div>
				<div class="col-lg-7 px-5 pt-3">
					<h1 class="font-wight-bold py-3">LOG IN</h1>
					<h4>Login to your Account</h4>
					<form method="POST" action="check.php">
						<div class="form-row">
							<div class="col-lg-7">
								<input type="Email" placeholder="Email" name="Email" class="form-control my-3 p-4">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								<input type="password" placeholder="********" name="Password" class="form-control my-3 p-4">
							</div>
						</div>
						<div class="form-row">
							<div class="col-lg-7">
								<input type="submit" class="btn1 mt-3 mb-5"></input>
							</div>
						</div>

						<p>Dont have an account! <a href="signUp.php">SignUp here</a></p>
					</form>					
				</div>
			</div>
		</div>
	</div>
	</section>
</body>
</html>