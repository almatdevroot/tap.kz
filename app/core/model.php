<?

class Model {
    protected function findAll($params) {
        return $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params.";")->fetchall(PDO::FETCH_ASSOC);
    }

    protected function find($params) {
        return $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params.";")->fetch(PDO::FETCH_ASSOC);
    }

    protected function findId($id) {
        return $this->db->pdo->query("SELECT * FROM `".$this->t_n."` WHERE `id` = ".$this->db->pdo->quote($id).";")->fetch(PDO::FETCH_ASSOC);
    }

    protected function create($params) {

    }

    protected function update($params) {

    }

    protected function delete($id) {

    }
}

?>