<?php 
class oop {


	function ubah($con, $table, array $field, $where, $redirect) {

		$sql = "UPDATE $table SET";
		foreach ($field as $key => $value) {
			$sql.=" $key = '$value',";
		}
		$sql = rtrim($sql, ',');
		$sql.="WHERE $where";
		$query = mysqli_query($con, $sql);
		if ($query) {
			echo "<script>alert('success');document.location.href='$redirect'</script>";
		} else {
			echo $sql;
		}
	}
}
 ?>
