<?php 
	include('fakeFBdetector.php');

	$detect = new FakeFBDetector();
	$result = null;
	//Check if the ID exists
	$profile_id = $_POST['id'];
	if(isset( $profile_id )){		
		if( $detect->isFakeFacebook( $profile_id  ) ){ 
			$result = "fb falso";
		} else {
			$result = "fb real";
		}
	} 

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fake Facebook Detector By James Jara and Luis Montero</title>
<style type="text/css">
<!--
body {
	background-color: #003366;
}
.Estilo1 {
	font-size: 24px;
	color: #FFFFFF;
}
.Estilo2 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo3 {
	color: #FFCC33;
	font-weight: bold;
}
.Estilo4 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style></head>

<body>
<blockquote>
  <blockquote>
    <form id="form1" name="form1" method="post" action="">
      <table width="366" border="0" align="center" bgcolor="#5599FF">
        <tr>
          <th colspan="2" scope="col"><span class="Estilo1">Facebook Detector</span></th>
        </tr>
        <tr>
          <td width="174"><span class="Estilo2">- Enter the Profile ID:</span></td>
          <td width="176"><label>
            <input type="text" name="id" id="id" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <label>
              <input type="submit" name="button" id="button" value="Scan" />
              </label>
          </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
  </blockquote>  
  <div align="center">
    <table width="203" border="0" bgcolor="#666666">
      <tr>
        <th scope="col"><span class="Estilo3">The Result is:</span></th> 
      </tr>
      <tr>
        <td><div align="center"><?php if($result!=null) echo $result;  ?></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="60" border="3" bordercolor="#FFFFFF" bgcolor="#0033CC">
      <tr>
        <th scope="col"><p class="Estilo4">Instructions</p>
          <p class="Estilo2">- You have to go the profile that you want to scan and copy the  ID, for example:</p>
          <p class="Estilo2">http://www.facebook.com/profile.php?id=<em>100002071526995 </em></p>
          <p class="Estilo2">The Id is this number 100002071526995 </p>
          <p class="Estilo2">in other situation is:</p>
          <p class="Estilo2">http://www.facebook.com/<em>juanjose</em></p>
        <p class="Estilo2"><em></em>The Id is this juanjose</p></th>
      </tr>
    </table>
    <p class="Estilo2"><span class="Estilo4">Copyright 2012 </span></p>
  </div>
</blockquote>
</body>
</html>
