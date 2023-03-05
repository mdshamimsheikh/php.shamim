<?php 

if(isset($_POST['submit']))
{

    $allow_ext=array('png','jpg','jpeg');
    if(!empty($_FILES['upload']['name']))
    {
        $file_name=$_FILES['upload']['name'];
        $file_size=$_FILES['upload']['size'];
        $file_tmp=$_FILES['upload']['tmp_name'];
        $target_dir="upload/$file_name";


        // get extension 

        $file_ext=explode('.',$file_name);
        $file_ext=strtolower(end($file_ext));

        // echo $file_ext;

        if(in_array($file_ext,$allow_ext))
        {
            if($file_size<=10000000)
            {

                move_uploaded_file($file_tmp,$target_dir);
                $message='<p style="color:green";>File is uploaded</p>';
            }else{
                $message='<p style="color:red";>File is larger</p>';
            }
        }else{
            $message='<p style="color:red";>Invalid file</p>';
        }
      
    }
    else{
        $message='<p style="color:red;">Chose the file</p>';
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    
Select the image:

<?php 

echo $message ?? null;

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"
method="POST" enctype="multipart/form-data">

<input type="file" name="upload">
<input type="submit" value="submit" name="submit" >



</form>





</form>



</body>
</html>