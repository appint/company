<?php

namespace Model\FinancialStatements;


interface IFinStatCommand 
{
    public function execute(FinStat $finStat);
}