<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = (int)$_POST['age'];
    $address =  $_POST['address'];

    $arr_data = array(
        'name' => $name,
        'age' => $age,
        'address' => $address,
    );

    $added_id = $sql_custom->insert_all('user', $arr_data);
    
    if ($added_id > 0) {
        $_SESSION['status'] = true;
        header('Location: ' . MAIN_PAGE . urlencode($encryption->encrypt('user')));
    } else {
        $_SESSION['status'] = false;
        header('Location: ' . MAIN_PAGE . urlencode($encryption->encrypt('user-add-form')));
    }
} else {
    $_SESSION['status'] = false;
    header('Location: ' . MAIN_PAGE . urlencode($encryption->encrypt('user-add-form')));
}
