
<!DOCTYPE >
<html >
<head>
<title>Bai 1</title>
</head>
<script type="text/javascript">
function kiemtra(){
  var msv=document.getElementById('msv').value;
  var hoten=document.getElementById('hoten').value;
  var sdt=document.getElementById('sdt').value;
  var email = document.getElementById('email').value;
  if(msv=="")
    {
      alert("Hay nhap msv");
      return false;
    }
    else
    {
          var patten0 = /[311]+([0-9]{7})$/;
          if (patten0.test(msv )==false) 
      {
              alert('Msv ko hop le');
              msv.focus;
              return false;
          }
    }
  if (hoten=="")
    {
      alert("Hay nhap ho va ten");
      return false;
    }
    else
    {
          var patten1 =   /^[a-zA-Z0-9_\.\-]\D/;
          if (patten1.test(hoten )==false) 
      {
              alert('Ho ten khong chua cac ky tu dac biet va so');
              hoten.focus;
              return false;
          }
    }
  if (sdt=="")
    {
      alert("Hay nhap so dien thoai.");
      return false;
    }
    else
    {
          var patten2 = /((09|03|07|08|05)+([0-9]{8})\b)/g;
          if (patten2.test(sdt )==false) 
      {
              alert('Sdt ko hop le');
              sdt.focus;
              return false;
          }
    }
  if (email=="")
    {
      alert("Hay nhap email.");
      return false;
    }
    else
    {
          var patten3 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if (patten3.test(email )==false) 
      {
              alert('Email ko hop le');
              email.focus;
              return false;
          }
    }
    
}
function clear(){
  location.reload();
}
</script>
<body>

<form onsubmit="kiemtra()" method="post">
<table width="400" border="3" >
  <tr  >
    <td colspan="2" align="center"  >ĐĂNG KÝ THANH VIEN</td>
  </tr>
  <tr>
    <td>MÃ SV</td>
    <td><input type="text" id="msv" size="40"/></td>
  </tr>
  <tr>
    <td>HỌ TÊN</td>
    <td><input type="text" id="hoten" size="40"/></td>
  </tr>
  <tr>
    <td>NGÀY SINH</td>
    <td>
      <select id="day">
        <script>
      for(var i=1; i<32;i++)
      {
        document.getElementById('day').innerHTML += "<option value='"+i+"'>"+i+"</option>";
      }
    </script>
        </select>
        <select id="month">
        <script>
      for(var i=1; i<13;i++)
      {
        document.getElementById('month').innerHTML += "<option value='"+i+"'>"+i+"</option>";
      }
    </script>
        </select>
        <select id="year">
        <script>
      for(var i=1919; i<2000;i++)
      {
        document.getElementById('year').innerHTML += "<option value='"+i+"'>"+i+"</option>";
      }
    </script>
        </select>
      (ngày, tháng, năm)
    </td>
  </tr>
  <tr>
    <td>SĐT</td>
    <td><input type="text" id="sdt" size="40"/></td>
  </tr>
  <tr >
    <td>EMAIL</td>
    <td><input type="text" id="email" size="40"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center" ><input type="submit" id="đangky" value="ĐĂNG KÝ" />
            <input type="button" id="nhaplai" value="NHẬP LẠI"  onclick="xoatrang()"/></td>
  </tr>
</table>
</form>
</body>
</html>