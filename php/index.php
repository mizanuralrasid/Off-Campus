<?php

require 'php/config.php';

$error = "";

if (isset($_POST['submit'])) {

    // check the empty field

    if (!empty(trim($_POST['email'])) && !empty(trim($_POST['phone']))) {

        $email = $conn->real_escape_string($_POST['email']);
        $phone = $conn->real_escape_string($_POST['phone']);
        //   $name = $conn->real_escape_string($_POST['name']);

        $sq = "select id from registration where email= '$email' && phone = '$phone'";

        $r = $conn->query($sq);

        $emailCount = mysqli_num_rows($r);

        if ($emailCount) {
            session_start();
            $_SESSION["id"] = $id;
            $_SESSION["loggedin"] = true;
            $_SESSION['phone'] = $phone;
            echo "<script>window.location='home.php'</script>";
            header("location: user/index.php");
        } else {
            $error = "password incorrect";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>OFF CAMPUS</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">OFF CAMPUS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="our-team/our team.html">OUR COMMUNITY</a></li>
                    <li><a href="#">FEEDBACK</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>OFF CAMPUS <br><span>An EdTech Start-up</span> <br>Let's Improve Quality</h1>
            <p class="par">Off-Campus is an EdTech platform which strives to develop a
                pedagogical structure, accessible for <br> students of classes 1-7 of all sections of society, where
                they get experienced <br>
                in-home tutor with personalised learning programs,
                <br> conceptual clarity through visualisation, unmatched individual attention
                <br> for better understanding of concepts in one-touch
            </p>

            <button class="cn"><a href="https://t.me/offcampusinhometutoringedtech">JOIN US</a></button>

            <div class="form">
                <form action="" method="post">

                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="phone" placeholder="Enter Password Here">
                    <div class="errorMessage"> <?php echo $error; ?> </div>
                    <button class="btnn" name="submit" value="submit">Login</button>
                </form>

                <p class="link">Don't have an account<br>
                    <a href="signup.php">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="https://m.facebook.com/login/?refsrc=deprecated">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="https://www.instagram.com/accounts/login/">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="https://twitter.com/i/flow/login">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="https://accounts.google.com/v3/signin/identifier?dsh=S369189317%3A1668186225698777&continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=ARgdvAua3glkmLSnkEfP3XQZcD2qRdtnNUyTCmCAOTrpB2TkohItN4Lu6stzOgR1BNt0tso_8FU9RA">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1668186339&rver=7.1.6819.0&wp=MBI_SSL&wreply=https%3A%2F%2Flw.skype.com%2Flogin%2Foauth%2Fproxy%3Fclient_id%3D572381%26redirect_uri%3Dhttps%253A%252F%252Fweb.skype.com%252FAuth%252FPostHandler%26state%3D9d1f8fb8-bc1a-4123-9252-d1b625795f49&lc=1033&id=293290&mkt=en-US&psi=skype&lw=1&cobrandid=2befc4b5-19e3-46e8-8347-77317a16a5a5&client_flight=ReservedFlight33%2CReservedFlight67">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </section>


    <section class="container-fluid" id="offering">
        <div class="row w-100 text-center" id="offering-header">
            <h1 class="text-center mt-5 display-3 fw-bold">Off-Campus <span class="theme-text">Offering You</span></h1>
        </div>


        <div class="row" id="offering-card">
            <div class="card">
                <div class="card-header">
                    <img src="TS.jpg" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3 class="text-center">Teachers System</h3>
                    <hr class="mx-auto w-75">
                    <p>
                        Instead of One Teacher,we are providing Two Teachers in One Package.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="MT.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3 class="text-center">Monthly Test</h3>
                    <hr class="mx-auto w-75">
                    <p>
                        Monthly subjective and objective tests covering the full syllabus and test discussions
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="vs.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3 class="text-center">Visualisation</h3>
                    <hr class="mx-auto w-75">
                    <p>
                        The expert teacher teaches concepts using strong visuals and storytelling
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="feedback.png" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3 class="text-center">FEEDBACK</h3>
                    <hr class="mx-auto w-75">
                    <p>
                        Mentor Take monthly feedback from Parents And guide them.
                    </p>
                </div>
            </div>


        </div>
    </section>




    <section id="learning">
        <div class="learning-container">
            <h2>Start Learning with Off - Campus</h2>
            <h4>
                Get experienced Tutors at your doorstep.
            </h4>
            <a href=""><button>Start Learning</button></a>
        </div>
    </section>








    <section id="footer" class="footer">
        <div class="footer-container">
            <div class="col f-items">

                <h3 class="brand-name">COMPANY NAME</h3>
                <a href="" class="items">Off-Campus an EdTech</a>
                <a href="/admin/adminlogin.html">Admin login</a>

            </div>
            <div class="col f-items">
                <h3>Quick Links</h3>
                <a href="https://www.bncollege.co.in" class="items">B.N college</a>
                <div class="logo-container">
                    <div class="logo">
                        <img src="/logo of bn college.jpeg" alt="">
                    </div>
                </div>

            </div>
            <div class="col f-items">
                <h3>Off-Campus Policy</h3>
                <a href="" class="items">Terms & Conditions</a>
                <a href="" class="items">Policy</a>
                <a href="" class="items">Frequently Asked Questions</a>

            </div>
            <div class="col f-items" id="contact">
                <h3>CONTACT US</h3>
                <a href="https://www.facebook.com/OffCampus113" class="items">facebook</a>
                <a href="" class="items">instagram</a>
                <a href="" class="items">twitter</a>
                <a href="" class="items">Off-Campus@gmil.com</a>
            </div>
            <div class="col f-items" id="newsletter">
                <h3>News letter</h3>
                <form action="" method="post">
                    <input type="text">
                    <button>Search</button>
                </form>

                <div class="logo-container">

                    <div class="logo">
                        <img src="images/Off-campus logo.png" alt="">
                    </div>
                    <div class="logo">

                        <img src="our-team/images/social/linkedin.png" alt="">

                    </div>
                    <div class="logo">
                        <img src="our-team/images/social/twitter.png" alt="">
                    </div>
                    <div class="logo">
                        <img src="Facebook_Logo_(2019).png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>
