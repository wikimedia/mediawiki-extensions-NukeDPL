<?php

$messages = array();
 
$messages['en'] = array(
	'nukedpl' => 'Mass delete by DPL query',
	'nukedpl-desc' => 'Adds a [[Special:NukeDPL|Special Page]] for mass deletion by DPL query.',
	'nukedpl-intro' => "This tool allows for mass deletions of pages selected by a DPL query.<br>
Enter a query below to generate a list of titles to delete.
* Titles can be individually removed before deleting.
* Remember, article titles are case-sensitive.
* Queries shouldn't be surrounded by any DPL tags or braces.
* For information about the parameter meanings, see the [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].",
	'nukedpl-candidatelist' => 'View candidate list',
	'nukedpl-nopages' => "No pages to delete using DPL-query: <tt>$1</tt>",
	'nukedpl-nuke' => "Nuke!",
	'nukedpl-list' => "The following pages were selected by DPL-query: <tt>$1</tt> hit the button to delete them.",
	'nukedpl-defaultreason' => "Mass removal of pages selected by DPL-query: ($1)",
);

$messages['de'] = array(
	'nukedpl' => 'Massenlöschung mittels DPL query',
	'nukedpl-desc' => 'Ergänzt eine [[Spezial:NukeDPL|Spezialseite]], die das massenhafte Löschen von Seiten per DPL-Query ermöglicht',
	'nukedpl-intro' => "Diese Spezialseite erlaubt das Löschen von Seiten, die mittels einer DPL-Query ausgewählt wurden.<br>
Geben Sie unten eine DPL-Query ein, um eine Liste mit den zu löschenden Seiten zu generieren.
* Seiten können aus der Liste der zu löschenden Seiten vor dem Löschen noch individuell entfernt werden
* Seitentitel sind case-sensitive!
* Queries werden nicht durch DPL Tags oder Klammern umschlossen!
* Erklärungen zu den Parametern finden Sie auf der Seite [http://semeb.com/dpldemo/index.php?title=DPL:Manual DPL Manual].",
	'nukedpl-candidatelist' => 'Anzeige der Löschkandidaten',
	'nukedpl-nopages' => "Keine Seiten zum Löschen bei folgendem DPL-Query: <tt>$1</tt>",
	'nukedpl-nuke' => "Löschen!",
	'nukedpl-list' => "Die folgenden Seiten wurden gefunen. DPL-Query: <tt>$1</tt><br />Button drücken, um diese zu löschen.",
	'nukedpl-defaultreason' => "Massenlöschung von Seiten mittels DPL-Query: ($1)",
);