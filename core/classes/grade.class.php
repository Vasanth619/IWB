<?php

$grade = new GRADE;

    class GRADE
	{
        function create($param)
        {
        	if(!$param["table"]){
        		$param["table"] = "grade";
        	}

        	if($db->insert_to_table($param)){
        		return true;
        	}else{
        		return false;
        	}
        }

        function update($param){
        	if(!$param["table"]){
        		$param["table"] = "grade";
        	}
        }

        function delete($param){
        	if(!$param["table"]){
        		$param["table"] = "grade";
        	}
        }

        function get($param=null){
        	//all recoreds
        	if(!$param["table"]){
        		$param["table"] = "grade";
        	}  	

        }               

    }