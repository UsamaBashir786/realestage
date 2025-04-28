<?php
// Start session
session_start();

include 'config/db.php';
// Initialize variables for error messages
$error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password = $_POST['password'];

  // Validate inputs
  if (empty($email) || empty($password)) {
    $error = "Please fill in all fields.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Invalid email format.";
  } else {
    // Prepare SQL query to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
      $user = $result->fetch_assoc();
      // Verify password
      if (password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        // Redirect to a dashboard or home page
        header("Location: index.php");
        exit();
      } else {
        $error = "Incorrect password.";
      }
    } else {
      $error = "No user found with this email.";
    }
    $stmt->close();
  }
}

$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NewVilla - Login Page</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Plugin css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
  <link rel="stylesheet" href="assets/css/plugins/aos.css">
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- Preloader start -->
  <div id="preloader">
    <div class="loader--border"></div>
  </div>
  <!-- Preloader end -->

  <!-- Start header area -->
  <?php include 'includes/navbar.php' ?>
  <!-- End header area -->

  <main class="main__content_wrapper">
    <!-- Breadcrumb section -->
    <section class="breadcrumb__section section--padding">
      <div class="container">
        <div class="breadcrumb__content text-center">
          <h1 class="breadcrumb__title h2"><span>Login </span> Page</h1>
          <ul class="breadcrumb__menu d-flex justify-content-center">
            <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="index.php">Home</a></li>
            <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C" />
                </svg></span></li>
            <li><span class="breadcrumb__menu--text">Login Page </span></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Breadcrumb section .\ -->

    <!-- Account Page section -->
    <section class="account__page--section section--padding">
      <div class="container">
        <div class="account__section--inner">
          <div class="account__tab--btn">
            <ul class="account__tab--btn__wrapper d-flex justify-content-center">
              <li class="account__tab--btn__items"><a class="account__tab--btn__field" href="sign-up.php">Sign Up</a></li>
              <li class="account__tab--btn__items"><span class="account__tab--btn__field active">Login</span></li>
            </ul>
          </div>
          <div class="account__form--wrapper">
            <div class="account__header text-center mb-30">
              <h2 class="account__title">Login Here Today!</h2>
              <p class="account__desc">Hey! Enter your details to make an account & become our partner</p>
            </div>
            <?php if (!empty($error)): ?>
              <div class="alert alert-danger text-center"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="account__form">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="account__form--input mb-30">
                  <label class="account__form--input__label mb-12" for="email">Email Address</label>
                  <input class="account__form--input__field" id="email" name="email" placeholder="Enter Email Address" type="email" required>
                </div>
                <div class="account__form--input mb-30">
                  <div class="account__form--input__top mb-12 d-flex align-items-center justify-content-between">
                    <label class="account__form--input__label">Your password</label>
                    <a class="account__form--forgot__password" href="#">Forgot Password?</a>
                  </div>
                  <input class="account__form--input__field" name="password" placeholder="Enter password" type="password" required>
                </div>

                <p class="account__form--condition position-relative m-0">
                  <label class="account__form--condition__label" for="condition">I agree to all Terms & <span>Condition</span> and Feeds</label>
                  <input class="account__form--condition__input" id="condition" name="condition" type="checkbox" required>
                  <span class="account__form--condition__checkmark"></span>
                </p>
                <button class="account__form--btn solid__btn" type="submit" name="login">Login Here</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Account Page section .\ -->

    <!-- Social share section -->
    <div class="social__media--area bg__style">
      <ul class="social__media--wrapper d-flex">
        <!-- Social Media Links (unchanged) -->
      </ul>
    </div>
    <!-- Social share section .\ -->

    <!-- Start footer section -->
    <?php include 'includes/footer.php' ?>
    <!-- End footer section -->
  </main>

  <!-- Scroll top bar -->
  <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
    </svg></button>

  <!-- All Script JS Plugins here -->
  <script src="assets/js/vendor/popper.js" defer="defer"></script>
  <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
  <script src="assets/js/plugins/swiper-bundle.min.js"></script>
  <script src="assets/js/plugins/glightbox.min.js"></script>
  <script src="assets/js/plugins/aos.js"></script>
  <!-- Customscript js -->
  <script src="assets/js/script.js"></script>
</body>

</html>