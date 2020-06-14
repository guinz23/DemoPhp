<?php

class DB {
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;
    private $conn;

    function __construct() {
        $this->host = 'localhost';
        $this->port = '5433';
        $this->dbname = 'demo';
        $this->user = 'postgres';
        $this->password = '123';
        $this->conn = pg_connect( "host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->password}" );
    }

    public function create($sql) {
        if ( pg_query( $sql ) ) {

            return true;
        } else {
            return false;
        }
        pg_close($conn);
    }

    public function find($sql) {
        $result = pg_query($sql);
        $count = pg_num_rows($result);
        if ( $count>0) {
            return true;
        } else {
            return false;
        }
        pg_close($conn);
    }

     public function get($sql){
        $result = pg_query($sql);
        $arr = pg_fetch_array($result, 0, PGSQL_NUM);
        return $arr;
        pg_close($conn);
    }
}
?>