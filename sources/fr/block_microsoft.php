<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_microsoft', language 'fr', version '3.11'.
 *
 * @package     block_microsoft
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_groups'] = 'Met en cache les informations du groupe Microsoft 365.';
$string['cachedef_onenotenotebook'] = 'Stocke le bloc-notes OneNote.';
$string['configure_course_reset'] = 'Configurer le paramètre de réinitialisation du cours';
$string['configure_course_sync'] = 'Configurer la synchronisation des cours avec Microsoft 365 Teams / Groups';
$string['configure_reset_group'] = 'Choisir l\'action de groupe lors de la réinitialisation du cours';
$string['configure_reset_team'] = 'Choisir l\'action de l\'équipe lors de la réinitialisation du cours';
$string['configure_sync'] = 'Configurer la synchronisation des cours';
$string['connecttoo365'] = 'Se connecter à Office 365';
$string['contactadmin'] = 'Contacter un administrateur pour plus d\'informations.';
$string['course_connected_to_group'] = 'Le cours est <span class="notifysuccess">connecté</span> à un <b>groupe</b>.';
$string['course_connected_to_group_missing'] = 'Le cours est configuré pour être connecté à un <b>groupe</b>, mais le groupe est <span class="notifyproblem">introuvable</span>.';
$string['course_connected_to_team'] = 'Le cours est <span class="notifysuccess">connecté</span> à une <b>équipe</b>.';
$string['course_connected_to_team_missing'] = 'Le cours est configuré pour être connecté à une <b>équipe</b>, mais l\'équipe est <span class="notifyproblem">introuvable</span>.';
$string['course_feature_calendar'] = 'Calendrier Outlook';
$string['course_feature_conversations'] = 'Conversations Outlook';
$string['course_feature_notebook'] = 'Cahier de classe';
$string['course_feature_onedrive'] = 'Fichiers OneDrive';
$string['course_feature_team'] = 'Équipe';
$string['course_not_connected'] = 'Le cours n\'est <span class="notifyproblem">connecté</span> à aucun service Microsoft.';
$string['course_reset_disconnect_group'] = 'Lorsque le cours est réinitialisé, le groupe connecté au cours sera renommé tel que configuré. Un nouveau groupe sera créé et connecté au cours.';
$string['course_reset_disconnect_team'] = 'Lorsque le cours est réinitialisé, l\'équipe connectée au cours sera renommée comme configurée et archivée. Une nouvelle équipe sera créée et connectée au cours.';
$string['course_reset_do_nothing_group'] = 'Lorsque le cours est réinitialisé, la connexion entre le cours et le groupe restera. Toutes les modifications utilisateur apportées au cours seront synchronisées avec le groupe.';
$string['course_reset_do_nothing_team'] = 'Lorsque le cours est réinitialisé, la connexion entre le cours et l\'équipe restera. Toutes les modifications utilisateur apportées au cours seront synchronisées avec l\'équipe.';
$string['course_reset_group_option'] = 'Action au groupe lors de la réinitialisation du parcours';
$string['course_reset_team_option'] = 'Action à l\'équipe lors de la réinitialisation du parcours';
$string['course_sync_option'] = 'Option de synchronisation';
$string['course_sync_option_groups'] = 'Groupes Microsoft 365 uniquement';
$string['course_sync_option_not_synced'] = 'Non synchronisé';
$string['course_sync_option_teams'] = 'Équipes Microsoft 365';
$string['defaultprofile'] = 'Image de profil';
$string['error_connected_group_missing'] = 'Le cours est configuré pour être synchronisé avec un groupe, mais le groupe est introuvable.';
$string['error_connected_team_missing'] = 'Le cours est configuré pour être synchronisé avec une équipe, mais l\'équipe est introuvable.';
$string['error_course_sync_disabled'] = 'Le cours n\'est pas configuré pour être synchronisé avec une équipe ou un groupe.';
$string['error_course_sync_not_configurable_per_course'] = 'La synchronisation des équipes / groupes ne peut pas être configurée par cours.';
$string['error_nomoodlenotebook'] = 'Impossible de trouver votre bloc-notes Moodle.';
$string['error_reset_setting_not_managed_per_course'] = 'La configuration de l\'action de réinitialisation est gérée de manière centralisée par les administrateurs du site.';
$string['error_site_course_sync_disabled'] = 'La synchronisation des cours n\'est pas activée';
$string['geto365'] = 'Installer Office';
$string['group_reset_option_disconnect'] = 'Déconnectez-vous et créez un nouveau groupe.<br/>Le groupe existant connecté au cours sera renommé tel que configuré. Un nouveau groupe sera créé et connecté au cours.';
$string['group_reset_option_disconnect_only'] = 'Déconnecter uniquement.<br/>Le groupe existant connecté au cours sera déconnecté et renommé tel que configuré. Aucun nouveau groupe ne sera créé.';
$string['group_reset_option_do_nothing'] = 'Ne rien faire.<br/>Le groupe est toujours connecté au cours. Les désinscriptions d\'utilisateurs entraîneront la suppression de l\'appartenance à un groupe d\'utilisateurs.';
$string['groupsnotenabledforcourse'] = 'Les groupes Office ne sont pas disponibles pour ce cours';
$string['linkconnection'] = 'Paramètres de connexion Office 365';
$string['linkcoursegroup'] = 'Groupe du cours';
$string['linkdocsdotcom'] = 'My Docs.com';
$string['linkemail'] = 'Mes courriels';
$string['linkmsstream'] = 'Flux Microsoft';
$string['linkmsteams'] = 'Équipes Microsoft';
$string['linkmydelve'] = 'Mon Delve';
$string['linkmyforms'] = 'Mes formulaires';
$string['linkonedrive'] = 'Mon OneDrive';
$string['linkonenote'] = 'Mon bloc-notes OneNote';
$string['linkonenote_unavailable'] = 'OneNote indisponible';
$string['linkoutlook'] = 'Paramètres de synchronisation du calendrier Outlook';
$string['linkprefs'] = 'Editer les paramètres';
$string['linksharepoint'] = 'Site SharePoint du cours';
$string['linksways'] = 'Mon Sways';
$string['logintoo365'] = 'Connexion à Office 365';
$string['microsoft'] = 'Microsoft';
$string['microsoft:addinstance'] = 'Ajouter un nouveau bloc Microsoft';
$string['microsoft:managegroups'] = 'Autoriser la possibilité de gérer des groupes';
$string['microsoft:myaddinstance'] = 'Ajouter un nouveau bloc Microsoft à Ma Page Moodle';
$string['microsoft:viewgroups'] = 'Autoriser la possibilité d\'afficher le panneau de configuration des groupes';
$string['msalogin'] = 'Se connecter avec le compte Microsoft';
$string['notconnected'] = 'Vous n\'êtes <span class="notifyproblem">pas connecté(e)</span> aux services Microsoft.';
$string['notebookname'] = 'Cahier Moodle';
$string['o365connected'] = '{$a->firstname}, vous êtes <span class="notifysuccess">connecté(e)</span> à Office 365.';
$string['o365matched_complete_authreq'] = 'Afin de terminer la connexion, cliquez le lien ci-dessous et connectez-vous à votre compte Office 365.';
$string['o365matched_complete_userpass'] = 'Afin de terminer la connexion, saisissez votre mot de passe pour ce compte Office 365 et cliquez « Se connecter ».';
$string['o365matched_desc'] = 'Votre compte a été lié avec l\'utilisateur Office 365 <b>« {$a} »</b>';
$string['o365matched_title'] = 'Vous êtes <span style="color: #960">presque</span> connecté(e) à Office&nbsp;365.';
$string['opennotebook'] = 'Ouvrez votre cahier';
$string['pluginname'] = 'Bloc Microsoft';
$string['privacy:metadata'] = 'Le bloc Microsoft affiche uniquement des liens vers diverses fonctionnalités et services.';
$string['reset_page_heading_group'] = 'Action de réinitialisation de groupe pour le cours {$a}';
$string['reset_page_heading_team'] = 'Action de réinitialisation de l\'équipe pour le cours {$a}';
$string['reset_setting_saved'] = 'Le paramètre de réinitialisation du parcours a été enregistré.';
$string['settings_geto365link'] = 'Installer l\'URL de téléchargement d\'Office';
$string['settings_geto365link_default'] = 'https://portal.office.com/OLS/MySoftware.aspx';
$string['settings_geto365link_desc'] = 'L\'URL à utiliser pour le lien « Installer Office ».';
$string['settings_showcoursegroup'] = 'Afficher « Groupe de cours »';
$string['settings_showcoursegroup_desc'] = 'Activez ou désactivez le lien « Groupe de cours » dans le bloc. <br /><b>Remarque :</b> Cela s\'affiche lors de l\'affichage d\'un cours auquel est associé un groupe Microsoft 365.';
$string['settings_showcoursespsite'] = 'Afficher « Site SharePoint du cours »';
$string['settings_showcoursespsite_desc'] = 'Activez ou désactivez le lien « Site SharePoint du cours » dans le bloc. <br /><b>Remarque :</b> Cela s\'affiche dans le bloc lors de l\'affichage d\'un cours auquel est associé un site SharePoint.';
$string['settings_showdocsdotcom'] = 'Afficher « My Docs.com »';
$string['settings_showdocsdotcom_desc'] = 'Activer ou désactiver le lien « My Docs.com » dans le bloc.';
$string['settings_showemail'] = 'Afficher « Mon e-mail »';
$string['settings_showemail_desc'] = 'Activer ou désactiver le lien « Mon e-mail » dans le bloc.';
$string['settings_showmanageo365conection'] = 'Afficher « Paramètres de connexion Microsoft 365 »';
$string['settings_showmanageo365conection_desc'] = 'Activer ou désactiver le lien « Paramètres de connexion Microsoft 365 » dans le bloc. <br /><b>Remarque :</b> Ceci est affiché aux utilisateurs connectés de Microsoft 365 et les amène à la page de gestion des connexions.';
$string['settings_showmsstream'] = 'Afficher « Microsoft Stream »';
$string['settings_showmsstream_desc'] = 'Activer ou désactiver le lien « Microsoft Stream » dans le bloc.';
$string['settings_showmsteams'] = 'Afficher « Microsoft Teams »';
$string['settings_showmsteams_desc'] = 'Activer ou désactiver le lien « Microsoft Teams » dans le bloc.';
$string['settings_showmydelve'] = 'Afficher « Mon Delve »';
$string['settings_showmydelve_desc'] = 'Activer ou désactiver le lien « Mon Delve » dans le bloc.';
$string['settings_showmyforms'] = 'Afficher « Mes Formulaires »';
$string['settings_showmyforms_default'] = 'https://forms.office.com/Pages/DesignPage.aspx#';
$string['settings_showmyforms_desc'] = 'Activer ou désactiver le lien « Mes Formulaires » dans le bloc.';
$string['settings_showo365connect'] = 'Afficher « Connexion à Microsoft 365 »';
$string['settings_showo365connect_desc'] = 'Activer ou désactiver le lien « Connexion à Microsoft 365 » dans le bloc. <br /><b>Remarque :</b> Ceci est affiché pour les utilisateurs qui ne sont pas connectés à Microsoft 365 et les amène à la page qui leur permet de configurer une connexion.';
$string['settings_showo365download'] = 'Afficher « Installer Office »';
$string['settings_showo365download_desc'] = 'Afficher « Installer Office »';
$string['settings_showonedrive'] = 'Afficher « Mon OneDrive »';
$string['settings_showonedrive_desc'] = 'Activer ou désactiver le lien « Mon OneDrive » dans le bloc.';
$string['settings_showonenotenotebook'] = 'Afficher « Mon carnet OneNote »';
$string['settings_showonenotenotebook_desc'] = 'Activer ou désactiver le lien « Mon carnet OneNote » dans le bloc.';
$string['settings_showoutlooksync'] = 'Afficher « Paramètres de synchronisation du calendrier Outlook »';
$string['settings_showoutlooksync_desc'] = 'Activer ou désactiver le lien « Paramètres de synchronisation du calendrier Outlook » dans le bloc.';
$string['settings_showpreferences'] = 'Afficher « Modifier les paramètres »';
$string['settings_showpreferences_desc'] = 'Activer ou désactiver le lien « Modifier les paramètres » dans le bloc.';
$string['settings_showsways'] = 'Afficher « Mon Sways »';
$string['settings_showsways_desc'] = 'Activer ou désactiver le lien « Mon Sways » dans le bloc.';
$string['sync_page_heading'] = 'Synchroniser le cours {$a} avec Microsoft 365 Teams / Groups';
$string['sync_setting_saved'] = 'L\'option de synchronisation du cours est enregistrée';
$string['teams_reset_option_disconnect'] = 'Déconnectez-vous et créez une nouvelle équipe.<br/>L\'équipe existante connectée au cours sera renommée telle que configurée et archivée. Une nouvelle équipe sera créée et connectée au cours.';
$string['teams_reset_option_disconnect_only'] = 'Déconnecter uniquement.<br/>L\'équipe existante connectée au cours sera renommée comme configurée et archivée. Aucune nouvelle équipe ne sera créée.';
$string['teams_reset_option_do_nothing'] = 'Ne rien faire.<br/>L\'équipe est toujours connectée au cours. Les désinscriptions des utilisateurs entraîneront la suppression de l\'adhésion de l\'utilisateur à l\'équipe.';
$string['workonthis'] = 'Travaillez sur ce point';
