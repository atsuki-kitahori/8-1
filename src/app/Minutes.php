<?php
namespace App;
use App\Seconds;
use PDO;
use Exception;

class Minutes
{
    private $minutes;

    public function __construct(int $minutes)
    {
        if ($minutes < 0) {
            throw new exception('マイナスな時間は存在しません!');
        }
        $this->minutes = $minutes;
    }

    public function toSeconds(): Seconds
    {
        $seconds = $this->minutes * 60;
        return new Seconds($seconds);
    }
}
