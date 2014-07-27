#!/bin/bash
# My example bash script
#git pull https://github.com/jackcommon/vnusaservices.git
git pull
mysql -u vnusa -pvnusa vnusa < db_sync.sql
mysql -u vnusa -pvnusa vnusa < db_update_remote.sql