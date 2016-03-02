<?php

namespace Model\FinancialStatements;

use Nette\Utils\DateTime;


class TimeStampCommand implements IFinStatCommand
{
    protected $dateTime;


    public function __construct(DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }
    
    
    public function execute(FinStat $finStat)
    {
        $finStat->timeStamp($this->dateTime);
    }
}