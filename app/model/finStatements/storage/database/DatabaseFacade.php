<?php

namespace Model\FinancialStatements;

use Nette,
    Nette\Database\Context;

class DatabaseFacade extends Nette\Object
{
    /** @var Context */
    protected $database;
    
    
    public function __construct(Context $database)
    {        
        $this->database = $database;
    }    
    
    
    /**
     * @return Selection
     */
    public function fetchBanknotes($number)
    {        
        return $this->database->table('b&c_'.$number); 
    }
    
    
    public function fetchFinance()
    {
        return $this->database->table('finance');
    }

    
    public function fetchPartner($id)
    {
        return $this->database->table('partners')->get($id);
    }
    
    
    /**
     * @return Selection
     */
    public function fetchPartners()
    {        
        return $this->database->table('partners'); 
    }
    
    
    public function addPartner($id)
    {
        $this->database->table('partners')->insert(['id' => $id]);
    } 
    
    
    public function deletePartner($id)
    {
        $this->database->table('partners')->wherePrimary($id)->delete();
    }
}