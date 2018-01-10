<?php 

// testing db connection
// if($connection) {
// 	echo "db is connected";
// }


//helper functions

//redirect
function redirect($location){
	header("Location: $location");
}

//query the db
function query($sql){
	global $connection;
	return mysqli_query($connection, $sql);
}

//confirm query
function confirm($result){
	global $connection;
	if(!$result){
		die("Query Failed ". $mysqli_error($connection));
	}
}

//escaping db connection
function escape_string($string){
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

//getting the db result
function fetch_array($result){
	return mysqli_fetch_array($result);
}
//end helper functions

/**************** FRONT END FUNCTIONS ****************/


// get products
function get_products(){
	$query = query("SELECT * FROM products");
	confirm($query);

	while($row = fetch_array($query)){
		$product = <<<DELIMITER
		                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                            <div class="caption">
                                <h4 class="pull-right">&#36;{$row['product_price']}</h4>
                                <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                                <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to Cart</a>
                            </div>
                        </div>
                    </div>
DELIMITER;
echo $product;
	}
}
//end get products

//get categories
function get_categories(){
	$query = query("SELECT * FROM categories");
	confirm($query);
	while($row = fetch_array($query)){

	$categories_links = <<<DELIMITER
		<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMITER;
echo $categories_links;
}
}

/**************** END FRONT END FUNCTIONS ****************/

/**************** BACK END FUNCTIONS ****************/



/**************** END BACK END FUNCTIONS ****************/


 ?>