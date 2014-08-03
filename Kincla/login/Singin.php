<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Friece Kincla -註冊</title>
<link href="icon1.png" rel="shortcut icon">
<style type="text/css">
body,td,th {
	font-family: "微軟正黑體";
}
body {
	background-image: url(purty_wood.png);
}
a:link {
	color: #3b5998;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #3b5998;
}
a:hover {
	text-decoration: none;
	color: #3b5998;
}
a:active {
	text-decoration: none;
	color: #3b5998;
}
.cc {background-color: #036;}
</style>
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body style="font-family:'微軟正黑體';">
<script language="JavaScript">
function check(){
if(document.form3.agree.checked){
document.form3.Submit.disabled = false;}
else document.form3.Submit.disabled = true;
}
</script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<p align="center">已經有帳號了? 由此<a href="#">登入</a>您的帳號!</p>
<table width="100%" border="0">
  <tr>
    <td width="70%" rowspan="3" style="color: #FFF; font-family: '微軟正黑體'; font-size: 32px; background:url(loginACG/<?php
echo(rand(1,7));?>.jpg);"><div align="center">
      <p>Friece Kincla - 自由動態社群</p>
      <p>&nbsp;</p>
      <p>自由動態，從Friece開始，準備好開始註冊了嗎?</p>
    </div></td>
    <td width="30%" style="background-color: #2a776b; color: #FFF; font-size: 18px;"><p>Friece Kincla只接受ASIA (中文語言) 地區用戶註冊，詳情閱讀《<a href="Stery.html">FRIECE LINCLA 建站終旨</a>》</p></td>
  </tr>
  <tr>
    <td style="background-color:#FFF;"><p>電子信箱
        <label for="textfield5"></label>
      <input type="text" name="textfield" id="textfield5"  placeholder="將作為你登入時的帳號">
    </p>
      <p>密碼
        <label for="textfield6"></label>
        <input type="password" name="textfield2" id="textfield6">
      </p>
      <p>匿名
        <label for="textfield7"></label>
        <input type="text" name="textfield3" id="textfield7"  placeholder="您在網路上的匿名">
      </p></td>
  </tr>
  <tr>
    <td style="background-color:#1278b3; color:#FFF;"><p>
    <form id="form3" name="form3" method="post" action="">
        <input type="checkbox" name="agree" id="checkbox2" onchange="check()" >
        同意規範，包含所有Friece Kincla的建站守則與法律責任。 而且我是亞洲人！
      </label>
    </p>
      <p>&nbsp; </p>
     <div align="center"><button style="
    outline: none;" name="Submit" class="btn btn-large btn-success" type="button" disabled="disabled">註冊</button>
   </div>
    </form></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">嚴格實施控管亞洲中文地區用戶註冊Friece Kincla自由動態社群，請勿跨區申請註冊!</p>
<p align="center">Firece Kincla Power by ASIA CHONSIN PRO TEAM,</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">Partners, Microsoft、Jerneh Studio、Youtop.INC, 、Azstack Development Team. Chonsin pro team.</p>
</body>
</html>