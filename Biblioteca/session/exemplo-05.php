<?php 

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";
echo "<br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo "As sessões estão Desabilitadas";
		break;
	case PHP_SESSION_NONE:
			echo "As sessões estiverem habilitados, mas nenhuma existir";
			break;
	case PHP_SESSION_ACTIVE:
		echo "As sessões estão Habilitadas";
		break;
}


 ?>
