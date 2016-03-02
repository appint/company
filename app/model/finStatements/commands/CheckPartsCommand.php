<?php

namespace Model\FinancialStatements;


class CheckPartsCommand implements IFinStatCommand
{
    /**
     * @throws VisibleException
     */
    public function execute(FinStat $finStat)
    {
        $totally = 0;
        
        foreach ($finStat->getPartners() as $partner) {
            $sum = (1 / $partner->part) * $partner->count;
            $totally += $sum;
        }
        
        if ($totally > 1.00001) {
            throw new VisibleException('Súčet podielov tvorí viac ako 1 celok');        
        }        
    }
}