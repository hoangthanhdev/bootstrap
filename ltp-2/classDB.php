<?php class db{
	public $conn = NULL;
	public $result = NULL;
	public $host="localhost";
	public $user="root";
	public $pass="";
	public $database="ltp";
	
	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
		mysqli_query($this->conn,"set names 'utf8'"); 	 

	} 

	function getdata($sql) {
	   $this->result = mysqli_query($this->conn,$sql);
	}

	function fetchRow() {
		if (is_resource($this->result) ==false) return false;
	   $row = mysqli_fetch_assoc($this->result);
		return $row;	
	}

	public function PhimDuyet(){
		$sql="SELECT
				mt.post_id,
				post_name,
				post_title,
				meta_key,
				meta_value,
				post_modified
			FROM
				wp_postmeta mt, wp_posts pt
			WHERE
			meta_key = 'new_site'
			AND meta_value = '1'
			AND mt.post_id = pt.ID
			AND post_status='publish'
			ORDER BY post_modified DESC";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Phim Duyet

	public function LayInfo($data_name){
		$sql="SELECT *
		FROM
			wp_posts
		WHERE
			post_name = '$data_name'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay Toan bo info bang name
}
?>