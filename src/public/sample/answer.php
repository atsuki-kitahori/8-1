<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Time;

$time = filter_input(INPUT_POST, 'time'); // 例: "12:30:45" 形式で入力
try {
    if (empty($time)) {
        throw new \InvalidArgumentException('時間を入力してください');
    }

    $timeObj = new Time($time);
    $seconds = $timeObj->toSeconds();
    // 結果を見やすく整形
    $result = "「{$time}時間」は {$seconds} 秒です";
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>変換結果</title>
</head>
<body>
    <h1>変換結果</h1>
    <p><?php echo htmlspecialchars($result); ?></p>
    <a href="./index.php">戻る</a>
</body>
</html>
