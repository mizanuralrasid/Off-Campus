<?php
require 'php/config.php';

if (isset($_POST['submit'])) {

    // check the empty field

    if (!empty(trim($_POST['name'])) && !empty(trim($_POST['email'])) && !empty(trim($_POST['phone']))) {

        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $phone = $conn->real_escape_string($_POST['phone']);


        $s = "select * from registration where email = '$email'";

        $sq = $conn->query($s);

        $emailCount = mysqli_num_rows($sq);

        if ($emailCount > 0) {
            // echo ("email already registered");
?>
            <script>
                alert("Email already registered");
            </script>
            <?php
            // $error = "email already registed";
        } else {
            $iq = "insert into registration(name,email,phone) values('$name','$email','$phone')";

            $r = $conn->query($iq);

            if ($r) {
            ?>
                <script>
                    alert("You are successfully registered with us");
                </script>
<?php
                session_start();
                $_SESSION['name'] = $name;
                header("location: welcome.php");
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>

    <!-- css link -->
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <section class="signup">
        <div class="signuptext" id="left">
            <div class="item"><img src="Team2.png" alt=""></div>
            <div class="item"><img src="Team3.png" alt=""></div>
            <div class="item"><img src="Team4.png" alt=""></div>
        </div>
        <div id="right">

            <div class="boll">
                <div class="rg-item"></div>
                <div class="rg-item"></div>
                <div class="rg-item"></div>
            </div>

            <form class="myform" method="POST" onsubmit="return validateForm()">
                <div class="heading">
                    Take the first few steps which can
                    help you take giant strides in your career!
                </div>
                <!-- <div id="error"></div> -->
                <div class="form-group">
                    <input type="text" class="name" id="name" name="name" placeholder="Enter your Name">
                    <div id="errorname"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="email" id="email" name="email" placeholder="Enter your Email">
                    <div id="erroremail"></div>
                    <!-- <?php echo $error; ?> -->
                </div>

                <div class="form-group">
                    <input type="number" class="phone" id="phone" name="phone" placeholder="Enter your phone number" required>
                    <div id="errorphone"></div>
                </div>

                <button class="signupbtn" name="submit" value="submit">
                    Register
                </button>
                <a href="/index.html">ALready have an account</a>
            </form>
        </div>

    </section>



    <script>
        function validateForm() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let errorname = document.getElementById('errorname');
            let erroremail = document.getElementById('erroremail');
            let errorphone = document.getElementById('errorphone');
            if (name == "") {
                // alert("Name must be filled out");
                errorname.innerHTML = "Name cannot be blank";
                return false;
            } else if (email == "") {
                erroremail.innerHTML = "Email cannot balnk";
                return false;
            } else if (phone = "" || phone == null) {
                errorphone.innerHTML = "phone cannot be blank";
                return false;
            }
        }
    </script>
</body>

</html>