<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;


class PagesController extends Controller
{
    public function root()
    {
        //dd(Auth::user()->hasVerifiedEmail());


        return view('pages.root');
    }
    public function test()
    {

        //phpinfo();

        $data = DB::table('WAT_场存空箱列表')->select(DB::raw('箱公司,尺寸,箱型,sum(实际场存) as sl,sum(残损) as cs'))->whereNotIn('cop_copercd',['ZGZY','ZGSQ','JYPC'])->groupBy('箱公司','尺寸','箱型')->get()->toArray();

        dd($data);

    }
}
