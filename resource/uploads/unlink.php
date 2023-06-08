<?php
require "../../connect.php"; //database connect

if (isset($_POST['delete']))
{
	$file = $_POST['file_name'];
	$id = $_POST['file_id'];
	
	$sql = "DELETE FROM filelist WHERE file_id = $id";
	
	$deleted = mysql_query($sql) or die(mysql_error());
	
	$dir = "../uploaded/$file";
	//include "../uploaded/unlink.php";
	//echo $file;
	unlink("../uploaded/$file");
}

if($deleted){
//echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
?>


<head>
<link href="../default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="menu">
	</div>
</div>
<div id="content"><div class="inner_copy"><div class="inner_copy"></div></div>
<div id="colOne">
<br />
</div>
  <div id="colTwo">
	  <div id="welcome">
            <h2>Processing your Request <br /></h2>
            <h3>Please wait a moment...</h3>
            <form name="redirect">
		<input type="hidden" name="redirect2" />
		<script language=javascript>
			<!--
				var targetURL="../"
				var countdownfrom=3
				var currentsecond=document.redirect.redirect2.value=countdownfrom+1
				function countredirect()
				{
					if (currentsecond!=1)
					{
						currentsecond-=1
						document.redirect.redirect2.value=currentsecond
					}
					else
					{
						window.location=targetURL
						return
					}
					setTimeout("countredirect()",1000)
				}
				countredirect()
			//-->
		</script>
        </form>
	</div>
	</div>
		
  </div>
</div>

</body>
</html>



<?php
}
?>