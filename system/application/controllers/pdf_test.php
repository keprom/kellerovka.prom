﻿<?php
class pdf_test extends Controller {

    function pdf_test()
    {
        parent::Controller();
		$this->load->library('pdf');
    }

    function tcpdf()
    {
        

        // set document information
        $this->pdf->SetSubject('TCPDF Tutorial');
        $this->pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        
        // set font
        $this->pdf->SetFont('times', 'BI', 16);
        
        // add a page
        $this->pdf->AddPage();
        
        // print a line using Cell()
        $this->pdf->Cell(0, 12, 'Example 001 энд вуаля', 1, 1, 'C');
        
        //Close and output PDF document
        $this->pdf->Output('example_001.pdf', 'I');        
    }
}
?>