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
 * Strings for component 'filter_filtercodes', language 'fr', version '3.11'.
 *
 * @package     filter_filtercodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['contentmissing'] = '<h1>Le contenu est manquant.</h1><p>Veuillez en informer l\'administrateur.</p>';
$string['courseteacherlinktype'] = 'Type de lien pour enseignant';
$string['courseteacherlinktype_desc'] = 'Choisir le type de lien pour le lien de l\'enseignant dans les balises {courseteachers}.';
$string['courseteachershowpic'] = 'Afficher la photo de l\'enseignant';
$string['courseteachershowpic_desc'] = 'Si activé, affichera la photo de profil de l\'enseignant dans les balises {courseteachers}.';
$string['disabled_customnav_description'] = '<strong>Remarque concernant la prise en charge du menu personnalisé</strong> - Pour activer les balises FilterCodes dans le menu personnalisé de votre site Moodle, vous devrez possiblement personnaliser votre thème ou votre noyau Moodle. <a href="https://github.com/michael-milette/moodle-filter_filtercodes#can-i-use-filtercodes-in-moodles-custom-menus"> Informations sur la façon d\'ajouter des balises FilterCodes dans les menus personnalisés</a>.';
$string['enable_customnav'] = 'Support pour navigation personnalisée';
$string['enable_customnav_description'] = '<strong>Expérimental</strong> : activer le support pour les balises FilterCode dans le menu de navigation personnalisé de Moodle.
Remarque : cette option est compatible avec les thèmes basés sur Clean and Boost dans Moodle 3.2 à 3.4 seulement. Ne filtre pas les balises sur la page Réglages thème de Moodle.';
$string['enable_scrape'] = 'Support pour les étiquettes de raclage';
$string['enable_scrape_description'] = 'Prise en charge des étiquettes de raclage';
$string['escapebraces'] = 'Balises d\'échappement';
$string['escapebraces_desc'] = 'Lorsque cette option est cochée, vous pourrez afficher les balises FilterCodes sans qu\'elles soient interprétées en les enveloppant entre des [crochets]. Cela peut vous être très utile lors de la création de la documentation FilterCodes pour les enseignants et les créateurs de cours sur votre site Moodle.<br><br>Exemple : [{fullname}] n\'affichera pas le nom complet de l\'utilisateur mais affichera la balise {fullname}.';
$string['filtername'] = 'Filter Codes';
$string['formcheckin'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf check-in">
    <fieldset>
        <input type="hidden" id="subject" name="subject" value="Présent&nbsp;!">
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Je suis ici&nbsp;!">
    </div>
</form>';
$string['formcontactus'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf contact-us">
    <fieldset>
        <div class="form-group">
            <label for="nom" id="namelabel" class="d-block">Votre nom <strong class="required">(obligatoire)</strong></label>
            <input id="nom" name="nom" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimum de 3 lettres/espaces." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="courriel" id="emaillabel" class="d-block">Adresse courriel <strong class="required">(obligatoire)</strong></label>
            <input id="courriel" name="courriel" type="email" size="57" maxlength="60"
                    required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="objet" id="subjectlabel" class="d-block">Objet <strong class="required">(obligatoire)</strong></label>
            <input id="objet" name="objet" type="text" size="57" maxlength="80" minlength="5"
                    title="Minimum de 5 caractères." required="required">
        </div>
        <div class="form-group">
            <label for="message" id="messagelabel" class="d-block">Message <strong class="required">(obligatoire)</strong></label>
            <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                    title="Minimum de 5 caractères." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Envoyer">
    </div>
</form>';
$string['formcourserequest'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf new-course-request">
    <fieldset>
        <div class="form-group">
            <label for="nom" id="namelabel" class="d-block">Votre nom <strong class="required">(obligatoire)</strong></label>
            <input id="nom" name="nom" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimum de 3 lettres/espaces." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="courriel" id="emaillabel" class="d-block">Adresse courriel <strong class="required">(obligatoire)</strong></label>
            <input id="courriel" name="courriel" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="new_course_name" id="new_course_namelabel" class="d-block">Nom proposé du nouveau cours <strong class="required">(obligatoire)</strong></label>
            <input id="new_course_name" name="new_course_name" type="text" size="57" maxlength="80" minlength="5"
                    title="Minimum 5 characters." required="required">
        </div>
        <div class="form-group">
            <label for="description" id="messagelabel" class="d-block">Description du cours <strong class="required">(obligatoire)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Minimum de 5 caractères." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Soumettre la demande pour ce cours">
    </div>
</form>';
$string['formquickquestion'] = '<fieldset>
    <div class="form-group">
        <label for="objet" id="subjectlabel" class="d-block">Objet <strong class="required">(obligatoire)</strong></label>
        <input class="block" id="objet" name="objet" type="text" size="57" maxlength="80" minlength="5"
                title="Minimum de 5 caractères." required="required">
    </div>
    <div class="form-group">
        <label for="message" id="messagelabel" class="d-block">Message <strong class="required">(obligatoire)</strong></label>
        <textarea id="message" name="message" rows="5" cols="58" minlength="5"
                title="Minimum de 5 caractères." required="required"></textarea>
    </div>
    <input type="hidden" id="sesskey" name="sesskey" value="">
    <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
</fieldset>
<div>
    <input type="submit" name="submit" id="submit" value="Send">
</div>';
$string['formsupport'] = '<form action="{wwwroot}/local/contact/index.php" method="post" class="cf support-request">
    <fieldset>
        <div class="form-group">
            <label for="nom" id="namelabel" class="d-block">Votre nom <strong class="required">(obligatoire)</strong></label>
            <input id="nom" name="nom" type="text" size="57" maxlength="45" pattern="[A-zÀ-ž]([A-zÀ-ž\\s]){2,}"
                    title="Minimum de 3 lettres/espaces." required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{fullname}">
        </div>
        <div class="form-group">
            <label for="courriel" id="emaillabel" class="d-block">Adresse courriel <strong class="required">(obligatoire)</strong></label>
            <input id="courriel" name="courriel" type="email" size="57" maxlength="60" required="required" {readonly}{ifloggedin} disabled{/ifloggedin} value="{email}">
        </div>
        <div class="form-group">
            <label for="objet" id="subjectlabel" class="d-block">Objet <strong class="required">(obligatoire)</strong></label>
            <select id="objet" name="objet" required="required">
                <option label="Choisir un objet"></option>
                <option>Je ne peux pas réinitialisation mon mot de passe</option>
                <option>Je n\'arrive pas à ouvrir une session</option>
                <option value="Suggestion">J\'ai une suggestion</option>
                <option value="Message d\'erreur">Je reçois un message d\'erreur</option>
                <option value="Erreur système">Quelque chose ne fonctionne pas comme prévu</option>
                <option value="Cours">J\'éprouve des difficultés à accéder à un cours en particulier ou à son contenu</option>
                <option value="Autre raison">Autre (veuillez préciser)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="objet_specifique" id="specifylabel" class="d-block">Objet spécifique ou nom du cours <strong class="required">(obligatoire)</strong></label>
            <input type="text" id="objet_specifique" name="objet_specifique" size="57" maxlength="80" required="required">
        </div>
        <div class="form-group">
            <label for="url" id="urllabel" class="d-block">Spécifiez l\'adresse URL </label>
            <input type="url" id="url" name="url" size="57" maxlength="80" value="{referer}">
        </div>
        <div class="form-group">
            <label for="description" id="descriptionlabel" class="d-block">Description et détails étape par étape sur la façon de reproduire le problème. <strong class="required">(obligatoire)</strong></label>
            <textarea id="description" name="description" rows="5" cols="58" minlength="5"
                    title="Minimum de 5 caractères." required="required"></textarea>
        </div>
        <input type="hidden" id="sesskey" name="sesskey" value="">
        <script>document.getElementById("sesskey").value = M.cfg.sesskey;</script>
        {recaptcha}
    </fieldset>
    <div>
        <input type="submit" name="submit" id="submit" value="Soumettre votre demande d\'aide">
    </div>
</form>';
$string['globaltagcontentdesc'] = 'C’est le contenu que votre balise globale remplacera. Exemple : Si votre balise s’appelle « {global_adresse} », cette balise sera remplacée par le contenu entré dans ce champ.';
$string['globaltagcontenttitle'] = 'Contenu';
$string['globaltagcount'] = 'Nombre de balises globales.';
$string['globaltagcountdesc'] = 'Sélectionner le nombre de balises que vous souhaitez définir. Pour des performances optimales, sélectionner uniquement le nombre dont vous aurez besoin.';
$string['globaltagheadingdesc'] = 'Définir vos propres balises globales, parfois également appelées blocs globaux.';
$string['globaltagheadingtitle'] = 'Balises personnalisées globales';
$string['globaltagnamedesc'] = 'Cela fera partie du nom de votre balise, précédé par « global_ ». Exemple : si vous saisissez « adresse » ici, votre balise s\'appellera {global_adresse}. Elle doit être constituée d\'une seule chaîne de lettres. Aucun espace, chiffre ou caractère spécial n\'est autorisé.';
$string['globaltagnametitle'] = 'Balise&nbsp;: global_';
$string['hidecompletedcourses'] = 'Masquer les cours achevés';
$string['hidecompletedcourses_desc'] = 'Activer pour filtrer les cours achevés dans la liste des balises {mycoursesmenu}.';
$string['ifprofilefiedonlyvisible'] = '{ifprofile_field_} uniquement visible.';
$string['ifprofilefiedonlyvisible_desc'] = 'Limiter la balise {ifprofile_field_...} pour accéder uniquement aux champs de profil visibles. Les champs masqués se comporteront comme s\'il était vide. Si ce réglage es désactivé, cette balise vérifiera les champs d\'utilisateur masqués.';
$string['pagebuilder'] = 'Constructeur de page';
$string['pagebuilderlink'] = 'https://www.layoutit.com/build';
$string['photoeditor'] = 'Éditeur de photos';
$string['photoeditorlink'] = 'https://pixlr.com/editor/';
$string['photoeditorname'] = 'Pixlr';
$string['pluginname'] = 'Filter Codes';
$string['privacy:metadata'] = 'Le plugin FilterCodes n\'enregistre aucune donnée personnelle.';
$string['screenrec'] = 'Enregistreur d\'écran';
$string['screenreclink'] = 'https://screenapp.io/#/recording';
$string['sizeb'] = 'o';
$string['sizeeb'] = 'Eo';
$string['sizegb'] = 'Go';
$string['sizekb'] = 'ko';
$string['sizemb'] = 'Mo';
$string['sizetb'] = 'To';
$string['sizeyb'] = 'Yo';
$string['sizezb'] = 'Zo';
