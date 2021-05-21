<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckAwardController extends Controller
{
    //
    public function index(Request $req){
        // dd($req->input()['first']['data']);
        $award_result = $req->input();
        $data_award = $req->input()['first']['data'];
        $db = new DB;
        $data = $db::table('prize_tb')->select('first_prize','seconde_prize','neight_first_prize','two_digit_prize','id')->get();
        // dd($data);

        $seconde_prize = array();
        $neight_first_prize = array();
        $two_digit_prize = array();
        
        foreach($data[0] as $key => $value){
            if($key == 'first_prize'){
                $first_prize = $value;
            }
            if($key == 'seconde_prize'){
                $seconde_prize[] = unserialize($value);
            }

            if($key == 'neight_first_prize'){
                $neight_first_prize[] = unserialize($value);

            }
            if($key == 'two_digit_prize'){
                $two_digit_prize[] = unserialize($value);
            }
        }
        $all_prize['id'] = $data[0]->id;
        $all_prize['first_prize'] = $first_prize;
        $all_prize['seconde_prize'] = $seconde_prize;
        $all_prize['neight_first_prize'] = $neight_first_prize;
        $all_prize['two_digit_prize'] = $two_digit_prize;
        // dd($all_prize);
        // return 'asd';
        return view('front.home',compact('all_prize'),compact('award_result'))->with('data_award',$data_award);
    }
}
