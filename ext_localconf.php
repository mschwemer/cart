<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.' . $_EXTKEY,
    'MiniCart',
    [
        'Cart' => 'showMiniCart',
    ],
    // non-cacheable actions
    [
        'Cart' => 'showMiniCart',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.' . $_EXTKEY,
    'Cart',
    [
        'Cart' => 'showCart, clearCart, addProduct, removeProduct, addCoupon, removeCoupon, setShipping, setPayment, updateCountry, updateCart, orderCart',
        'Order' => 'paymentSuccess, paymentCancel',
    ],
    // non-cacheable actions
    [
        'Cart' => 'showCart, clearCart, addProduct, removeProduct, addCoupon, removeCoupon, setShipping, setPayment, updateCountry, updateCart, orderCart',
        'Order' => 'paymentSuccess, paymentCancel',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.' . $_EXTKEY,
    'Product',
    [
        'Product' => 'show, list, teaser, showForm',
    ],
    // non-cacheable actions
    [
        'Product' => 'list, showForm',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.' . $_EXTKEY,
    'ProductPartial',
    [
        'Product' => 'showForm',
    ],
    // non-cacheable actions
    [
        'Product' => 'showForm',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.' . $_EXTKEY,
    'FlexProduct',
    [
        'Product' => 'flexform',
    ],
    // non-cacheable actions
    [
        'Product' => '',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Extcode.' . $_EXTKEY,
    'Order',
    [
        'Order' => 'list, show',
    ],
    // non-cacheable actions
    [
        'Order' => 'list, show',
    ]
);
