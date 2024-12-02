
<?php
session_start();
$invalidEmail = false;


function hashPassword($password) {
  return password_hash($password, PASSWORD_DEFAULT);// Hash the password using a strong algorithm
}

function sanitizeInput($data) {
  return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8'); // Sanitize input by trimming, removing tags, and converting special characters to HTML entities
}

require 'connect.php';
//To insert data to database...



function insertData($name,$email,$hashpassword){
  global $conn ;
  $sqlmail = "SELECT email FROM users WHERE email = '$email'"; // check pre-Exists email in database....
  $resultMail = mysqli_query($conn,$sqlmail);
   if(mysqli_num_rows($resultMail)>0){
   return "This email address already exists in the database.";
}else{
      $insertsql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashpassword')"; // Inseting data after all data validations....

      if(mysqli_query($conn,$insertsql)){
      $user_id = mysqli_insert_id($conn);
      $_SESSION['user_id'] = $user_id;
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $hashpassword;
      echo "Signup successful! Session started.";
      header("Location: sign-in.php");    // Redirect to a welcome pageexit();
      }else{
        echo "Error: " . mysqli_error($conn);
      }

    }
}

$name = $email = $password = $hashedPassword = "";
$nameErr = $emailErr = $passwordErr = "";

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['signup'])) {

  //Name Validation
  if (empty($_POST['name'])) {
    $nameErr = "Name is required.";
} else {
    $name = sanitizeInput($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and whitespace allowed.";
    }
  }

  //Email Validation...

  if (empty($_POST['email'])) {
    $emailErr = "Email is required.";
} else {
    $email = sanitizeInput($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
    }
}

//Pasword Validation...

// Validate password
if (empty($_POST['password'])) {
  $passwordErr = "Password is required.";
}
else{
    $password = sanitizeInput($_POST['password']); //senitize values
    $errors = [];
    // Validate password
    if (strlen($password) < 8) {
      $errors[] = "Password must be at least 8 characters long.";
  }
  if (!preg_match("/[A-Z]/", $password)) {
      $errors[] = "Password must contain at least one uppercase letter.";
  }
  if (!preg_match("/[a-z]/", $password)) {
      $errors[] = "Password must contain at least one lowercase letter.";
  }
  if (!preg_match("/\d/", $password)) {
      $errors[] = "Password must contain at least one digit.";
  }
  if (!preg_match("/[@#$%&*]/", $password)) {
      $errors[] = "Password must contain at least one special character.";
  }
  if (strlen($password) > 20) {
      $errors[] = "Password must not exceed 20 characters.";
  }
    foreach($errors as $errorNote)
    {
      echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>$errorNote</strong>
  <button type='button' class='close btn btn-dark' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }

    if(empty($errors)){ 
      $hashedPassword = hashPassword($password);
    }
}
// If no errors, insert data
 if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($errors)) {
  $insertResponse = insertData($name, $email, $hashedPassword);

   } 
 
  // if (!empty($insertResponse)) {
  //     echo $insertResponse; // Display any error messages from insertData
  // }

}

?>