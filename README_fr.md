# Moodle pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/moodle.svg)](https://dash.yunohost.org/appci/app/moodle) ![](https://ci-apps.yunohost.org/ci/badges/moodle.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/moodle.maintain.svg)  
[![Installer Moodle avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=moodle)

*[Read this readme in english.](./README.md)* 

> *Ce package vous permet d'installer Moodle rapidement et simplement sur un serveur YunoHost.  
Si vous n'avez pas YunoHost, consultez [le guide](https://yunohost.org/install) pour apprendre comment l'installer.*

## Vue d'ensemble
[Moodle](https://moodle.org) est une plateforme d'apprentissage conçue pour fournir aux enseignants, aux administrateurs et aux apprenants un système unique robuste, sécurisé et intégré pour créer des environnements d'apprentissage personnalisés. Moodle est largement utilisé dans le monde entier par les universités, les écoles, les entreprises et toutes sortes d'organisations et d'individus. 

**Version incluse :** 3.10.3

## Captures d'écran

![](https://upload.wikimedia.org/wikipedia/commons/3/36/Moodle_2.0_on_Firefox_4.0.png)

## Démo

* [Démo officielle](https://sandbox.moodledemo.net/)

## Configuration

* Comment configurer cette application : via le panneau d'administration.

## Documentation

* Documentation officielle : https://docs.moodle.org/3x/fr/Accueil

## Caractéristiques spécifiques YunoHost

#### Support multi-utilisateur

* L'authentification LDAP et HTTP est-elle prise en charge ? **Oui**
* L'application peut-elle être utilisée par plusieurs utilisateurs ? **Oui**

#### Architectures supportées

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/moodle.svg)](https://ci-apps.yunohost.org/ci/apps/moodle/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/moodle.svg)](https://ci-apps-arm.yunohost.org/ci/apps/moodle/)

## Liens

 * Signaler un bug :https://github.com/YunoHost-Apps/moodle_ynh/issues
 * Site de l'application : https://moodle.org/
 * Dépôt de l'application principale : http://git.moodle.org/ - https://github.com/moodle/moodle 
 * Site web YunoHost : https://yunohost.org/

---

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/moodle_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
ou
sudo yunohost app upgrade moodle -u https://github.com/YunoHost-Apps/moodle_ynh/tree/testing --debug
```
