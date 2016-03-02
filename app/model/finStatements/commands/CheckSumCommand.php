<?php

namespace Model\FinancialStatements;


class CheckSumCommand implements IFinStatCommand
{
    protected $finStatStorage;


    public function __construct(IStorage $finStatStorageFactory)
    {
        $this->finStatStorage = $finStatStorageFactory->create();
    }
    
    
    public function execute(FinStat $finStat)
    {
        $banknotes = $this->finStatStorage->fetchBanknotes(1)->fetchAll();
        
        $checkSum = ['banknote' => [],
                     'coin' => [],
                     'sum' => 0
                    ];
        
        foreach ($banknotes as $id => $banknote) {
            $checkSum[$banknote->sort][$id] = ['count' => 0, 'value' => 0];
        } 
    
        foreach ($finStat->getPartners() as $partner) {
            foreach ($partner['banknotes'] as $useBanknote) {                
                $banknote = $banknotes[\key($useBanknote)];
                $sort = $banknote->sort;
                $checkSum[$sort][$banknote->id]['count'] += \current($useBanknote);
                $value = (\current($useBanknote) * $banknote->value);
                $checkSum[$sort][$banknote->id]['value'] += $value;
                $checkSum['sum'] += $value;
            }            
        }
        
        $finStat->checkSum($checkSum);
    }
}