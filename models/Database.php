<?php
Class Database
{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "";
	
	
	public $link;
	public $error;
    public $result;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
 }

    public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
        $items = array();
        while ($row = mysqli_fetch_array($result)) {
        $items[] = array('id' => $row['id'], 'name' => $row['name'], 'profession' => $row['profession']);
}

        echo json_encode(array('items'=>$items));
       
		} else {
			return false;
		}
    }
}
    
 ?>