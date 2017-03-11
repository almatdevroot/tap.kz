<?

$router->get('/organizations', 'OrgController::index');

$router->get('/organizations/(\d+)', 'OrgController::orgsCWT');

$router->get('/organizations/(\w+)', 'OrgController::orgsWT');

$router->get('/organizations/(\w+)/(\d+)', 'OrgController::orgsWTAWT');

$router->get('/organizations/(\w+)/(\d+)/nearest/(\d+)/(\d+)', 'OrgController::orgsNearest');

$router->get('/organization/(\d+)', 'OrgController::show');

$router->post('/auth', function () {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $user = new User();
    echo json_encode($user->auth($_POST['number']));
});

$router->get('/user', function () {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $headers = getallheaders();
    $token = $headers['Authorization'];
    $user = new User();
    /*$user->check($token, function ($data) {
        echo 'Logined';
        print_r($data);
    }, function () {
        echo 'Access Denied';
    });*/
});

#$router->get('/test', 'OrgController::test');

$router->run();

?>