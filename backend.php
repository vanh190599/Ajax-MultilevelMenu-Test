<title>backend</title>
<?php 
	$category = array(
		1=>array(
			'id' => 1,
			'title' => "Laptop",
			'parent_id' => 0 // = 0 là không là con của thằng nào
		),

		2=>array(
			'id' => 2,
			'title' => "Điện thoại",
			'parent_id' => 0 // = 0 là không là con của thằng nào
		),

		3=>array(
			'id' => 3,
			'title' => "Laptop-1",
			'parent_id' => 1 // là con của thằng - Laptop
		),

		4=>array(
			'id' => 4,
			'title' => "Laptop-2",
			'parent_id' => 1 // là con của thằng 2 - Laptop
		),

		5=>array(
			'id' => 5,
			'title' => "điện thoại-1",
			'parent_id' => 2 //điện thoại-1 là con của thằng 1 - Điện thoại
		),

		6=>array(
			'id' => 6,
			'title' => "điện thoại-2",
			'parent_id' => 2 //điện thoại-2 là con của thằng 1 - Điện thoại
		),

		7=>array(
			'id' => 7,
			'title' => "Laptop-3",
			'parent_id' => 1 // là con của thằng 2 - Laptop
		)
	);
 
	function data_tree($data, $parent_id)
	{
		$result = [];
		foreach ($data as $item) {
			if($item["parent_id"] == $parent_id ){
				$result[] = $item;
				//$child = data_tree($data, $item["id"] );
				//$result = array_merge($result, $child);
			}
		}
		return $result;
	}
	
	$parent_id = $_GET["parent_id"];
	$menu_cha = data_tree($category, $parent_id);
	echo "<pre>";
		print_r($menu_cha);
	echo "</pre>";

 ?>
