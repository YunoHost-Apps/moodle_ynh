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
 * Strings for component 'report_roster', language 'fr', version '3.11'.
 *
 * @package     report_roster
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Tous les utilisateurs';
$string['learningmodeoff'] = 'Masquer les noms';
$string['learningmodeon'] = 'Afficher les noms';
$string['param:mode'] = 'Mode d\'affichage';
$string['pluginname'] = 'Trombinoscope';
$string['printmode'] = 'Imprimable';
$string['privacy:metadata'] = 'Le trombinoscope affiche uniquement des données stockées ailleurs.';
$string['roster:view'] = 'Afficher le trombinoscope';
$string['settings:displayname'] = 'Afficher un nom';
$string['settings:displayname:default'] = 'Trombinoscope';
$string['settings:displayname:description'] = 'Cela s\'affichera sur la page du trombinoscope et dans le lien de navigation (si activé ci-dessous).';
$string['settings:fields'] = 'Champs de profil à afficher';
$string['settings:fields:default'] = 'nom et prénom
heure actuelle %H:%M';
$string['settings:fields:description'] = 'Une liste de champs de profil à afficher dans le rapport. Chaque identifiant de champ doit être sur une nouvelle ligne. « fullname » est également pris en charge.

IMPORTANT : les champs de profil personnalisés doivent être saisis sous la forme « profile_field_{shortname} ».';
$string['settings:flatnav'] = 'Afficher dans l\'écran de navigation?';
$string['settings:flatnav:description'] = 'Si cette case est cochée, un lien vers le trombinoscope sera ajouté à la navigation Boost.
(Sous les anciens thèmes tels que More, il apparaîtra dans le bloc Navigation sous Cours actuel> {coursename}.)';
$string['settings:flatnav_position'] = 'Position dans l\'écran de navigation';
$string['settings:flatnav_position:default'] = 'vue badges (Badges)
compétences (compétences)
notes (grades)
participants (Participants)';
$string['settings:flatnav_position:description'] = 'Un lien vers le trombinoscope sera ajouté * au-dessus * du lien en haut de cette liste.
S\'il n\'est pas trouvé, il essaiera le suivant dans la liste, et ainsi de suite. Le premier mot sur chaque ligne est l\'identifiant du lien; tout ce qui suit est ignoré (afin que les identificateurs puissent être étiquetés). Les nœuds de navigation du cours principal sont inclus par défaut; les identifiants pour des nœuds supplémentaires peuvent être obtenus en consultant la propriété `data-key` du` <a> `correspondant.';
$string['settings:headings:flatnav'] = 'Paramètres de l\'écran de navigation';
$string['settings:headings:general'] = 'Paramètres généraux';
$string['settings:headings:size'] = 'Paramètres de la taille de la photo de l\'utilisateur';
$string['settings:size_default'] = 'Taille par défaut';
$string['settings:size_default:description'] = 'Taille par défaut de la photo de l\'utilisateur (lorsqu\'un utilisateur ouvre le rapport pour la première fois).';
$string['settings:size_large'] = 'Taille: Large';
$string['settings:size_large:description'] = 'Taille de la photo de l\'utilisateur en pixels pour "Large"';
$string['settings:size_medium'] = 'Taille: Moyenne';
$string['settings:size_medium:description'] = 'Taille de la photo de l\'utilisateur en pixels pour "Moyenne"';
$string['settings:size_small'] = 'Taille: Petite';
$string['settings:size_small:description'] = 'Taille de la photo de l\'utilisateur en pixels pour "Petite"';
$string['size:large'] = 'Large';
$string['size:medium'] = 'Moyenne';
$string['size:small'] = 'Petite';
$string['webmode'] = 'Page web';
