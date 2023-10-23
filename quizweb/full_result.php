<?php
include("config.php");
$date=date("y-m-d h:i:s");
$_SESSION("end+_time") = date("y-m-d h:i:s", 
strtotime($date."+ $_SESSION[exam_time] minutes"));

?>
<div class="row" style="">
 <div class="col-lg-6 col-lg-push-3" style="">
   <?php
   
   $correct = 0;
   $wrong = 0;

   if(isset($_SESSION["answer"]))
   {
    for( $i=1;$i<=sizeof($_SESSION["answer"]);$i++)
    {
        $answer = "";
        $res=mysqli_query($conn,"select *from question where question = $i");
        while($row=mysqli_fetch_array($res))
        {
            $answer=$row["answer"];
        }

        if(isset($_SESSION["answer"][$i]))
        {
            if($answer == $_SESSION["answer"][$i])
            {
                $correct=$correct+1;
            }
            else{
                $wrong = $wrong+1;
            }
        }
        else{
            $wrong = $wrong+1;
        }
    }
   }
   $count=0;
   $res=mtsqli_query($conn,"select *from question where question = $i");
   $count=mysqli_num_rows($res);
   $wrong = $count-$correct;
   echo "<br>";
   echo "<br>";
   echo "<center>";
   echo "Total Question =".$count;
   echo "<br>";
   echo "Correct Answer =".$correct;
   echo "<br>";
   echo "Wrong Answer =".$wrong;
   echo "</center>";
   ?>
 </div>
</div>
<?php
if(isset($_SESSION("exam_start")))
{
  $date=date("y-m-d");
  mysqli_query($conn,"insert into exam_results(id,email,total_question,correct_answer,wrong_answer,exam_time) 
  values(NULL,'$_SESSION[email]','$count','$correct','$wrong','$date')")
}

if(ïsset($_SESSION["exam_start"]))
{
    unset($_SESSION["exam_start"]);
?>

<script type="text/javascript">
    window.location.href=window.location.href; 
</script>

<?php
}
?>