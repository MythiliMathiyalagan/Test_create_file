<?php
    $example = array(
        '0' => array(
            "f_invoice_date_str_ym" => "2021年11月",
            "f_billed_price" => "9560",
            "f_customer_id" => "5566",
            "f_supply_point_no" => "0300000000000000000001"
        ),

        '1' => array(
            'f_invoice_date_str_ym' => '2022年02月',
            'f_billed_price' => '740',
            'f_customer_id' => '5566',
            'f_supply_point_no' => '0609100000020212341234'
        ),
        '2' => array(
            "f_invoice_date_str_ym" => "2022年02月",
            "f_billed_price" => "4630",
            "f_customer_id" => "5566",
            "f_supply_point_no" => "0609100000020212341236"
        ),
        '3' => array(
            "f_invoice_date_str_ym" => "2022年10月",
            "f_customer_id" => "5558",
            "f_supply_point_no" => "0620220912000000000006",
            "f_billed_price" => "14961"
        ),
        '4'  => array(
            "f_invoice_date_str_ym" => "2023年01月",
            "f_customer_id" => "5558",
            "f_supply_point_no" => "0399999999999999990020",
            "f_billed_price" => "231"
        ),
        '5'  => array(
            " f_invoice_date_str_ym" => "2023年01月",
            "f_billed_price" => "597",
            "f_customer_id" => "19797",
            "f_supply_point_no" => "0699999999999999999991"
        ),
        '6'  => array(
            "f_invoice_date_str_ym" => "2023年01月",
            "f_customer_id" => "12",
            "f_supply_point_no" => "0399999999999999990050",
            "f_billed_price" => "0"
        ),

        '7' => array(
            "f_invoice_date_str_ym" => "2022年02月",
            "f_customer_id" => "240",
            "f_supply_point_no" => "0620220912000000000006",
            "f_billed_price" => "14961"

        )
    );


    $output = [];
    $result = [];

    foreach ($example as $val) {
        if (isset($val["f_customer_id"])) {
            $cus = $val["f_customer_id"];
            // print_r($cus); echo '<br>';
            $val_sub = $val["f_supply_point_no"];
            // print_r($val_sub); echo '<br>';
            // $output[$cus]['f_supply_point_no'][] = $val_sub;

            if (empty($output[$cus]['f_supply_point_no'])) {
                $output[$cus]['f_supply_point_no'][] = $val_sub;
            }
                $output[$cus]['f_supply_point_no'][] = $val_sub . ',' . $va11['f_supply_point_no'];
            
        
       
        if (empty($output[$cus]['f_billed_price'])) {
            // $output[$cus]['f_billed_price'] = 0;
        }
        // $output[$cus]['f_billed_price'] += intval($val['f_billed_price']);
    }
   
}
print_r($output);
exit;
    // exit;
    foreach ($output as $key => $value) {
        $result[$key]['f_supply_point_no'] = implode(',', $value['f_supply_point_no']);
        $result[$key]['f_billed_price'] = $value['f_billed_price'];
    }
