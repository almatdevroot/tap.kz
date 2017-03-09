<?

class Model {
    protected function findAll($params) {
        return $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params.";")->fetchall(PDO::FETCH_ASSOC);
    }

    protected function find($params) {

    }

    protected function findId($id) {

    }

    protected function create($params) {

    }

    protected function update($params) {

    }

    protected function delete($id) {

    }
}

?>