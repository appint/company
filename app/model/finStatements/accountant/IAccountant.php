<?php

namespace Model\FinancialStatements;

interface IAccountant
{
    public function finStatements(FinStat $finStat);
}