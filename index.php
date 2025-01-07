<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kyu E-Voting System</title>

    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/iCheck/all.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/css/skins/_all-skins.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <!------------- NAVIGATION BAR ------------->
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="admin/index.php">Admin</a></li>
                <li><a href="login-page.php">Voters</a></li>
            </ul>
            <h1 class="logo">
                <img style="height: 55px; width: 290px;" src="assets/img/Kyu-Web-logo-1 (1).png" alt="logo">
                <!-- KYU E-Voting -->
            </h1>
        </div>
    </nav>

    <!------------- HERO SECTION ------------->
    <section id="hero">
        <div id="hero-container">

            <div id="bg">
                <div id="color-overlay"></div>
            </div>

            <div class="sitetitle">
                <h1 id="hero-title">Welcome to KYU E-Voting!</h1>
                <p id="hero-content">
                    We are thrilled to have you as part of our democratic journey, where your voice matters. With KYU
                    E-Voting, we have revolutionized the way we participate in elections by bringing the power of
                    technology and convenience to your fingertips.
                    <br />
                    <br />
                    KYU E-Voting System ensures the highest standards of security and privacy. We have implemented
                    robust encryption protocols and advanced authentication mechanisms to safeguard your information and
                    maintain the integrity of the voting process. Rest assured that your vote is anonymous, and your
                    personal data remains confidential.
                </p>
                <br />
                <br />
                <a href="login-page.php" class="hero-button">Vote Now!</a>
                <a href="#addnew" data-toggle="modal" class="hero-button">Register Here</a>

            </div>
        </div>
    </section>

    <!------------- ABOUT US SECTION ------------->
    <section id="about">
        <div class="main">
            <img src="assets/img/about.png" alt="Ballot box">
            <div class="about-text">
                <h1>Choose Wisely!</h1>
                <p>Through KYU E-Voting, we strive to make the electoral process more inclusive and accessible to all.
                    Whether you are a seasoned voter or a first-time participant, our user-friendly interface and
                    intuitive design will guide you seamlessly through the voting journey. We prioritize transparency
                    and have incorporated features that allow you to verify your vote, track the progress of the
                    election, and witness the democratic process unfold in real-time.
                    <br />
                    <br />
                    Thank you for choosing KYU E-Voting as your trusted E-voting partner. Together, let us embark on
                    this exciting digital voyage and create a future where every citizen's voice is heard and every vote
                    matters.
                </p>
                <br />
                <br />
                <a href="login-page.php" class="about-button">Vote Now!</a>
            </div>
        </div>
    </section>

    <!------------- CONTACT US SECTION ------------->
    <section id="contact">
        <div class="section-header">
            <div class="container">
                <h2>Contact Us</h2>
                <p>We are a revolutionized group of software developers who work on a wide range of software
                    applications, management and tracking systems</p>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="material-icons">home</i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Address</h4>
                            <p>Banda oppsite FortBet,<br /> Kyambogo, kampala.</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="material-icons">phone</i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Phone</h4>
                            <p>+256 754975422</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="material-icons">email</i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p>techtrey@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="" id="contact-form">
                        <h2>Send Message</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="">
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="">
                            <span>Email</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name=""></textarea>
                            <span>Type your Message...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Send" name="">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!------------- FOOTER ------------->
    <footer>
        <p>Developed by <a href="#">Senyonjo Kato Daniel</a> © 2025 | techtrey</p>
    </footer>
    <?php include 'includes/voters_modal.php'; ?>

</body>

</html>