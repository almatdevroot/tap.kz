<?

$router->get('/organizations', 'OrgController::index');

$router->get('/organizations/(\d+)', 'OrgController::orgsCWT');

$router->get('/organizations/(\w+)', 'OrgController::orgsWT');

$router->get('/organizations/(\w+)/(\d+)', 'OrgController::orgsWTAWT');

$router->get('/organizations/(\w+)/(\d+)/nearest/(\d+)/(\d+)', 'OrgController::orgsNearest');

$router->get('/organization/(\d+)', 'OrgController::show');

$router->post('/auth', 'UserController::auth');

$router->get('/user', 'UserController::user');

$router->post('/addreview', 'ReviewController::addReview');

#$router->get('/test', 'OrgController::test');

$router->run();

?>