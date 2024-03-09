<?php
class SQLCustom extends ezSQL_mysqli
{
	  
	// function insert_id($sql,$log=0,$br_c="")
	// {
		// $this->query($sql);
		// $id = mysql_insert_id();
		
		// if($log && $id > 0) {
			// $this->query_log($sql,$br_c);
		// }
		
		// return $id;
	// }


	function insert_all($tablename="",$values=array(),$log=0,$br_c="") //g: CREATE
	{
		$fields			= "";
		$data_values	= "";
		$ctr			= 0;
		foreach($values as $key=> $value)
		{
			if( $ctr == 0 )
			{
				if($value == "now")
				{
					$fields			.= "`$key`";
					$data_values	.= "NOW()";
				}
				else
				{
					$fields			.= "`$key`";
					$data_values	.= "'$value'";
				}
			}
			else
			{
				if($value == "now")
				{
					$fields			.= ",`$key`";
					$data_values	.= ", NOW()";
				}
				else
				{
					$fields			.= ",`$key`";
					$data_values	.= ",'$value'";	
				}
			}
			$ctr++;
		}
	    $sql	= "INSERT INTO `$tablename` ( $fields ) VALUES ($data_values)";
		//echo $sql; exit();
		$this->query($sql);
		
		return $this->insert_id;
	}
	
	
	function update_all($tablename="", $id="", $id_value,$values=array(),$log=0,$br_c="") //g: UPDATE
	{		
		$data_values	= "";
		$ctr			= 0;
		foreach($values as $key=> $value)
		{
			if( $ctr == 0 )
			{
				if($value == "now")
					$data_values	.= "`$key` = NOW() ";
				elseif($value == "null")
					$data_values	.= "`$key` = NULL ";
				else
					$data_values	.= "`$key` = '$value' ";
			}
			else
			{
				if($value == "now")
					$data_values	.= ",`$key` = NOW() ";
				elseif($value == "null")
					$data_values	.= ",`$key` = NULL ";
				else
					$data_values	.= ",`$key` = '$value' ";
			}
			$ctr++;
		} 
		$sql	= "UPDATE `$tablename` SET $data_values  WHERE `$id` = '$id_value' ";
		
		$this->query($sql);
		$affected = $this->rows_affected;
		if($log &&  $affected > 0) {
			$this->query_log($sql,$br_c);
		}
		
		return $this->rows_affected;		
	}
	
	function update_all2($tablename="", $id_values=array(),$values=array(),$log=0,$br_c="")
	{		
		$data_values	= "";
		$ctr			= 0;
		foreach($values as $key=> $value)
		{
			if( $ctr == 0 )
			{
				if($value == "now")
					$data_values	.= "`$key` = NOW() ";
				else
					$data_values	.= "`$key` = '$value' ";
			}
			else
			{
				if($value == "now")
					$data_values	.= ",`$key` = NOW() ";
				else
					$data_values	.= ",`$key` = '$value' ";
			}
			$ctr++;
		}
		$data_wheres	= "";
		$ctr			= 0;
		foreach($id_values as $key=> $value)
		{
			if( $ctr == 0 )
			{
				$data_wheres	.= "`$key` = '$value'";
			}
			else
			{
				$data_wheres	.= " AND `$key` = '$value' ";
			}
			$ctr++;
		}
		$sql	= "UPDATE `$tablename` SET $data_values  WHERE $data_wheres ";
		
		$this->query($sql);
		$affected = $this->rows_affected;
		if($log &&  $affected > 0) {
			$this->query_log($sql,$br_c);
		}
		
		return $affected;		
	}
	
	function delete($tablename="",$id="",$id_value,$log=0,$br_c="")
	{
		$sql	= "DELETE FROM `$tablename` WHERE `$id` = '$id_value' ";
		
		$this->query($sql);
		$affected = $this->rows_affected;
		if($log && $affected > 0) {
			$this->query_log($sql,$br_c);
		}
		return $affected;		
	}
	
	
	function where_like($fields=array(), $value="")
	{
		$where = " WHERE (";
		$ctr = 0;
		foreach($fields as $field) 
		{
			$where .= " $field LIKE '%$value%'";
			$ctr++;
			if ( $ctr < count($fields) ) {
				$where .= " OR";
			}
			
		}
		return $where . ") ";
	}
	
	
	function query_log($strQuery = "",$branchCode = "")
	{
		$timezone = "Asia/Manila"; 
		date_default_timezone_set($timezone);
		$subdir = strtoupper($branchCode);
		$File = "sync.files/$subdir/".date('Y_m_d_H_i').".sql".".txt"; 
		if(!file_exists($File)) {
			$Handle = fopen($File, 'w');
			fwrite($Handle, $strQuery.';'.':@:'); 
			fclose($Handle); 
		}
		else {
			file_put_contents($File, $strQuery.';'.':@:', FILE_APPEND);
		}
		
	}
	
}

?>