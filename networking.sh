#!/bin/sh 

##Activating and Deactivating TCP/IP network services on a Network Interface Card (NIC): 


sudo ifconfig
sudo ifconfig enp1s0 down
sudo ping 192.169.0.189
sudo ifconfig
sudo ifconfig enp1s0 up
sudo ifconfig
sudo ping 192.168.0.189
##Disconnect
sudo ifconfig enp1s0 192.168.0.200
sudo ifconfig
exit


##Route

netstat -r
netstat -i
route
route add default gw 192.168.1.10



