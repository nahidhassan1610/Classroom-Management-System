
<?php
//----start database connection
$con = mysqli_connect('localhost', 'root', '');
if(!$con){  echo 'Not connected to the server'; }
if(!mysqli_select_db($con, 'classroom')){ echo 'Database not found or connected!';}
//----end database connection


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo $id;
}

if(isset($_POST['btn'])){
    $teacher_name = $_POST['teacher_name'];
    $id = $_POST['id'];

    $sql = "UPDATE tbl_routine SET teacher_name='$teacher_name', status='1' WHERE id='$id'";

    if(!mysqli_query($con, $sql)){
        echo 'Data not cnaged';
    } else{
        echo 'Data cnaged Successfully!';
        echo "<meta http-equiv='refresh' content='0;url=info_view.php'>";
    }



}


?>

<!--index.html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <melang="en"ta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Classroom Project </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/js/bootstrap.min.js" rel="stylesheet">
    <link href="sty.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
</head>

<body>
<!--Create Nav bar-->
<nav role="navigation" class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="images/diulogo.png" class="logo"></a>
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Routine</a></li>
                <li><a href="#">Class Room</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Manage Routine</a></li>
                <li><a href="info_page.php">Information</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--Create header-->


<div class="box" >
    <div class="container">
        <div class="col-sm-6 well">
            <form action="info_change.php" method="post">
                <div class="md-form">
                    <label for="defaultForm-pass">Teacher's Name</label>
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" name="teacher_name" id="defaultForm-pass" class="form-control" placeholder="Write teacher's name">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>

                <div class="form-group">
                    <div style="margin-top: 20px">
                        <input type="submit" name="btn" value="Assign Teacher" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">

        <div style="margin-top: 340px;">
          <p style="color: #5DADE2;font-size: 20px;">@All Rights Reserved</p> 
        </div> 
        </div>
      </div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>