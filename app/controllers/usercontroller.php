<?

class UserController extends Controller {

    static function auth() {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $user = new User();
        self::json($user->auth($_POST['number']));
    }

    static function user() {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $headers = getallheaders();
        $token = $headers['Authorization'];
        $user = new User();
        $user->check($token,
            function ($data) {
                self::json($data);
            },
            function () {
                self::json(array('message' => 'Error'));
            });
    }

}

?>