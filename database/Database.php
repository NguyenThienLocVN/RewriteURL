<?php 
// Class connect database
class Database
{
	public $conn;
	public $qr;
	public $posts;
    
    // Construct method to connect
	public function __construct() {
		$this->conn = new mysqli("localhost", "root", "123456", "blog");
		
		// If error
		if(!$this->conn) {
			echo "Failed to connect to database";
		}
		
		// Query data
		$qr = mysqli_query($this->conn, "select * from posts" );
        
		$this->posts = array();
		while ($row = mysqli_fetch_assoc($qr)){
			$this->posts[] = $row;
		}
        // Return an array of query result
	}
}
$db = new Database();

?>