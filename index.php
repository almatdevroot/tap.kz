<?
    
require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/core/db.php';

require __DIR__ . '/app/core/model.php';

require __DIR__ . '/app/models/orgsModel.php';

require __DIR__ . '/app/controllers/orgcontroller.php';

$router = new \Bramus\Router\Router();

require __DIR__ . '/app/routes.php';

?>