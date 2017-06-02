<?php 

	class TBL_CALENDAR{

		static $table = "calendar";

		function create($param)
		{

			if(!$param['table'])
			{
				$param['table']= self::$table;
			}

			return DB::insert_to_table($param);			
		}

		function delete($param)
		{
			if(!$param['table'])
			{
				$param['table']= self::$table;
			}

			return DB::delete_from_table($param);
		}

		function update($param)
		{
			if(!$param['table'])
			{
				$param['table']= self::$table;
			}

			return DB::update_to_table($param);			
		}

		function get($param=null)
		{

			if(!$param['table'])
			{
				$param['table']= self::$table;
			}

			if(!$param['return'])
			{
				$param['return']= 'array';
			}

			return DB::select_from_table($param);							
		}

	}

?>