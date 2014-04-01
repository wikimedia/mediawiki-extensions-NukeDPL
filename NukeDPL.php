<?php

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'NukeDPL',
	'author' => array( '[[User:Nad|Nad]]', '[[User:Luis Felipe Schenone|LFS]]' ),
	'version' => '1.4.0',
	'descriptionmsg' => 'nukedpl-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:NukeDPL',
);

$wgAvailableRights[] = 'nukedpl';

$wgGroupPermissions['sysop']['nukedpl'] = true;

$wgSpecialPages['NukeDPL'] = 'SpecialNukeDPL';

$wgSpecialPageGroups['NukeDPL'] = 'pagetools';

$wgMessagesDirs['NukeDPL'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['NukeDPL'] = __DIR__ . '/NukeDPL.i18n.php';
$wgExtensionMessagesFiles['NukeDPLAliases'] = __DIR__ . '/NukeDPL.alias.php';

$wgAutoloadClasses['SpecialNukeDPL'] = __DIR__ . '/SpecialNukeDPL.php';

$egNukeDPLDefaultText = '
distinct          = true | false
ignorecase        = true | false
title             = Article
nottitle          = Article
titlematch        = %fragment%
nottitlematch     = %fragment%
titleregexp       = ^.+$
nottitleregexp    = ^.+$
category          = Category1 | Category2
notcategory       = Category1 | Category2
categorymatch     = %fragment%
notcategorymatch  = %fragment%
categoryregexp    = ^.+$
notcategoryregexp = ^.+$
namespace         = Namespace1 | Namespace2
notnamespace      = Namespace1 | Namespace2
linksfrom         = Foo | Bar
notlinksfrom      = Foo | Bar
linksto           = Foo|Bar
notlinksto        = Foo|Bar
imageused         = Foo.jpg
imagecontainer    = Article1 | Article2
uses              = Template1 | Template2
notuses           = Template1 | Template2
redirects         = exclude | include | only
createdby         = User
notcreatedby      = User
modifiedby        = User
notmodifiedby     = User
lastmodifiedby    = User
notlastmodifiedby = User
';
