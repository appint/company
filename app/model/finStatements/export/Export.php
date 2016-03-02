<?php

namespace Model\FinancialStatements;

use Nette;


class Export extends Nette\Object
{
    const EXCELFILE = './export/FinancialStatements.xlsx',
          PDFFILE = './export/FinancialStatements.pdf';


    protected $phpExcelWriter;
    protected $phpPdfWriter;
    protected $finStatStorage;
    protected $style =  ['borders' => [
                         'allborders' => [
                         'style' => \PHPExcel_Style_Border::BORDER_THIN
                        ]
                    ]
                 ];
    protected $col = 'A';
    protected $row = 1;




    public function __construct(
            \PHPExcel_Writer_Excel2007 $phpExcelWriter,
            \PHPExcel_Writer_PDF $phpPdfWriter,
            IStorage $finStatStorageFactory
    ){
        $this->phpExcelWriter = $phpExcelWriter;
        $this->phpPdfWriter = $phpPdfWriter;
        $this->finStatStorage = $finStatStorageFactory->create();        
    }
    
    
    /**
     * @return string filename
     */
    public function export($finStat, $target)
    { 
        $banknotes = $this->finStatStorage->fetchBanknotes(1)
                ->order('id ASC');               

        // properties
        $worksheet = $this->phpExcelWriter->getPHPExcel();
        $worksheet->getProperties()->setCreator("Company");
        $worksheet->getProperties()->setTitle("Financial Statements");        
 
        // data
        $spreadsheet_1 = $worksheet->setActiveSheetIndex(0);
        $spreadsheet_1->setTitle('Fin.Stat.');        
        $spreadsheet_1->SetCellValue($this->col.$this->row, 'Zisk:');//A
        $this->row += 2;
        $spreadsheet_1->SetCellValue($this->col.$this->row, 'Meno');
        $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
        $this->row++;
        foreach ($finStat->getPartners() as $partner) {
            $spreadsheet_1->setCellValue($this->col.$this->row, $partner->name);
            $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }
        $this->col++;//B
        $this->row = 1;        
        $spreadsheet_1->SetCellValue($this->col.$this->row, $finStat->getFinance());
        $spreadsheet_1->getStyle($this->col.$this->row)->getNumberFormat()
                            ->setFormatCode('#,##0.00 €');
        $spreadsheet_1->getColumnDimension($this->col)->setAutoSize(\TRUE);
        $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
        $this->row += 2;
        $spreadsheet_1->mergeCells('B3:C3');
        $spreadsheet_1->SetCellValue($this->col.$this->row, 'Podiel');
        $spreadsheet_1->getStyle('B3:C3')->applyFromArray($this->style);
        $this->row++;
        foreach ($finStat->getPartners() as $partner) {
            $spreadsheet_1->setCellValue($this->col.$this->row, $partner->count);
            $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }
        $this->col++;//C
        $this->row = 4;
        foreach ($finStat->getPartners() as $partner) {
            $spreadsheet_1->setCellValue($this->col.$this->row, '/'.$partner->part);
            $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }
        $this->col++;//D
        $this->row = 3;
        $spreadsheet_1->SetCellValue($this->col.$this->row, 'Suma');
        $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
        $this->row++;
        foreach ($finStat->getPartners() as $partner) {
            $spreadsheet_1->setCellValue($this->col.$this->row, $partner->sum.' €');
            $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }
        $this->col++;//E
        $this->row = 3;
        foreach ($banknotes as $banknote) {
            $spreadsheet_1->setCellValue($this->col.$this->row, $banknote->tag);
            $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->col++;
        }
        $this->row++;
        foreach ($finStat->getPartners() as $partner) {
            $this->col = 'E';
            foreach ($partner->banknotes as $banknote) {
                $spreadsheet_1->setCellValue($this->col.$this->row, \current($banknote));
                $spreadsheet_1->getStyle($this->col.$this->row)->applyFromArray($this->style);
                $this->col++;
            }
            $this->row++;
        }
        
        //Bank sheet   
        $worksheet->createSheet();
        $spreadsheet_2 = $worksheet->setActiveSheetIndex(1);
        $spreadsheet_2->setTitle('Banka');        
        $this->col = 'A';//A
        $this->row = 1;
        $spreadsheet_2->SetCellValue($this->col.$this->row, 'Celkový prehľad');        
        $spreadsheet_2->getStyle($this->col.$this->row)->applyFromArray($this->style);
        $spreadsheet_2->mergeCells('A1:C1');
        $this->row++;
        $spreadsheet_2->SetCellValue($this->col.$this->row, 'Bankovky');
        $spreadsheet_2->getStyle($this->col.$this->row)->getAlignment()->setTextRotation(90);
        $spreadsheet_2->getStyle($this->col.$this->row)->getAlignment()->
                setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $spreadsheet_2->getStyle($this->col.$this->row)->getAlignment()->
                setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $countBanknotes = \count($finStat->getCheckSum()['banknote']); 
        $rowB = 1 + $countBanknotes;
        $spreadsheet_2->mergeCells('A2:A'.$rowB);
        $this->row = $rowB + 1;
        $spreadsheet_2->SetCellValue($this->col.$this->row, 'Mince');
        $spreadsheet_2->getStyle($this->col.$this->row)->getAlignment()->setTextRotation(90);
        $spreadsheet_2->getStyle($this->col.$this->row)->getAlignment()->
                setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $spreadsheet_2->getStyle($this->col.$this->row)->getAlignment()->
                setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $countCoins = \count($finStat->getCheckSum()['coin']); 
        $rowC = $rowB + $countCoins;        
        $spreadsheet_2->mergeCells('A'.++$rowB.':A'.$rowC);        
        $this->col++;//B
        $this->row = 2;
        foreach ($banknotes as $banknote) {
            $spreadsheet_2->setCellValue($this->col.$this->row, $banknote->tag);
            $spreadsheet_2->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }       
        $this->col++;//C
        $this->row = 2;
        foreach ($finStat->getCheckSum()['banknote'] as $banknote) {
            $spreadsheet_2->setCellValue($this->col.$this->row, $banknote['count']);
            $spreadsheet_2->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }
        foreach ($finStat->getCheckSum()['coin'] as $coin) {
            $spreadsheet_2->setCellValue($this->col.$this->row, $coin['count']);
            $spreadsheet_2->getStyle($this->col.$this->row)->applyFromArray($this->style);
            $this->row++;
        }       
        $this->col++;//D
        $this->row = 2;
        $spreadsheet_2->getColumnDimension($this->col)->setAutoSize(\TRUE);
        foreach ($finStat->getCheckSum()['banknote'] as $banknote) {
            $spreadsheet_2->setCellValue($this->col.$this->row, $banknote['value']);
            $this->row++;
        }
        foreach ($finStat->getCheckSum()['coin'] as $coin) {
            $spreadsheet_2->setCellValue($this->col.$this->row, $coin['value']);
            $this->row++;
        }
            
        $spreadsheet_2->setCellValue($this->col.$this->row, $finStat->getCheckSum()['sum']);
        $spreadsheet_2->getStyle($this->col.$this->row)->getNumberFormat()
                            ->setFormatCode('#,##0.00 €');

        // Save
        if ($target === 'excel') {
            $this->saveExcel();
            return self::EXCELFILE;
        } elseif ($target === 'pdf') {
            $spreadsheet_1->getPageSetup()
                    ->setOrientation(\PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE); 
            $this->savePdf();
            return self::PDFFILE;
        } 
    }
    
    
    protected function saveExcel()
    {
        $this->phpExcelWriter->save(self::EXCELFILE);        
    }
    
    
    protected function savePdf()
    {      
        $this->phpPdfWriter->writeAllSheets();
        $this->phpPdfWriter->save(self::PDFFILE);        
    }
}