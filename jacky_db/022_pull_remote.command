#!/bin/bash
# My example bash script
git pull https://github.com/jackcommon/vnusaservices.git
mysqldump -u vnusa -pvnusa vnusa < db_sync.sql
mysqldump -u vnusa -pvnusa vnusa < db_change_remote.sql