
<?php
    //----start database connection
    $con = mysqli_connect('localhost', 'root', '');
    if(!$con){  echo 'Not connected to the server'; }
    if(!mysqli_select_db($con, 'classroom')){ echo 'Database not found or connected!';}
    //----end database connection

    $select_query = "Select * FROM tbl_routine";
    $records = mysqli_query($con, $select_query);

    $day_1 = "Select * FROM tbl_routine WHERE day=1 ORDER BY time ASC";
    $day_1_row = mysqli_query($con, $day_1);

    $day_2 = "Select * FROM tbl_routine WHERE day=2 ORDER BY time ASC";
    $day_2_row = mysqli_query($con, $day_2);

    $day_3 = "Select * FROM tbl_routine WHERE day=3 ORDER BY time ASC";
    $day_3_row = mysqli_query($con, $day_3);

    $day_4 = "Select * FROM tbl_routine WHERE day=4 ORDER BY time ASC";
    $day_4_row = mysqli_query($con, $day_4);

    $day_5 = "Select * FROM tbl_routine WHERE day=5 ORDER BY time ASC";
    $day_5_row = mysqli_query($con, $day_5);

    $day_6 = "Select * FROM tbl_routine WHERE day=6 ORDER BY time ASC";
    $day_6_row = mysqli_query($con, $day_6);

?>

<!--index.html-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <melang="en"ta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Classroom Project</title>

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
        <div class="container well">

            <div class="col-sm-2">
                <b>Saturday</b><br>
                <?php
                    while($row = mysqli_fetch_array($day_1_row, MYSQLI_ASSOC)) {
                    $day = $row['day'];$room = $row['room'];$time = $row['time'];$status = $row['status'];$teacher = $row['teacher_name'];
                ?>

                <span class="btn btn-default width-110">
                    <?php
                    if($status == 1){
                        echo '<b class="text-danger">'.$teacher.'</b>'.'<br>'.'<hr class="k">';
                    } else{
                        echo '<b>'.'----'.'</b>'.'<br>'.'<hr class="k">';
                    }

                    if($day==1)
                    {
                        if($room == 1){
                            echo '401AB'.'<br>';
                        } elseif ($room == 2){
                            echo '402AB'.'<br>';
                        } elseif ($room == 3){
                            echo '501AB'.'<br>';
                        } elseif ($room == 4){
                            echo '502AB'.'<br>';
                        } elseif ($room == 5){
                            echo '503AB'.'<br>';
                        } elseif ($room == 6){
                            echo '504AB'.'<br>';
                        } elseif ($room == 7){
                            echo '601AB'.'<br>';
                        } elseif ($room == 8){
                            echo '602AB'.'<br>';
                        } elseif ($room == 9){
                            echo '603AB'.'<br>';
                        } elseif ($room == 10){
                            echo '604AB'.'<br>';
                        } elseif ($room == 11){
                            echo '605AB-LAB'.'<br>';
                        }

                        if($time == 1){
                            echo '8:30 AM - 10:00 AM'.'<br>';
                        } elseif ($time == 2){
                            echo '10:00 AM - 11:30 AM'.'<br>';
                        } elseif ($time == 3){
                            echo '11:30 AM - 01:00 PM'.'<br>';
                        } elseif ($time == 4){
                            echo '01:00 PM - 02:30 PM'.'<br>';
                        } elseif ($time == 5){
                            echo '02:30 PM - 04:00 PM'.'<br>';
                        } elseif ($time == 6){
                            echo '04:00 PM - 05:30 PM'.'<br>';
                        }

                    }
                    echo "<a href='info_change.php?id=$row[id]'> Change</a>";
                    ?>
                </span>



                <?php
                    }
                ?>
            </div>

            <div class="col-sm-2">
                <b>Sunday</b><br>
                <?php
                while($row = mysqli_fetch_array($day_2_row, MYSQLI_ASSOC)) {
                    $day = $row['day'];$room = $row['room'];$time = $row['time'];$status = $row['status'];$teacher = $row['teacher_name'];
                    ?>

                    <span class="btn btn-default width-110">
                        <?php
                        if($status == 1){
                            echo '<b class="text-danger">'.$teacher.'</b>'.'<br>'.'<hr class="k">';
                        } else{
                            echo '<b>'.'</b>'.'<br>'.'<hr class="k">';
                        }
                        if($day==2)
                        {
                            if($room == 1){
                                echo '401AB'.'<br>';
                            } elseif ($room == 2){
                                echo '402AB'.'<br>';
                            } elseif ($room == 3){
                                echo '501AB'.'<br>';
                            } elseif ($room == 4){
                                echo '502AB'.'<br>';
                            } elseif ($room == 5){
                                echo '503AB'.'<br>';
                            } elseif ($room == 6){
                                echo '504AB'.'<br>';
                            } elseif ($room == 7){
                                echo '601AB'.'<br>';
                            } elseif ($room == 8){
                                echo '602AB'.'<br>';
                            } elseif ($room == 9){
                                echo '603AB'.'<br>';
                            } elseif ($room == 10){
                                echo '604AB'.'<br>';
                            } elseif ($room == 11){
                                echo '605AB-LAB'.'<br>';
                            }

                            if($time == 1){
                                echo '8:30 AM - 10:00 AM'.'<br>';
                            } elseif ($time == 2){
                                echo '10:00 AM - 11:30 AM'.'<br>';
                            } elseif ($time == 3){
                                echo '11:30 AM - 01:00 PM'.'<br>';
                            } elseif ($time == 4){
                                echo '01:00 PM - 02:30 PM'.'<br>';
                            } elseif ($time == 5){
                                echo '02:30 PM - 04:00 PM'.'<br>';
                            } elseif ($time == 6){
                                echo '04:00 PM - 05:30 PM'.'<br>';
                            }
                        }
                        echo "<a href='info_change.php?id=$row[id]'> Change</a>";
                        ?>
                    </span>

                    <?php
                }
                ?>
            </div>

            <div class="col-sm-2">
                <b>Monday</b><br>
                <?php
                while($row = mysqli_fetch_array($day_3_row, MYSQLI_ASSOC)) {
                    $day = $row['day'];$room = $row['room'];$time = $row['time'];$status = $row['status'];$teacher = $row['teacher_name'];
                    ?>

                    <span class="btn btn-default width-110">
                        <?php
                        if($status == 1){
                            echo '<b class="text-danger">'.$teacher.'</b>'.'<br>'.'<hr class="k">';
                        } else{
                            echo '<b>'.'</b>'.'<br>'.'<hr class="k">';
                        }
                        if($day==3)
                        {
                            if($room == 1){
                                echo '401AB'.'<br>';
                            } elseif ($room == 2){
                                echo '402AB'.'<br>';
                            } elseif ($room == 3){
                                echo '501AB'.'<br>';
                            } elseif ($room == 4){
                                echo '502AB'.'<br>';
                            } elseif ($room == 5){
                                echo '503AB'.'<br>';
                            } elseif ($room == 6){
                                echo '504AB'.'<br>';
                            } elseif ($room == 7){
                                echo '601AB'.'<br>';
                            } elseif ($room == 8){
                                echo '602AB'.'<br>';
                            } elseif ($room == 9){
                                echo '603AB'.'<br>';
                            } elseif ($room == 10){
                                echo '604AB'.'<br>';
                            } elseif ($room == 11){
                                echo '605AB-LAB'.'<br>';
                            }

                            if($time == 1){
                                echo '8:30 AM - 10:00 AM'.'<br>';
                            } elseif ($time == 2){
                                echo '10:00 AM - 11:30 AM'.'<br>';
                            } elseif ($time == 3){
                                echo '11:30 AM - 01:00 PM'.'<br>';
                            } elseif ($time == 4){
                                echo '01:00 PM - 02:30 PM'.'<br>';
                            } elseif ($time == 5){
                                echo '02:30 PM - 04:00 PM'.'<br>';
                            } elseif ($time == 6){
                                echo '04:00 PM - 05:30 PM'.'<br>';
                            }
                        }
                        echo "<a href='info_change.php?id=$row[id]'> Change</a>";
                        ?>
                    </span>

                    <?php
                }
                ?>
            </div>

            <div class="col-sm-2">
                <b>Tuesday</b><br>
                <?php
                while($row = mysqli_fetch_array($day_4_row, MYSQLI_ASSOC)) {
                    $day = $row['day'];$room = $row['room'];$time = $row['time'];$status = $row['status'];$teacher = $row['teacher_name'];
                    ?>

                    <span class="btn btn-default width-110">
                        <?php
                        if($status == 1){
                            echo '<b class="text-danger">'.$teacher.'</b>'.'<br>'.'<hr class="k">';
                        } else{
                            echo '<b>'.'</b>'.'<br>'.'<hr class="k">';
                        }
                        if($day==4)
                        {
                            if($room == 1){
                                echo '401AB'.'<br>';
                            } elseif ($room == 2){
                                echo '402AB'.'<br>';
                            } elseif ($room == 3){
                                echo '501AB'.'<br>';
                            } elseif ($room == 4){
                                echo '502AB'.'<br>';
                            } elseif ($room == 5){
                                echo '503AB'.'<br>';
                            } elseif ($room == 6){
                                echo '504AB'.'<br>';
                            } elseif ($room == 7){
                                echo '601AB'.'<br>';
                            } elseif ($room == 8){
                                echo '602AB'.'<br>';
                            } elseif ($room == 9){
                                echo '603AB'.'<br>';
                            } elseif ($room == 10){
                                echo '604AB'.'<br>';
                            } elseif ($room == 11){
                                echo '605AB-LAB'.'<br>';
                            }

                            if($time == 1){
                                echo '8:30 AM - 10:00 AM'.'<br>';
                            } elseif ($time == 2){
                                echo '10:00 AM - 11:30 AM'.'<br>';
                            } elseif ($time == 3){
                                echo '11:30 AM - 01:00 PM'.'<br>';
                            } elseif ($time == 4){
                                echo '01:00 PM - 02:30 PM'.'<br>';
                            } elseif ($time == 5){
                                echo '02:30 PM - 04:00 PM'.'<br>';
                            } elseif ($time == 6){
                                echo '04:00 PM - 05:30 PM'.'<br>';
                            }
                        }
                        echo "<a href='info_change.php?id=$row[id]'> Change</a>";
                        ?>
                    </span>

                    <?php
                }
                ?>
            </div>

            <div class="col-sm-2">
                <b>Wednesday</b><br>
                <?php
                while($row = mysqli_fetch_array($day_5_row, MYSQLI_ASSOC)) {
                    $day = $row['day'];$room = $row['room'];$time = $row['time'];$status = $row['status'];$teacher = $row['teacher_name'];
                    ?>

                    <span class="btn btn-default width-110">
                        <?php
                        if($status == 1){
                            echo '<b class="text-danger">'.$teacher.'</b>'.'<br>'.'<hr class="k">';
                        } else{
                            echo '<b>'.'</b>'.'<br>'.'<hr class="k">';
                        }
                        if($day==5)
                        {
                            if($room == 1){
                                echo '401AB'.'<br>';
                            } elseif ($room == 2){
                                echo '402AB'.'<br>';
                            } elseif ($room == 3){
                                echo '501AB'.'<br>';
                            } elseif ($room == 4){
                                echo '502AB'.'<br>';
                            } elseif ($room == 5){
                                echo '503AB'.'<br>';
                            } elseif ($room == 6){
                                echo '504AB'.'<br>';
                            } elseif ($room == 7){
                                echo '601AB'.'<br>';
                            } elseif ($room == 8){
                                echo '602AB'.'<br>';
                            } elseif ($room == 9){
                                echo '603AB'.'<br>';
                            } elseif ($room == 10){
                                echo '604AB'.'<br>';
                            } elseif ($room == 11){
                                echo '605AB-LAB'.'<br>';
                            }

                            if($time == 1){
                                echo '8:30 AM - 10:00 AM'.'<br>';
                            } elseif ($time == 2){
                                echo '10:00 AM - 11:30 AM'.'<br>';
                            } elseif ($time == 3){
                                echo '11:30 AM - 01:00 PM'.'<br>';
                            } elseif ($time == 4){
                                echo '01:00 PM - 02:30 PM'.'<br>';
                            } elseif ($time == 5){
                                echo '02:30 PM - 04:00 PM'.'<br>';
                            } elseif ($time == 6){
                                echo '04:00 PM - 05:30 PM'.'<br>';
                            }
                        }
                        echo "<a href='info_change.php?id=$row[id]'> Change</a>";
                        ?>
                    </span>

                    <?php
                }
                ?>
            </div>

            <div class="col-sm-2">
                <b>Thursday</b><br>
                <?php
                while($row = mysqli_fetch_array($day_6_row, MYSQLI_ASSOC)) {
                    $day = $row['day'];$room = $row['room'];$time = $row['time'];$status = $row['status'];$teacher = $row['teacher_name'];
                    ?>

                    <span class="btn btn-default width-110">
                        <?php
                        if($status == 1){
                            echo '<b class="text-danger">'.$teacher.'</b>'.'<br>'.'<hr class="k">';
                        } else{
                            echo '<b>'.'</b>'.'<br>'.'<hr class="k">';
                        }
                        if($day==6)
                        {
                            if($room == 1){
                                echo '401AB'.'<br>';
                            } elseif ($room == 2){
                                echo '402AB'.'<br>';
                            } elseif ($room == 3){
                                echo '501AB'.'<br>';
                            } elseif ($room == 4){
                                echo '502AB'.'<br>';
                            } elseif ($room == 5){
                                echo '503AB'.'<br>';
                            } elseif ($room == 6){
                                echo '504AB'.'<br>';
                            } elseif ($room == 7){
                                echo '601AB'.'<br>';
                            } elseif ($room == 8){
                                echo '602AB'.'<br>';
                            } elseif ($room == 9){
                                echo '603AB'.'<br>';
                            } elseif ($room == 10){
                                echo '604AB'.'<br>';
                            } elseif ($room == 11){
                                echo '605AB-LAB'.'<br>';
                            }

                            if($time == 1){
                                echo '8:30 AM - 10:00 AM'.'<br>';
                            } elseif ($time == 2){
                                echo '10:00 AM - 11:30 AM'.'<br>';
                            } elseif ($time == 3){
                                echo '11:30 AM - 01:00 PM'.'<br>';
                            } elseif ($time == 4){
                                echo '01:00 PM - 02:30 PM'.'<br>';
                            } elseif ($time == 5){
                                echo '02:30 PM - 04:00 PM'.'<br>';
                            } elseif ($time == 6){
                                echo '04:00 PM - 05:30 PM'.'<br>';
                            }
                        }
                        echo "<a href='info_change.php?id=$row[id]'> Change</a>";
                        ?>
                    </span>

                    <?php
                }
                ?>
            </div>

        </div>
      </div>
       
      
     
      
           
            
          
            

          
        
      
      
      
      <!--Create Footer-->
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