<?php  
class database{

	//DB Params
	private $dns = "mysql:host=bsqmesbs7p3ghpu22jjh-mysql.services.clever-cloud.com;dbname=bsqmesbs7p3ghpu22jjh";
	private $username = "u2ybjmdqswaweszh";
	private $password = "TbqsCxA2WCjnt5wOmKPy";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

