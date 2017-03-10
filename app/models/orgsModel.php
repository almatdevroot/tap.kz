<?

class OrgsModel extends Model{
    function __construct() {
        $this->db = DB::getDB();
        $this->t_n = 'establishment';
    }
    function all($params = '') {
        return $this->findAll($params);
    }
    function findbyId($id) {
        return $this->findId($id);
    }
}

?>