<?php
    

    class terms_and_condition
    {
        
         function create($param)
        {
            if(!$param["table"]){
                $param["table"] = "terms_and_condition";
            }
            $insert=DB::insert_to_table($param);
            if($insert){
                return true;
            }else{
                return false;
            }
        }

        function update($param){
            if(!$param["table"]){
                $param["table"] = "terms_and_condition";
            }
            $update=DB::update_to_table($param);
            if($update){
                return true;
            }else{
                return false;
            }
        }

        function delete($param){
            if(!$param["table"]){
                $param["table"] = "terms_and_condition";
            }
            $delete=DB::delete_from_table($param);
            if($delete){
                return true;
            }else{
                return false;
            }
        }

        function get($param=null){
            //all recoreds
            if(!$param["table"]){
                $param["table"] = "terms_and_condition";
            }  
             if(!$param['return']){
                $param['return']="array";
            } 
            return DB::select_from_table($param); 

        }         
    }