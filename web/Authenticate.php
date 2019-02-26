
<?php 

ini_set('session.cookie_lifetime', 60 * 60);

session_start(); 

require("dbConnect.php");

function login($loginname, $password) {
  
  $db = get_db(); 
  $sql = "SELECT public.user.id, public.user.loginname, public.user.password 
          FROM public.user
          WHERE public.user.loginname = :loginname";
  $query = $db->prepare($sql); 
  $query->bindValue(':loginname', $loginname, PDO::PARAM_STR);
  $query->execute();
  
  $queryResults = $query->fetch(PDO::FETCH_ASSOC); 

  //echo "password", $password, "rpassword", $queryResults["password"];
   
  if (password_verify($password, $queryResults["password"])) {
    $_SESSION["userId"] = $queryResults["id"];
    $_SESSION["loginName"] = $queryResults["loginname"]; 
    //echo "userID", $_SESSION["userId"];
    //echo "loginname", $_SESSION["loginName"]; 
    header("Location: ViewGame.php");
    die(); 
  } else {
    header("Location: Login.php");
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
