<?php
// fetch_and_generate_pdf.php

require 'vendor/autoload.php'; // Include the Dompdf autoloader

use Dompdf\Dompdf;
use Dompdf\Options;

// Create an instance of Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$dompdf = new Dompdf($options);

// Load HTML content from the file
$html = file_get_contents('./html.php');

// Load the HTML content with the fetched data
ob_start();
include('fetch_data.php');
$htmlWithData = ob_get_clean();

// Replace a placeholder in the HTML content with the fetched data
$html = str_replace('<!-- DATA_PLACEHOLDER -->', $htmlWithData, $html);


// Load HTML to Dompdf
$dompdf->loadHtml($html);

// Set paper size (optional)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first pass to get total pages)
$dompdf->render();

// Stream the file
$dompdf->stream('invoice.pdf', array('Attachment' => 0));
?>
