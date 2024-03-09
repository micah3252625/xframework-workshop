<?php
try {
    // check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $custom->sql_safe($_POST['email']);
        $username = $custom->sql_safe($_POST['username']);
        $password = $custom->sql_safe($_POST['password']);

        // Qeury to check if username exist
        // Query to check if username exists
        $username_check_query = $db->get_var("SELECT COUNT(*) FROM system_user WHERE username = '$username'");


        if ($username_check_query > 0) {
            echo 'username_exists';
            exit; // Return early if the username already exists
        } else {
            $arr_data = array(
                'email' => $encryption->encrypt($email),
                'username' => $username,
                'password' => $encryption->encrypt($password),
            );

            // Insert the data to 'user' table
            $added_id = $sql_custom->insert_all('system_user', $arr_data);

            // Echo 'success' if user is added, else echo 'fail'
            echo $added_id > 0 ? 'success' : 'fail';
        }
    } else {
        // If the request is neither POST, DELETE, nor PUT, throw an exception
        throw new Exception("This is not a POST request");
    }
} catch (Exception $e) {
    // Catch the exception and echo the message
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
