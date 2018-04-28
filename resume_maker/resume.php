<html>
<head>
</head>
<body style="font-size:20px;background-color:grey;">
<thankyou>
THANK YOU..... <?php echo $_POST["name"]; ?>!!!<br>
YOUR RESUME IS CREATED:)<br>
</thankyou>
<br>
<br>
Name: <?php echo $_POST["name"]; ?><br>
<br>
Roll number: <?php echo $_POST["rollnumber"]; ?><br><br>
Date of birth: <?php echo $_POST["dateofbirth"]; ?><br><br>
Address: <?php echo $_POST["address"]; ?><br><br>
Mobile Number:  <?php echo $_POST["mobilenumber"]; ?><br><br>
E-mail id: <?php echo $_POST["emailid"]; ?><br><br>
Semester: <?php echo $_POST["semester"]; ?><br><br>
SGPA1: <?php echo $_POST["sgpa1"]; ?><br>
SGPA2: <?php echo $_POST["sgpa2"]; ?><br>
SGPA3: <?php echo $_POST["sgpa3"]; ?><br>
SGPA4: <?php echo $_POST["sgpa4"]; ?><br>
SGPA5: <?php echo $_POST["sgpa5"]; ?><br>
SGPA6: <?php echo $_POST["sgpa6"]; ?><br>
SGPA7: <?php echo $_POST["sgpa7"]; ?><br>
SGPA8: <?php echo $_POST["sgpa8"]; ?><br><br>
CGPA: <?php echo $_POST["cgpa"]; ?><br><br>
Hobbies: <?php echo $_POST["hobbies"]; ?><br><br>
Hosteller or Day scholar: <?php echo $_POST["mode"]; ?><br><br>
Reference 1: <?php echo $_POST["reference1"]; ?><br><br>
Reference 2: <?php echo $_POST["reference2"]; ?><br><br>
Photo upload:
<?php
$photo=$_FILES["pic"]["name"];
if(move_uploaded_file($_FILES["pic"]["tmp_name"], $photo))
 {
   echo "<img src=\"".$photo."\" width=\"200px\" height=\"200px\"\\><br>";
 }
else
  echo "Upload failed";
 ?>
<hr>
<p>Retrieve  CV <a href="search1.php">here</a></p>
<p>Go to home page<a href="exresume.php">here</a></p>

<?php
$name=$_POST['name'];
$rno=$_POST['rollnumber'];
$email=$_POST['emailid'];
$dob=$_POST['dateofbirth'];
$addr=$_POST['address'];
$mob=$_POST['mobilenumber'];
$sem=$_POST['semester'];
$s1=$_POST['sgpa1'];
$s2=$_POST['sgpa2'];
$s3=$_POST['sgpa3'];
$s4=$_POST['sgpa4'];
$s5=$_POST['sgpa5'];
$s6=$_POST['sgpa6'];
$s7=$_POST['sgpa7'];
$s8=$_POST['sgpa8'];
$cgpa=$_POST['cgpa'];
$hobbies=$_POST['hobbies'];
$mod=$_POST['mode'];
$ref1=$_POST['reference1'];
$ref2=$_POST['reference2'];





$fp=fopen("form.txt","a");
$savestring=$rno.",".$name.",".$dob.",".$addr.",".$mob.",".$email.",".$sem.",".$s1.",".$s2.",".$s3.",".$s4.",".$s5.",".$s6.",".$s7.",".$s8.",".$cgpa.",".$hobbies.",".$mod.",".$ref1.",".$ref2.","."\n";
fwrite($fp,$savestring);
fwrite($fp,$photo."\n");
fclose($fp);
echo"<h1>......YOUR DATA IS RECORDED......</h1>";
?>
</body>
</html> 
