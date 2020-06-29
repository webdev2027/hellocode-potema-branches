<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider',
        'label' => 'provider_title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'provider_title,provider_subtitle,provider_generaldistributor,provider_premiumpartner,provider_street,provider_zip,provider_city,provider_country,provider_phone,provider_fax,provider_mobile,provider_email,provider_url,provider_lat,provider_lng',
        'iconfile' => 'EXT:hellocode_potema_branches/Resources/Public/Icons/tx_hellocodepotemabranches_domain_model_potemaserviceprovider.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, provider_title, provider_subtitle, provider_generaldistributor,provider_premiumpartner, provider_street, provider_zip, provider_city, provider_country, provider_phone, provider_fax, provider_mobile, provider_email, provider_url, provider_lat, provider_lng',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, provider_title, provider_subtitle, provider_generaldistributor,provider_premiumpartner, provider_street, provider_zip, provider_city, provider_country, provider_phone, provider_fax, provider_mobile, provider_email, provider_url, provider_lat, provider_lng, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_hellocodepotemabranches_domain_model_potemaserviceprovider',
                'foreign_table_where' => 'AND tx_hellocodepotemabranches_domain_model_potemaserviceprovider.pid=###CURRENT_PID### AND tx_hellocodepotemabranches_domain_model_potemaserviceprovider.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'provider_title' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_title',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'provider_subtitle' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_subtitle',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
        'provider_generaldistributor' => [
            'exclude' => false,
            'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_generaldistributor',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'Yes'
                    ]
                ],
            ],
        ],
        'provider_premiumpartner' => [
            'exclude' => false,
            'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_premiumpartner',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'Yes'
                    ]
                ],
            ],
        ],
	    'provider_street' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_street',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'provider_zip' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_zip',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'provider_city' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_city',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'provider_country' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_country',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim,required'
			],
	    ],
	    'provider_phone' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'provider_fax' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_fax',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'provider_mobile' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_mobile',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
	    'provider_email' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	    ],
        // ssa : https://docs.typo3.org/typo3cms/TCAReference/7.6/AdditionalFeatures/CoreWizardScripts/Index.html#link-browser
        'provider_url' => array(
            'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_url',
            'exclude' => 1,
            'config' => array(
                'type' => 'input',
                'size' => '50',
                'max' => '1024',
                'eval' => 'trim',
                'wizards' => array(
                    'link' => array(
                        'type' => 'popup',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'link_popup.gif',
                        'module' => array(
                            'name' => 'wizard_element_browser',
                            'urlParameters' => array(
                                'mode' => 'wizard'
                            )
                        ),
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
                        'params'   => array(
                            'blindLinkOptions' => 'page,file,mail,folder'
                        )
                    )
                ),
                'softref' => 'typolink'
            )
        ),
	    'provider_lat' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_lat',
	        'config' => [
			    'type' => 'input',
			    'size' => 15,
			    'eval' => 'trim'
			]
	    ],
	    'provider_lng' => [
	        'exclude' => false,
	        'label' => 'LLL:EXT:hellocode_potema_branches/Resources/Private/Language/locallang_db.xlf:tx_hellocodepotemabranches_domain_model_potemaserviceprovider.provider_lng',
	        'config' => [
			    'type' => 'input',
			    'size' => 15,
			    'eval' => 'trim'
			]
	    ],
    ],
];
