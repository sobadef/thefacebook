<?PHP
include($_SERVER["DOCUMENT_ROOT"].'/admin/classes/classes.php');		// Include local class lib
$log= new log($_SERVER["PHP_SELF"], $_GET, $_POST);

$sess = new SessionData();					// Creates session object
if(!$sess->CheckValidFBSession()){
	header('Location: login.php');
}



if($sess->CheckValidSession()){			
	header('Location: home.php');
}

if($sess->myfb<1){
	//header('Location: login.php');
}

$registersuccess=NULL;





?>
  

<html xmlns:fb="http://www.facebook.com/2008/fbml">
<style> 
 
  .title {
    color:#000000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: bold;
    text-decoration:none;
  }
  
  .larger {
    color:#000000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: none;
    text-decoration:none;
  }
 
  .larger-a {
    //color:#D19160;
    color:#538ADC;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: none;
    text-decoration:none;
  }
 
  .larger-a:hover {
    //color:#FF0000;
    color:#77C9F3;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: none;
    text-decoration:underline;
  }
  
  select {
    font-family: Tahoma;
    font-size: 11px;
  }
   
  .white {
    color:#FFFFFF;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: none;
    text-decoration:none;
  }
 
  .blue {
    color:#3B5998;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: none;
    text-decoration:none;
  } 
  
  .red {
    color:#FF0000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
 
  .menu {
    color:#FFFFFF;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
 
  .menu:hover {
    color:#77C9F3;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
 
  .alternate {
    color:#3B5998;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
 
  .alternate:hover {
    color:#000000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:underline;
  }
  
  a {
    //color:#D19160;
    color:#538ADC;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
  
  a:hover {
    //color:#FF0000;
    color:#77C9F3;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:underline;
  }
 
  .bordertable {
    border-width: 1px;
    border-color: #3B5998;
    border-style: solid;
  }
 
  .dashedtable {
    border-width: 1px;
    border-color: #3B5998;
    border-style: dashed;
  }
 
  .bottomborder {
    border-style:solid;
    border-color: #3B5998;
    border-top-width:0px;
    border-bottom-width:1px;
    border-right-width:0px;
    border-left-width:0px;
  }
 
  .one-column {
    color:#000000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
    border-style:solid;
    border-color: #3B5998;
    border-top-width:1px;
    border-bottom-width:0px;
    border-right-width:1px;
    border-left-width:1px;
  }
 
  .text {
    font-Family: Serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
  
  .td0 {
    color:#000000;
    background-color:#D9DFEA;
    border: 0;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
 
  .td1 {
    color:#000000;
    background-color:#86A1CE;
    border: 0;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }    
 
  .schedule_table {
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 1px;
    border-top-width: 1px;
    border-style: solid;
    border-color: #000000;
  }
 
  .top-border {
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 0px;
    border-top-width: 1px;
    border-style: solid;
    border-color: #3B5998;
  }
  
  .schedule {
    color:#000000;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 0px;
    border-top-width: 0px;
    border-style: solid;
    border-color:#000000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
 
  .border-td {
    color:#000000;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-width: 1px;
    border-style: solid;
    border-color:#3B5998;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
  
  td {
    color:#000000;
    border: 0;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: none;
    text-decoration:none;
  }
  
  .inputtext {
    border:double;
    border-width:1;
    border-color:#555555;
    background-color:#D9DFEA;
    font-size:11px;
    color: #000000;
    font-Family: Tahoma, Arial, Helvetica, sans-serif;
  }
  
  .inputsubmit {
    border-style:solid;
    border-top-width:1px;
    border-bottom-width:2px;
    border-right-width:2px;
    border-left-width:1px;
    border-top-color:#D9DFEA;
    border-bottom-color:#3B5998;
    border-right-color:#3B5998;
    border-left-color:#D9DFEA;
    background-color:#538ADC;
    font-family:Tahoma, arial;
    font-size:11px;
    color:#FFFFFF;
    font-weight:none;
  }
 
  <!--
  #8EA7C5 - blue
  #D9DFEA - grey
  59 89 152                (#3B5998)
  217 223 234              (#D9DFEA)
  83 138 220 - link normal (#538ADC)
  119 201 243 - link down  (#77C9F3)
  -->
  
</style><title>TheFacebook | Registration</title> 

<center> 
<table class="bordertable" cellspacing=0 cellpadding=0 border=0 width=700> 
  <tr><td> 
      <table class="bottomborder" cellspacing=0 cellpadding=0 border=0 width=100%> 
      <tr><td width=350 bgcolor=#3B5998> 
          <img src='images/logo-left.jpg'></td> 
          <td><table cellspacing=0 cellpadding=0 border=0 width=100%><tr><td> 
          <table cellspacing=0 cellpadding=0 border=0 width=100%> 
          <tr><td><a href='index.php?PHPSESSID=<?PHP echo session_id(); ?>'><img src='images/logo-right.jpg' border=0></a></td> 
          <td width=100% bgcolor=#3B5998>&nbsp;</td></tr></table></td></tr> 
          <tr><td><table cellspacing=0 cellpadding=4 border=0 width=100%><tr height=21> 
          <!--<td bgcolor=#3B5998 width=10>&nbsp;</td>--> 
 <?PHP
			
			if(!$sess->CheckValidSession()){			
				include('modules/default/topnav.php');
			}else{
				include('modules/loggedin/topnav.php');		  
			}
			?>                    <td bgcolor=#3B5998 width=100%>&nbsp;</td>  
          </tr></table></td> 
          </tr></table> 
      </td></tr></table> 
  </td></tr> 
  <tr><td><table cellspacing=0 cellpadding=2 border=0 width=100%> 
      <tr><td valign=top> 
      <table cellspacing=0 cellpadding=0 border=0 width=105> 
        <tr><td> 
                <?PHP
			
			if(!$sess->CheckValidSession()){			
				include('modules/default/leftnav.php');
			}else{
				include('modules/loggedin/leftnav.php');		  
			}
			?>
                      </td></tr> 
      </table> 
      </td><td width=595 valign=top> 
        <table class="bordertable" cellspacing=0 cellpadding=0 border=1 width=100%><tr><td> 
 
<table cellspacing=0 cellpadding=2 border=0 width=100%> 
<tr><td class='white' bgcolor=#3B5998>Registration</td></tr></table><center><table cellspacing=0 cellpadding=0 border=0 width=95%><tr><td> 
<center><table cellspacing=0 cellpadding=0 border=0 width=90%><tr><td> 
<br>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
 
</html>

</td></tr></table> 
 
 
</td></tr></table>  </td></tr></table> 
  </td></tr></table> 
  <center> 
  <?PHP include('modules/default/bottomnav.php');	?>
  </center><br> 
  </td></tr></table> 
