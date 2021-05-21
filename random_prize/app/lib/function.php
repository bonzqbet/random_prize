<?php

function print_pre($expression, $return = false, $wrap = false)
{
    $css = 'border:1px dashed #06f;background:#69f;padding:1em;text-align:left;z-index:99999;font-size:12px;position:relative';
    if ($wrap) {
        $str = '<p style="' . $css . '"><tt>' . str_replace(
        array('  ', "\n"),
        array('&nbsp; ', '<br />'),
        htmlspecialchars(print_r($expression, true))
        ) . '</tt></p>';
    } else {
        $str = '<pre style="' . $css . '">' . print_r($expression, true) . '</pre>';
    }
    if ($return) {
        if (is_string($return) && $fh = fopen($return, 'a')) {
        fwrite($fh, $str);
        fclose($fh);
        }
        return $str;
    } else
        echo $str;
}

function check_prize($prize,$data,$type){
    // dd($data);
    // dd($prize);
    
    $award_arr = array();
    switch ($type) {
        case 2:
            for ($i=0; $i < count($prize[0]); $i++) { 
                if($prize[0][$i] == $data){
                    $award_arr['prize'] = 'seconde_prize';
                    $award_arr['bool'] = 'true';
                    $award_arr['award'] = $prize[0][$i];
                    $award_arr['data'] = $data;

                    break;
                }
                if($i == count($prize[0])-1){
                    $award_arr['prize'] = 'seconde_prize';
                    $award_arr['bool'] = 'false';
                    $award_arr['data'] = $data;
                    break;
                }
            }
            break;
        case 'Neighbors':
            for ($i=0; $i < count($prize[0]); $i++) { 
                if($prize[0][$i] == $data){
                    $award_arr['prize'] = 'neight_first_prize';
                    $award_arr['bool'] = 'true';
                    $award_arr['award'] = $prize[0][$i];
                    $award_arr['data'] = $data;
                    break;
                }
                if($i == count($prize[0])-1){
                    $award_arr['prize'] = 'neight_first_prize';
                    $award_arr['bool'] = 'false';
                    $award_arr['data'] = $data;
                    break;
                }
            }
            break;
        case 'two_digit':
            $valNumberRe = substr($data,-2);
            for ($i=0; $i < count($prize[0]); $i++) { 
                if($prize[0][$i] == $valNumberRe){
                    $award_arr['prize'] = 'two_digit_prize';
                    $award_arr['bool'] = 'true';
                    $award_arr['award'] = $prize[0][$i];
                    $award_arr['data'] = $data;
                    break;
                }
                if($i == count($prize[0])-1){
                    $award_arr['prize'] = 'two_digit_prize';
                    $award_arr['bool'] = 'false';
                    $award_arr['data'] = $data;
                    break;
                }
            }
            break;
        default:
            if($prize == $data){
                $award_arr['prize'] = 'first_prize';
                $award_arr['bool'] = 'true';
                $award_arr['award'] = $prize;
                $award_arr['data'] = $data;
                break;
            }
            else{
                $award_arr['prize'] = 'first_prize';
                $award_arr['bool'] = 'false';
                $award_arr['data'] = $data;
                break;
            }
            break;
    }
    return $award_arr;

}

?>