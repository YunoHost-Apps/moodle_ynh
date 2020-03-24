# Moodle app for YunoHost

[![Integration level](https://dash.yunohost.org/integration/moodle.svg)](https://dash.yunohost.org/appci/app/moodle)  
[![Install moodle with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=moodle)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allow you to install moodle quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview
Moodle https://moodle.org is a learning platform designed to provide educators, administrators and learners with a single robust, secure and integrated system to create personalised learning environments.

Moodle is widely used around the world by universities, schools, companies and all manner of organisations and individuals.

**Shipped version:** 3.8.2

## Screenshots

![](https://upload.wikimedia.org/wikipedia/commons/3/36/Moodle_2.0_on_Firefox_4.0.png)

## Demo

* [Official demo](https://sandbox.moodledemo.net/)

## Configuration

How to configure this app: by an admin panel.

## Documentation

 * Official documentation: https://docs.moodle.org/38/en/Main_page

## YunoHost specific features

#### Multi-users support

Are LDAP and HTTP auth supported?  *Yes*  
Can the app be used by multiple users? *Yes*

#### Supported architectures

* x86-64b - [![Build Status](https://ci-apps.yunohost.org/ci/logs/moodle%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/moodle/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/moodle%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/moodle/)

**More information on the documentation page:**  
https://yunohost.org/packaging_apps

## Links

 * Report a bug: https://github.com/YunoHost-Apps/moodle_ynh/issues
 * App website: https://moodle.org/
 * Upstream app repository: http://git.moodle.org/ - https://github.com/moodle/moodle 
 * YunoHost website: https://yunohost.org/

---

Developers info
----------------

**Only if you want to use a testing branch for coding, instead of merging directly into master.**
Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/moodle_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
or
sudo yunohost app upgrade moodle -u https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
```
