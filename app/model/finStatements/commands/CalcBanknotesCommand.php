<?php

namespace Model\FinancialStatements;


class CalcBanknotesCommand implements IFinStatCommand
{
    protected $bankStorage;


    public function __construct(IStorage $finStatStorageFactory)
    {
        $this->finStatStorage = $finStatStorageFactory->create();
    }
    
    
    public function execute(FinStat $finStat)
    {        
        $banknotes = $this->finStatStorage->fetchBanknotes(1)
                ->order('id ASC')
                ->fetchPairs('id', 'value');      
        
        foreach ($finStat->getPartners() as $partner) {        
            $usesBanknotes = [];
            $sum = $partner['sum'];
            foreach ($banknotes as $bId => $value) {
                $sumR = \round($sum, 2);
                ($sumR <= 0) ? 0: $sum;
                $count = \floor($sumR / $value);
                \array_push($usesBanknotes, [$bId => $count]);
                $sum = $sumR - ($count * $value);
            }        
            $partner->offsetSet('banknotes', $usesBanknotes);            
        }     
    }
}