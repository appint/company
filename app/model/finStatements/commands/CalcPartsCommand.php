<?php

namespace Model\FinancialStatements;


class CalcPartsCommand implements IFinStatCommand
{    
    public function execute(FinStat $finStat)
    {        
        foreach ($finStat->getPartners() as $partner) {
            $sum = \round(
                    ($finStat->getFinance() / $partner->part) * $partner->count, 2
            );
            $partner->offsetSet('sum', $sum);
        }       
    }
}