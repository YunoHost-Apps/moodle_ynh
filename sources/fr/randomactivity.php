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
 * Strings for component 'randomactivity', language 'fr', version '3.11'.
 *
 * @package     randomactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhasissue'] = 'Au moins une activité de ce pool d\'activités aléatoires présente le problème suivant : {$a}';
$string['addactivities'] = 'Ajouter des activités';
$string['addselectedactivities'] = 'Ajouter les activités sélectionnées';
$string['applychangesreassign'] = 'Appliquer les changement et ré-attribuer';
$string['assignedactivity'] = 'Activité attribuée';
$string['assignees'] = 'Utilisateurs avec activité attribuée';
$string['changesapplied'] = 'Les changements ont été appliqués';
$string['confirmreassign'] = 'Vous êtes sur le point de modifier le pool d\'activités utilisé par cette activité aléatoire. Les étudiants se verront attribuer de nouvelles activités. <br>
Les étudiants qui ont commencé à travailler sur leur activité précédemment attribuée perdront leur progression si une autre activité leur est attribuée. <br>
Les étudiants qui ont obtenu une note pour leur activité précédemment attribuée perdront leur note pour cette activité  si une autre activité leur est attribuée.';
$string['dynamicdisplay'] = 'Affichage dynamique sur la page de cours';
$string['dynamicdisplay_help'] = 'Si réglé sur « Oui », cette activité s\'affichera sur la page du cours en tant que l\'activité vers laquelle elle pointe. Cela ne modifiera que que les étudiants.';
$string['filters'] = 'Filtres :';
$string['groupbyseeding'] = 'Grouper par classement';
$string['modulename'] = 'Activité aléatoire';
$string['modulename_help'] = 'Le module Activité aléatoire permet à l\'enseignant de définir un groupe d\'activités ; les étudiants se verront attribuer une de ces activités au hasard. <br><br>
La note d\'activité sera récupérée pour chaque étudiant et utilisée comme note d\'activité aléatoire. <br>
La graine aléatoire peut être personnalisée afin de garantir la cohérence entre les activités pour chaque étudiant.';
$string['modulenameplural'] = 'Activités aléatoires';
$string['modulenotfound'] = 'Le module n\'a pas été trouvé';
$string['noactivityerror'] = 'Aucune activité n\'a été configurée.';
$string['noactivitytoadd'] = 'Aucune activité disponible à ajouter.';
$string['nogradesetup'] = 'Aucune note n\'a été définie pour cette activité.';
$string['notgraded'] = 'Non notée';
$string['notsupported'] = 'Non supportée';
$string['orderbyappearanceincourse'] = 'Trier par apparition dans le cours';
$string['orderbyselect'] = 'trier ou grouper par';
$string['orderbyselect_help'] = 'Si "Trier par apparition dans le cours" est sélectionné, les Activités Aléatoires apparaîtront telles qu\'elles apparaissent dans le cours. <br> <br>
Si " Grouper par classement" est sélectionné, les Activités Aléatoires seront regroupées dans plusieurs tableaux, avec toutes les Activités Aléatoires dans le même tableau ayant le même classement. <br>
Les activités aléatoires avec les même classement signifie qu\'ils ont le même grain et le même nombre d\'activités. Tout étudiant participant à plusieurs de ces activités aléatoires se verra attribuer la même n-ième activité (par exemple, à la première activité de chaque activité aléatoire avec le même classement).';
$string['originalgrade'] = 'Note d\'origine';
$string['pluginadministration'] = 'Administration d\'activités aléatoires';
$string['pluginname'] = 'Activité aléatoire';
$string['pluginname_help'] = 'Vous pouvez définir ici le pool d\'activités à utiliser pour cette activité aléatoire. <br> Seuls les enseignants peuvent voir cette page.
Les étudiants accédant à cette activité seront redirigés vers l\'activité tirée au sort à laquelle ils sont attribués.';
$string['privacy:metadata'] = 'Le plugin Activité aléatoire ne stocke aucune donnée personnelle.';
$string['randomactivity:addinstance'] = 'Ajouter une instance d\'Activité aléatoire';
$string['randomactivity:manage'] = 'Gérer une activité aléatoire';
$string['randomactivity:viewactivities'] = 'Voir le pool d\'activités de l\'Activité aléatoire';
$string['randomactivity:viewgrades'] = 'Voir les notes de l\'activité aléatoire';
$string['refresh_help'] = 'Actualiser l\'aperçu des utilisateurs avec activité attribuée. Cela n\'applique aucun changement.';
$string['seed'] = 'Graine aléatoire';
$string['seed_help'] = 'La graine permet de définir quelle activité est attribuée à quel étudiant. <br> Vous pouvez configurer plusieurs activités aléatoires avec <b>le même nombre d\'activités</> et <b>la même graine</b>.
Ces activités aléatoires attribueront les activités de la même manière : les étudiants recevant la première activité d\'une activité aléatoire se verront attribués également la première activité des autres activités aléatoires. <br>';
$string['seedingn'] = 'Classement #{$a}';
$string['seedtobalance'] = 'Graine pour équilibrer les utilisateurs';
$string['seedtotimestamp'] = 'Graine à l\'horodatage actuel';
$string['unknown'] = 'Inconnu';
$string['viewall'] = 'Tout voir';
$string['viewingradebook'] = 'Voir dans le carnet de note';
