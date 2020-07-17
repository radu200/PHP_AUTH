<?php
// State variables
$form_is_submitted = false;
$errors_detected = false;

// Arrays to gather data
$clean = array();
$errors = array();

// Validate form if it was submitted
if (isset($_POST['submit_user'])) {
    
    echo 'submited';
//     $form_is_submitted = true;
    
//     // First name is a required field
//     if (isset($_POST['firstname'])) {
//         $name_in = trim($_POST['firstname']);
//         $length = strlen($name_in);
//         if ($length >= 1) {
//             $clean['firstname'] = $name_in;
//         } else {
//             $errors_detected = true;
//             $errors[] = 'First name is required';
//         }
//     } else {
//         $errors_detected = true;
//         $errors[] = 'First name not submitted';
//     }
    
//     // Favourite number must be a whole number greater than 0
//     if (isset($_POST['favourite'])) {
//         $favourite_in = trim($_POST['favourite']);
//         if (ctype_digit($favourite_in) && $favourite_in > 0) {
//             $clean['favourite'] = $favourite_in;
//         } else {
//             $errors_detected = true;
//             $errors[] = 'Favourite number should be a whole number greater than 0';
//         }
//     } else {
//         $errors_detected = true;
//         $errors[] = 'Number not submitted';
//     }

// }

// // Collect output in a variable, tidier than multiple "echo" calls
// $output = '';

// // Decide whether to process data or (re)display form
// if ($form_is_submitted === true && $errors_detected === false) {
    
//     // Submission was OK, so display thank-you message
//     $output .= '<p>Thanks, we will remember you!</p>';

// } else {
    
//     // Display error messages, if there are any
//     if ($errors_detected === true) {
//         $output .= '<p>Sorry, we found some errors with your data:</p>';
//         $output .= '<ul>';
//         foreach ($errors as $reason) {
//             $output .= '<li>'.htmlentities($reason).'</li>';
//         }
//         $output .= '</ul>';
//     }
    
//     // data to redisplay in the form...
//     if (isset($clean['firstname'])) {
//         $html_firstname = htmlentities($clean['firstname']);
//     } else {
//         $html_firstname = '';
//     }
	
//     // data to redisplay in the form...
//     if (isset($clean['favourite'])) {
//         $html_favourite = htmlentities($clean['favourite']);
//     } else {
//         $html_favourite = '';
//     }
	
//     // Sanitise the current URL for use in the "action" attribute of form
//     $self = htmlentities($_SERVER['PHP_SELF']);

    // // display the form, with valid data (if there is any)
    // $output .= '<form action="' . $self . '"method="post">
    //         <fieldset>
	// 			<legend>Your details</legend>
                
    //             <div>
    //                 <label for="fn">What is your first name?</label>
    //                 <input type="text" name="firstname" id="fn" value="' . $html_firstname . '" />
    //             </div>

    //             <div>
    //                 <label for="fav">What is your favourite number?</label>
    //                 <input type="text" name="favourite" id="fav" value="' . $html_favourite . '" />
    //             </div>

    //             <input type="submit" name="submitdetails" value="Remember Me!" />

    //         </fieldset>
    //     </form>';

    $output = '
            <form>
                <div class="form-group">
                    <label for="user_title">Title</label>
                    <input type="text" name="title" id="user_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fn">First Name</label>
                    <input type="text" name="first_name" id="fn" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ln" >Surname</label>
                    <input type="text" name="surname" id="ln" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email1" >Email address</label>
                    <input type="email" name="email"  id="email1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="un" >Username</label>
                    <input type="text" name="username" id="un" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pws" >Password</label>
                    <input type="password" name="password" id="psw" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit_user" class="btn btn-primary w-100">Add</button>
                </div>
            </form>';

}

// Echo gathered output from script
echo $output;
?>
