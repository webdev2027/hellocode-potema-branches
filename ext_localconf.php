<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ssa.HellocodePotemaBranches',
            'Potemaserviceprovider',
            [
                'PotemaServiceProvider' => 'list'
            ],
            // non-cacheable actions
            [
                'PotemaServiceProvider' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					potemaserviceprovider {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_potemaserviceprovider.svg
						title = LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocode_potema_branches_domain_model_potemaserviceprovider
						description = LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocode_potema_branches_domain_model_potemaserviceprovider.description
						tt_content_defValues {
							CType = list
							list_type = hellocodepotemabranches_potemaserviceprovider
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
