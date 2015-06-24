Add CSS Classes for page & tt_content




Example: extTables.php (in 'typo3conf'):


<?php

$pageClasses = array(
	array('class_p_1', 'class_p_1'),
    array('class_p_2', 'class_p_2'),
    array('class_p_3', 'class_p_3')
);
$TCA['pages']['columns']['tx_almaddcssclass']['config']['items'] = $pageClasses;

$contentClasses = array(
	array('class_c_1', 'class_c_1'),
    array('class_c_2', 'class_c_2'),
    array('class_c_3', 'class_c_3')
);
$TCA['tt_content']['columns']['tx_almaddcssclass']['config']['items'] = $contentClasses;

?>




Example: add page class in body-tag with current and first level page id and language (page)


page.bodyTag >
page.bodyTagCObject = COA
page.bodyTagCObject.wrap = <body class="|">
page.bodyTagCObject.10 = TEXT
page.bodyTagCObject.10.data = levelfield:2, uid, slide
page.bodyTagCObject.10.noTrimWrap = |parent_| |
page.bodyTagCObject.20 = TEXT
page.bodyTagCObject.20.data = field:uid
page.bodyTagCObject.20.noTrimWrap = |page_| |
page.bodyTagCObject.30 = TEXT
page.bodyTagCObject.30.value < CONTLANG
page.bodyTagCObject.30.wrap = lang_|
page.bodyTagCObject.40 = TEXT
page.bodyTagCObject.40.data = field:tx_almaddcssclass
page.bodyTagCObject.40.stdWrap.replacement.10.search = ,
page.bodyTagCObject.40.stdWrap.replacement.10.replace.char = 32
page.bodyTagCObject.40.stdWrap.noTrimWrap = | ||
page.bodyTagCObject.40.stdWrap.required = 1




Example: add content-element class (tt_content)


temp.css_1 < tt_content.stdWrap.innerWrap.cObject.default.20.10
tt_content.stdWrap.innerWrap.cObject.default.20.10 >
tt_content.stdWrap.innerWrap.cObject.default.20.10 = COA
tt_content.stdWrap.innerWrap.cObject.default.20.10.10 < temp.css_1
tt_content.stdWrap.innerWrap.cObject.default.20.10.20 = TEXT
tt_content.stdWrap.innerWrap.cObject.default.20.10.20.data = field:tx_almaddcssclass
tt_content.stdWrap.innerWrap.cObject.default.20.10.20.stdWrap.replacement.10.search = ,
tt_content.stdWrap.innerWrap.cObject.default.20.10.20.stdWrap.replacement.10.replace.char = 32
tt_content.stdWrap.innerWrap.cObject.default.20.10.20.stdWrap.noTrimWrap = | ||
tt_content.stdWrap.innerWrap.cObject.default.20.10.20.stdWrap.required = 1