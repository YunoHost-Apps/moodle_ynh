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
 * Strings for component 'logstore_lanalytics', language 'fr', version '3.11'.
 *
 * @package     logstore_lanalytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'taille de la mémoire tampon';
$string['pluginname'] = 'Journal d\'analyse de l\'apprentissage';
$string['privacy:metadata'] = 'Ce plugin ne stocke aucune donnée personnelle. Toutes les données sont enregistrées et stockées de manière anonyme.';
$string['setting_course_ids'] = 'Numéro des cours';
$string['setting_course_ids_descr'] = 'A utiliser avec le visualisateur du journal log_scope option include ou exclude pour ne suivre que des cours spécifiques. Exemple : <code>10,153,102</code>.';
$string['setting_log_scope'] = 'Visualisateur du journal';
$string['setting_log_scope_all'] = 'Journal des événements';
$string['setting_log_scope_descr'] = 'Définit la portée du processus de journalisation. Par défaut, tout est journalisé.';
$string['setting_log_scope_exclude'] = 'Journaliser les événements EXCLUANT les cours spécifiés via les numéros de cours ci-dessous';
$string['setting_log_scope_include'] = 'Consigner les événements uniquement dans les cours spécifiés par le biais des numéros de cours ci-dessous';
$string['setting_nontracking_roles'] = 'Rôles non suivis';
$string['setting_nontracking_roles_descr'] = 'Définissez les rôles qui ne doivent <strong>pas</strong> être suivis (liste noire). Ceci est utile si vous ne voulez pas suivre des rôles spécifiques (comme les administrateurs ou les enseignants). Spécifiez le rôle en utilisant le nom court (peut être trouvé via <em>Administration du site</em> -> <em>Onglet Utilisateurs</em> -> <em>Catégorie Permissions</em> -> <em>Définir les rôles</em>). Par défaut, tous les rôles sont suivis. Exemple : <code>teacher,editingteacher,manager</code>. Ce paramètre est prioritaire sur <code>tracking_roles</code>.
logstore_lanalytics/setting_nontracking_roles_descr';
$string['setting_tracking_roles'] = 'Rôles suivis';
$string['setting_tracking_roles_descr'] = 'Définissez les rôles qui doivent faire l\'objet d\'un suivi (liste blanche). Ceci est utile si vous voulez seulement suivre des rôles spécifiques (comme les étudiants ou les invités). Spécifiez le rôle en utilisant le nom court"(peut être trouvé via <em>Administration du site</em> -> <em>Onglet Utilisateurs</em> -> <em>Catégorie Permissions</em> -> <em>Définir les rôles</em>). Par défaut, tous les rôles sont suivis. Exemple : <code>étudiant,invité</code>.
logstore_lanalytics/setting_tracking_roles_descr';
