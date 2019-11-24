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
        <div class="container">
            <h1>Classroom Management</h1>
            <div class="col-sm-12">
                <a data-toggle="modal" data-target="#addInfo" class="btn btn-default">Add</a>
                <a href="info_view.php" class="btn btn-default">View</a>
            </div>

            <div id="addInfo" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!--start Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-success text-center">Assign Information</h4>
                        </div>
                        <div class="modal-body" style="overflow: hidden">
                            <div class="col-md-12">

                                <form action="" method="post">
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Day</label>
                                    <select class="form-control" name="day" required id="exampleFormControlSelect1">
                                      <option value="">Choose Your Day</option>
                                      <option value="1">Saturday</option>
                                      <option value="2">Sunday</option>
                                      <option value="3">Monday</option>
                                      <option value="4">Tuesday</option>
                                      <option value="5">Wednesday</option>
                                      <option value="6">Thursday</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Room Number</label>
                                    <input type="text" name="room_number" required class="form-control" id="exampleInputEmail1" placeholder="Enter room number">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Time Schedule</label>
                                    <select class="form-control" name="class_time" required id="exampleFormControlSelect1">
                                        <option value="">Select your Time</option>
                                        <option value="1">8:30 AM - 10:00 AM</option>
                                        <option value="2">10:00 AM - 11:30 AM</option>
                                        <option value="3">11:30 AM - 01:00 PM</option>
                                        <option value="4">01:00 PM - 02:30 PM</option>
                                        <option value="5">02:30 PM - 04:00 PM</option>
                                        <option value="6">04:00 PM - 05:30 PM</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                      <div class="">
                                          <input type="submit" value="Save" class="btn btn-success">
                                      </div>
                                  </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!--end Modal content-->
                </div>
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