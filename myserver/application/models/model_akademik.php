<?php  

/**
* 
*/
class model_akademik extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		// $dbload=$this->load->database('default',TRUE);
	}

	function get($paramDB,$paramTabel)
	{
		$dbload=$this->load->database($paramDB,TRUE);
		$res=$dbload->get($paramTabel);
		if ($res) {
			return $res;
		} else {
			return false;
		}
		
	}

	function save($paramDB,$paramTabel,$paramValue){
		$dbload=$this->load->database($paramDB,TRUE);
		$res=$dbload->insert($paramTabel,$paramValue);
		if ($res) {
			return $res;
		} else {
			return false;
		}
	}

	function delete($paramDB , $paramTabel , $paramKey , $paramValue)
	{
		$dbload=$this->load->database($paramDB , TRUE);
		$res=$dbload->delete($paramTabel,array($paramKey=>$paramValue));
		if ($res) {
			return $res;
		} else {
			return false;
		}
		
	}

	function getWhere($paramDB , $paramTabel , $paramKey , $paramValue)
	{
		$dbload=$this->load->database($paramDB,TRUE);
		$res=$dbload->get_where($paramTabel , array($paramKey=>$paramValue));
		if ($res) {
			return $res;
		} else {
			return false;
		}
		
	}

	function update($paramDB , $paramTabel , $paramData ,$paramValue)
	{
		$dbload=$this->load->database($paramDB , TRUE);
		$res=$this->$dbload->update($paramTabel , $paramData , $paramValue);

	}


}

?>