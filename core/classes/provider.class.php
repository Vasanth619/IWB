<?php 
	
	class provider{

					function create($param)
					{
						
						if(!$param['table'])
						{
							$param['table']= 'provider';
						}
							$insert=DB::insert_to_table($param);
						if($insert)
						{
							return true;
						}
						else
						{
							return false;
						}
					}

					function delete($param)
					{
						if(!$param['table'])
						{
							$param['table']= 'provider';
						}
							$delete=DB::delete_from_table($param);
						if($delete)
						{
							return true;
						}
						else
						{
							return false;
						}
					}
					function update($param)
					{
						if(!$param['table'])
						{
							$param['table']= 'provider';
						}
							$updat=DB::update_to_table($param);
						if($updat)
						{
							return true;
						}
						else
						{
							return false;
						}
					}
					function get($param=null)
					{
						
							if(!$param['table'])
							{
								$param['table']= 'provider';
							}

							if(!$param['return'])
							{
								$param['return']= 'array';
							}

							return DB::select_from_table($param);							
					}

				}

?>