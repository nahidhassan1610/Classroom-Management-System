<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text]  {
    width: 40%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
}

input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: 8%;
    padding: 14px 20px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 20px 0 12px 0;
    background: transparent;
}

img.diu {
    width: 20%;
    border-radius: 22%;
    background: transparent;
}

.container {
    padding: 12px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Login Form</h2>

<form action="index.php" method="POST">
  <div class="imgcontainer">
    <img src="diu1.png" alt="" class="diu">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="user" name="user" required>
    <br>
</br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="pass" name="pass" required>
        <br>
    </br>
    <input type="checkbox" checked="checked"> Remember me
    <br>
</br>
    <button type="submit" id="btn" value="login">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

</form>

<a href="SignUp.html" target="_blank">Sign Up</a>

</body>
</html>
