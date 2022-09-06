
<!DOCTYPE html>
<html lang="en">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rexchat";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>REX CHAT</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h1 class="display-6" style="color: rgb(63,248,93);font-size: 43.88px;font-weight: bold;">REX CHATAPP</h1>
                    <h6 class="display-6" style="color: rgb(63,248,93);font-size: 17.88px;font-weight: bold;">sign up</h6>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="font-size: 25px;">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center" style="border: 5px solid rgb(42,239,97);border-top-left-radius: 28px;border-bottom-right-radius: 28px;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(53,247,49);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                </svg></div>
                            <form class="text-center" method="post" >
                                <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="username"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="email" required=""></div>
                                <div class="mb-3"><input class="form-control" type="text" name="phone" placeholder="phone no" required="" maxlength="10" minlength="10"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required="" maxlength="8" minlength="6"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit" style="background: rgb(47,253,13);">Sign Up</button></div>
                                <p class="text-muted"></p>

                                <?php
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	$sql = "insert into userchat(name,email,phone,password)VALUES('$name','$email','$phone','$password1')";
    $res = $conn->query($sql);
    if($res) {
        header("location:rip.php");
			}else{
				echo '<script>alert("operation failed")</script>';			}
    
    }
?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer></footer>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>