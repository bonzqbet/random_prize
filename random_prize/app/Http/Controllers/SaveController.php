<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SaveController extends Controller
{
    //
    public function index(){
        $db = new DB;
        $data = $db::table('prize_tb')->select('first_prize','seconde_prize','neight_first_prize','two_digit_prize','id')->get();
        // dd($data);

        if(!empty($data[0])){
        
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
            return view('front.home',compact('all_prize'));
        }else{
            // dd('empty');
            return view('front.home');
        }
    }

    public function create(Request $req){
        $seconde_prize1 = array();
        $neight_first_prize1 = array();
        $two_digit_prize1 = array();
        // dd($req->input());

        //set array to DB
        // neight first prize
        $neight_first_prize1[] = $req->input()['neight_first_prize1'];
        $neight_first_prize1[] = $req->input()['neight_first_prize2'];
        
        // seconde prize
        $seconde_prize1[] = $req->input()['seconde_prize1'];
        $seconde_prize1[] = $req->input()['seconde_prize2'];
        $seconde_prize1[] = $req->input()['seconde_prize3'];

        // two_digi prize
        $two_digit_prize1[] = $req->input()['two_digit_prize1'];
        $two_digit_prize1[] = $req->input()['two_digit_prize2'];
        $two_digit_prize1[] = $req->input()['two_digit_prize3'];
        $two_digit_prize1[] = $req->input()['two_digit_prize4'];
        $two_digit_prize1[] = $req->input()['two_digit_prize5'];
        $two_digit_prize1[] = $req->input()['two_digit_prize6'];
        $two_digit_prize1[] = $req->input()['two_digit_prize7'];
        $two_digit_prize1[] = $req->input()['two_digit_prize8'];
        $two_digit_prize1[] = $req->input()['two_digit_prize9'];
        $two_digit_prize1[] = $req->input()['two_digit_prize10'];



        // dd($seconde_prize1,$neight_first_prize1,$two_digit_prize1,$req->input()['first_prize']);
        $db = new DB;
        // delete data all
        $db::table('prize_tb')->whereNotNull('id')->delete();

        $db::table('prize_tb')->insert(
            [
                'first_prize' => $req->input()['first_prize'],
                'seconde_prize' => serialize($seconde_prize1),
                'neight_first_prize' => serialize($neight_first_prize1),
                'two_digit_prize' => serialize($two_digit_prize1),
            ]
        );

        return redirect()->route('prizepul.index');
        // return view('front.home');
    }

    public function check_award(Request $req){
        // dd($req->input()['number_award']);
        $data_award = $req->input()['number_award'];
        $db = new DB;
        $data = $db::table('prize_tb')->select('first_prize','seconde_prize','neight_first_prize','two_digit_prize')->whereNotNull('id')->get();
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
        // $valNumberRe = substr('001',-2);
        // dd($valNumberRe);
        
        //check seconde prize
        $award_result = array();
        $award_1 = check_prize($first_prize,$data_award,1);
        $award_2 = check_prize($seconde_prize,$data_award,2);
        $award_neight = check_prize($neight_first_prize,$data_award,'Neighbors');
        $award_two_digit = check_prize($two_digit_prize,$data_award,'two_digit');

        $award_result['first'] = $award_1;
        $award_result['seconde'] = $award_2;
        $award_result['neight'] = $award_neight;
        $award_result['two_digit'] = $award_two_digit;
        // dd($award_result);

        // Session::put('award',$award_result);
        return redirect()->route('checkaward.index',$award_result);

    }

    public function destroy($request)
    {
        // dd($request);
        $db = new DB;
        $db::table('prize_tb')->delete($request);
        return redirect()->route('prizepul.index');

    }
}
