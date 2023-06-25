<?php
// Include the FPDF library
require('../plugins/fpdf/fpdf.php');

class PrintPDF {
    public function render($request) {
        // Create a new PDF document
        $pdf = new FPDF();

        // Add a new page
        $pdf->AddPage();

        // Set font properties
        $pdf->SetFont('Arial', 'B', 14);

        // Set the left margin for the letterhead
        $pdf->SetLeftMargin(30);

        // Add the company logo or letterhead
        // $pdf->Image('logo.png', 30, 20, 40, 40); // Uncomment this line to add a logo

        // Add the company name and address
        $pdf->Cell(0, 20, 'E-Munakahat (MAJLIS UGAMA ISLAM PAHANG)', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, '123 Street, City, State, Country', 0, 1);
        $pdf->Cell(0, 10, 'Phone: 123-456-7890', 0, 1);
        $pdf->Cell(0, 10, 'Email: info@example.com', 0, 1);
        $pdf->Ln(5); // Add some vertical spacing

        // Set font properties for the letter content
        $pdf->SetFont('Arial', '', 12);

        // Add the date
        $pdf->Cell(0, 10, date('F d, Y'), 0, 1);
        $pdf->Ln(5); // Add some vertical spacing

        // Add the recipient's information
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, 'Applicant Name:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $request['applicantName'], 0, 1);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 10, 'Applicant Address:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, $request['applicantAddress'], 0, 1);
        $pdf->Ln(10); // Add some vertical spacing

        // Add the letter content
        $pdf->MultiCell(0, 10, 'Dear Mr./Ms. '.$request['applicantName'].',', 0, 'L');
        $pdf->Ln(5); // Add some vertical spacing
        $pdf->MultiCell(0, 10, 'We are pleased to inform you that your marriage request application has been approved. The details of the approval are as follows:', 0, 'L');
        $pdf->Ln(5); // Add some vertical spacing

        // Display the approval details
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 5, 'Approval Date:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 5, date('F d, Y'), 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 5, 'Approved By:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 5, 'Your Name', 0, 1);

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(40, 5, 'Marriage Category:', 0, 0);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 5, $request['rm_Marriage_Category'], 0, 1);

        // Add closing and signature
        $pdf->Ln(5); // Add some vertical spacing
        $pdf->MultiCell(0, 10, 'Congratulations on your approved marriage request! Please contact us for further instructions and to complete the necessary documentation. We wish you a joyous and blessed journey ahead.', 0, 'L');
        $pdf->Ln(5); // Add some vertical spacing
        $pdf->MultiCell(0, 10, 'Sincerely,', 0, 'L');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'MAJLIS UGAMA ISLAM PAHANG', 0, 1);

        // Output the PDF as a download
        $pdf->Output('ApprovalLetter_'.$request['req_marriage_ID'].'.pdf', 'D');
    }
}
?>
