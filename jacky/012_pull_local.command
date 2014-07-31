#!/bin/bash
# My example bash script
git pull https://github.com/jackcommon/vnusaservices.git
mysqldump -u root vnusaservices < db_sync.sql
mysqldump -u root vnusaservices < db_change_local.sql