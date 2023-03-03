<?php

class ExcelExport {

    public function export($data = [], $keys = []) {
        /*
          $data = mysql Data;
          $keys = ['db tablo nabme'=>'colmn title'];
         */
        if (count($data) > 0) {
            header('Content-Encoding: UTF-8');
            header("Content-Type: application/xls;");
            header("Content-Disposition: attachment; filename=excelExport.xls");
            header("Pragma: no-cache");
            header("Expires: 0");
            echo "\xEF\xBB\xBF"; // UTF-8 BOM
            echo '<html lang="tr"><table border="1">';
            echo '<tr>';
            foreach ($keys as $c => $d) {
                echo '<th>' . $d . '</th>';
            }
            echo '</tr>';
            foreach ($data as $row) {
                echo '<tr>';
                foreach ($keys as $k => $v) {
                    echo '<td>' . $row[$k] . '</td>';
                }echo '</tr>';
            }echo '</table></html>';
        }return FALSE;
    }

}
