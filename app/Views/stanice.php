<?php

$this->extend("layout/layout");

$this->section("content");

echo "<h1>Data ze stanice ".$stanice."</h1>";

$table = new \CodeIgniter\View\Table();

$table->setHeading('Datum', 'Kvalita ovzduší', 'Průměrná teplota', ' Průměrná rychlost větru');

foreach($mereni as $data){
    $table->addRow(date('d.m.Y', strtotime($data->date)), $data->quality, $data->mid_2m, $data->mid_wind);
}

$template = [
    'table_open' => '<table class="table">',

    'thead_open'  => '<thead>',
    'thead_close' => '</thead>',

    'heading_row_start'  => '<tr>',
    'heading_row_end'    => '</tr>',
    'heading_cell_start' => '<th scope="col">',
    'heading_cell_end'   => '</th>',

    'tfoot_open'  => '<tfoot>',
    'tfoot_close' => '</tfoot>',

    'footing_row_start'  => '<tr>',
    'footing_row_end'    => '</tr>',
    'footing_cell_start' => '<td>',
    'footing_cell_end'   => '</td>',

    'tbody_open'  => '<tbody>',
    'tbody_close' => '</tbody>',

    'row_start'  => '<tr>',
    'row_end'    => '</tr>',
    'cell_start' => '<td>',
    'cell_end'   => '</td>',

    'row_alt_start'  => '<tr>',
    'row_alt_end'    => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end'   => '</td>',

    'table_close' => '</table>',
];

$table->setTemplate($template);

echo $table->generate();


$this->endSection();
