<?php

class model 
{
    public $conn="";
    function __construct()

{

        $this->conn=new mysqli('localhost','root','','cakeshop');

}

   function select ($tbl)
   {

    echo $sel= "select * from $tbl"; //query
    $res = $this->conn->query ($sel) ;  //run
    
   while ($fetch=$res->fetch_object()) //fetch all data from database
   {
   
     $arr[]=$fetch;

   }

    if(!empty($arr))
    {
        return $arr;
    }

   }
  
}

// $arr=array("name"=> "krisha","email"=>"krisha@gmail.com","password"=>"1234");

function insert($tbl,$arr)
{
    $key_arr=array_keys($arr); //key find of array("0"=>"name","1"=>"email","2"=>"password")
    $col_str=implode(",",$key_arr); //array to string (name,email,password)

    $value_arr=array_values($arr);
    $value_str=implode("','",$value_arr);

    echo $ins="insert into $tbl ($col_str)  values (value_str)"; //query
    $res=$this->conn->query($ins); //run
    return $res;

}



$obj=new model; 

?>