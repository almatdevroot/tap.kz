<?

class Review extends Model {

    function __construct() {
        $this->db = DB::getDB();
        $this->t_n = 'reviews';
    }

    function getReviews($id) {
        return $this->findAll("WHERE `companyId` = '".$id."';");
    }

    function addReview($params) {
        $this->create($params);
        return array('message' => 'OK');
    }

}

?>