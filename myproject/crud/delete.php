<?php

include "function.php";
parse_str($_SERVER['QUERY_STRING'], $output);
$crud = new crud();
$crud->delete($output['id']);

?>