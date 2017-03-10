<?

$router->get('/organizations', 'OrgController::index');

$router->get('/organizations/(\d+)', 'OrgController::orgsCWT');

$router->get('/organizations/(\w+)', 'OrgController::orgsWT');

$router->get('/organizations/(\w+)/(\d+)', 'OrgController::orgsWTAWT');

$router->get('/organization/(\d+)', 'OrgController::show');

$router->run();

?>