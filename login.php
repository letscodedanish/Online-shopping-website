<?php include 'functions.php' ?>
<?php include 'header.php' ?>

<?php

if (isset($_POST['login'])) {
  $data = $_POST;
  $user = login($data);
  if (!$user) {
    $response = [
      'type' => 'error',
      'message' => 'successfull!'
    ];
  } else {
    header("Location: index.php");
  }
}

?>
        <div class="home-banner container flex">
            <div class="w-50 content">
                <h1>Login</h1>
                <p class="w-80">Login to the website using the form in order to purchase a beverage</p>
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </div>
            <div class="w-50 flex justify-center">
                <div class="form">
                <?php if (isset($response)) { ?>
                        <div class="message-box <?= $response['type'] ?>">
                            <p><?= $response['message'] ?></p>
                        </div>
                <?php } ?>
                    <form action="?" method="POST" class="w-80 margin-auto-auto">
                        <input type="email" name="email" placeholder="Enter Email Address" required>
                        <input type="password" name="password" placeholder="Enter Password" required>
                        <input type="submit" name="login" value="Login">
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <?php include'footer.php' ?>