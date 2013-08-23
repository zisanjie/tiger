<?php
	include '../../lib/database/DBconn.php';
    /**
     * 查询所有的整体的基础数据（一般是一条）
     */
	function getWholebases(){
		$mysql = new MySQL();
		$query = "select guId,wholeBase,maxNumber from tb_wholebase";
		$res = $mysql->Query($query);
		$array = $mysql->getRows($res);
		return $array;
	}
	
	/**
	 * 根据Id更新整体的基础数据
	 * @param $guId
	 * @param $wholeBase
	 * @param $maxNumber
	 */
	function updateWholebaseById($guId,$wholeBase,$maxNumber){
		$mysql = new MySQL();
		$update = "update tb_wholebase set wholeBase = '{$wholeBase}',maxNumber = {$maxNumber} where guId = {$guId}";
		$flag = $mysql ->update($update);
		return $flag;
	}
	
	
	
?>