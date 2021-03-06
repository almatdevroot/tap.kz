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

    static function orgsCWT($id) {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $orgs = new OrgsModel();
        $data = $orgs->all("WHERE `townId` = '".$id."';");
        self::json($data);
    }

    static function orgsWTAWT($key, $id) {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $orgs = new OrgsModel();
        $data = $orgs->all("WHERE `typeName` = '".$key."' AND `townId` = '".$id."';");
        self::json($data);
    }

    static function show($id) {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");
        $orgs = new OrgsModel();
        $data = $orgs->findbyId($id);
        self::json($data);
    }

    static function orgsNearest($key, $id, $x, $y) {
        header("Content-type:application/json");
        header("Access-Control-Allow-Origin: *");

        $coords = getD($x, $y);

        $orgs = new OrgsModel();
        $data = $orgs->all("WHERE `typeName` = '".$key."' AND `townId` = '".$id."' AND 
            coordinateX >= ".$coords[0]." AND coordinateY >= ".$coords[1]." AND
            coordinateX <= ".$coords[2]." AND coordinateY <= ".$coords[3]."
        ");
        self::json($data);
    }

    static function test() {
        $o = new OrgsModel();
        $o->insert(array(
            'names' => array(
                'name', 'description', 'address', 'typeId', 'typeName', 'rating', 'townId', 'townName', 'coordinateX', 'coordinateY'
            ),
            'values' => array(
                'TOO "TOO Name"', 'lorem too ipsum dolor emit ogjap fpajfa', 'Streett 23', 1, 'hotel', 5, 1, 'qaraghandy', 4, 4 
            )
        ));
    }

}

?>