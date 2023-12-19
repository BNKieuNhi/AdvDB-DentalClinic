<?php
$serverName = "MSI";
$connectionOptions = array(
    "Database" => "QLPKNHAKHOA",
    "Uid" => "SONGCAT",
    "PWD" => "SONGCAT"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check the connection
if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
else{
    //echo "Connected!";
}
?>
