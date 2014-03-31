<?php
/**
 * Internationalization file for the NukeDPL extension.
 */

$messages = array();

/** English */
$messages['en'] = array(
	'nukedpl' => 'Mass delete by DPL query',
	'nukedpl-desc' => 'Adds a [[Special:NukeDPL|special page]] for mass deletion by DPL query',
	'nukedpl-intro' => "This tool allows for mass deletions of pages selected by a DPL query.

Enter a query below to generate a list of titles to delete.
* Titles can be individually removed before deleting.
* Remember, page titles are case-sensitive.
* Queries shouldn't be surrounded by any DPL tags or braces.
* For information about the parameter meanings, see the [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].",
	'nukedpl-candidatelist' => 'View candidate list',
	'nukedpl-nopages' => "No pages to delete using DPL query: <code>$1</code>",
	'nukedpl-nuke' => 'Nuke!',
	'nukedpl-list' => 'The following {{PLURAL:$1|page was|pages were}} selected by DPL query: <code>$2</code>

Hit "{{int:nukedpl-nuke}}" to delete {{PLURAL:$1|it|them}}.',
	'nukedpl-defaultreason' => "Mass removal of pages selected by DPL query: $1",
	'right-nukedpl' => 'Nuke pages by Dynamic Page List queries',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'nukedpl' => '{{doc-special|NukeDPL}}',
	'nukedpl-desc' => '{{desc|name=NukeDPL|url=https://www.mediawiki.org/wiki/Extension:NukeDPL}}',
	'nukedpl-intro' => 'Text explaining how to use the special page',
	'nukedpl-candidatelist' => 'Text in the button that generates the list of pages to be deleted',
	'nukedpl-nopages' => 'Message when the query returns no pages to be deleted. Parameters:
* $1 - DPL query string',
	'nukedpl-nuke' => 'Text in the button to delete the selected pages',
	'nukedpl-list' => 'Text preceding the list of pages to be deleted. Parameters:
* $1 - number of pages
* $2 - DPL query string',
	'nukedpl-defaultreason' => 'Default reason associated with the deleted pages',
	'right-nukedpl' => '{{doc-right|nukedpl}}',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'nukedpl' => 'Massenlöschung mittels DPL query',
	'nukedpl-desc' => 'Ergänzt eine [[Special:NukeDPL|Spezialseite]], die das massenhafte Löschen von Seiten per DPL-Abfrage ermöglicht',
	'nukedpl-intro' => 'Diese Spezialseite erlaubt das Löschen von Seiten, die mittels einer DPL-Query ausgewählt wurden.

Geben Sie unten eine DPL-Query ein, um eine Liste mit den zu löschenden Seiten zu generieren.
* Seiten können aus der Liste der zu löschenden Seiten vor dem Löschen noch individuell entfernt werden
* Seitentitel sind case-sensitive!
* Queries werden nicht durch DPL Tags oder Klammern umschlossen!
* Erklärungen zu den Parametern finden Sie auf der Seite [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].',
	'nukedpl-candidatelist' => 'Anzeige der Löschkandidaten',
	'nukedpl-nopages' => 'Keine Seiten zum Löschen bei folgendem DPL-Query: <code>$1</code>',
	'nukedpl-nuke' => 'Löschen!',
	'nukedpl-list' => 'Die {{PLURAL:$1|folgende Seite wurde|folgenden Seiten wurden}} gefunden. DPL-Abfrage: <code>$2</code>

„{{int:nukedpl-nuke}}“ drücken, um diese zu löschen.',
	'nukedpl-defaultreason' => 'Massenlöschung von Seiten mittels DPL-Query: $1',
	'right-nukedpl' => 'Massenlöschung von Seiten mithilfe „Dynamic Page List“-Abfragen',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'nukedpl' => 'Suppression en masse par requête DPL',
	'nukedpl-desc' => 'Ajoute une [[Special:NukeDPL|page spéciale]] pour la suppression en masse par requête DPL',
	'nukedpl-intro' => 'Cet outil permet les suppressions en masse de pages sélectionnées par une requête DPL.

Saisissez une requête ci-dessous pour générer une liste des titres à supprimer.
* Les titres peuvent être déplacés individuellement avant la suppression.
* Rappelez-vous que les titres de page sont sensibles à la casse.
* Les requêtes ne doivent pas être entourées de balises DPL ou d’accolades.
* Pour savoir ce que signifient les paramètres, voyez le [http://semeb.com/dpldemo/index.php?title=DPL:Manual manuel de DPL].',
	'nukedpl-candidatelist' => 'Afficher la liste des candidats',
	'nukedpl-nopages' => 'Aucune page à supprimer en utilisant la requête DPL : <code>$1</code>',
	'nukedpl-nuke' => 'Supprimer !',
	'nukedpl-list' => '{{PLURAL:$1|La page suivante sera sélectionnée|Les pages suivantes seront sélectionnées}} par la requête DPL : <code>$2</code>

Appuyez sur « {{int:nukedpl-nuke}} » pour {{PLURAL:$1|la|les}} supprimer.',
	'nukedpl-defaultreason' => 'Suppression en masse de pages sélectionnées par la requête DPL : $1',
	'right-nukedpl' => 'Supprimer les pages par des requêtes de Liste de Pages Dynamique',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'nukedpl' => 'DPLクエリで一括削除',
	'nukedpl-desc' => 'DPL クエリで一括削除できる[[Special:NukeDPL|特別ページ]]を追加する',
	'nukedpl-candidatelist' => '候補一覧を表示',
	'nukedpl-nopages' => '以下の DPL クエリでは削除するページが見つかりませんでした: <code>$1</code>',
	'nukedpl-nuke' => '一括削除!',
	'nukedpl-list' => 'DPL クエリによって以下の{{PLURAL:$1|ページ}}が選択されました: <code>$2</code>

{{PLURAL:$1|このページ|これらのページ}}を削除するには「{{int:nukedpl-nuke}}」を押してください。',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'nukedpl' => 'Масовно бришење по DPL-барање',
	'nukedpl-desc' => 'Додава [[Special:NukeDPL|специјална страница]] за масовно бришење по DPL-барање',
	'nukedpl-intro' => 'Алаткава овозможува масовнно бришење на страници избрани со DPL-барање.

Подолу внесете барање за да добиете список на наслови за бришење.
* Насловите можат поединечно да се отстранат пред бришењето.
* Не заборавајте дека во насловите се разликуваат големи и мали букви.
* Барањата не треба да имаат околу себе никакви DPL-ознаки или загради.
* Значењето на параметрите можете да го погледате на [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].',
	'nukedpl-candidatelist' => 'Погл. список на кандидати',
	'nukedpl-nopages' => 'Нема страници за бришење по DPL-барањето: <code>$1</code>',
	'nukedpl-nuke' => 'Избриши!',
	'nukedpl-list' => 'Со DPL-барањето {{PLURAL:$1|е избрана следнава страница|се избрани следниве страници}}: <code>$2</code>

Стиснете на „{{int:nukedpl-nuke}}“ за да {{PLURAL:$1|ја избришете|ги избришете}}.',
	'nukedpl-defaultreason' => 'Масовно отстранување на страници според DPL-барање: $1',
	'right-nukedpl' => 'Бришење на страници според барања до Динамичкиот список на страници (DPL)',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'nukedpl' => '通过DPL查询大量删除',
	'nukedpl-desc' => '加入用于通过DPL查询大量删除的[[Special:NukeDPL|特殊页面]]',
	'nukedpl-candidatelist' => '查看候选列表',
	'nukedpl-nopages' => '没有页面可使用DPL查询删除：<code>$1</code>',
	'nukedpl-nuke' => '大量删除！',
	'nukedpl-defaultreason' => '已选择通过DPL查询大量移除的页面：$1',
	'right-nukedpl' => '通过动态页面列表（DPL）查询大量删除页面',
);
