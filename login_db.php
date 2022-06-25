<?php
include "conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $username = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($username)) {

        header("Location: index.php?login&error=User Name is required");

        exit();
    } else if (empty($pass)) {

        header("Location: index.php?login&error=Password is required");

        exit();
    } else {

        $sql = "SELECT * FROM user WHERE user_username = '$username' AND user_password ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_username'] === $username && $row['user_password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_username'] = $row['user_username'];

                $_SESSION['user_id'] = $row['user_id'];

                header("Location: ./admin/");

                exit();
            } else {

                header("Location: index.php?login&error=Incorect User name or password");

                exit();
            }
        } else {

            header("Location: index.php?login&error=Incorect User name or password");

            exit();
        }
    }
} else {

    header("Location: index.php");

    exit();
}
