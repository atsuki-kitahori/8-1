<?php
namespace App;

class JapaneseEra
{
    private const REIWA_START_YEAR = 2019;
    private $year;

    public function __construct(int $year)
    {
        if ($year < 1) {
            throw new \InvalidArgumentException('年は1以上を指定してください');
        }
        $this->year = $year;
    }

    public function toWesternYear(): int
    {
        return self::REIWA_START_YEAR + $this->year - 1;
    }
}
