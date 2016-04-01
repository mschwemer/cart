<?php

defined('TYPO3_MODE') or die();

$_LLL = 'LLL:EXT:cart/Resources/Private/Language/locallang_db.xlf';

return [
    'ctrl' => [
        'title' => $_LLL . ':tx_cart_domain_model_order_item',
        'label' => 'order_number',
        'label_alt' => 'invoice_number',
        'label_alt_force' => 1,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,

        'versioningWS' => 2,
        'versioning_followPages' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'enablecolumns' => [],
        'searchFields' => 'order_number, invoice_number',
        'iconfile' => 'EXT:cart/Resources/Public/Icons/Order/Item.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'pid, fe_user, order_number, invoice_number, billing_address, shipping_address, gross, net, total_gross, total_net, additional_data, tax_class, products, coupons, tax, total_tax, payment, shipping, order_pdf, invoice_pdf',
    ],
    'types' => [
        '1' => [
            'showitem' =>
                'pid, fe_user,
                --palette--;' . $_LLL . ':tx_cart_domain_model_order_item.palettes.numbers;numbers,
                --palette--;' . $_LLL . ':tx_cart_domain_model_order_item.palettes.addresses;addresses,
                --palette--;' . $_LLL . ':tx_cart_domain_model_order_item.palettes.price;price,
                --palette--;' . $_LLL . ':tx_cart_domain_model_order_item.palettes.total_price;total_price,
                additional_data,
                tax_class,
                products,
                coupons,
                payment,
                shipping,
                order_pdf,
                invoice_pdf'
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => ''
        ],
        'addresses' => [
            'showitem' => 'billing_address, shipping_address',
            'canNotCollapse' => 0
        ],
        'numbers' => [
            'showitem' => 'order_number, order_date, --linebreak--, invoice_number, invoice_date',
            'canNotCollapse' => 1
        ],
        'price' => [
            'showitem' => 'currency, gross, net, --linebreak--, order_tax',
            'canNotCollapse' => 1
        ],
        'total_price' => [
            'showitem' => 'total_gross, total_net, --linebreak--, order_total_tax',
            'canNotCollapse' => 1
        ],
    ],
    'columns' => [
        'pid' => [
            'exclude' => 1,
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'fe_user' => [
            'exclude' => 1,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.fe_user',
            'config' => [
                'type' => 'select',
                'readOnly' => 1,
                'foreign_table' => 'fe_users',
                'size' => 1,
                'items' => [
                    [$_LLL . ':tx_cart_domain_model_order_item.fe_user.not_available', 0],
                ],
                'minitems' => 0,
                'maxitems' => 1,
            ]
        ],
        'order_number' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.order_number',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'order_date' => [
            'exclude' => 1,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.order_date',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'invoice_number' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.invoice_number',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'invoice_date' => [
            'exclude' => 1,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.invoice_date',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'billing_address' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.billing_address',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_address',
                'minitems' => 1,
                'maxitems' => 1,
                'appearance' => [
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'shipping_address' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.shipping_address',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_address',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'additional_data' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.additional_data',
            'config' => [
                'type' => 'text',
                'readOnly' => 1,
                'cols' => 48,
                'rows' => 15,
                'appearance' => [
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'description1' => [
            'exclude' => 0,
            'defaultExtras' => 'richtext[*]',
            'label' => $_LLL . ':tx_cart_domain_model_order_item.description1',
            'config' => [
                'type' => 'text',
                'cols' => 48,
                'rows' => 15,
                'eval' => 'required',
                'wizards' => [
                    '_PADDING' => 4,
                    'RTE' => [
                        'notNewRecords' => 1,
                        'RTEonly' => 1,
                        'type' => 'script',
                        'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
                        'icon' => 'wizard_rte2.gif',
                        'script' => 'wizard_rte.php'
                    ]
                ]
            ],
        ],
        'tax_class' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.tax_class',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_taxclass',
                'foreign_field' => 'item',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'currency' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.currency',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'required'
            ],
        ],
        'gross' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.gross',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'double2,required'
            ],
        ],
        'total_gross' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.total_gross',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'double2,required'
            ],
        ],
        'net' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.net',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'double2,required'
            ],
        ],
        'total_net' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.total_net',
            'config' => [
                'type' => 'input',
                'readOnly' => 1,
                'size' => 30,
                'eval' => 'double2,required'
            ],
        ],
        'tax' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.tax',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_tax',
                'maxitems' => 9999,
            ],
        ],
        'total_tax' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.total_tax',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_tax',
                'maxitems' => 9999,
            ],
        ],
        'products' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.products',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_product',
                'foreign_field' => 'item',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'coupons' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.coupons',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_coupon',
                'foreign_field' => 'item',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'payment' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.payment',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_payment',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'shipping' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.shipping',
            'config' => [
                'type' => 'inline',
                'readOnly' => 1,
                'foreign_table' => 'tx_cart_domain_model_order_shipping',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                    'enabledControls' => [
                        'info' => false,
                        'new' => false,
                        'dragdrop' => false,
                        'sort' => false,
                        'hide' => false,
                        'delete' => false,
                        'localize' => false,
                    ],
                ],
            ],
        ],
        'order_pdf' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.order_pdf',
            'config' => [
                'type' => 'group',
                'readOnly' => 1,
                'internal_type' => 'file_reference',
                'uploadfolder' => 'uploads/tx_cart/order_pdf/',
                'allowed' => 'pdf',
                'disallowed' => 'php',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'invoice_pdf' => [
            'exclude' => 0,
            'label' => $_LLL . ':tx_cart_domain_model_order_item.invoice_pdf',
            'config' => [
                'type' => 'group',
                'readOnly' => 1,
                'internal_type' => 'file_reference',
                'uploadfolder' => 'uploads/tx_cart/invoice_pdf/',
                'allowed' => 'pdf',
                'disallowed' => 'php',
                'size' => 1,
                'minItems' => 0,
                'maxItems' => 1,
            ],
        ],
        'crdate' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'config' => [
                'type' => 'input',
                'size' => '8',
                'max' => '20',
                'eval' => 'date',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
    ],
];