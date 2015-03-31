<html>
	<head>
		<title>Roexian's projects page</title>		
	</head>
	<body>
		<div>
			My page is dedicated to the learning and understanding of web programming and other ideas. In the future I hope let this serve as a blog and a repository of accumulated knowledge.
            <br />
            <br />
            	<?php 
             		include "dbo.php";
            		foreach($db->query('SELECT * FROM projects') as $row) 
					{
    					echo $row['projName']. "<br />" . $row['projDesc']. "<br />";//etc...
					}
					?>
		</div>
	</body>
</html>