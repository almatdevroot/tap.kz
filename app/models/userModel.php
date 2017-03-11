<?

class User extends Model {

    function __construct() {
        $this->db = DB::getDB();
        $this->t_n = 'user';
    }

    function auth($number) {
        $data = $this->find("WHERE `number` = '".$number."'");
        if($data == null) {
            $data = array();
            $data['message'] = ':(';
            return $data;
        }
        $token = JWT::encode(array(
            'number' => $data['number']
        ), 'f5s6df5s6df5s');
        return array('token' => $token);
    }

    function check($token, $func, $func_onError) {
        try{
            $data = JWT::decode($token, 'f5s6df5s6df5s');
            $q = $this->find("WHERE `number` = '".$data->number."'");
            if($data->number == $q['number'] && $q != null) {
                $func($data);
            }
        }catch(Exception $e){
            $func_onError();
        }
    }

}

?>