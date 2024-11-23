<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\JapaneseEra;

$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);

try {
    if ($year === null || $year === false) {
        throw new \InvalidArgumentException('正しい年数を入力してください');
    }

    $japaneseEra = new JapaneseEra($year);
    $westernYear = $japaneseEra->toWesternYear();
    $result = "令和{$year}年は 西暦{$westernYear}年 です";
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./era_index.php');
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
    <a href="./era_index.php">戻る</a>
</body>
</html> 