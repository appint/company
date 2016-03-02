<?php

namespace App\Forms;

use Nette,
    Nette\Application\UI\Form;

class FormFactory extends Nette\Object
{
    /** 
     * @return Form
     */
    public function create($finance, $partners)
    {    
	$form = new Form; 
	$form->addText('finance')
             ->setDefaultValue($finance)   
             ->setRequired('Nevyplnili ste fin. zhodnotenie')
             ->addRule($form::FLOAT, 'Fin. hodnotenie musí byť číslo');
        $contPartners = $form->addContainer('partners');
        foreach ($partners as $partner) { 
            $contPartner = $contPartners->addContainer($partner->id);
            $contPartner->addText('name')
                        ->setDefaultValue($partner->name)   
                        ->setRequired('Nevyplnili ste meno');
            $contPartner->addText('part')
                        ->setType('number')
                        ->setDefaultValue($partner->part)   
                        ->setRequired('Nevyplnili podiel')
                        ->addRule($form::INTEGER, 'Hodnota podielu musí byť celé číslo')
                        ->addRule(
                            $form::RANGE,
                            'Hodnota podielu musí byť v rozsahu %d a viac',
                            [1, \NULL]
                        );
            $contPartner->addText('count')
                        ->setType('number')
                        ->setDefaultValue($partner->count)   
                        ->setRequired('Nevyplnili ste počet podielov')
                        ->addRule($form::INTEGER, 'Počet podielov musí byť celé číslo')
                        ->addRule(
                            $form::RANGE,
                            'Počet podielov musí byť v rozsahu %d až hodnota podielu',
                            [1, $form['partners'][$partner->id]['part']]
                        );
        }
	$form->addSubmit('save', 'Uložiť');
	$form->addSubmit('calc', 'Vypočítať');
        
	return $form;
    }
}