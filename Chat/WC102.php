
<head>
<title>Load</title>
</head>
﻿<body>
	<?php if($_REQUEST ['name']== "" )
	{
		header( "Location: ER001.php" ) ;
	}
	else
	{
		header( "Location: WC201.php?name=" . $_REQUEST ['name'] ) ;
	}
	 ?>
</body>

