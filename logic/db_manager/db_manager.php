<?php
namespace DatabaseRepository;

use SessionRepository\SessionManager;
use mysqli as MySQL;


class DatabaseManager{
    private MySQL $connection;
    function __construct() {
        $servername = "localhost";
        $username = "u601424401_hassankajila";
        $password = "tZ=Y#0mR"; // %k)Qh$H&5ZUXiJw
        $dbname = "u601424401_hassan_db";
        $this->connection = new MySQL($servername, $username, $password, $dbname);
    }

    public function connection(): MySQL
    {
        return $this->connection;
    }

    public function is_database_connected(): bool
    {
        if ($this->connection->connect_error) return false;
        //die("Connection failed: " . $conn->connect_error);
        return true;
    }

    function query_to_array(string $query): bool|array
    {
        $result = $this->connection->query($query);
        $arr = array();
        if ($result->num_rows < 0) return false;
        while($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
    }

    private function query_insert(string $query): void
    {
        $this->connection->query($query);
    }

    public function get_clients(): bool|array
    {
        return $this->query_to_array("SELECT * FROM test_user");
    }

    public function get_client_by_id($id): bool|array
    {
        return $this->query_to_array("SELECT * FROM users WHERE username = '$id' ");
    }


    static function print_array($row): void
    {
        foreach ($row as &$value) {
            print_r($value);

        }
    }

}


class  Properties {
    const table = "property";
    private DatabaseManager $dbm;
    public bool $is_ready = false;
    function __construct(){
        $this->dbm = new DatabaseManager();
        $this->save_session_properties();
    }

    private function save_session_properties(): array {
        $sm = new SessionManager();
        if($sm->is_logged() || $this->is_ready) {
            $index = self::table;
            $db_properties = $this->dbm->query_to_array("SELECT * FROM $index");

            $properties = array();
            foreach ($db_properties as $prop) {
                $properties[$prop['prop_name']] = $prop['value'];
            }
            $_SESSION["$index"] = $properties;
            $this->is_ready = true;
            return $properties;
        }
        return [];
    }

    private function get_skills(): array {
        return $_SESSION[self::table]; //$this->save_session_properties();
    }

    public function get_properties(): array {
        return $_SESSION[self::table]; //$this->save_session_properties();
    }

    public function expertise_year()  {
        return $_SESSION[self::table]['expertise_year'];
    }

    public function project() : int {
        return $_SESSION[self::table]['project'];
    }

    public function client() : int {
        return $_SESSION[self::table]['client'];
    }

    public function partner() : int {
        return $_SESSION[self::table]['partener'];
    }

    public function cup_of_coffee() : int {
        return $_SESSION[self::table]['cupof'];
    }


}