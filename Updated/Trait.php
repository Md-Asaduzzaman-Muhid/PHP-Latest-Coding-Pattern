<?php
// Your code here!
trait table{
    public function addTable(){
        echo "No of table is 20";
    }
}
class Home{
    use table{
        table::addTable as public;
    }
    public function furniture(){
        echo ' --hi-- ';
        
    }
    
    
}
(new Home) -> addTable();

$obj = new Home();
$obj->furniture();
$obj::addTable();

?>
