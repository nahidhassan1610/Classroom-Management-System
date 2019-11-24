<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}
.container {
    padding: 12px;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    float: left;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
    padding: 14px 20px
    width: 8%;
}

/* Add padding to container elements */
.container {
    padding: 12px;

}

/* Clear floats */

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn, {
       width: 100%;
    }
}
</style>
<body>

<h2>Signup Form</h2>

<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <br>
</br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
</br>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <br></br>
<label><b>Enter Name</b></label>
    <input type="text" placeholder="Enter Name" name="email" required>
    <br></br>
    <label><b>Phone</b></label>
<input type="text" placeholder="Enter Phone Number" name="Phone" required>
    <input type="checkbox" checked="checked"> Remember me
    

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>


<div class="container">
    <button type="submit">Sign Up</button>
  </div>
  
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="self.Close()" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
