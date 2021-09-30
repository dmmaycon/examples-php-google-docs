<?php

require __DIR__ . '/vendor/autoload.php';

$client = new Google\Client();
$client->setApplicationName("examples-php-google-docs");
$client->setScopes([\Google\Service\Sheets::SPREADSHEETS]);
$client->setAccessType('offiline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google\Service\Sheets($client);

$spreadSheetId = "1fctReNjsXDHUy1BU1n1Mfra4rBjZH1iwWTaVYqv1COk";

$totalOfClasses = (int) trim(preg_replace( '/[^0-9]/', '',($service->spreadsheets_values->get($spreadSheetId, 'A2')->getValues()[0][0])));

$response = $service->spreadsheets_values->get($spreadSheetId, 'A4:H27');
$values   = $response->getValues();

// imprime os valores iniciais da planilha
// print_r($values);

// percorre os valores originais da planinha modelo e calcula a média
foreach ($values as $rows => &$arrayCells) {
    echo '--------------------------------------------' . PHP_EOL;
    echo 'Matricula: ' . $arrayCells[0] . PHP_EOL;
    echo 'Aluno: ' . $arrayCells[1] . PHP_EOL;
    echo 'Faltas: ' . $arrayCells[2] . PHP_EOL;
    echo 'P1: ' . $arrayCells[3] . PHP_EOL;
    echo 'P2: ' . $arrayCells[4] . PHP_EOL;
    echo 'P3: ' . $arrayCells[5] . PHP_EOL;    
    echo 'Situação: ' . $arrayCells[6] . PHP_EOL;
    echo 'Nota para Aprovação: ' . $arrayCells[7] . PHP_EOL;

    $average = (($arrayCells[3] + $arrayCells[4] + $arrayCells[5]) / 10) / 3;
    $absence =  $arrayCells[2] > ($totalOfClasses * 0.25) ? 'Reprovado por Falta' : '';
    $situacion = 'Reprovado por Falta';
    $naf = 0;

    if ($absence !== 'Reprovado por Falta' && $average >= 7) {
        $situacion = 'Aprovado';
    } else if ($absence !== 'Reprovado por Falta' && $average >= 5) {
        $situacion = 'Exame Final';
        $naf =  ($average + 7) / 2;
        $naf = ceil($naf);
    } else if ($absence !== 'Reprovado por Falta' && $average < 5) {
        $situacion = 'Reprovado por nota';
    }

    echo '----------- Calculo Efetuado -----------------------' . PHP_EOL;
    echo 'Situação: ' . $situacion . PHP_EOL;
    $arrayCells[6] = $situacion;
    echo 'Nota para Aprovação: ' . $naf . PHP_EOL;
    $arrayCells[7] = $naf;
}

// atualiza a planilha original
$body = new Google\Service\Sheets\ValueRange([
    'values' => $values
]);
$params = ['valueInputOption' => 'RAW'];

$result = $service->spreadsheets_values->update($spreadSheetId, 'A4:H27', $body, $params);

