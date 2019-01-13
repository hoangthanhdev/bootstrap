<?php
require_once "classDB.php";
class phim extends db{

	function TagPhim($IdPhim){
		$sql="SELECT
			object_id,
			tax.term_taxonomy_id,
			taxonomy,
			`name`,
			slug
		FROM
			wp_term_relationships rel,
			wp_term_taxonomy tax,
			wp_terms ter
		WHERE
			`object_id` = '$IdPhim'
		AND tax.term_id = rel.term_taxonomy_id
		AND taxonomy = 'post_tag'
		AND ter.term_id = tax.term_id";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay name tag va link tag

	public function PhimTile($IdPhim){
		$sql="SELECT *
		FROM
			`wp_postmeta`
		WHERE
			`post_id` = '$IdPhim'
		AND `meta_key`='_aioseop_title'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay Phim Title

	public function PhimDes($IdPhim){
		$sql="SELECT *
		FROM
			`wp_postmeta`
		WHERE
			`post_id` = '$IdPhim'
		AND `meta_key`='_aioseop_description'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay Phim Title

	public function SoTap($IdPhim){
		$sql="SELECT *
		FROM
			`wp_postmeta`
		WHERE
			`post_id` = '$IdPhim'
		AND `meta_key`='row'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay So Tap Phim

	public function Sv1($IdPhim){
		$sql="SELECT *
		FROM
			`wp_postmeta`
		WHERE
			`post_id` = '$IdPhim'
		AND `meta_key`='server_1'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay Phim Server 1

	public function Sv2($IdPhim){
		$sql="SELECT *
		FROM
			`wp_postmeta`
		WHERE
			`post_id` = '$IdPhim'
		AND `meta_key`='soure'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay Phim Server 2

	public function ImgMovie($IdPhim){
		$sql="SELECT *
		FROM
			`wp_postmeta`
		WHERE
			`post_id` = '$IdPhim'
		AND `meta_key`='img_movie'";
		$kq = mysqli_query($this->conn,$sql) or die(mysqli_error());
		return $kq;
	}//Lay Phim Server 2
}
?>