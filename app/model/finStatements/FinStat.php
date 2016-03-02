<?php

namespace Model\FinancialStatements;

use Nette\UnexpectedValueException,
    Nette\Utils\DateTime;


class FinStat
{
    protected $timeStamp;
    protected $finance;
    protected $checkSum;
    protected $partners;
    
    
    public function timeStamp(DateTime $timeStamp) 
    {
        $this->timeStamp = $timeStamp;
    }
    
    
    public function getTimeStamp()
    {
        if ($this->timeStamp === \NULL) {
            throw new UnexpectedValueException('Please set timeStamp');
        }
        return $this->timeStamp;
    }


    public function finance($finance)
    {
        $this->finance = $finance;
    }
    
    
    public function getFinance()
    {
        if ($this->finance === \NULL) {
            throw new UnexpectedValueException('Please set finance');
        }
        return $this->finance;        
    }
    
    
    public function partners($partners)
    {
        $this->partners = $partners;
    }
    
    
    public function getPartners()
    {
        if ($this->partners === \NULL) {
            throw new UnexpectedValueException('Please set partners');
        }
        return $this->partners;        
    }
    
    
    public function checkSum($checkSum) 
    {
        $this->checkSum = $checkSum;
    }
    
    
    public function getCheckSum()
    {
        return $this->checkSum;
    }
}