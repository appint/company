<?php

namespace Model\FinancialStatements;

interface IStorage
{    
    /** @return \Model\FinancialStatements\DatabaseFacade */
    function create();
}