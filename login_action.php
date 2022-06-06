<?php

// INCLUDING DATABASE
include "database.php";

// STARTING SESSION HERE
session_start();

// WHEN THE USER'S LOGIN DETAILS MATCHES WITH THE DATABASE DATA OF USER, THEN STRING LOGIN SUCCESS WILL BE ECHOED
// THEN login_success STRING WILL GO BACK TO CALL AN ANONYMOUS FUNCTION $("#login").click
if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = md5($_POST["password"]);
	$sql = "SELECT * FROM user_information WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);

	// COUNT WILL BE ONE, IF THE USER RECORD IS AVAIABLE IN THE DATABASE
	if($count == 1){
		$row = mysqli_fetch_array($run_query);

		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["first_name"];
		$ip_add = getenv("REMOTE_ADDR");

			// COOKIE IS CREATED IN LOGIN FORM PAGE SO THAT TO CHECK IF THAT COOKIE IS THERE MEANS THE USER IS NOT LOGIN
		if (isset($_COOKIE["product_list"])) {
			$p_list = stripcslashes($_COOKIE["product_list"]);

			// DECODING STORED JSON PRODUCT LIST COOKIE TO NORMAL ARRAY
			$product_list = json_decode($p_list,true);

			for ($i=0; $i < count($product_list); $i++) {

				// CHECKING USER'S CART ITEM IF THERE IS ALREADY PRODUCT LISTED OR NOT, AFTER GETTING USER ID FORM DATABASE		
				$verify_cart = "SELECT id FROM cart WHERE user_id = $_SESSION[uid] AND p_id = ".$product_list[$i];
				$result  = mysqli_query($con,$verify_cart);

				if(mysqli_num_rows($result) < 1){
					// UPDATING USER ID INTO DATABASE WITH VALID ID, IF USER IS ADDING PRODUCT INTO CART FOR THE FIRST TIME
					$update_cart = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add = '$ip_add' AND user_id = -1";
					mysqli_query($con,$update_cart);
				}else{
					// DELETING THE RECORD, IF PARTICULAR PRODUCT IS ALREADY AVAIABLE INTO DATABASE
					$delete_existing_product = "DELETE FROM cart WHERE user_id = -1 AND ip_add = '$ip_add' AND p_id = ".$product_list[$i];
					mysqli_query($con,$delete_existing_product);
				}
			}

			// DESTROYING USER COOKIE HERE
			setcookie("product_list","",strtotime("-1 day"),"/");

			// SENDING CART LOGIN IF THE USER IS LOGGING FROM CART PAGE
			echo "cart_login";
			exit();
		}
		// SENDING LOGIN SUCCESS IF THE USER IS LOGGING IN FROM THE PAGE
		echo "login_success";
		exit();

	}else{
		echo "<span style='color:red;'>Please register before you login..!</span>";
		exit();
	}	
}

?>