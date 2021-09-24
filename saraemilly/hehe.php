<?php

echo @$_POST['name']; 
echo"<br/>";

echo @$_POST['realname']; 
echo"<br/>";

echo @$_POST['rating']; 
echo"<br/>";

echo @$_POST['teamaffiliation']; 
echo"<br/>";

	session_start();

	if(isset($_SESSION['mensagem'])){ ?>

		<script>
			
			window.onload = function(){

				M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
			};

		</script>
	<?php 	} ; 
	
	session_unset();
			

 ?>