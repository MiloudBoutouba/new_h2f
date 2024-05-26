#!/bin/bash

#Take a valid IP address

#Check whether the taken IP address is active or inactive

if ping -c 2 seine-saint-denis.gouv.fr > /dev/null 2>&1; then

echo " address is live."

else

echo " address is not reachable."

fi