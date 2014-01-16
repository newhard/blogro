<?php
/////////////////////////////////////////////////////////////////
//优云开源轻博, Copyright (C)   2010 - 2011  www.rovun.com 
//EMAIL:rovun@foxmail.com     Q群:329354214                              
//$Id: db_models.php 730 2012-06-06 13:29:57Z rovun $ 

class db_models extends ybModel  
{  
	var $pk = "id"; //主键  
	var $table = "models"; // 数据表的名称 
    
    
    /*
     * 返回model的内容
     * model为mid
     * data 为model内容
     * */
    function getModel(){
        $rs = $this->findAll('','id ASC');
        $num = $data = $result = array();//模型id  数据
        foreach($rs as $d){
            $num[] = $d['id'];
            $data[$d['id']] = $d;
        }
        $result['model'] = $num;
        $result['data']  = $data;
       return $result;
    }

}
?>
