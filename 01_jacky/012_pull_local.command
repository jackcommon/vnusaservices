#!/bin/bash
# My example bash script
git pull https://github.com/jackcommon/vnusaservices.git
mysql -u root vnusa < db_sync.sql
mysql -u root vnusa < db_update_local.sql
