  <?php include 'functions.php' ?>
  <?php include 'header.php' ?>

    <?php

    if (isset($_POST['signup'])) {
      $data = $_POST;
      $user_exists = email_exists($data['email']);
      if ($user_exists) {
        $response = [
          'type' => 'error',
          'message' => 'Email is Already Taken!',
        ];
      } else {
        if ($data["password"] == $data["cpassword"]) {
          $data["type"] = 'user';
          $user = signup($data);
          if ($user) {
            $response = [
              'type' => 'success',
              'message' => 'User Registered Successfully!',
            ];
            login($data);
          } else {
            $response = [
              'type' => 'error',
              'message' => 'Some Error Occured!',
            ];
          }
        } else {
          $response = [
            'type' => 'error',
            'message' => 'Passwords should match!',
          ];
        }
      }
    }

    ?>
        <div class="home-banner container flex">
            <div class="w-50 content">
                <h1>Register</h1>
                <p class="w-80">Register to the website using the form in order to purchase a beverage</p>
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>
            <div class="w-50 flex justify-center">
                <div class="form">
                <?php if (isset($response)) { ?>
                        <div class="message-box <?= $response['type'] ?>">
                            <p><?= $response['message'] ?></p>
                        </div>
                <?php } ?>
                    <form action="?" method="POST" class="w-80 margin-auto-auto">
                        <input type="text" name="fname" placeholder="Enter Full Name" required>
                        <input type="text" name="lname" placeholder="Enter Full Name" required>
                        <input type="email" name="email" placeholder="Enter Email Address" required>
                        <input type="password" name="password" placeholder="Enter Password" required>
                        <input type="password" name="cpassword" placeholder="Enter Confirm Password" required>
                        <input type="submit" name="signup" value="Register">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include'footer.php' ?>