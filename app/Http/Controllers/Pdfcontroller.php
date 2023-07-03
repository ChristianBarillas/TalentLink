<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;

class Pdfcontroller extends Controller
{
    public function generarPDF(Request $request)
    {
        if ($request->has('generatePDF')) {
            // Obtener todas las filas visibles de la tabla
            $rows = $request->input('rows');

            // Agrupar las filas por comercio
            $rowsByComercio = array();
            foreach ($rows as $row) {
                $comercio = $row['comercio'];
                if (!array_key_exists($comercio, $rowsByComercio)) {
                    $rowsByComercio[$comercio] = array();
                }
                $rowsByComercio[$comercio][] = $row;
            }

            // Obtener las fechas seleccionadas
            $selectedDates = $request->input('selectedDates');
            $fechaCorteFormatted = '';

            if (count($selectedDates) === 1) {
                // Si solo se seleccionó un día, mostrar esa fecha
                $fechaCorte = $selectedDates[0];
                $fechaCorteFormatted = $fechaCorte->format('d \d\e F \d\e Y');
            } else if (count($selectedDates) > 1) {
                // Si se seleccionó un rango de fechas, mostrar el rango en el formato "día inicial" al "día final" de "mes" de "año"
                $fechaInicio = $selectedDates[0];
                $fechaFin = end($selectedDates);
                $fechaCorteFormatted = $fechaInicio->format('d \d\e F') . ' al ' . $fechaFin->format('d \d\e F \d\e Y');
            } else {
                // Si no se seleccionó ninguna fecha, mostrar un mensaje de error
                return 'Seleccione una fecha o un rango de fechas';
            }

            // Crear un objeto ZIP
            $zip = new ZipArchive();
            $zipFileName = 'EstadoCuentas.zip';
            if ($zip->open($zipFileName, ZipArchive::CREATE) !== TRUE) {
                exit("No se pudo crear el archivo ZIP");
            }

            // Generar un PDF por comercio
            foreach ($rowsByComercio as $comercio => $comercioRows) {
                ob_start();

                require('fpdf.php'); // Agrega la referencia a la librería FPDF

                $pdf = new FPDF();
                $pdf->AddPage();

                // Configurar el encabezado del PDF
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->Cell(40, 10, 'Weris S.A. de C.V.');

                $pdf->Ln(10);

                $pdf->SetFont('Arial', '', 12);
                $pdf->Cell(0, 10, 'Reporte de entregas realizadas por ventas de comercios');
                $pdf->Ln(6);
                $pdf->Cell(0, 10, 'del ' . $fechaCorteFormatted);

                $pdf->Ln(10);

                // Configurar los datos del comercio
                $sucursalNombre = $comercioRows[0]['sucursalNombre'];
                $razonSocial = $comercioRows[0]['razonSocial'];

                $pdf->Cell(0, 10, 'Razón social:');
                $pdf->Ln(6);
                $pdf->Cell(0, 10, 'Nombre comercial - ' . $comercio);
                $pdf->Ln(6);
                $pdf->Cell(0, 10, 'Sucursal - ' . $sucursalNombre);
                $pdf->Ln(6);
                $pdf->Cell(0, 10, 'Razón social - ' . $razonSocial);

                $pdf->Ln(10);

                // Configurar la tabla de datos
                $pdf->SetFont('Arial', 'B', 12);
                $pdf->Cell(20, 10, 'ID', 1, 0, 'C');
                $pdf->Cell(50, 10, 'Producto', 1, 0, 'C');
                $pdf->Cell(30, 10, 'Cantidad', 1, 0, 'C');
                $pdf->Cell(40, 10, 'Total', 1, 0, 'C');
                $pdf->Ln();

                $pdf->SetFont('Arial', '', 12);
                foreach ($comercioRows as $row) {
                    $pdf->Cell(20, 10, $row['id'], 1, 0, 'C');
                    $pdf->Cell(50, 10, $row['producto'], 1, 0, 'C');
                    $pdf->Cell(30, 10, $row['cantidad'], 1, 0, 'C');
                    $pdf->Cell(40, 10, $row['total'], 1, 0, 'C');
                    $pdf->Ln();
                }

                $pdfContent = ob_get_clean();

                // Guardar el contenido del PDF en un archivo temporal
                $pdfFileName = 'EstadoCuenta_' . $comercio . '.pdf';
                $pdfFilePath = public_path('path/to/save/' . $pdfFileName);
                file_put_contents($pdfFilePath, $pdfContent);

                // Agregar el PDF generado al ZIP
                $zip->addFile($pdfFilePath, $pdfFileName);
            }

            // Cerrar el archivo ZIP
            $zip->close();

            // Descargar el archivo ZIP
            return response()->download($zipFileName)->deleteFileAfterSend(true);
        }
    }
}
