<?php
      //Connect to MySQL
    require_once("../database/connect.php");
      if (isset($_POST["submitAdd"])) {               //process this block if submitted from the Add Student page
        $pananaw = $_POST["pananaw"];
        $category = $_POST["voter"];
       
        
        
        $query = "INSERT INTO post_feedbacks(Feedback, Name) VALUES ('$pananaw','$category')";
         
          //Insert new student into MySQL
        if ($conn->query($query) === TRUE) {
?>
<script>
    alert('Successfully Post!Thank You!');
    window.location.href='../index.php';
</script>
<?php
    } else {
?>
<script>
    die ("Insert failed: ". $conn->error);
    alert('Error while sending information of your feedback, kindly check the information that you inputted. Thank You!');
    window.location.href='../index.php';
</script>
<?php
        die ($conn->error);
      }
    }
     
?>