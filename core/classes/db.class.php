<?php
    class DB
	{
        function table($table,$fields=null)
        {
            global $_TABLE,$_CONFIG;
            if($_TABLE[$table]['table']){
                $table=$_TABLE[$table]['table'];
            }
            if($fields)
            {
                if($_TABLE[$table]['columns'][$fields]){
                return $_TABLE[$table]['columns'][$fields];
                }else{
                        return $fields;
                    //CORE::error(array("level"=>'critical',$fields." Not added to table.inc.php"));
                }
            }else{
                echo $table;
                return $table;
            }
            
            
        } 	   
        
       
        
		function get_insert_id($tablenames)
		{
    		$q=mysql_query("SHOW TABLE STATUS LIKE '".$tablenames."'");
    		$r=mysql_fetch_assoc($q);
    		return	$r['Auto_increment'];
		
		}
		function build_insert_query($data){
		  
			if(is_array($data)){
				foreach($data as $key=>$value){
					$fields[] = '`'.$key.'`';
					if(is_numeric($value)){
					   if(substr($value, 0, 1)==0)//checking for leading zero
                       {
                        $values[] = "'".$value."'";	
                       }else{
                        
						$values[] = $value;
                       } 
					}else{
						$values[] = "'".mysql_escape_string($value)."'";	
					}
				}
			return "(".implode(",",$fields).") VALUES(".implode(",",$values).")";		
			}
		}
        function build_update_query($data){
		
            if(is_array($data)){
            	foreach($data as $key=>$value){
            	
            		if(is_numeric($value)){
					   if(substr($value, 0, 1)==0)//checking for leading zero
                       {
                        $values = "'".$value."'";
                       }else{
                        $values = $value;
                       }            		  
            			
            		}else{
            			$values = "'".mysql_escape_string($value)."'";	
            		}
            			$fields[] = '`'.$key.'` = '."".$values."";
            	}
            return implode(",",$fields);		
            }
        }
        function build_where_query($where,$op=null){
            if(empty($op))
            {
            	$op='AND';
            }
            if(is_array($where)){
            	foreach($where as $key=>$value){
            		if(strstr($value,'%'))
            		{
            		$data[] = '`'.$key.'` LIKE '. "'".mysql_escape_string($value)."'";	
            		}
            		elseif(strstr($value,'<')){
            		$data[] = '`'.$key.'` '.mysql_escape_string($value);	
            		}
            		else
            		{
            		$data[] = '`'.$key.'` = '. "'".mysql_escape_string($value)."'";
            		}
            	}
            	$whr_qry = implode(' '.$op.' ',$data);
            	return $whr_qry;
            }
        }
        
        function connect($connect){
            $dbconnect_error = $dbselect_error = "";
            if($connect['host'] && $connect['user'] && isset($connect['pass'])){            
                $db = mysql_connect($connect['host'],$connect['user'],$connect['pass']) or $dbconnect_error = mysql_error();
             	mysql_select_db($connect['db'],$db) or $dbselect_error = mysql_error();
                if($dbselect_error || $dbconnect_error){
                    return false;
                }else{
                    return true;
                }
            }             
        }
        
        function run($query){
		
            $_return = mysql_query($query);

            return $_return ;
        }
        
        function query($data){
			
            if(isset($data['query'])){
                $q = DB::run($data['query']);                
            }else{
				
                if($data['table'])
                {                             
                    if(is_array($data['where'])){
                       $where = " WHERE ".DB::build_where_query($data['where'],$data['op']);
					   
                	}
                    switch($data['action']){                        
                        case "select":

                            $q = DB::run("SELECT * FROM `".$data['table']."` ".$where." ".$data['extra']);
                        break;
                        
                        case "delete":
                           $q = DB::run("DELETE FROM `".$data['table']."` ".$where." ".$data['extra']);
                        break;
                        
                        case "insert":
                        
                           $q = DB::run("INSERT INTO `".$data['table']."` ".DB::build_insert_query($data['insert']));
                        break;
                        
                        case "update":                        
                            $q = DB::run("UPDATE `".$data['table']."` SET ".DB::build_update_query($data['update']).$where." ".$data['extra']);
                        break;
                    }
                                       
                }else{
                    return false;
                }
            }
            
            return $q;            
            
        }
        
        function insert_to_table($data){
            $data['action'] = "insert";
            return DB::query($data);
        }
        function update_to_table($data){
			//print_r($data);exit;
            $data['action'] = "update";
            return DB::query($data);
        }                
        function delete_from_table($data){
            $data['action'] = "delete";
            return DB::query($data);
        }
                        
        function select_from_table($data){
            $data['action'] = "select";
			
            $q = DB::query($data);
            
            if(is_resource($q)){
                            
                $count = mysql_num_rows($q);
                if($data['return']){
                    if($data['return'] == "array"){
                        while($r = mysql_fetch_array($q,MYSQL_ASSOC)){
                            if($r[$data['key']]){
                                $rows[$r[$data['key']]] = $r;
                            }else{
                                $rows[] = $r;
                            }
                            
                        }
                    }
                    if($data['return'] == "row"){
                        if($count==1){
                            $rows = mysql_fetch_assoc($q);
                        }                         
                    }
                    if($data['return'] == 'res')
                    {
                        $return['res'] = $q;
                    }                                    
                }
                if(is_array($rows)){
                    $return['data'] = $rows;
                }
                $return['count'] = intval($count);
                return $return;
            }else{
                return false;
            }
        }      		
		
	}
?>