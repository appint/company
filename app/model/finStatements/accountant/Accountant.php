<?php

namespace Model\FinancialStatements;

use Nette\Http\Session,
    Model\Exception\VisibleException;


class Accountant implements IAccountant
{
    protected $section;
    protected $timeStampCommand;
    protected $checkPartCommand;
    protected $calcPartsCommand;
    protected $calcBanknotesCommand;
    protected $checkSumCommand;


    public function __construct(
            Session $session,
            TimeStampCommand $timeStampCommand,
            CheckPartsCommand $checkPartCommand,
            CalcPartsCommand $calcPartsCommand,
            CalcBanknotesCommand $calcBanknotesCommand,
            CheckSumCommand $checkSumCommand
    ) {
        $this->section = $session->getSection('finStat');
        $this->timeStampCommand = $timeStampCommand;
        $this->checkPartCommand = $checkPartCommand;
        $this->calcPartsCommand = $calcPartsCommand;
        $this->calcBanknotesCommand = $calcBanknotesCommand;
        $this->checkSumCommand = $checkSumCommand;
    }
    
    
    public function finStatements(FinStat $finStat)
    {        
        try {
            $this->timeStampCommand->execute($finStat);
            $this->checkPartCommand->execute($finStat);
            $this->calcPartsCommand->execute($finStat);
            if ($finStat->getFinance() > 0) {
                $this->calcBanknotesCommand->execute($finStat);
                $this->checkSumCommand->execute($finStat);                
            }
        
            $this->section->finStat = $finStat;
        } catch (VisibleException $exc) {
            throw new VisibleException($exc->getMessage());
        }       
    }
}