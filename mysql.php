<?php
    session_start();

    $username = "";
    $reporter = "";
    $headline = "";
    $email = "";
    $errors = array();

    $db = mysqli_connect('localhost', 'root', '', 'disaster_report');

        if(isset($_POST['reg_user'])) {
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
            $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);

            if (empty($username)) { array_push($errors, "Username is required"); }
            if (empty($email)) { array_push($errors, "Email is required"); }
            if (empty($pass1)) { array_push($errors, "Password is required"); }
            if ($pass1 != $pass2) {
                array_push($errors, "! Both passwords do not match !");
            }

            $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                if ($user['username'] === $username) {
                    array_push($errors, "Username already exists");
                  }
              
                  if ($user['email'] === $email) {
                    array_push($errors, "Email already exists");
                  }               
            }

            if (count($errors) == 0) {
                $password = md5($pass1);
                $query = "INSERT INTO user (username, email, password)
                            VALUES ('$username', '$email', '$password')";
                mysqli_query($db, $query);
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: login.php');
            }
            
        }

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: report.php');
            }else {
                array_push($errors, "Wrong Username / Password");
            }
        }
    }

    if(isset($_POST['insert_report'])) {
        $reporter = mysqli_real_escape_string($db, $_POST['reporter']);
        $headline = mysqli_real_escape_string($db, $_POST['headline']);
        $description = mysqli_real_escape_string($db, $_POST['description']);

        if (empty($reporter)) { array_push($errors, "The Name of the Reporter is required"); }
        if (empty($headline)) { array_push($errors, "The Headline (Title) of the Disaster is required"); }
        if (empty($description)) { array_push($errors, "Description is required"); }

        $report_check_query = "SELECT * FROM report WHERE reporter='$reporter' LIMIT 1";
        $result = mysqli_query($db, $report_check_query);
        $report = mysqli_fetch_assoc($result);

        if ($report) {
            if ($report['reporter'] === $reporter) {
                array_push($errors, "Only 1 report per person accepted...");
              }               
        }

        if (count($errors) == 0) {
            $query = "INSERT INTO report (reporter, headline, description)
                        VALUES ('$reporter', '$headline', '$description')";
            mysqli_query($db, $query);
            $_SESSION['reporter'] = $reporter;
            $_SESSION['success'] = "Thank You for filling out this report :)";
            header('location: about.php');
        }
        
    }
?>