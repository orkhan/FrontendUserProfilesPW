<?php

/**
 * Profile template
 *
 */

if($config->ajax) {
    $fup = $modules->get('FrontendUserProfile');
    $fup->actionAjax(); // ajax actions
    return;
}

include("./head.inc");

$fup->actionLogin(); // login action
$fup->actionLogout(); // logout action
$fup->actionReset(); // reset action
$fup->actionRegister(); // register action
$fup->actionProfileEdit(); // profile edit action

echo $fup->renderProfile(); // renders profile
echo $fup->renderRegistrationForm(); // renders registration form
echo $fup->renderProfileEditForm(); // renders profile edit form

echo $page->body;

include("./foot.inc");