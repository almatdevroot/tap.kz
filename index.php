<?
    
require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/core/db.php';

require __DIR__ . '/app/core/model.php';

require __DIR__ . '/app/models/orgsModel.php';

$router = new \Bramus\Router\Router();

$router->get('/organizations', function () {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $orgs = new OrgsModel();
    $json = json_encode($orgs->all());
    DB::close();
    echo $json;
});

$router->get('/organizations/(\w+)', function ($key) {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $orgs = new OrgsModel();
    $json = json_encode($orgs->all("WHERE `typeName` = '".$key."'"));
    DB::close();
    echo $json;
});

$router->get('/organizations/(\w+)/(\d+)', function ($key, $id) {
    header("Content-type:application/json");
    header("Access-Control-Allow-Origin: *");
    $orgs = new OrgsModel();
    $json = json_encode($orgs->all("WHERE `typeName` = '".$key."' AND `townId` = '".$id."'"));
    DB::close();
    echo $json;
});

$router->run();


?>