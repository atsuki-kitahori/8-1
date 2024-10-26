<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Minutes;

$minutes = filter_input(INPUT_POST, 'time');
try {
    $minutesObj = new Minutes($minutes);
    $seconds = $minutesObj->toSeconds()->value();
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./index.php');
    exit();
}
?>

<body>

  <h1><?php echo $seconds; ?></h1>
  
  <a href="./index.php">Top画面へ</a>

</body>
