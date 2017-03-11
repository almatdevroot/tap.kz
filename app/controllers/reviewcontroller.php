<?

class ReviewController extends Controller {

    static function addReview() {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $headers = getallheaders();
        $token = $headers['Authorization'];
        $user = new User();
        $user->check($token,
            function ($data) {
                if($data['id'] == $_POST['userId']) {
                    $rw = new Review();
                    $a = array(
                        'names' => array(
                            'name', 'userId', 'text', 'ratingLvl', 'date', 'companyId'
                        ),
                        'values' => array(
                            addslashes($_POST['name']), $_POST['userId'], 
                                addslashes($_POST['text']), $_POST['ratingLvl'], 
                                                        addslashes($_POST['date']), $_POST['companyId']
                        )
                    );
                    self::json($rw->addReview($a));
                }
            },
            function () {
                self::json(array('message' => 'Error'));
            });
    }

    static function delMyR() {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $headers = getallheaders();
        $token = $headers['Authorization'];
        $id = $headers['ID'];
        $user = new User();
        $user->check($token,
            function ($data) use ($id) {
                if($data['id'] == $id) {
                    $rw = new Review();
                    self::json($rw->delMyReview($id));
                }else{
                    self::json(array('message' => ':('));
                }
            },
            function () {
                self::json(array('message' => ':('));
            });
    }

}

?>