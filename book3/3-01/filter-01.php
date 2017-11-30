 <?php
	foreach (filter_list() as $id =>$filter) {
		echo "필터명 =" . $filter . ', ID=' . filter_id($filter) . '<br>';
	}
 ?>
