<?php

class RendererPdf
{
    public static function renderer()
    {
        $rendererName = \PHPExcel_Settings::PDF_RENDERER_DOMPDF;
        $rendererLibraryPath = (\dirname(__FILE__).'/../vendor/dompdf/dompdf');
        if (!\PHPExcel_Settings::setPdfRenderer(
            $rendererName,
            $rendererLibraryPath
        )) {
            die(
                'Please set the $rendererName and $rendererLibraryPath values' .
                PHP_EOL .
                ' as appropriate for your directory structure'
            );
        }
        
        
        /**$rendererName = \PHPExcel_Settings::PDF_RENDERER_TCPDF;
        $rendererLibraryPath = (\dirname(__FILE__).'/../vendor/tecnickcom/tcpdf');
        if (!\PHPExcel_Settings::setPdfRenderer(
            $rendererName,
            $rendererLibraryPath
        )) {
            die(
                'Please set the $rendererName and $rendererLibraryPath values' .
                PHP_EOL .
                ' as appropriate for your directory structure'
            );
        }*/       
    }
}