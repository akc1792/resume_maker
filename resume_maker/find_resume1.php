<html>
<body style="font-size:20px;">

<?php

$fp=fopen("form.txt","r") or die("Unable to open file!");

$filecontents = file_get_contents('form.txt');
$rno=$_POST['rollnumber'];

while(!feof($fp)) {
  $sent= fgets($fp);
  $st=$sent;
  $words = (explode(",",$sent));
  if ($words[0]==$rno){
     echo "Name: $words[1] <br>";
     echo "Roll No: $words[0]<br>";
     echo "Date of Birth: $words[2]<br>";
     echo "Address: $words[3]<br>";
     echo "Mobile Number: $words[4]<br>";
     echo "Email Id: $words[5]<br>";
     echo "Semester: $words[6]<br>";
     echo "SGPA 1: $words[7]<br>";
     echo "SGPA 2: $words[8]<br>";
     echo "SGPA 3: $words[9]<br>";
     echo "SGPA 4: $words[10]<br>";
     echo "SGPA 5: $words[11]<br>";
     echo "SGPA 6: $words[12]<br>";
     echo "SGPA 7: $words[13]<br>";
     echo "SGPA 8: $words[14]<br>";
     echo "CGPA : $words[15]<br>";
     echo "Hobbies: $words[16]<br>";
     echo "Hosteller or Day scholar: $words[17]<br>";
     echo "Reference 1: $words[18]<br>";
     echo "Reference 2: $words[19]<br>";
     $photo=fgets($fp);
     echo "<img src=\"".$photo."\" width=\"200px\"height=\"200px\"\\><br>";


}
}
fclose($fp);


?>

</body>
</html> 
