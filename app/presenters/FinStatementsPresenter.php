<?php

namespace Presenters;

use Nette\Application\Responses\FileResponse;

final class FinStatementsPresenter extends BasePresenter
{
    /** @var \App\Forms\FormFactory @inject */
    public $formFactory;
    /** @var \Model\FinancialStatements\IStorage @inject */
    public $finStatStorageFactory;
    /** @var \Model\FinancialStatements\FormObserver @inject */
    public $formObserver;
    /** @var \Model\FinancialStatements\GeneratorId @inject */
    public $generatorId;
    /** @var \Model\FinancialStatements\Export @inject */
    public $export;


    public function createComponentForm()
    {
        $finStatStorage = $this->finStatStorageFactory->create(); 
        $partners = $finStatStorage->fetchPartners();         
        $finance = $finStatStorage->fetchFinance()->get(1);
        
        $form = $this->formFactory->create($finance->value, $partners);
        $form->onSuccess[] = function () { 
            $this->formObserver->exec($this);
	};
       
        return $form;
    }
    
    
    public function handleDeletePartner($id)
    {
        $finStatStorage = $this->finStatStorageFactory->create();
        $finStatStorage->deletePartner($id);
        unset($this['form-partners'][$id]);
    }
    
    
    public function handleAddPartner()
    {
        $id = $this->generatorId->generate();
        $finStatStorage = $this->finStatStorageFactory->create();
        $finStatStorage->addPartner($id);
    }
    
    
    public function handleExport($target)
    {        
        $section = $this->getSession('finStat');
        $finStat = $section->finStat;
        $export = $this->export->export($finStat, $target);

        $this->sendResponse(new FileResponse($export));
    }
    
    
    public function renderDefault()
    {        
        $section = $this->getSession('finStat');
        $this->template->finStat = $section->finStat; 

        $finStatStorage = $this->finStatStorageFactory->create(); 
        $this->template->banknotes = $finStatStorage->fetchBanknotes(1)
                ->order('id ASC');
    }
}