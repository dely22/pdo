<?php

interface PDO_Intserface{
    public function getAllRecords($table);
    public function createRecord($table, $cols, $values);
    public function getRecordById($table, $targetColum, $other);
    public function deleteRecordById($table , $colum , $id);
    public function updateRecordById($table , $data , $colum, $id);
}

?>

