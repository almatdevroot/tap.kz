<?

class OrgController extends Controller{
    static function index() {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $orgs = new OrgsModel();
        $data = $orgs->all();
        self::json($data);
    }

    static function orgsWT($key) {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $orgs = new OrgsModel();
        $data = $orgs->all("WHERE `typeName` = '".$key."'");
        self::json($data);
    }

    static function orgsWTAWT($key, $id) {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $orgs = new OrgsModel();
        $data = $orgs->all("WHERE `typeName` = '".$key."' AND `townId` = '".$id."'");
        self::json($data);
    }
}

?>