<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_almaddcssclass' => array(
    	'exclude' => 0,
        'label' => 'LLL:EXT:alm_addcssclass/Resources/Private/Language/locallang_db.xlf:tx_almaddcssclass',
        'config' => array(
        	'type' => 'select',
        	'size' => 5,
        	'minitems' => 0,
        	'maxitems' => 99
        )
    ),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages', 'tx_almaddcssclass', '1,3,4', 'after:backend_layout_next_level');

t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('tt_content', 'tx_almaddcssclass', 'header,text,textpic,image', 'after:section_frame');
