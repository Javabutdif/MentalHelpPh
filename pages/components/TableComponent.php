<?php
function TableComponent($header, $data, $buttonComponent1, $buttonComponent2) {
    $header[] = 'Action';

    $table = '<table id="example" class="table table-striped" style="width:100%; ">
                <thead class="text-white" style="background-color: rgba(0, 166, 81, 1);">
                <tr>';

    foreach ($header as $head) {
        $table .= '<th>' . htmlspecialchars(ucfirst(strtolower($head))) . '</th>';
    }

    $table .= '</tr>
               </thead>
               <tbody>';

    foreach ($data as $index => $row) {
        $patient_id = htmlspecialchars($row['patient_id']);
        $table .= '<tr>';
        foreach ($header as $head) {
            if ($head === 'Action') {
                // Assign a unique id to each button
                $table .= '<td class="text-center">
                            <div class="flex justify-center items-center space-x-2">
                                <button id="edit-btn-' . $index . '" data-id="' . $patient_id . '" class="btn btn-warning btn-sm">'.$buttonComponent1.'</button>
                                <button id="delete-btn-' . $index . '" data-id="' . $patient_id . '" class="btn btn-danger btn-sm">'.$buttonComponent2.'</button>
                            </div>
                           </td>';
            } else {
                $table .= '<td>' . htmlspecialchars($row[$head]) . '</td>';
            }
        }
        $table .= '</tr>';
    }

    $table .= '</tbody></table>';

    return $table;
}
?>
