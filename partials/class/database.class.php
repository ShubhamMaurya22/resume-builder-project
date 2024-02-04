<?php

class Database{
private $conn;
const servername = "localhost:3306";
const username = "root";
const password = "";
const database = "arb";
    function __construct(){
        try{
            $this ->connection = new mysqli(servername,username,password,database);
        }catch(Exception $e){
            echo $e -> getMassage();
        }
       
    }
    // function for sss where the value which will be dynamically generated:-
    private function getBindParamsDataType($data){
        $dt='';
        foreach($data as $value){
            if(is_float($value)) $dt.='d';
            elseif(is_integer($value)) $dt.='i';
            elseif(is_string($value)) $dt.='s';
            else $dt.='b';
        }
        return $dt;
    }
    private function getLabels($values){
        $label="";
        foreach($values as $value){
            $label.='?,';
        }
        // function for removing extra coma while passing $values in qeury;
        $label = substr_replace($label,'',-1); 
        return $label;
    }
    private function getLabelsWithName($columns){
        $label="";
        $columns = explode(',',$columns);
        foreach($columns as $column){
            $label.=$column.'=?,';
        }
        // function for removing extra coma while passing $values in qeury;
        $label = substr_replace($label,'',-1); 
        return $label;
    }
    public function clean($data){
        return $this->connection->real_escape_string($data);
    }
    public function insert($table,$columns,$values){
        $label = $this->getLabels($values);
        $query = "INSERT INTO $table ($columns) VALUES($label)";
        $obj = $this->connection->prepare($query);
        $obj->bind_param($this->getBindParamsDataType($values),...$values);
        $obj->execute();
    }
    public function read($table,$column,$condition=''){
        $query = "SELECT $column FROM $table $condition";
        $result =  $this->connection->query($query);
        return $result->fetch_all(true);
    }
    public function delete($table,$condition){
        $query= "DELETE FROM $table WHERE $condition";
        return $this->connection->query($query);
    }
    public function update($table,$columns,$values ,$condition){
        $label = $this->getLabelsWithName($columns);
        $query = "UPDATE $table SET $label WHERE $condition";
        $obj = $this->connection->prepare($query);
        $obj->bind_param($this->getBindParamsDataType($values),...$values);
        $obj->execute();
    }
}

?>