<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>NewVilla - Sign Up Page</title>
  <meta name="description" content="Modern Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
  <link rel="stylesheet" href="assets/css/plugins/aos.css">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php
  // Start the session
  session_start();

  // Include the database configuration file
  include 'config/db.php';

  // Initialize variables for error/success messages
  $message = "";
  $message_type = "";

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $terms_accepted = isset($_POST['condition']);

    // Validate input
    if (empty($name) || empty($email) || empty($password)) {
      $message = "All fields are required.";
      $message_type = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $message = "Invalid email format.";
      $message_type = "error";
    } elseif (!$terms_accepted) {
      $message = "You must agree to the terms and conditions.";
      $message_type = "error";
    } else {
      try {
        // Check if email already exists
        $check_email = "SELECT email FROM users WHERE email = ?";
        $stmt = $conn->prepare($check_email);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
          $message = "Email already registered.";
          $message_type = "error";
          $stmt->close();
        } else {
          // Hash the password
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);

          // Insert user data into the database
          $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
          $stmt->bind_param("sss", $name, $email, $hashed_password);

          if ($stmt->execute()) {
            // Automatically log the user into the session
            $_SESSION['user_id'] = $conn->insert_id; // Get the last inserted ID
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;

            // Redirect to the dashboard or homepage
            header("Location: index.php");
            exit;
          } else {
            throw new Exception("Error creating account.");
          }
          $stmt->close();
        }
      } catch (Exception $e) {
        $message = "Error: " . $e->getMessage();
        $message_type = "error";
      }
    }
  }
  ?>
  <!-- Preloader start -->
  <div id="preloader">
    <div class="loader--border"></div>
  </div>
  <!-- Preloader end -->

  <!-- Start header area -->
  <?php include 'includes/navbar.php'; ?>
  <!-- End header area -->

  <main class="main__content_wrapper">
    <!-- Breadcrumb section -->
    <section class="breadcrumb__section section--padding">
      <div class="container">
        <div class="breadcrumb__content text-center">
          <h1 class="breadcrumb__title h2"><span>Sign </span> Up</h1>
          <ul class="breadcrumb__menu d-flex justify-content-center">
            <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="index.php">Home</a></li>
            <li><span class="breadcrumb__menu--text">Sign Up </span></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Breadcrumb section -->

    <!-- Account Page section -->
    <section class="account__page--section section--padding">
      <div class="container">
        <div class="account__section--inner">
          <div class="account__tab--btn">
            <ul class="account__tab--btn__wrapper d-flex justify-content-center">
              <li class="account__tab--btn__items"><span class="account__tab--btn__field active">Sign Up</span></li>
              <li class="account__tab--btn__items"><a class="account__tab--btn__field" href="login.php">Login</a></li>
            </ul>
          </div>
          <div class="account__form--wrapper">
            <div class="account__header text-center mb-30">
              <h2 class="account__title">Sign Up Today!</h2>
              <p class="account__desc">Hey! Enter your details to make an account & become our partner</p>
            </div>

            <?php if (!empty($message)): ?>
              <div class="alert alert-<?php echo $message_type === "error" ? "danger" : "success"; ?>">
                <?php echo htmlspecialchars($message); ?>
              </div>
            <?php endif; ?>

            <div class="account__form">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="account__form--input mb-30">
                  <label class="account__form--input__label mb-12" for="name">Your Name</label>
                  <input class="account__form--input__field" id="name" name="name" placeholder="Enter your name*" type="text" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                </div>
                <div class="account__form--input mb-30">
                  <label class="account__form--input__label mb-12" for="email">Email Address</label>
                  <input class="account__form--input__field" id="email" name="email" placeholder="Enter Email Address" type="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                </div>
                <div class="account__form--input mb-30">
                  <label class="account__form--input__label mb-12" for="password">New Password</label>
                  <input class="account__form--input__field" id="password" name="password" placeholder="Create password" type="password">
                </div>
                <p class="account__form--condition position-relative m-0">
                  <label class="account__form--condition__label" for="condition">
                    I agree to all
                    <a href="terms-and-conditions.html" target="_blank">Terms & Conditions</a>,
                    <a href="privacy-policy.html" target="_blank">Privacy Policy</a>,
                    and Feeds
                  </label>
                  <input class="account__form--condition__input" id="condition" name="condition" type="checkbox">
                  <span class="account__form--condition__checkmark"></span>
                </p>
                <button type="submit" class="account__form--btn solid__btn">Create An Account</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Account Page section -->

    <!-- Footer section -->
    <?php include 'includes/footer.php'; ?>
    <!-- End footer section -->
  </main>

  <!-- All Script JS Plugins -->
  <script src="assets/js/vendor/popper.js" defer></script>
  <script src="assets/js/vendor/bootstrap.min.js" defer></script>
  <script src="assets/js/plugins/swiper-bundle.min.js"></script>
  <script src="assets/js/plugins/glightbox.min.js"></script>
  <script src="assets/js/plugins/aos.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>