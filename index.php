<?
    
require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/app/utils/JWT.php';

require __DIR__ . '/app/core/db.php';

require __DIR__ . '/app/core/model.php';

require __DIR__ . '/app/models/orgsModel.php';

require __DIR__ . '/app/models/userModel.php';

require __DIR__ . '/app/models/reviewModel.php';

require __DIR__ . '/app/core/controller.php';

require __DIR__ . '/app/utils/utilCoordinate.php';

require __DIR__ . '/app/controllers/orgcontroller.php';

require __DIR__ . '/app/controllers/reviewcontroller.php';

require __DIR__ . '/app/controllers/usercontroller.php';

$router = new \Bramus\Router\Router();

require __DIR__ . '/app/routes.php';

?>