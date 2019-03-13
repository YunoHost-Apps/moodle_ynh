# Moodle app for YunoHost
[![Install Moodle with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=Moodle)<br><br>

Version: **3.6.3**
Moodle - the world's open source learning platform

Moodle <https://moodle.org> is a learning platform designed to provide
educators, administrators and learners with a single robust, secure and
integrated system to create personalised learning environments.

Moodle is widely used around the world by universities, schools, companies and
all manner of organisations and individuals.


### Installing guide

 1. App can be installed by YunoHost **admin web-interface** or by **running following command**:

         $ sudo yunohost app install https://github.com/YunoHost-Apps/moodle_ynh
         
        After install :
 
        1. Login in moodle exemple : https://domain.tld/moodle
        2. Create admin account

 
### Upgrade this package:

        $ sudo yunohost app upgrade moodle -u https://github.com/YunoHost-Apps/moodle_ynh
        
        After upgrade :
 
        1. If you have custom plugins or themes need to move your plugins
        2. Moodle is saved in /var/www/moodle.backup
        3. Moove your plugins / themes exemple "cp -a  moodle.backup/mod/hvp moodle/mod/hvp"
        4. After move your plugins and themes make "rm -r moodle.backup"
        5. Login in moodle for complete upgrade

## To-do
- [X] Install script
- [X] Remove script
- [x] Upgrade script
- [X] Backup and Restore scripts(need testing)
- [ ] LDAP integration
