<?

$router->get('/organizations', 'OrgController::index');

$router->get('/organizations/(\w+)', 'OrgController::orgsWT');

$router->get('/organizations/(\w+)/(\d+)', 'OrgController::orgsWTAWT');

$router->run();

?>