<?

class Review extends Model {

    function __construct() {
        $this->db = DB::getDB();
        $this->t_n = 'reviews';
    }

    function getReviews($id) {
        return $this->findAll("WHERE `companyId` = '".$id."';");
    }

    function getUserReviews($id) {
        return $this->findAll("WHERE `userId` = '".$id."';");
    }

    function delMyReview($id) {
        try{
            $this->delete($id);
            return array('message' => 'OK');
        }catch(Exception $e) {
            return array('message' => ':(');
        }
    }

    function addReview($params) {
        try{
            $this->create($params);
            return array('message' => 'OK');
        }catch(Exception $e) {
            return array('message' => ':(');
        }
    }

}

?>