#!/bin/bash
# My example bash script
mysqldump -u root vnusaservices > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/vnusaservices.git