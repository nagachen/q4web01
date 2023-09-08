<?php
include_once "DB.php";
class User extends DB
{
    function __construct()
    {
        parent::__construct('users');
    }
    function check($request){
        
        if($request['acc']=='admin'){
            return 1;
        }else{
            $chk=$this->count(['acc'=>$request['acc']]);
            if($chk>0){
                return 2;
            }else{
                $this->save($request);
                return 3;
            }
            
        }
    }
}