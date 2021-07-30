# Moodle pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/moodle.svg)](https://dash.yunohost.org/appci/app/moodle) ![](https://ci-apps.yunohost.org/ci/badges/moodle.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/moodle.maintain.svg)  
[![Installer Moodle avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=moodle)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer Moodle rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Plateforme d'apprentissage en ligne

**Version incluse :** 3.11.2~ynh1

**Démo :** https://sandbox.moodledemo.net/

## Captures d'écran

![](./doc/screenshots/Moodle_2.0_on_Firefox_4.0.png)

## Avertissements / informations importantes

- Cette app est intégrée avec le LDAP / SSO de Yunohost

## Documentations et ressources

* Site officiel de l'app : https://moodle.org/
* Documentation officielle de l'admin : https://docs.moodle.org/311/en/Main_page
* Dépôt de code officiel de l'app : https://github.com/moodle/moodle
* Documentation YunoHost pour cette app : https://yunohost.org/app_moodle
* Signaler un bug : https://github.com/YunoHost-Apps/moodle_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/moodle_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
ou
sudo yunohost app upgrade moodle -u https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps