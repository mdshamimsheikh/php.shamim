
<?php

echo $_POST['name'];
echo $_POST['age'];

?>

<!-- <a href="<?php echo $_SERVER['PHP_SELF'];?>">click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<div>
<label for="name">Enter name</label>
<input type="text" name="name">
</div>

<div>
<label for="age">Enter age</label>
<input type="text" name="age">
</div>

<button type="submit" value="submit" name="submit">Submit</button>


</form> 


