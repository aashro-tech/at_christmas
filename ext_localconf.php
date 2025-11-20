<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:at_christmas/Configuration/PageTSconfig/setup.typoscript">');

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:at_christmas/Configuration/RTE/Default.yaml';

// Set default values if not already set by the backend
if (empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename']) || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 site") {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'Christims';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:at_christmas/Resources/Public/Icons/santa-claus.png';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:at_christmas/Resources/Public/Icons/santa-claus.png';
}