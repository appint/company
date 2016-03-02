<?php

namespace Model\FinancialStatements;

use Nette,
    Nette\Application\UI\Presenter,
    Model\Exception\VisibleException;

class FormObserver extends Nette\Object
{
    protected $finStatStorage;
    protected $accountant;
    protected $finStat;


    public function __construct(
            IStorage $finStatStorageFactory,
            IAccountant $accountant,
            FinStat $finStat
    ) {
        $this->finStatStorage = $finStatStorageFactory->create();
        $this->accountant = $accountant;
        $this->finStat = $finStat;
    }
    
    
    /**
     * @param Presenter $presenter
     */
    public function exec(Presenter $presenter)
    {        
        $form = $presenter['form'];
        
        if (isset($form->getHttpData()['save'])) {            
            $this->save($form);            
            $presenter->redirect('this');
        } elseif (isset($form->getHttpData()['calc'])) {            
            try {            
                $this->calc($form);            
                $presenter->redirect('this');                
            } catch (VisibleException $exc) {                
                $form->addError($exc->getMessage());
            }
        }             
    } 
    
    
    private function save($form)
    {
        $formItems = $form->getValues();
        
        $finance = $this->finStatStorage->fetchFinance()->get(1);
        $finance->update(['value' => $formItems->finance]);
            
        foreach ($formItems->partners as $id => $partner) {
            $partn = $this->finStatStorage->fetchPartner($id);
            $partn->update(['name' => $partner->name,
                            'part' => $partner->part,
                            'count' => $partner->count
                            ]);
        }        
    }
    
    
    private function calc($form)
    { 
        $formItems = $form->getValues();
        
        $this->finStat->finance($formItems->finance);
        $this->finStat->partners($formItems->partners);
        
        try {
            $this->accountant->finStatements($this->finStat);
        } catch (VisibleException $exc) {
            throw new VisibleException($exc->getMessage());
        }        
    }
}