<?php
/////////////////////////////////////////////////////////////////
//优云开源轻博, Copyright (C)   2010 - 2011  www.rovun.com 
//EMAIL:rovun@foxmail.com     Q群:329354214                              
//$Id: db_skins.php 754 2012-06-10 07:57:09Z rovun $ 

class db_skins extends ybModel  
{  
	var $pk = "skindir"; //主键  
	var $table = "skins"; // 数据表的名称 
	

	
	//获取主题
	function findTheme(){
		return  $this->findAll(array('open'=>1,'exclusive'=>0),'','id,name,skindir,usenumber');
	}
	
	//获取我的专属主题
	function findExclusive($uid){
		return  $this->findAll(array('open'=>1,'exclusive'=>$uid),'','id,name,skindir,usenumber');
	}
	
	

}
?>
