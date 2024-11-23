<?php
namespace App;
use PDO;
use Exception;

class Time
{
    private $seconds;

    public function __construct(
        int $hours = 0,
        int $minutes = 0,
        int $seconds = 0
    ) {
        $totalSeconds = $hours * 3600 + $minutes * 60 + $seconds;

        if ($totalSeconds < 0) {
            throw new Exception('マイナスな時間は存在しません!');
        }

        $this->seconds = $totalSeconds;
    }

    public function value(): int
    {
        return $this->seconds;
    }

    public function toSeconds(): int
    {
        return $this->seconds;
    }

    public static function fromSeconds(int $seconds): self
    {
        $time = new self();
        $time->seconds = $seconds;
        return $time;
    }
}
