<?php
require_once '/../include/dbConnect.php';

class StudentModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "student");
    }

    public function getAllStudent() {
        $cursor = $this->col->find();
        return $cursor;
    }

}