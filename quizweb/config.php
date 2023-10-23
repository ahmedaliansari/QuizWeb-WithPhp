<?php
session_start();
class connect{
  public $con;
  public function __construct(){
    $this->con= mysqli_connect("localhost","root","","quizweb");
    if($this->con){
        // echo  "connected";
    }
    else "not";
}
public function dataquery($query){
  return $this->con->query($query);
} 

public function login($email,$pass){
  $q = $this->con->query("select *from registration where email ='$email' AND password = '$pass'");
  if($q->num_rows > 0){
    $row = mysqli_fetch_assoc($q);
    $_SESSION ["id"] = $row["id"];
    $_SESSION ["name"] = $row["name"];
    $_SESSION ["email"] = $row["email"];
    $_SESSION ["password"] = $row["password"];
    header("location:profile.php");
  }
}
}
$obj = new connect;

?>
<?php
$conn = mysqli_connect('localhost','root','','quizweb');
?>

