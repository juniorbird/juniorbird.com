## Movable Type Configuration File
##
## This file defines system-wide
## settings for Movable Type. In 
## total, there are over a hundred 
## options, but only those 
## critical for everyone are listed 
## below.
##
## Information on all others can be 
## found at:
##  http://www.movabletype.org/documentation/config

#======== REQUIRED SETTINGS ==========

CGIPath        /mt/
StaticWebPath  /mt/mt-static/
StaticFilePath /home/juniorbird/juniorbird/mt/mt-static

#======== DATABASE SETTINGS ==========

ObjectDriver DBI::mysql
Database jb_moveabletype
DBUser movabletype
DBPassword twilightzone
DBHost mysql.juniorbird.com

#======== MAIL =======================

MailTransfer smtp
SMTPServer mail.juniorbird.com
