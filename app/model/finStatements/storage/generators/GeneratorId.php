<?php

namespace Model\FinancialStatements;

use Nette;

class GeneratorId extends Nette\Object 
{    
    /** @var IStorage */
    protected $finStatStorage;
    
    
    public function __construct(IStorage $finStatStorageFactory)
    {        
        $this->finStatStorage = $finStatStorageFactory->create();
    }
    
    
    /** 
     * @return int $id
     */
    public function generate()
    {
        $id = $this->finStatStorage->fetchPartners()->max('id');
        return ++$id;
    }
}