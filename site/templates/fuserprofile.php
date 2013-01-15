<?php

/**
 * Profile template
 *
 */

if($config->ajax) {
    $fup = $modules->get('FrontendUserProfile');
    $fup->actionAjax(); // ajax action
    return;
}

include("./head.inc");

$fup->actionLogin(); // login action
$fup->actionLogout(); // logout action
$fup->actionReset(); // reset action
$fup->actionRegister(); // register action

echo $fup->renderRegistrationForm();

echo $page->body;

include("./foot.inc");