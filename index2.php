<?php


$dataRaw = [
    ['tahun_neraca' => "2015", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2016", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2016", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2016", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2017", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2017", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2018", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2018", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
    ['tahun_neraca' => "2018", "jumlah_bijih_SD" => 1000000, 'jumlah_bijih_CAD' => 20000000, "jumlah_logam_SD" => 1000000, 'jumlah_logam_CAD' => 20000000],
];

$tmp = [];

$tmpTahun = [
    'tahun'=> 0, 
    'jumlah_bijih_SD' => 0,
    'jumlah_bijih_cd' => 0,
    'jumlah_logam_SD' => 0,
    'jumlah_logam_cd' => 0,
];

$arrayTahun = [];

$idxTahun = 0;
$i = 0;
foreach($dataRaw as $element) {
    if(!in_array($element['tahun_neraca'], $arrayTahun)){
        $arrayTahun[$idxTahun] = $element['tahun_neraca'];
        $idxTahun++;
    }
   
    $i++;
}

// print_r($arrayTahun[0]);
// echo json_encode($arrayTahun);
print(count($arrayTahun));


$dataOk = [];
$i = 0;
foreach($dataRaw as $d){
    for ($i=0; $i < count($arrayTahun); $i++) { 
        # code...
        if($d['tahun_neraca'] == '2015'){
            $tmpTahun['tahun']= $d['tahun_neraca'];
            $tmpTahun['jumlah_bijih_SD'] += $d['jumlah_bijih_SD'];
            $tmpTahun['jumlah_bijih_cd'] += $d['jumlah_bijih_CAD'];
            $tmpTahun['jumlah_logam_SD'] += $d['jumlah_logam_SD'];
            $tmpTahun['jumlah_logam_cd'] += $d['jumlah_logam_CAD'];
            $i++;
        }
    }
    
}
array_push($dataOk, $tmpTahun);

// array_push($dataOk, $tmpTahun2);
// $dataOk= $tmpTahun;

echo json_encode($dataOk);

// $a = array(
//     '1' => '3',
//     '1' => '2',
//     '2' => '1',
//     '1' => '2',
//     '2' => '2',
//     );

// $b = array ();
// foreach ($a as $key => $value)
// {
//     if (isset($b[$key]))
//     {
//         $b[$key] += $value;
//     }
//     else
//     {
//         $b[$key] = $value;
//     }
// }
// print_r($b);

$array = [
    ['Shop' => 3, 'Weight' => 4],
    ['Shop' => 3, 'Weight' => 5],
    ['Shop' => 3, 'Weight' => 1]
];
// echo json_encode($array);
// print_r($array);

echo '<br>';
$result = [];
foreach($array as $item)
{
    if (isset($result[$item['Shop']]))
    {
        $result[$item['Shop']] += $item['Weight'];
    }
    else
    {
        $result[$item['Shop']] = $item['Weight'];
    }
}
// echo json_encode($result);


?>