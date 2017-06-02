<?php
    
    /*$teacher_settings= new teacher_settings;*/

    class student_payments
    {
        function create($param)
        {
            if(!$param["table"]){
                $param["table"] = "student_payment_log";
            }
            $insert=DB::insert_to_table($param);
            if($insert){
                return true;
            }else{
                return false;
            }
        }

        /*function update($param){
            if(!$param["table"]){
                $param["table"] = "student_payment_log";
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
                $param["table"] = "student_payment_log";
            }
        }*/

        function get($param=null){
            //all recoreds
            if(!$param["table"]){
                $param["table"] = "student_payment_log";
            }  
             if(!$param['return']){
                $param['return']="array";
            } 
            return DB::select_from_table($param); 

        }               

    }