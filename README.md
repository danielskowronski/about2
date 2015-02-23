# about2
simple multilangual database-driven kohana-based web cms for business card style website

## setup
  - run setup.php to check if kohana will work on your werbserver (and fix errors like missing php extension)
  - create database and provide credentials in application/config/database.php
  - execute setup.sql in target database
  - login via /auth using login=password=admin, go to *passwd hash*, generate hash for your new password, then edit users array in application/config/auth.php
  - you should fill database with example data in data.sql to get basic idea how it works
  - error page 404 (not found) is configured via page with url *_error404*, homepage via *index*