<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function insertTask($tname,$tdetails,$tsubject,$tpriority,$tdeadline){
		$query = "INSERT INTO tb_to_do(name_td, details_td, subject_td, priority_td, deadline_td, status_td)VALUES('$tname','$tdetails','$tsubject','$tpriority','$tdeadline','Belum')";
		$this->execute($query);
        
	}

	function deleteTask($id){
		$query = "DELETE FROM tb_to_do WHERE id = {$id}";
		$this->execute($query);
        
	}

	function updateStatus($id){
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = {$id}";
		$this->execute($query);
        
	}
	
}



?>
