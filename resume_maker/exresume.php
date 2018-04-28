<!DOCTYPE html>
<html>
<head>
<title>biodata</title>
</head>
<body style="background-color:grey" ><b>
<h1>RESUME MAKER</h1>

<form action="resume.php" enctype="multipart/form-data" method="post" autocomplete="on" accept="image/gif, image/jpeg">
<br>
<fieldset>
<legend>Personal Information:</legend><br>
Name: <input type="text" name="name" "required"><br>
Roll number: <input type="text" name="rollnumber"><br>
Date of birth: <input type="date" min="1979-12-31" max="2000-01-02" name="dateofbirth"><br>
</fieldset>
<br>
<fieldset>
<legend>Contact details</legend>
<br>
Address:<br>
<textarea name="address" rows="5" cols="75">Enter your address here</textarea><br>
Mobile Number: <input type="text" name="mobilenumber"><br>

E-mail id: <input type="email" name="emailid"><br>
</fieldset>
<br>
<fieldset>
<legend>Education:</legend>
<br>
Semester: <input type="text" name="semester"><br>
SGPA1: <input type="number" name="sgpa1" min="1" max="10" step="0.1"><br>
SGPA2: <input type="number" name="sgpa2" min="1" max="10" step="0.1"><br>
SGPA3: <input type="number" name="sgpa3" min="1" max="10" step="0.1"><br>
SGPA4: <input type="number" name="sgpa4" min="1" max="10" step="0.1"><br>
SGPA5: <input type="number" name="sgpa5" min="1" max="10" step="0.1"><br>
SGPA6: <input type="number" name="sgpa6" min="1" max="10" step="0.1"><br>
SGPA7: <input type="number" name="sgpa7" min="1" max="10" step="0.1"><br>
SGPA8: <input type="number" name="sgpa8" min="1" max="10" step="0.1"><br>
CGPA(round to nearest integer): 
<select name="cgpa">
<option value="10">10</option>
<option value="9">9</option>
<option value="8">8</option>
<option value="7">7</option>
<option value="6">6</option>
<option value="5">5</option>
<option value="<5">less than 5</option>
</select>

</fieldset>
<br>
<fieldset style=" border:none;">
Hobbies:<br> 
<textarea name="hobbies" rows="5" cols="75">Enter your hobbies here</textarea><br>
<br>
Mode of accomodation: <input type="radio" name="mode" value="Hosteller">Hosteller<input type="radio" name="mode" value="Dayscholar"> Day scholar<br>
</fieldset><br>
<fieldset>
<legend>References:</legend>
<br>
Reference 1 
<br> <textarea name="reference1" rows="5" cols="75"></textarea><br>
Reference 2
<br>  <textarea name="reference2" rows="5" cols="75"></textarea><br><br>
</fieldset>
<br>
<fieldset>  Photo upload  :   <input type="file" name="pic" id="pic"></fieldset><br><br>
<div> 
<input type="submit" value="submit" style="width: 300px; margin: 0 auto;"  onclick="alert('Kindly check if the details entered are correct. click OK to continue to finishing your resume.')"></div>
</form>
</b>

</body>
</html>

