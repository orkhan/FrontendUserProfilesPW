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
$fup->actionProfileEdit(); // profile edit action

echo $fup->renderProfile();
echo $fup->renderRegistrationForm();
echo $fup->renderProfileEditForm();

echo $page->body;

include("./foot.inc");