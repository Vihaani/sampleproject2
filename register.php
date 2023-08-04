<?php include("head.html")
?>

<body>
<div id="register">
<form action="connect.php" method="post">

<label for="name">NAME</label>
<input type="text" name="n" placeholder="Enter ur name" size="40" required/>
<br><br>

<label for="dob">DOB</label>
<input type="date" name="o">
<br><br>

<label for="gender">GENDER</label>
<input type="radio" value="male" name="g"/>MALE
<input type="radio" value="female" name="g"/>FEMALE
<br><br>

<label for="phonenumber">MOBILENUMBER</label>
<input type="number" name="m" placeholder="Enter ur mobilenumber">
<br><br>

<label for="email">EMAIL</label>
<input type="email" name="e" placeholder="Enter ur email">
<br><br>

<label for="password">PASSWORD</label>
<input type="password" name="p" placeholder="Enter ur password">
<br><br>

<label for="dept">DEPT</label>
<select name="s">
<option value="civil">CIVIL</option>
<option value="ece">ECE</option>
<option value="cse">CSE</option>
<option value="eee">EEE</option>
</select>
<br><br>

<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">
</div>
</form>
</body>
<?php include("foot.html")
?>