<!DOCTYPE html> 
<meta charset='utf-8' />
<html>
	<head>
		<?php
		    include_once $_CONFIG['html_path']."load_script.php";
		?>
		<title>Admin Login</title>
	</head>
	<body>
		<div>
			<div>
				<?php			
				    if($_PAGE != "register") {
					if(file_exists($_CONFIG['html_path'].'tpl_header.php'))
					{
						include_once($_CONFIG['html_path'].'tpl_header.php'); 
					} 
					}				
				?>
			</div>
			<div class="container">
				<div class="row">
					<?php
						if(file_exists($_CONFIG['html_path']."tpl_".$_PAGE.'.php'))
						{
							include_once($_CONFIG['html_path']."tpl_".$_PAGE.'.php'); 
						}       
					?>
				</div>
			</div>
			<div>
				<?php
                   if($_PAGE != "register") {				
					if(file_exists($_CONFIG['html_path'].'tpl_footer.php'))
					{
						include_once($_CONFIG['html_path'].'tpl_footer.php'); 
					} 	
				   }
				?>
			</div>
		</div>
	</body>
</html>   