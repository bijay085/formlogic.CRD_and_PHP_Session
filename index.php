<?php 
/**#1 If POST Method, and hash (self link) on action 
 * Taking data on the top of self form page having hash on action.
*/
    //form data retriving
    $form_data = $_POST; //retrieving data (single line & multiline)
    //if POST method on form, use FILES method to get file field separately
    $form_file = $_FILES; //retireving data (file, multi attribute)
    //check
    echo "<pre>";
    print_r($form_data); //checking output
    print_r($form_file); //checking output
    echo "</pre>";
/**#2 If GET Method */
    //There is not FILES separately
    //Retrieving data
    //$form_data_get = $_GET; //it gives file field name (with file name with type: ie. abc.jpg) only
    // echo "<pre>";
    // print_r($form_data_get); //checking output
    // echo "</pre>";
/**#3 Summary:  - POST method sends form data making hidden on URL (Secure),
 *              - GET method sends form data making visisble on URL (Not secure)
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Form -> Validation -> Logic -> DB </h1>
    <div class="form-box">
        <div class="form-box__header">
            <h2 class="form-box__title">Register User</h1>
            <div class="text-container">
                <p>Your information will not be missused.</p>
            </div>
        </div>
        <!-- Submission using extra file than form page: 
            i.e.: signup.php, then use PSOT method   -->
        <form action="signup.php" method="POST" name="register" enctype="multipart/form-data" novalidate>
            <div class="field-group">
                <label for="fullname">Full Name<span class="mendatory">*</span></label>
                <input type="text" name="fullname" id="fullname" value="">
                <span class="error"></span>
            </div>
            <div class="field-group">
                <label for="email">E-Mail<span class="mendatory">*</span></label>
                <input type="text" name="email" id="email" value="">
                <span class="error"></span>
            </div>
            <div class="field-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="">
                <span class="error"></span>
            </div>
            <div class="field-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="">
            </div>
            <div class="field-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" value="">
            </div>
            <div class="field-group">
                <label for="bio">Bio<span class="mendatory">*</span></label>
                <textarea name="bio" id="bio"></textarea>
                <span class="error"></span>
            </div>
            <button type="submit" name="submit">Register Now</button>
        </form>
    </div>

    <script src="script.js" type="text/javascript"></script>
</body>
</html>