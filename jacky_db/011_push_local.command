#!/bin/bash
cd $(dirname "$0")
mysqldump -u root vnusaservices > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/vnusaservices.git