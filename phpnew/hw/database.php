<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
</head>

<body>
      <h1>Student Admission Form</h1>
      <form method="post">
            <label>
                  First Name
            </label>
            <input type="text" name="name" id="id_name" maxlength="30" required placeholder="Enter your Name" /></br>
            <label>Gender</label>
            <input type="radio" name="gender" id="id_gender" value="male">Male
            <input type="radio" name="gender" id="id_gender" value="female">Female
            <input type="radio" name="gender" id="id_gender" value="other">other <br>
            <input type="button" value="Submit" id="submit" name="submit">
      </form>
</body>

</html> 
<?php
$servername="pgsql:host=localhost;dbname=college";
$username="postgres";
$password="postgres";
$conn=new PDO($servername,$username,$password);
if(isset($_POST['submit']))
{
$name=$_POST["name"];
$gender=$_POST["gender"];
$sql="INSERT INT student (name,gender)VALUES(('''.$name.''', '''.$gender.''')";
$conn->exec($sql);
echo "NEW record created successfully";
}
?>