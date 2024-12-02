<?php
session_start();

$invalid = false;
$userNo = false;

function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8'); // Sanitize input by trimming, removing tags, and converting special characters to HTML entities
  }
  
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {


   

    if(empty($_POST['email']) && empty($_POST['password'])){
        echo "Enter Your correct details";

    }else{    
        $email = sanitizeInput($_POST['email']);
        $password2 = sanitizeInput($_POST['password']);
           
        require 'connect.php';
        
        $sql = "SELECT id, name, password FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $haspassword = $row['password'];  // Fetch the hashed password from the database
                
                if(isset($_POST['rememberme'])){
                    $_SESSION['email'] = $email;

                    setcookie('rememberme', $_SESSION['email'], time() + (86400 * 30), "/"); // Expires in 30 days//temp set cookiess
                    }
        
        
                if (password_verify($password2, $haspassword)) {

                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $row['name'];

                     

                    //session create

                    
                    header("Location:admin/dashboard.php");// Redirect to a dashboard or homepage
                    exit();
                } else {
                    $invalid = "Invalid password.";
                }
            } else {
                $userNo = "No user found with that email.";
                
            

            }
        }
    }
?>