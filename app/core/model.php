<?

class Model {
    protected function findAll($params) {
        $data = $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params.";")->fetchall(PDO::FETCH_ASSOC);
        if(count($data) == 0) {
            $data['message'] = 'Error';
        }
        return $data;
    }

    protected function find($params) {
        $data = $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params.";")->fetch(PDO::FETCH_ASSOC);
        if(count($data) == 0) {
            $data['message'] = 'Error';
        }
        return $data;
    }

    public function findId($id) {
        $data = $this->db->pdo->query("SELECT * FROM `".$this->t_n."` WHERE `id` = '".$id."';")->fetch(PDO::FETCH_ASSOC);
        if(count($data) == 0) {
            $data['message'] = 'Error';
        }
        return $data;
    }

    protected function create($params) {

    }

    protected function update($params) {

    }

    protected function delete($id) {

    }
}

?>