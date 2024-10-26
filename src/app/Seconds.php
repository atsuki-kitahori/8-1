<?php
namespace App;
use PDO;
use Exception;

class Seconds
{
    private $seconds;

    public function __construct(int $seconds)
    {
        if ($seconds < 0) {
            throw new exception('マイナスな時間は存在しません!');
        }
        $this->seconds = $seconds;
    }

    public function value(): int
    {
        return $this->seconds;
    }
}
