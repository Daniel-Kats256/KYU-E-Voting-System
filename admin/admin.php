<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>KYU E-Voting Admin Registration Panel</b>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Register an account to manage election!</p>
            <form action="insert_admin.php" method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control login-input" name="username" id="username"
                        placeholder="Username" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control login-input" name="password" id="password"
                        placeholder="Password" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control login-input" name="firstname" id="firstname"
                        placeholder="First Name" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control login-input" name="lastname" id="lastname"
                        placeholder="Last Name" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="file" class="form-control login-input" name="photo" id="photo" accept="image/*"
                        placeholder="Upload Photo" required>
                </div>

                <div class="form-group has-feedback">
                    <input type="date" class="form-control login-input" name="created_on" id="created_on"
                        placeholder="Created On" required>
                </div>

                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat login-btn" name="login">Register
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <?php include 'includes/scripts.php' ?>
</body>

</html>