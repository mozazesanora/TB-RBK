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

	function delete($paramDB ,$paramTabel,$paramKey, $where)
	{
		$dbload=$this->load->database($paramDB,TRUE);
		$res=$dbload->delete($paramTabel,array($paramKey=>$where));
		if ($res) {
			return $res;
		} else {
			return false;
		}	
	}

	function select($paramKey,$paramTabel,$paramDB)
	{
		$dbload=$this->load->database($paramDB,TRUE);
		$res=$dbload->get($paramTabel,array($paramKey=>$where));
		if ($res) {
			return $res;
		} else {
			return false;
		}
	}

	function ($paramKey,$paramTabel,$paramDB,$paramWhere)
	{
		$dbload=$this->load->database($paramDB,TRUE);
		$res=$dbload->update($paramTabel,array($paramKey=>$paramWhere));
		if ($res) {
			return $res;
		} else {
			return false;
		}
		
	}
}

?>