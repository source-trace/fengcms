<?php
/*******************************************************************
 * @authors FengCms 
 * @web     http://www.fengcms.com
 * @email   web@fengcms.com
 * @date    2013-10-30 16:00:12
 * @version FengCms Beta 1.0
 * @copy    Copyright © 2013-2018 Powered by DiFang Web Studio  
 *******************************************************************/
//
defined('TPL_INCLUDE') or die( 'Restricted access'); 

class tplmanageModel extends model{


	public function pathset($name,$type){
		if($type=='tpl')	{ $files=ROOT_PATH.'/template/'.$name.'.html';}
		if($type=='css')	{ $files=ROOT_PATH.'/css/'.$name.'.css';}
		if($type=='scrap')	{ $files=ROOT_PATH.'/template/scrap/'.$name.'.html';}
		if($type=='inc')	{ $files=ROOT_PATH.'/template/inc/'.$name.'.html';}
		if($type=='show')	{ $files=ROOT_PATH.'/template/show/'.$name.'.html';}
		return $files;
	}


	public function deletefile($array){

		$files=$this->pathset($array['name'],$array['project']);
		if(file_exists($files)){

			if(unlink($files)){

				return true;

			}else{

				return false;

			}

		}else{
			return false;
		}
	}

    /**
     * 保存信息
     *
     * @return array
     */
	public function save($array){

		$files=$this->pathset($array['name'],$array['project']);
		
		if($array['type']==0){ if(file_exists($files))return array('status' => 'e');}

			if(file_put_contents($files,$array['content'])){

				return array('status' => 'y','project' => $array['project']);

			}else{

				return array('status' => 'n','project' => $array['project']);
			}
		}

}

?>