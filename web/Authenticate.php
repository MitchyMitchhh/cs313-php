
<?php 

ini_set('session.cookie_lifetime', 60 * 60);

session_start(); 

require("dbConnect.php");

function login($loginname, $password) {
  
  $db = get_db(); 
  $sql = "SELECT user.id, user.loginname, users.password 
          FROM user
          WHERE user.loginname = :loginname";
  $query = $db->prepare($sql); 
  $query->bindValue(':loginname', $loginname, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetch(PDO::FETCH_ASSOC); 
   
  if (password_verify($password, $results["password"])) {
    $_SESSION["userId"] = $results["id"];
    $_SESSION["loginName"] = $results["loginname"]; 
    
    header("Location: ViewGame.php");
    die(); 
  } else {
    header("Location: login.php"); 
    die(); 
  }
} 

try {
  $loginname = $_POST["loginname"]; 
  $password = $_POST["password"];
  login($loginname, $password); 
} catch (PDOException $ex) {
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?> 
