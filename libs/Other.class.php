<?php 
	/*
 * Date:11-08-2016
 * Login Form , entry to the application
 * Author : Litto chacko
 * Email:littochackomp@gmail.com
 *Blog:http://phpdudes.blogspot.com
*/
require_once('Db.class.php');

class Other{

private $db;

public $variables;

	public function __construct($data = array()) {
		$this->db =  new DB();	
		$this->variables  = $data;
	}

	public function __set($name,$value){
		if(strtolower($name) === $this->pk) {
			$this->variables[$this->pk] = $value;
		}
		else {
			$this->variables[$name] = $value;
		}
	}

	public function __get($name)
	{	
		if(is_array($this->variables)) {
			if(array_key_exists($name,$this->variables)) {
				return $this->variables[$name];
			}
		}

		return null;
	}



		function getemployeesearchcondition($conditions,$sort,$lim){

		if(!empty($lim)){
		$start=$lim['start'];
		$limit=$lim['limit'];

         }	
         $keyword=$conditions['keyword'];

         if($keyword!=''){
	$qry.=" AND (LOWER(`fullname`) LIKE :keyword OR LOWER(`email`) LIKE :keyword1)";
	$val['keyword']='%'.$keyword.'%';
$val['keyword1']='%'.$keyword.'%';
}

$val['d']='0';

         	$sql = "SELECT * FROM `cms_employee` WHERE `id`!= :d";
         	$sql.=$qry;

		
		if (!empty($sort)) {
			$sortvals = array();
			foreach ($sort as $key => $value) {
				$sortvals[] = $key . " " . $value;
			}
			$sql .= " ORDER BY " . implode(", ", $sortvals);
			if(!empty($lim)){
			$sql.=' LIMIT '.$start.','.$limit;
			}
		}
	return $this->db->query($sql,$val);


			}





}



?>