<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# Moodle for YunoHost



*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Moodle quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

[Moodle](https://moodle.org) is a learning platform designed to provide educators, administrators and learners with a single robust, secure and integrated system to create personalised learning environments.

Moodle is widely used around the world by universities, schools, companies and all manner of organisations and individuals.


**Shipped version:** 4.0.2vv~ynh3

**Demo:** https://sandbox.moodledemo.net/

## Screenshots

![Screenshot of Moodle](./doc/screenshots/Moodle_2.0_on_Firefox_4.0.png)

## Disclaimers / important information

## Configuration

How to configure this app: by an admin panel.

## YunoHost specific features

#### Multi-user support

* Are LDAP and HTTP auth supported? **Yes** 
* Can the app be used by multiple users? **Yes**

## Documentation and resources

* Official app website: <https://moodle.org/>
* Official admin documentation: <https://docs.moodle.org/400/en/Main_page>
* Upstream app code repository: <https://github.com/moodle/moodle>
* YunoHost documentation for this app: <https://yunohost.org/app_moodle>
* Report a bug: <https://github.com/YunoHost-Apps/moodle_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/moodle_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
or
sudo yunohost app upgrade moodle -u https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
