#!/bin/bash
mysqldump -u vnusa -pvnusa vnusa > db_sync.sql
git add db_sync.sql
git commit
git push https://github.com/jackcommon/vnusaservices.git