<?

$router->get('/organizations', allOrgs);

$router->get('/organizations/(\w+)', orgsWT);

$router->get('/organizations/(\w+)/(\d+)', orgsWTAWT);

$router->run();

?>