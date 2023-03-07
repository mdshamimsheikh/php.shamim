<?php
session_start();

if(isset($_POST['submit']))
{
    $username=filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password=$_POST['password'];

    if($username=='Shamim' && $password=='pass1234')
    {
        $_SESSION['username']=$username;
        header('location: /shamim_php/crock/dashboard.php');
    }
    else{
        echo '<p style="color:red";>Incorrect login</p>';
    
    }
}

?>


<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);?>"
method="POST">


<div>
<label for="username">Userame :</label>
<input type="text" name="username">
</div>

<div>
<label for="password">Password:</label>
<input type="password" name="password">
</div>

<div>
<label for="role"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?>Role:</label>
<select name="role" id="role">
       <optgroup label="Choose your role!" value="Choose">

       <option value="Select your role">Coordinator</option>
       <option ">Student</option>
       <option>Teacher</option>
    
    </optgroup>
  </select>
</div>

 <button type="submit" value="submit" name="submit" style="background-color:blue;">Login</button>



</form>


