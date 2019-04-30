<?php
require_once '/../models/StudentModel.php';
class StudentController
{
   function index(){
        $db = new StudentModel();
        $cursor = $db->getAllStudent();
        response(200, $cursor);
   }
}