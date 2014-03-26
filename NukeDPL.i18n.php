<?php

$messages = array();
 
$messages['en'] = array(
	'right-nukedpl' => 'Nuke pages by Dynamic Page List queries',
	'nukedpl' => 'Mass delete by DPL query',
	'nukedpl-desc' => 'Adds a [[Special:NukeDPL|Special Page]] for mass deletion by DPL query',
	'nukedpl-intro' => "This tool allows for mass deletions of pages selected by a DPL query.

Enter a query below to generate a list of titles to delete.
* Titles can be individually removed before deleting.
* Remember, page titles are case-sensitive.
* Queries shouldn't be surrounded by any DPL tags or braces.
* For information about the parameter meanings, see the [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].",
	'nukedpl-candidatelist' => 'View candidate list',
	'nukedpl-nopages' => "No pages to delete using DPL-query: <tt>$1</tt>",
	'nukedpl-nuke' => 'Nuke!',
	'nukedpl-list' => "The following pages were selected by DPL-query: <tt>$1</tt> hit the button to delete them.",
	'nukedpl-defaultreason' => "Mass removal of pages selected by DPL-query: ($1)",
);

$messages['de'] = array(
	'nukedpl' => 'Massenlöschung mittels DPL query',
	'nukedpl-desc' => 'Ergänzt eine [[Spezial:NukeDPL|Spezialseite]], die das massenhafte Löschen von Seiten per DPL-Query ermöglicht',
	'nukedpl-intro' => "Diese Spezialseite erlaubt das Löschen von Seiten, die mittels einer DPL-Query ausgewählt wurden.

Geben Sie unten eine DPL-Query ein, um eine Liste mit den zu löschenden Seiten zu generieren.
* Seiten können aus der Liste der zu löschenden Seiten vor dem Löschen noch individuell entfernt werden
* Seitentitel sind case-sensitive!
* Queries werden nicht durch DPL Tags oder Klammern umschlossen!
* Erklärungen zu den Parametern finden Sie auf der Seite [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].",
	'nukedpl-candidatelist' => 'Anzeige der Löschkandidaten',
	'nukedpl-nopages' => "Keine Seiten zum Löschen bei folgendem DPL-Query: <tt>$1</tt>",
	'nukedpl-nuke' => 'Löschen!',
	'nukedpl-list' => "Die folgenden Seiten wurden gefunen. DPL-Query: <tt>$1</tt><br />Button drücken, um diese zu löschen.",
	'nukedpl-defaultreason' => "Massenlöschung von Seiten mittels DPL-Query: ($1)",
);

$messages['qqq'] = array(
	'right-nukedpl' => '{{doc-right|nukedpl}}',
	'nukedpl' => '{{doc-special|NukeDPL}}',
	'nukedpl-desc' => '{{desc|name=NukeDPL|url=https://www.mediawiki.org/wiki/Extension:NukeDPL}}',
	'nukedpl-intro' => 'Text explaining how to use the special page',
	'nukedpl-candidatelist' => 'Text in the button that generates the list of pages to be deleted',
	'nukedpl-nopages' => 'Message when the query returns no pages to be deleted',
	'nukedpl-nuke' => 'Text in the button to delete the selected pages',
	'nukedpl-list' => 'Text preceding the list of pages to be deleted',
	'nukedpl-defaultreason' => 'Default reason associated with the deleted pages',
);
