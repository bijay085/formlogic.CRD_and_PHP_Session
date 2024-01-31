<?php
/** Including files:
 * - require() //mendataory one time 
 * - require_once() //mendatory on every execution
 * - include() //just include on every execution, 
 *              if error exists, don't block further 
 * - include_once() //just include one time, 
 *                  if error exists, don't block further 
 */
include "connection.php";

//Check submit button clicked or not, first. 
if(isset($_POST['submit'])) {
    /**#1 Test form submission */
    // echo "<pre>";
    // print_r($_POST);
    // var_dump($_FILES);
    // echo "</pre>";
    /**#2 Data collection first */
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $bio = $_POST['bio']; //quotation may be single or double but uniform
    $photo = $_FILES['photo'];
    $photo_name = $_FILES['photo']['name'];
    //File handling to upload on project root
    // print_r($_FILES);
    if($_FILES['photo']['error'] == 0){
        //check for type
        $mimetypes = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
        if(in_array($_FILES['photo']['type'], $mimetypes)) {
            //upload image
            if(move_uploaded_file($_FILES['photo']['tmp_name'], 'public/' . $_FILES['photo']['name'])) {
                echo "Image uploaded";
            } else {
                echo "Image can not be uploaded.";
            }
        } else {
            echo "Image type is invalid.";
        }
    } else {
        echo "Image upload error.";
    }

    /**#3 Now we require database to resolve CRUD operation according to DBMS 
     * Note: Lets create connection.php file for database connection query
    */

    /**Two way of putting values on query */
    // $sql = "INSERT INTO users VALUES('All values according to fields should exists.');";
    // $sql = "INSERT INTO users(Columns) VALUES('values according to listed columns');";
    $sql = "INSERT INTO users(fullname, email, phone, address, bio, photo) VALUES('$fullname', '$email', '$phone', '$address', '$bio', '$photo_name');"; //statement is ready
    $result = mysqli_query($conn, $sql); //Execution of query
    if($result) {
        echo "User inserted successfully.";
    } else {
        echo "User is not inserted.";
    }
} else {
    header("location: /formlogic"); // '/formlogic' symbol handle the index.php of project form practic folder named 'formlogic' where our register form exists.
}