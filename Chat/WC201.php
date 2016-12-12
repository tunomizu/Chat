<html>
<head>
	<title>Chat</title>
</head>
﻿<body>

    <Form action="Save.php">
		<?php print $_REQUEST  ['name']; ?>	
		<input type="hidden" name="name"value="<?php print $_REQUEST  ['name']; ?>	">
		<input type="text" name="text">
		<input type="submit" value="Write">
	</Form>
	<hr>
	<Form action = "./WC201.php?names="<?php print $_REQUEST['name']?> >
		<input type="hidden" name="name"value="<?php print $_REQUEST  ['name']; ?>">
		<input type="submit" value="Refresh" >
	</Form>
</body>

</html>
