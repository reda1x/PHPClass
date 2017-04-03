<!-- put your HTML here -->


<?php
include 'add-address.html.php';
include '../models/dbconnect.php';
include '../models/util.php';
require_once ('../models/dbconnect.php');
include '../models/validation.php';
if (isPostRequest()) {
    $fullname = filter_input(INPUT_POST, 'fullname');
    $email = filter_input(INPUT_POST, 'email');
    $addressline1 = filter_input(INPUT_POST, 'addressline1');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $zip = filter_input(INPUT_POST, 'zip');
    $birthday = filter_input(INPUT_POST, 'birthday');
    if (isValidEmail($email) && isValidDate($birthday) && isValidZip($zip)) {
        $db = dbconnect(); // conencting to the db

        $sql = "INSERT INTO address (fullname, email, addressline1, city, state, zip, birthday) VALUES (:fullname, :email, :addressline1, :city, :state, :zip, :birthday)"; // sql for adding to db
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':addressline1', $addressline1);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':zip', $zip);
        $stmt->bindParam(':birthday', $birthday);
        if ($stmt->execute()) {
            // checking if it was added successfuly
            ?> <h3> User Added Successfully </h3>
            <?php
        }
    } else {
        if (!isValidDate($birthday)) {
            ?> <h2> Date is Invalid </h2>
            <?php
        }
        if (!isValidEmail($email)) {
            ?> <h2> Email is Invalid </h2>
            <?php
        }
        if (!isValidZip($zip)) {
            ?> <h2> Zip is Invalid </h2>
            <?php
        }
    }
}
?>
<!-- put your HTML here -->