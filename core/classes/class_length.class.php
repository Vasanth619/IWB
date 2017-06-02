<?php
    

    class class_length
    {
        static $table = "class_length";
        
        function create($param)
        {
            if(!$param["table"]){
                $param["table"] = self::$table;
            }

            if($db->insert_to_table($param)){
                return true;
            }else{
                return false;
            }
        }

        function update($param){
            if(!$param["table"]){
                $param["table"] = "class_length";
            }
        }

        function delete($param){
            if(!$param["table"]){
                $param["table"] = "class_length";
            }
        }

        function get($param=null){
            //all recoreds
            if(!$param["table"]){
                $param["table"] = "class_length";

            }  
            if(!$param['return']){
            	$param['return']="array";
            } 
            return DB::select_from_table($param);

        }               

    }