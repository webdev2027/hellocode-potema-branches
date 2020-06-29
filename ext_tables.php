<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ssa.HellocodePotemaBranches',
            'Potemaserviceprovider',
            'POTEMA Service Provider'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'POTEMA Service Provider');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_hellocodepotemabranches_domain_model_potemaserviceprovider', 'EXT:hellocode_potema_branches/Resources/Private/Language/locallang_csh_tx_hellocodepotemabranches_domain_model_potemaserviceprovider.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_hellocodepotemabranches_domain_model_potemaserviceprovider');

    },
    $_EXTKEY
);
