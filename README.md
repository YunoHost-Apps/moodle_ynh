# Moodle for YunoHost

[![Integration level](https://dash.yunohost.org/integration/moodle.svg)](https://dash.yunohost.org/appci/app/moodle) ![](https://ci-apps.yunohost.org/ci/badges/moodle.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/moodle.maintain.svg)  
[![Install Moodle with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=moodle)

> *This package allows you to install Moodle quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
[Moodle](https://moodle.org) is a learning platform designed to provide educators, administrators and learners with a single robust, secure and integrated system to create personalised learning environments.

Moodle is widely used around the world by universities, schools, companies and all manner of organisations and individuals.

**Shipped version:** 3.9.2

## Screenshots

![](https://upload.wikimedia.org/wikipedia/commons/3/36/Moodle_2.0_on_Firefox_4.0.png)

## Demo

* [Official demo](https://sandbox.moodledemo.net/)

## Configuration

How to configure this app: by an admin panel.

## Documentation

 * Official documentation: https://docs.moodle.org/39/en/Main_page

## YunoHost specific features

#### Multi-user support

* Are LDAP and HTTP auth supported? **Yes** 
* Can the app be used by multiple users? **Yes**

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/moodle%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/moodle/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/moodle%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/moodle/)

## Links

 * Report a bug: https://github.com/YunoHost-Apps/moodle_ynh/issues
 * App website: https://moodle.org/
 * Upstream app repository: http://git.moodle.org/ - https://github.com/moodle/moodle 
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/moodle_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
or
sudo yunohost app upgrade moodle -u https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
```
