<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['excelFile'])) {
    $file = $_FILES['excelFile']['tmp_name'];
    try {
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();
        $headers = array_shift($data);
        $jsonData = [];
        foreach ($headers as $header) {
            $jsonData[$header] = [];
        }
        foreach ($data as $row) {
            foreach ($headers as $index => $header) {
                if (!empty($row[$index])) {
                    $jsonData[$header][] = $row[$index];
                }
            }
        }
        $jsonOutput = json_encode($jsonData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        header('Content-Type: application/json');
        header('Content-Disposition: attachment; filename="output.json"');
        echo $jsonOutput;
        exit;
    } catch (Exception $e) {
        echo "Ошибка при обработке файла: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel to JSON Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Excel to JSON Converter</h1>
                        <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="excelFile" class="form-label">Загрузите Excel-файл:</label>
                                <input type="file" name="excelFile" id="excelFile" class="form-control" accept=".xls,.xlsx" required>
                                <div class="invalid-feedback">
                                    Пожалуйста, выберите файл Excel для загрузки.
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Преобразовать в JSON</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
