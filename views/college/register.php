<?php require '../../core/College.php';

if (isset($_POST['submit'])) {
    if (empty($_POST['txtName'])) {
        $msg = 'Please enter college name';
    } else {

        $txtName = $_POST['txtName'];
        $txtPhone = $_POST['txtPhone'];

        $college = new College();
        $college->setName($txtName);
        $college->setPhone($txtPhone);
        $is_success = $college->register($college);
        if ($is_success == true) {
            $msg = "Record saved successfully.";
        } else {
            $msg =  "Sorry, Something went wrong. Try again.";
        }
    }
    echo $msg;
}
