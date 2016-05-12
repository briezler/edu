<?php
if (!defined ('TYPO3_MODE'))
    die ('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['login_confirmed']['send_notification'] = 'Pixelink\Test\Hooks\LoginNotification->sendNotification';