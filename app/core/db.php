<?

class DB {

    private static $db = null;

    public $pdo;

    private function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=api', 'root', '');
        $this->pdo->query("SET NAMES 'utf8'");
    }

    private function __clone() {}

    public static function getDB() {
        if(self::$db == null) {
            self::$db = new self();
        }
        return self::$db;
    }

    public static function close() {
        self::$db = null;
    }
}

?>