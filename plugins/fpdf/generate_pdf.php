<?php
// Include the FPDF library
require('../plugins/fpdf/fpdf.php');

class printpdf {
    public function render($course, $app) {
        // Create a new PDF document
        $pdf = new FPDF();

        foreach ($course as $course) {
            // Add a new page
            $pdf->AddPage();

            // Set font properties
            $pdf->SetFont('Arial', 'B', 14);

            // Set the left margin for the letterhead
            $pdf->SetLeftMargin(30);

            // Add the company logo or letterhead
            // $pdf->Image('logo.png', 30, 20, 40, 40); // Uncomment this line to add a logo

            // Add the company name and address
            $pdf->Cell(0, 20, 'E-Munakahat(MAJLIS UGAMA ISLAM PAHANG)', 0, 1);
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
            $pdf->Cell(40, 10, 'Receipent Name:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 10, $app['applicantName'], 0, 1);
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 10, 'Receipent Address:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 10, $app['applicantAddress'], 0, 1);
            $pdf->Ln(10); // Add some vertical spacing

            // Add the letter content
            $pdf->MultiCell(0, 10, 'Dear Mr./Ms.'.$app['applicantName'].',', 0, 'L');
            $pdf->Ln(5); // Add some vertical spacing
            $pdf->MultiCell(0, 10, 'This is to inform you about the upcoming pre-marriage course organized. The details of the course are as follows:', 0, 'L');
            $pdf->Ln(5); // Add some vertical spacing

            // Display the course details
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Organizer:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_organiser'], 0, 1);

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Venue:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_venue'], 0, 1);

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Date:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_date'], 0, 1);

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Capacity:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_capacity'], 0, 1);

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Officer:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_officer'], 0, 1);

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Briefing Series:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_series'], 0, 1);

            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(40, 5, 'Phone Number:', 0, 0);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 5, $course['pre_m_phone'], 0, 1);

            // Add closing and signature
            $pdf->Ln(5); // Add some vertical spacing
            $pdf->MultiCell(0, 10, 'Thank you for your attention to this matter. If you have any further questions or require additional information, please do not hesitate to contact us. We look forward to your participation in the pre-marriage course.', 0, 'L');
            $pdf->Ln(5); // Add some vertical spacing
            $pdf->MultiCell(0, 10, 'Sincerely,', 0, 'L');
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(0, 10, 'MAJLIS UGAMA ISLAM PAHANG', 0, 1);

            // Output the PDF as a download
            $pdf->Output('PreMarriageCourse_pdf'.$course['pre_m_reg_ID'].'.pdf', 'D');
        }
    }
}
?>
