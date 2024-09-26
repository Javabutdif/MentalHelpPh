<?php
function TableComponent($header, $data, $buttonComponent1, $buttonComponent2) {
    // Add 'Action' to the header
    $header[] = 'Action';

    $table = '<table id="example" class="table table-striped" style="width:100%; ">
                <thead class="text-white" style="background-color: rgba(0, 166, 81, 1);">
                <tr>';

    // Generate table headers
    foreach ($header as $head) {
        $table .= '<th>' . htmlspecialchars(ucfirst(strtolower($head))) . '</th>';
    }

    $table .= '</tr>
               </thead>
               <tbody>';

    // Generate table rows
    foreach ($data as $row) {
        $table .= '<tr>';
        foreach ($header as $head) {
            if ($head === 'Action') {
                // Create Edit and Delete buttons
                $patient_id = htmlspecialchars($row['patient_id']); // Ensure you have a 'patient_id' field in your data
                $table .= '<td class="text-center">
                            <div class="flex justify-center items-center space-x-2"> <!-- Added space-x-2 for spacing -->
                                <button id="'.$buttonComponent1.'" onclick="'.$buttonComponent1.'Button(' . $patient_id . ')" class="btn btn-warning btn-sm">'.$buttonComponent1.'</button>
                                <button id="'.$buttonComponent2.'" onclick="'.$buttonComponent2.'Button(' . $patient_id . ')" class="btn btn-danger btn-sm">'.$buttonComponent2.'</button>
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
