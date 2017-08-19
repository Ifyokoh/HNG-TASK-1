<?php
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = '';
$db_name = 'hngtest'; 

$conn = mysql_connect($db_host, $db_user, $db_pass);
$dbselect = mysql_select_db($db_name);

if (!$conn) {
	die ('Failed to connect to MySQL');	
}

?>

<html>
    <head>
        <title>HNG TASK 1 </title>
<style>
    body {background-color:lightgray}
        div.content {
            margin: 100px auto;
            width: 50%;
            padding: 50px;
            float: center
        }
        </style>
    </head>
<body>
<div class="content">
    <form enctype="multipart/form-data" action="" method="post">
                <label><b>NAME</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text"  name="name" required></p>
                
                <label><b>REG NO</b></label>           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="regno" required></p>
                
                <label><b>COURSE</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="course" required></p>
                <button type="submit" name="submit" class="signupbtn">SUBMIT</button>
            </form>
    </div>
    <?php
        if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $regno = $_POST['regno'];
	    $course = $_POST['course'];
         
    
        $query = "INSERT INTO `users`(`name`, `regno`, `course`) VALUES ( '$name', '$regno', '$course');";
        $result = mysql_query($query); 
        
        if($result){
            echo "successfull";
        }  
        else {
             echo "Try Again"; 
          }
   }
    ?>
    </body>
</html>