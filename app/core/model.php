<?

class Model {
    protected function findAll($params) {
        $data = $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params."")->fetchall(PDO::FETCH_ASSOC);
        if(count($data) == 0) {
            $data['message'] = 'Empty';
        }
        return $data;
    }

    protected function find($params) {
        $data = $this->db->pdo->query("SELECT * FROM `".$this->t_n."` ".$params.";")->fetch(PDO::FETCH_ASSOC);
        if(count($data) == 0) {
            $data['message'] = 'Empty';
        }
        return $data;
    }

    public function findId($id) {
        $data = $this->db->pdo->query("SELECT * FROM `".$this->t_n."` WHERE `id` = '".$id."';")->fetch(PDO::FETCH_ASSOC);
        if(count($data) == 0) {
            $data['message'] = 'Empty';
        }
        return $data;
    }

    protected function create($params) {
        $names = $params['names'];
        $values = $params['values'];
        $sql = "INSERT INTO `".$this->t_n."` (";
        foreach ($names as $name) {
            $sql = $sql.$name.", ";
        }
        $sql = substr($sql, 0, -2);
        $sql = $sql.") VALUES (";
        foreach($values as $value) {
            $sql = $sql.$this->db->pdo->quote($value).", ";
        }
        $sql = substr($sql, 0, -2);
        $sql = $sql.")";
        $this->db->pdo->beginTransaction();
        $this->db->pdo->exec($sql);
        $this->db->pdo->commit();
        echo $sql;
    }

    protected function update($params) {

    }

    protected function delete($id) {

    }
}

?>