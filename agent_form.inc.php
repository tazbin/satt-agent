<?php
$dbhServername = "localhost";
$dbhUsername = "root";
$dbhPassword = "";
$dbhName = "sattit_agent";
$conn = mysqli_connect($dbhServername, $dbhUsername, $dbhPassword, $dbhName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $agent_serial = 'Satt_'.(time());

	//favicon
	$favicon = $_FILES['photo'];
	$favName = $_FILES['photo']['name'];
	$favTempName = $_FILES['photo']['tmp_name'];
	$favSize = $_FILES['photo']['size'];
	$favError = $_FILES['photo']['error'];
	$favType = $_FILES['photo']['type'];

  if ($favSize>2096000) {
    header("apply.php?profile=large");
    exit();
  }

	$fileExt = explode('.', $favName);
	$fileActualExt = strtolower(end($fileExt));

	$unique_image = md5(time());
	$unique_image = substr($unique_image, 0, 10) . '.' . $fileActualExt;

	$allowed = array('jpg', 'jpeg', 'png');

	if (!empty($favName)) {
		if (in_array($fileActualExt, $allowed)) {
			if ($favError === 0) {

				$fileDestination = 'admin/uploads/photo/' . $unique_image;
				$photoDestination = $fileDestination;

				move_uploaded_file($favTempName, $fileDestination);

			}
		}
	} else {
		$photoDestination = "";
	}
	//favicon


	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$father_name = mysqli_real_escape_string($conn, $_POST['father_name']);
	$mother_name = mysqli_real_escape_string($conn, $_POST['mother_name']);
	$occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
	$education_qualification = mysqli_real_escape_string($conn, $_POST['education_qualification']);

	$permanent_house = mysqli_real_escape_string($conn, $_POST['permanent_house']);
	$permanent_road = mysqli_real_escape_string($conn, $_POST['permanent_road']);
	$permanent_village = mysqli_real_escape_string($conn, $_POST['permanent_village']);
	$permanent_post = mysqli_real_escape_string($conn, $_POST['permanent_post']);
	$permanent_up = mysqli_real_escape_string($conn, $_POST['permanent_up']);
	$permanent_dist = mysqli_real_escape_string($conn, $_POST['permanent_dist']);
	$permanent_post_code = mysqli_real_escape_string($conn, $_POST['permanent_post_code']);

	if ($_POST['terms_agree']) {
		$terms_agree = 1;
	} else {
		$terms_agree = 0;
	}

	if ($_POST['same_as']) {
		$same_as = 1;
		$present_house = '';
		$present_road = '';
		$present_village = '';
		$present_post = '';
		$present_up = '';
		$present_dist = '';
		$present_post_code = '';
	} else {
		$same_as = 0;
		$present_house = mysqli_real_escape_string($conn, $_POST['present_house']);
		$present_road = mysqli_real_escape_string($conn, $_POST['present_road']);
		$present_village = mysqli_real_escape_string($conn, $_POST['present_village']);
		$present_post = mysqli_real_escape_string($conn, $_POST['present_post']);
		$present_up = mysqli_real_escape_string($conn, $_POST['present_up']);
		$present_dist = mysqli_real_escape_string($conn, $_POST['present_dist']);
		$present_post_code = mysqli_real_escape_string($conn, $_POST['present_post_code']);
	}

	$mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']);
	$alternate_mobile = mysqli_real_escape_string($conn, $_POST['alternate_mobile']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$interested_dist = mysqli_real_escape_string($conn, $_POST['interested_dist']);
	$interested_up = mysqli_real_escape_string($conn, $_POST['interested_up']);

	$document_type = mysqli_real_escape_string($conn, $_POST['document_type']);

	//document front side
	$favicon = $_FILES['document_fornt'];
	$favName = $_FILES['document_fornt']['name'];
	$favTempName = $_FILES['document_fornt']['tmp_name'];
	$favSize = $_FILES['document_fornt']['size'];
	$favError = $_FILES['document_fornt']['error'];
	$favType = $_FILES['document_fornt']['type'];

	$fileExt = explode('.', $favName);
	$fileActualExt = strtolower(end($fileExt));

	$unique_image = md5(time());
	$unique_image = substr($unique_image, 0, 10) . '.' . $fileActualExt;

	$allowed = array('jpg', 'jpeg', 'png');

	if (!empty($favName)) {
		if (in_array($fileActualExt, $allowed)) {
			if ($favError === 0) {
				$fileDestination = 'admin/uploads/' . $document_type . '/' . $unique_image;
				$document_front_input = $fileDestination;

				move_uploaded_file($favTempName, $fileDestination);

			}
		}
	} else {
		$document_front_input = "";
	}
	//document front side


	//nid back
	if ($document_type == 'NID') {
		$document_back = $_FILES['document_back'];
		$favName = $document_back['name'];
		$favTempName = $document_back['tmp_name'];
		$favSize = $document_back['size'];
		$favError = $document_back['error'];
		$favType = $document_back['type'];

		$fileExt = explode('.', $favName);
		$fileActualExt = strtolower(end($fileExt));

		$unique_image = md5(time());
		$unique_image = 'back_' . substr($unique_image, 0, 10) . '.' . $fileActualExt;

		$allowed = array('jpg', 'jpeg', 'png');

		if (!empty($favName)) {
			if (in_array($fileActualExt, $allowed)) {
				if ($favError === 0) {

					$fileDestination = 'admin/uploads/NID/' . $unique_image;
					$document_back_input = $fileDestination;

					move_uploaded_file($favTempName, $fileDestination);

				}
			}
		} else {
			$document_back_input = "";
		}
	} else {
		$document_back_input = "";
	}
	//nid back

	//trade lisence
	if ($_FILES['tread_license']) {
		$favicon = $_FILES['tread_license'];
		$favName = $_FILES['tread_license']['name'];
		$favTempName = $_FILES['tread_license']['tmp_name'];
		$favSize = $_FILES['tread_license']['size'];
		$favError = $_FILES['tread_license']['error'];
		$favType = $_FILES['tread_license']['type'];

		$fileExt = explode('.', $favName);
		$fileActualExt = strtolower(end($fileExt));

		$unique_image = md5(time());
		$unique_image = substr($unique_image, 0, 10) . '.' . $fileActualExt;

		$allowed = array('jpg', 'jpeg', 'png');

		if (!empty($favName)) {
			if (in_array($fileActualExt, $allowed)) {
				if ($favError === 0) {

					$fileDestination = 'admin/uploads/tread_license/' . $unique_image;
					$tread_license_input = $fileDestination;

					move_uploaded_file($favTempName, $fileDestination);

				}
			}
		} else {
			$tread_license_input = "";
		}
	}
	//trade lisence

	$bussiness_name = $_POST['bussiness_name'];
	$signature = $_POST['signature'];

	$sql = "INSERT INTO agent_list(agent_serial, name, father_name, mother_name, occupation, education_qualification, permanent_house, permanent_road, permanent_village, permanent_post, permanent_up, permanent_dist, permanent_post_code, same_as, present_house, present_road, present_village, present_post, present_up, present_dist, present_post_code, mobile_no, alternate_mobile, email, interested_dist, interested_up, document_type, photo, document_front, document_back, tread_license, bussiness_name, terms_agree, signature) VALUES ('$agent_serial', '$name', '$father_name', '$mother_name', '$occupation', '$education_qualification', '$permanent_house', '$permanent_road', '$permanent_village', '$permanent_post', '$permanent_up', '$permanent_dist', '$permanent_post_code', '$same_as', '$present_house', '$present_road', '$present_village', '$present_post', '$present_up', '$present_dist', '$present_post_code', '$mobile_no', '$alternate_mobile', '$email', '$interested_dist', '$interested_up', '$document_type', '$photoDestination', '$document_front_input', '$document_back_input', '$tread_license_input', '$bussiness_name', '$terms_agree', '$signature')";
	$result = mysqli_query($conn, $sql);

  $sql = "UPDATE agent_list SET agent_serial=agent_list.id+49;";
  $result = mysqli_query($conn, $sql);

	if ($result) {
        echo json_encode('success');
        }

// 	$result = mysqli_query($conn, $sql);



}

?>
