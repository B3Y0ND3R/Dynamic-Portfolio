
<?php
session_start(); 


$toggle1State = 1;
$toggle2State = 1;
$toggle3State = 1;
$toggle4State = 1;
$toggle5State = 1;
$toggle6State = 1;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $_SESSION['toggle1'] = isset($_POST['toggle1']);
    $_SESSION['toggle2'] = isset($_POST['toggle2']);
    $_SESSION['toggle3'] = isset($_POST['toggle3']);
    $_SESSION['toggle4'] = isset($_POST['toggle4']);
    $_SESSION['toggle5'] = isset($_POST['toggle5']);
    $_SESSION['toggle6'] = isset($_POST['toggle6']);

    
    $toggle1State = $_SESSION['toggle1'] ? 1 : 0;
    $toggle2State = $_SESSION['toggle2'] ? 1 : 0;
    $toggle3State = $_SESSION['toggle3'] ? 1 : 0;
    $toggle4State = $_SESSION['toggle4'] ? 1 : 0;
    $toggle5State = $_SESSION['toggle5'] ? 1 : 0;
    $toggle6State = $_SESSION['toggle6'] ? 1 : 0;

    
}


echo "Toggle 1 state: " . ($toggle1State ? "checked" : "unchecked") . "<br>";
echo "Toggle 2 state: " . ($toggle2State ? "checked" : "unchecked") . "<br>";
echo "Toggle 3 state: " . ($toggle3State ? "checked" : "unchecked") . "<br>";
echo "Toggle 4 state: " . ($toggle4State ? "checked" : "unchecked") . "<br>";
echo "Toggle 5 state: " . ($toggle5State ? "checked" : "unchecked") . "<br>";
echo "Toggle 6 state: " . ($toggle6State ? "checked" : "unchecked") . "<br>";






const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_NAME     = 'reg_db';

$dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($dbcon->connect_error){
	die("Database connection failed".$dbcon->connect_error);
}

$sql = "UPDATE `section_control` SET `home_sec`=?, `about-sec`=?, `timeline-sec`=?, `skills-sec`=?, `projects-sec`=?, `hobbies-sec`=? WHERE id=1";

$stmt = $dbcon->prepare($sql);
$stmt->bind_param("iiiiii", $toggle1State, $toggle2State, $toggle3State, $toggle4State, $toggle5State, $toggle6State);
$stmt->execute();
$stmt->close();

header('Location: on.php');
exit;

?>
