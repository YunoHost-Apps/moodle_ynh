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
 * Strings for component 'vpl', language 'fr', version '3.11'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'La compilation ou la préparation de l\'exécution a échoué';
$string['about'] = 'À propos';
$string['acceptcertificates'] = 'Accepter les certificats auto-signés';
$string['acceptcertificates_description'] = 'Si le serveur d\'exécution n\'utilise pas de certificat auto-signé, décocher cette option';
$string['acceptcertificatesnote'] = '<p>Vous utilisez une connexion cryptée.<p/>
<p>Pour utiliser une connexion cryptée avec le serveur d\'exécution, vous devez accepter ses certificats.</p>
<p>Si vous avec des problèmes avec ce processus, vous pouvez essayer d\'utiliser une connexion http (non cryptée) ou un autre navigateur.</p>
<p>S\'il vous plait, cliquer sur les liens suivants (serveur #) et accepter le certificat proposé.</p>';
$string['addfile'] = 'Ajouter un fichier';
$string['advanced'] = 'Avancé';
$string['allfiles'] = 'Tous les fichiers';
$string['allsubmissions'] = 'Tous les envois';
$string['always_use_ws'] = 'Utiliser toujours un protocole websocket non crypté (ws)';
$string['always_use_wss'] = 'Utiliser toujours un protocole websocket crypté (wss)';
$string['anyfile'] = 'N\'importe quel fichier';
$string['attemptnumber'] = 'Essai numéro {$a}';
$string['autodetect'] = 'Autodétection';
$string['automaticevaluation'] = 'Évaluation automatique';
$string['automaticgrading'] = 'Note automatique';
$string['averageperiods'] = 'Période moyenne {$a}';
$string['averagetime'] = 'Temps moyen {$a}';
$string['basedon'] = 'Basé sur';
$string['basic'] = 'Élémentaire';
$string['binaryfile'] = 'Fichier binaire';
$string['browserupdate'] = 'Veuillez mettre à jour votre navigateur<br />ou utiliser un navigateur supportant Websocket.';
$string['calculate'] = 'Calculer';
$string['changesNotSaved'] = 'Les changements n\'ont pas été enregistrés';
$string['check_jail_servers'] = 'Tester les serveurs d\'exécution';
$string['check_jail_servers_help'] = '<p>Cette page contrôle et montre le statut des serveurs d\'exécution utilisés pour cette activité.</p>';
$string['clipboard'] = 'Presse-papiers';
$string['closed'] = 'Fermé';
$string['comments'] = 'Commentaires';
$string['compilation'] = 'Compilation';
$string['connected'] = 'connecté';
$string['connecting'] = 'en cours de connexion';
$string['connection_closed'] = 'connexion fermée';
$string['connection_fail'] = 'échec de connexion';
$string['console'] = 'Console';
$string['copy'] = 'Copier';
$string['create_new_file'] = 'Créer un nouveau fichier';
$string['crontask'] = 'Affiche les activités VPL dont le réglage «Disponible à partir de» est atteint';
$string['currentstatus'] = 'Statut courant';
$string['cut'] = 'Couper';
$string['datesubmitted'] = 'Date de soumission';
$string['debug'] = 'Dégoguer';
$string['debugging'] = 'Débogage';
$string['debugscript'] = 'Script de débogage';
$string['debugscript_help'] = 'Sélectionner le script de débogage à utiliser pour cette activité';
$string['defaultexefilesize'] = 'Taille maximale du fichier d\'exécution par défaut';
$string['defaultexememory'] = 'Mémoire maximale utilisée par défaut';
$string['defaultexeprocesses'] = 'Nombre maximum de processus par défaut';
$string['defaultexetime'] = 'Temps d\'exécution maximum par défaut';
$string['defaultfilesize'] = 'Taille maximale de fichier envoyé par défaut';
$string['defaultresourcelimits'] = 'Limites des ressources d\'exécution par défaut';
$string['delete'] = 'Supprimer';
$string['delete_file_fq'] = 'supprimer le fichier «{\\$a}» ?';
$string['delete_file_q'] = 'Supprimer le fichier ?';
$string['deleteallsubmissions'] = 'Supprimer toutes les soumissions';
$string['depends_on_https'] = 'Utilisez ws ou wss selon si vous utilisez http ou https';
$string['description'] = 'Description';
$string['diff'] = 'diff';
$string['discard_submission_period'] = 'Ne pas prendre en compte la période de soumission';
$string['discard_submission_period_description'] = 'Pour chaque étudiant et devoir, le système essaie de rejeter les soumissions. Le système conserve la dernière et au moins une soumission pour chaque période';
$string['download'] = 'Télécharger';
$string['downloadallsubmissions'] = 'Télécharger toutes les soumissions';
$string['downloadsubmissions'] = 'Télécharger les soumissions';
$string['duedate'] = 'Date d\'échéance';
$string['edit'] = 'Modifier';
$string['editing'] = 'En cours de modification';
$string['editortheme'] = 'Thème de l\'éditeur';
$string['evaluate'] = 'Évaluer';
$string['evaluateonsubmission'] = 'Évaluer seulement à la soumission';
$string['evaluating'] = 'En cours d\'évaluation';
$string['evaluation'] = 'Évaluation';
$string['examples'] = 'Exemples';
$string['execution'] = 'Éxecution';
$string['executionfiles'] = 'Fichiers d\'exécution';
$string['executionfiles_help'] = '<h2>Introduction</h2>
<p>Ici, vous définissez les fichiers nécessaires à la préparation de
l\'exécution, du débogage ou de l\'évaluation d\'une soumission.
Cela inclut les fichiers de script, les fichiers de test de programme
et les fichiers de données</p>
<h2>Script par défaut pour exécuter ou pour déboguer</h2>
<p>Si vous ne définissez pas de fichiers de script pour exécuter ou déboguer
les soumissions, le système résoudra le langage que vous utilisez (en fonction
des extensions de nom de fichier) et utilisera un script prédéfini.</p>
<h2>Évaluation automatique</h2>
<p>Fonctionnalités intégrées pour facilitter l\'évaluation des dépôts d\'étudiants.
Cette fonctionnalité perme d\'exécuter le programme de l\'étudiant et de vérifier sa
sortie pour une entrée donnée. Pour configurer les cas d\'évaluation, vous devez remplir
le fichier &quot;vpl_evaluate.cases&quot;.</p>

<p>Le fichier &quot;vpl_evaluate.cases&quot; a le format suivant :</p>
<ul>
<li> «<strong>case </strong>= Description du cas» : Facultatif. Définir un début de définition de cas de test.</li>
<li> «<strong>input </strong>= texte» : peut êre sur plusieurs lignes. Se termine par une autre instruction.</li>
<li> «<strong>output </strong>= texte» : peut êre sur plusieurs lignes. Se termine par une autre instruction. Un cas peut avoir plusieurs sorties correctes. Il y a 3 types de sorties : nombres, texte and texte exact :
<ul>
<li> <strong>number</strong>: séquence de nombres (entiers et flottants). Seuls les nombres de la sortie sont vérifiés, les autres textes sont ignorés. Les flottants sont vérifiés avec une tolérance</li>
<li> <strong>text</strong>: texte sans guillemets. Seuls les mots sont vérifiés et les autres caractères sont ignorés, la comparaison est insensible à la casse </li>
<li> <strong>exact text</strong>: texte ntre guillemets doubles. La correspondance exacte est utilisée pour tester la sortie.</li>
</ul>
</li>
<li> «<strong>grade reduction</strong> = [valeur|pourcentage%]» : Par défaut, une erreur réduit la note de l\'élève
(commence par maxgrade) de (grade_range / nombre de cas) mais avec cette instruction, vous pouvez changer
la valeur ou le pourcentage de réduction.</li>
</ul>
</p>
<h2>Usage général</h2>
<p>Un nouveau fichier peut être ajoué en écrivnat son nom dans la boîte de dialogue &quot;<b>Ajouter un fichier</b>&quot;
puis en cliquan sur le bouton &quot;<b>Ajouter un fichier</b>&quot;.</p>
<p>Un fichier peu êre envoyé au moyen du bouton  &quot;<b>Télécharger un fichier</b>&quot;.<p>Tous les fichiers ajoutés ou envoyés peuvent
être édités et, à part les 3 fichiers de script cités ci-dessous, renommés ou supprimés.</p>
<h2>Éxécution, débogage ou évaluation</h2>
<p>Trois fichiers de script pour préparer chacune des actions peuvent être définis.
Ces fichiers ont des noms prédéfinis : <b>vpl_run.sh</b> (exécution),
<b>vpl_debug.sh</b>  (débogage) et <b>vpl_evaluate.sh</b> (évaluation).</p>
<p>L\'exécution de chacun de ces fichiers de script devrait générer un
fichier appelé <b>vpl_execution</b>.
Ce fichier doit être un binaire exécuable ou un script commençant par &quot;#!/bin/sh &quot;.
La non-génération de ce fichier empêche d\'éxécuter l\'action sélectionnée.</p>
<p>Si l\'acivité que vous êtes en train de configurer est «basée sur» une autre activité,
les fichiers de l\'activité initiale sont automatiquement ajoutés.
Les contenus des fichiers vpl_run.sh, vpl_debug.sh et vpl_evaluate.sh
sont concaténés depuis l\'activité se situant au niveau le plus profond jusqu\'à l\'activité courante.</p>
<p>Finalement, le fichier <b>vpl_environment.sh</b> est ajouté automatiquement.
Ce fichier de script contient des informaions sur le dépôt.
Les informations sont des variables d\'environnement : </p>
<ul> <li> LANG:  langage uilisé. </li>
<li> LC_ALL: même valeur que LANG. </li>
<li> VPL_MAXTIME: temps maximum d\'exécution en secondes. </li>
<li> VPL_FILEBASEURL: URL pour accéder aux fichiers du cours. </li>
<li> VPL_SUBFILE#:  les noms de chacun des fichiers déposé par l\'étudiant. # Qui va de 0 au nombre de fichiers soumis. </Li>
<li> VPL_SUBFILES: liste de tous les fichiers soumis. </li>
<li> VPL_VARIATION + id: où id est l\'ordre de la variante démarrant à 0 la valeur est la valeur de la variante. </li>
</ul>
Si l\'action demandée est l\'évaluation, alors les variables suivantes sont aussi ajoutées.
<ul>
	<li>VPL_MAXTIME: durée maximum de l\'exécution en secondes.</li>
	<li>VPL_MAXMEMORY: mémoire maximum utilisable</li>
	<li>VPL_MAXFILESIZE: taille maximum de fichier pouvant êre créé en octets.</li>
	<li>VPL_MAXPROCESSES: nombre maximum de processus pouvan être exécutés simultanément.</li>
	<Li>VPL_FILEBASEURL: URL vers les fichiers du cours.</Li>
	<li>VPL_GRADEMIN: Score minimum pour cette activité</li>
	<li>VPL_GRADEMAX: Score maximum pour cette activité</li>
</ul>
<h2>Résultat de l\'évaluation</h2>
<p>La sortie de l\'évaluation est traitée pour extraire, si possible, les commentaires and une proposition de note pour l\'évaluation.
Les commentaires peuvent être définis de deux manières : avec une ligne de commentaire commençant par «Comment :=&gt;&gt;» ou
avec un bloc de commentaires commençant par une ligne contenant seulement «&lt;|--» et finissant par une ligne contenant seulement «--|&gt;».
La note est tirée de la dernière ligne commençant par «Grade :=&gt;&gt;».</p>';
$string['executionoptions'] = 'Options d\'exécution';
$string['executionoptions_help'] = '<p>Diverses options d\'exécution sont définies dans cette page</p>
<ul>
<li><b>Basée sur</b>: définit une autre instance VPL à partir de laquelle certaines fonctionnalités sont importées :
<ul><li>Fichiers d\'exécution (concaténation des fichiers de script prédéfinis)</li>
<li>Limites des ressources d\'exécution.</li>
<li>Variantes, qui se concaténent pour générer des multivariantes.</li>
<li>Taille maximale de chaque fichier à télécharger avec la soumission</li>
</ul>
</li>
<li><b>Exécuter</b>, <b>Déboguer</b> et <b>Évaluer</b>: doivent être réglés sur «Oui» si l\'action correspondante peut êre exécutée pendan la modification de la soumission. Cela affecte uniquement les étudiants, les utilisateurs ayant la capacité de noter peuvent toujours exécuter ces actions.</li>
<li><b>Évaluer uniquement lors de la soumission</b> : la soumission est évaluée automatiquement lors de son téléchargement.</li>
<li><b>Évaluaion automatique</b>: si le résultat de l\'évaluation comprend des codes de notation, ils sont utilisés pour définir automatiquement la note.</li>
</ul>';
$string['file'] = 'Fichier';
$string['fileNotChanged'] = 'Le fichier n\'a pas été modifié';
$string['file_name'] = 'Nom du fichier';
$string['fileadded'] = 'Le fichier «{\\$a}» a été ajouté';
$string['filedeleted'] = 'Le fichier «{\\$a}» a été supprimé';
$string['filelist'] = 'Liste des fichiers';
$string['filenotadded'] = 'Le fichier n\'a pas été ajouté';
$string['filenotdeleted'] = 'Le fichier «{$a}» n\'a pas été supprimé';
$string['filenotrenamed'] = 'Le fichier «{$a}» n\'a pas été renommé';
$string['filerenamed'] = 'Le fichier «{\\$a->from}» a éé renommé en «{\\$a->to}»';
$string['filesChangedNotSaved'] = 'Les fichiers ont été modifiés mais ils n\'ont pas été sauvegardés';
$string['filesNotChanged'] = 'Les fichiers n\'ont pas été modifiés';
$string['filestoscan'] = 'Fichiers à analyser';
$string['fileupdated'] = 'Le fichier «{\\$a}» a été mis à jour';
$string['finalreduction'] = 'Réducion finale';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> Réduction de la note finale.<br>
<b>NE</b> Évaluations automatiques demandées par l\'étudiant.<br>
<b>FE</b> Évaluations libres autorisées.<br>
<b>R</b> Réduction de note par évaluation. S\'il s\'agit d\'un pourcentage, il s\'applique au résultat précédent.<br>';
$string['find'] = 'Rechercher';
$string['find_replace'] = 'Rechercher/Remplacer';
$string['freeevaluations'] = 'Évaluations libres';
$string['freeevaluations_help'] = 'Nombre d\'évaluations automatiques qui ne réduisent pas le score final';
$string['fulldescription'] = 'Description complète';
$string['fulldescription_help'] = '<p>Vous devez écrire ici une description complète de l\'activité.</p>
<p>Si vous n\'écrivez rien ici, la descripion courte est affichée à la place.</p>
<p>Si vous souhaitez évaluer automatiquement, les interfaces pour les affectations doivent être détaillées et non ambiguës.</p>';
$string['fullscreen'] = 'Plein écran';
$string['getjails'] = 'Obtenez des serveurs d\'exécution';
$string['gradeandnext'] = 'Donner une note et suivant';
$string['graded'] = 'Évalué';
$string['gradedbyuser'] = 'Évalué par l\'utilisateur';
$string['gradedon'] = 'Évalué sur';
$string['gradedonby'] = 'Révisé le {$a->date} par {$a->gradername}';
$string['gradenotremoved'] = 'La note n\'a PAS été supprimée. Vérifier la configuration de l\'activité dans le carnet de notes.';
$string['gradenotsaved'] = 'La note n\'a PAS été sauvegardée. Vérifier la configuration de l\'activité dans le carnet de notes.';
$string['gradeoptions'] = 'Options des notes';
$string['grader'] = 'Évaluateur';
$string['gradercomments'] = 'Rapport d\'évaluation';
$string['graderemoved'] = 'La note a été supprimée';
$string['groupwork'] = 'Travail de groupe';
$string['inconsistentgroup'] = 'Vous n\'êtes pas membre d\'un seul groupe (0 o> 1)';
$string['incorrect_file_name'] = 'Nom de fichier incorrect';
$string['individualwork'] = 'Travail individuel';
$string['instanceselection'] = 'Sélection VPL';
$string['isexample'] = 'Cette activité sert d\'exemple';
$string['jail_servers'] = 'Liste des serveurs d\'exécution';
$string['jail_servers_config'] = 'Configuration des serveurs d\'exécution';
$string['jail_servers_description'] = 'Écrivez une ligne pour chaque serveur';
$string['joinedfiles'] = 'Fichiers joints';
$string['keepfiles'] = 'Fichiers à conserver lors de l\'exécution';
$string['keepfiles_help'] = '<p>En raison de problèmes de sécurité, les fichiers ajoutés en tant que &quot;Fichiers d\'exécution&quot; son supprimés avant de lancer le fichier vpl_execution.</p>
Si l\'un de ces fichiers est nécessaire pendant l\'exécution (par exemple, pour être utilisé comme données de test), il doit être marqué ici.';
$string['keyboard'] = 'Clavier';
$string['lasterror'] = 'Informations sur la dernière erreur';
$string['lasterrordate'] = 'Date de la dernière erreur';
$string['listofcomments'] = 'Liste des commentaires';
$string['listsimilarity'] = 'Liste des similitudes trouvées';
$string['listwatermarks'] = 'Liste des filigranes';
$string['load'] = 'Charger';
$string['loading'] = 'Chargement';
$string['local_jail_servers'] = 'Serveurs d\'exécution locaux';
$string['local_jail_servers_help'] = '<p>Ici, vous pouvez définir les serveurs d\'exécution locaux ajoutés pour cette activité et ceux
qui sont basés dessus.</p>
<p>Entrez l\'URL complète d\'un serveur sur chaque ligne. Vous pouvez utiliser des lignes vides
et des commentaires commençant par «#».</p>
<p>Cette activité utilisera comme liste de serveurs d\'exécution : les serveurs définis ici
plus la liste de serveurs définie dans l\'activité "basée sur"
plus la liste des serveurs d\'exécution communs.
Si vous souhaitez empêcher cette activité et les activités dérivées
d\'utiliser d\'autres serveurs, alors vous devez ajouter une ligne
contenant "end_of_jails" à la fin de la liste des serveurs.</p>';
$string['manualgrading'] = 'Notation manuelle';
$string['maxexefilesize'] = 'Taille maximale du fichier d\'exécution';
$string['maxexememory'] = 'Mémoire maximale utilisée';
$string['maxexeprocesses'] = 'Nombre maximum de processus';
$string['maxexetime'] = 'Durée maximale d\'exécution';
$string['maxfiles'] = 'Nombre maximal de fichiers';
$string['maxfilesexceeded'] = 'Nombre maximal de fichiers atteint';
$string['maxfilesize'] = 'Taille maximale du fichier de téléchargement';
$string['maxfilesizeexceeded'] = 'Taille de fichier maximale dépassée';
$string['maximumperiod'] = 'Période maximum {$a}';
$string['maxresourcelimits'] = 'Limites maximales des ressources d\'exécution';
$string['maxsimilarityoutput'] = 'Nombre de similarités maximum';
$string['menucheck_jail_servers'] = 'Vérifier les serveurs d\'exécution';
$string['menuexecutionfiles'] = 'Fichiers d\'exécution';
$string['menuexecutionoptions'] = 'Options';
$string['menukeepfiles'] = 'Fichiers à conserver';
$string['menulocal_jail_servers'] = 'erveurs d\'exécution locaux';
$string['menuresourcelimits'] = 'Limites de ressources';
$string['minsimlevel'] = 'Niveau de similitude minimum à montrer';
$string['moduleconfigtitle'] = 'Configuration du module VPL';
$string['modulename'] = 'Virtual programming lab';
$string['modulename_help'] = '<p>VPL est un module d\'activité pour Moodle qui gère des exercices de programmation et dont les principales caractéristiques sont :</p>
<ul>
<li>Activer pour modifier le code source des programmes dans le navigateur</li>
<li>Les étudiants peuvent exécuter des programmes interactivement dans le navigateur</li>
<li>Vous pouvez exécuter des tests pour examiner les programmes.</li>
<li>Permet de rechercher la similitude entre les fichiers.</li>
<li>Permet de définir des restrictions de modification et d\'éviter le collage de texte externe.</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Page d\'accueil de Virtual Programming lab</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Virtual programming labs';
$string['multidelete'] = 'Suppression multiple';
$string['nevaluations'] = '{$a} évaluations automatiques réalisées';
$string['new'] = 'Nouveau';
$string['new_file_name'] = 'Nom du nouveau fichier';
$string['next'] = 'Suivant';
$string['nojailavailable'] = 'Aucun serveur d\'exécution disponible';
$string['noright'] = 'Vous n\'avez pas les droits d\'accès';
$string['nosubmission'] = 'Aucun devoir rendu';
$string['notexecuted'] = 'Non exécuté';
$string['notgraded'] = 'Non évalué';
$string['notsaved'] = 'Non sauvegardé';
$string['novpls'] = 'Pas de VPL (virtual programming lab) défini';
$string['nowatermark'] = 'Propres filigranes {$a}';
$string['nsubmissions'] = '{$a} soumissions';
$string['numcluster'] = 'Groupe {$a}';
$string['open'] = 'Ouvrir';
$string['opnotallowfromclient'] = 'Action non autorisée depuis cette machine';
$string['options'] = 'Options';
$string['optionsnotsaved'] = 'Options non enregistrées';
$string['optionssaved'] = 'Options enregistrées';
$string['origin'] = 'Origine';
$string['othersources'] = 'Autres sources à ajouter à l\'analyse';
$string['outofmemory'] = 'Mémoire insuffisante';
$string['paste'] = 'Coller';
$string['pluginadministration'] = 'Administration VPL';
$string['pluginname'] = 'Virtual programming lab';
$string['previoussubmissionslist'] = 'Liste des soumissions précédentes';
$string['print'] = 'Imprimer';
$string['proposedgrade'] = 'Note proposée : {$a}';
$string['proxy'] = 'proxy';
$string['proxy_description'] = 'Proxy de Moodle vers les serveurs d\'exécution';
$string['redo'] = 'Rétablir';
$string['reductionbyevaluation'] = 'Réduction par évaluation automatique';
$string['reductionbyevaluation_help'] = 'Réduire le score final d\'une valeur ou d\'un pourcentage pour chaque évaluation automatique demandée par l\'étudiant';
$string['regularscreen'] = 'Écran habituel';
$string['removegrade'] = 'Enlever la note';
$string['rename'] = 'Renommer';
$string['rename_file'] = 'Renommer le fichier';
$string['replace_find'] = 'Remplacer/Rechercher';
$string['requestedfiles'] = 'Fichiers demandés';
$string['requestedfiles_help'] = '<p>Ici, vous définissez les noms et le contenu initial pour les fichiers demandés jusqu\'au nombre maximum de fichiers qui a été défini dans la description de base de l\'activité.</p>
<p>Si vous ne définissez pas de noms pour un certain nombre de fichiers, les fichiers sans nom sont facultatifs et peuvent avoir n\'importe quel nom.</p>
<p>Vous pouvez également ajouter du contenu aux fichiers demandés, de sorte que ces contenus seront disponibles la première fois qu\'ils seront ouverts avec l\'éditeur, si aucune soumission précédente n\'existe.</p>';
$string['requirednet'] = 'Envoi autorisé depuis le réseau';
$string['requiredpassword'] = 'Un mot de passe est requis';
$string['resetfiles'] = 'Réinitialiser les fichiers';
$string['resetvpl'] = 'Réinitialiser {$a}';
$string['resourcelimits'] = 'Limites de ressources';
$string['resourcelimits_help'] = '<p>Vous pouvez définir des limites pour le temps d\'exécution, la mémoire utilisée, la taille des fichiers d\'exécution et le nombre de processus à exécuter simultanément.</p>
<p>Ces limites sont utilisées lors de l\'exécution des fichiers de script vpl_run.sh, vpl_debug.sh et vpl_evaluate.sh et du fichier vpl_execution créé par eux.</p>
<p>Si cette activité est basée sur une autre activité, les limites peuvent être affectées par celles définies dans l\'activité de base et ses ancêtres ou dans la configuration globale du module.</p>';
$string['restrictededitor'] = 'Désactiver le téléchargement de fichiers externes, coller et déposer du contenu externe';
$string['retrieve'] = 'Récupérer les résultats';
$string['run'] = 'Éxécuter';
$string['running'] = 'En cours d\'exécution';
$string['runscript'] = 'Script d\\exécution';
$string['runscript_help'] = 'Sélectionnez le script d\\exécution à utiliser dans cette activité';
$string['save'] = 'Enregistrer';
$string['savecontinue'] = 'Enregistrer et continuer';
$string['saved'] = 'Enregistré';
$string['savedfile'] = 'Le fichier «{\\$a}» file a été enregistré';
$string['saveoptions'] = 'Enregistrer les options';
$string['saving'] = 'Enregistrement en cours';
$string['scanactivity'] = 'Activité';
$string['scandirectory'] = 'Répertoire';
$string['scanningdir'] = 'Analyse du répertoire ...';
$string['scanoptions'] = 'Options d\'analyse';
$string['scanother'] = 'Analyser les similitudes dans les sources ajoutées';
$string['scanzipfile'] = 'Fichier zip';
$string['sebkeys'] = 'SEB exam Key/s';
$string['sebkeys_help'] = 'SEB exam key(s) (max 3) obtained from .seb file<br>C\'est plus fiable que la seule vérification du navigateur.<br>https://safeexambrowser.org';
$string['sebrequired'] = 'Navigateur SEB requis';
$string['sebrequired_help'] = 'Un navigateur SEB correctement configuré est requis';
$string['select_all'] = 'Tout sélectionner';
$string['server'] = 'Serveur';
$string['serverexecutionerror'] = 'Erreur d\'exécution du serveur';
$string['shortcuts'] = 'Raccourcis clavier';
$string['shortdescription'] = 'Courte description';
$string['similarity'] = 'Similarité';
$string['similarto'] = 'Semblable à';
$string['startdate'] = 'Disponible à partir de';
$string['submission'] = 'Devoir rendu';
$string['submissionperiod'] = 'Période de dépôt';
$string['submissionrestrictions'] = 'Restrictions de dépôt';
$string['submissions'] = 'Devoirs rendus';
$string['submissionselection'] = 'Sélection de dépôts';
$string['submissionslist'] = 'Liste des devoirs rendus';
$string['submissionview'] = 'Vue de dépôt';
$string['submittedby'] = 'Envoyé par {$a}';
$string['submittedon'] = 'Déposé le';
$string['submittedonp'] = 'Déposé le {$a}';
$string['sureresetfiles'] = 'Voulez-vous perdre tout votre travail et réinitialiser les fichiers à leur état d\'origine ?';
$string['test'] = 'Activité test';
$string['testcases'] = 'Cas de test';
$string['testcases_help'] = 'Cette fonction permet d\'exécuter le programme de l\'étudiant et de vérifier sa sortie pour une entrée donnée. Pour configurer les cas d\'évaluation, vous devez remplir le fichier &quot;vpl_evaluate.cases&quot;.<br>
Le fichier «vpl_evaluate.cases» a le format suivant :<br>
<ul>
<li> «<strong>case </strong>= Description du cas» : Facultatif. Définir un début de définition de cas de test.</li>
<li> «<strong>input </strong>= texte» : peut êre sur plusieurs lignes. Se termine par une autre instruction.</li>
<li> «<strong>output </strong>= texte» : peut êre sur plusieurs lignes. Se termine par une autre instruction. Un cas peut avoir plusieurs sorties correctes. Il y a 3 types de sorties : nombres, texte and texte exact :
<ul>
<li> <strong>number</strong>: séquence de nombres (entiers et flottants). Seuls les nombres de la sortie sont vérifiés, les autres textes sont ignorés. Les flottants sont vérifiés avec une tolérance</li>
<li> <strong>text</strong>: texte sans guillemets. Seuls les mots sont vérifiés et les autres caractères sont ignorés, la comparaison est insensible à la casse </li>
<li> <strong>exact text</strong>: texte ntre guillemets doubles. La correspondance exacte est utilisée pour tester la sortie.</li>
</ul>
</li>
<li> «<strong>grade reduction</strong> = [valeur|pourcentage%]» : Par défaut, une erreur réduit la note de l\'élève
(commence par maxgrade) de (grade_range / nombre de cas) mais avec cette instruction, vous pouvez changer
la valeur ou le pourcentage de réduction.</li>
</ul>';
$string['timeleft'] = 'Temps restant';
$string['timelimited'] = 'Limite de temps';
$string['timeout'] = 'Temps écoulé';
$string['timeunlimited'] = 'Temps illimité';
$string['totalnumberoferrors'] = 'Erreurs';
$string['undo'] = 'Retour en arrière';
$string['unexpected_file_name'] = 'Nom de fichier incorrect : «{\\$a->expected}» était attendu alors que «{\\$a->found}» a été trouvé';
$string['unzipping'] = 'Décompression en cours ...';
$string['uploadfile'] = 'Déposer fichier';
$string['usevariations'] = 'Utiliser des variantes';
$string['usewatermarks'] = 'Utiliser les filigranes';
$string['usewatermarks_description'] = 'Ajoute des filigranes aux fichiers des élèves (uniquement dans les langages prises en charge)';
$string['variation'] = 'Variante {$a}';
$string['variation_options'] = 'Options de variante';
$string['variations'] = 'Variantes';
$string['variations_help'] = '<p>Un ensemble de variantes peut être défini pour une activité. Ces variantes sont attribuées aléatoirement aux étudiants.</p>
<p>Ici, vous pouvez indiquer si cette activité comporte des variantes, mettre un titre pour l\'ensemble des variantes et ajouter les variantes souhaitées.</p>
<p>Chaque variante a un code d\'identification et une description. Le code d\'identification est utilisé par le fichier <b> vpl_enviroment.sh </b> pour passer
la variante attribuée à chaque élève aux fichiers de script. La description, formatée en HTML, est présentée aux étudiants à qui a été attribuée
la variante correspondante.</p>';
$string['variations_unused'] = 'Cette activité a des variantes mais qui sont désactivées';
$string['variationtitle'] = 'Titre de la variante';
$string['varidentification'] = 'Identification';
$string['visiblegrade'] = 'Visible';
$string['vpl'] = 'Virtual Programming Lab';
$string['vpl:addinstance'] = 'Ajouter de nouvelles instances vpl';
$string['vpl:grade'] = 'Affectation de note VPL';
$string['vpl:manage'] = 'Gérer les affectations VPL';
$string['vpl:setjails'] = 'Définir des serveurs d\'exécution pour des instances VPL particulières';
$string['vpl:similarity'] = 'Recherche de similitude';
$string['vpl:submit'] = 'Déposer une affectation VPL';
$string['vpl:view'] = 'Voir la description complète de l\'affectation VPL';
$string['vpl_debug.sh'] = 'Ce script prépare le débogage';
$string['vpl_evaluate.cases'] = 'Cas de test pour évaluation';
$string['vpl_evaluate.sh'] = 'Ce script prépare l\'évaluation';
$string['vpl_run.sh'] = 'Ce script prépare l\'exécution';
$string['websocket_protocol'] = 'Protocole WebSocket';
$string['websocket_protocol_description'] = 'Type de protocole Websocket (ws:// or wss://) utilisé par le navigateur pour se connecter aux serveurs d\'exécution.';
$string['workingperiods'] = 'Périodes de travail';
$string['worktype'] = 'Type de travail';
