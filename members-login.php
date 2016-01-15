<?php
    // Insert the page header
    $page_title = 'Members Login';   
    require_once('header.php');

    // Define database connection constants
    require_once('connect-vars.php');

    // Include page styling
    echo "<link rel='stylesheet' href='css/login.css' type='text/css' />";  


    $error_msg = '<p class="error">Sorry, you must log in with a correct username and/or password to access this page.</p>';

    // If user isn't logged in
    if (!isset($_SESSION['user_id'])) {
        if (isset($_POST['submit'])) {
            // Connect to the database
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                or die('Error connecting to MySQL server.');

            // Grab the user-entered log-in data
            $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
            $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

            $query = "SELECT user_id, username, password, salt FROM user_list WHERE username = '$username'";
            $result = mysqli_query($dbc, $query);

            // Compare with username and passward in database
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $checkPassword = hash('SHA512', $password . $row['salt']);
                $validPassword = $row['password'];

                if ($checkPassword == $validPassword) {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30)); // Expires in 30 days
                    setcookie('username', $row['username'], time() + (60 * 60 * 24 * 30)); // Expires in 30 days

                    //redirects to homepage
                    echo '<script>location.href="index.php"</script>';
                } else {
                    // Invalid Password
                    echo $error_msg;
                }
            } else {
                // Invalid Username
                echo $error_msg;
            }
        }
   }

   if (empty($_SESSION['user_id'])) {  
?>
      <div class="login center">
         <form method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" /><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" /><br>
            <input type="submit" class="btn" value="Log In" name="submit" /> 
         </form>
      </div>
<?php
    } else {
        // Confirm successful log-in
        echo ('You are logged in as ' . $_SESSION['username'] . '</p>');
    }


    // Insert the page footer
    require_once('footer.php');
?>
