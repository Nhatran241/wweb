<!DOCTYPE html>
<html>
<head>
	<title>Bai tap 1</title>
</head>
<body>
	<form>
		<label>MaSV</label>
		<input id="email" type="text" name="masv">
		<br>

		<label>HoTen</label>
		<input type="text" name="hoten">
		<br>
		<input type="button" name="" value="Dang ky" onclick="kiemtra()">

	</form>
	<script> 

	function kiemtra() { 
    var email = document.getElementById('email'); 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    if (!filter.test(email.value)) { 
             alert('Hay nhap dia chi email hop le.\nExample@gmail.com');
             email.focus; 
             return false; 
    }
    else{ 
             alert('OK roi day, Email nay hop le.'); 
    } 
} 
</script>
</body>
</html>