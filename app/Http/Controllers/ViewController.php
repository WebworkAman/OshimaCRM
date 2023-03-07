<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ViewController extends Controller
{
    public function __invoke(){
        return view('OC40N02') 
        -> with('messages',Message::all());
    }

    function OC1(){
        return view('OC1') 
        -> with('messages',Message::all());
    }
    function OC5B(){
        return view('OC5B') 
        -> with('messages',Message::all());
    }

    function OC83(){
        return view('OC83') 
        -> with('messages',Message::all());
    }

    function UW2(){
        return view('UW2') 
        -> with('messages',Message::all());
    }

    function UW2S(){
        return view('UW2S') 
        -> with('messages',Message::all());
    }

    function OC100(){
        return view('OC100') 
        -> with('messages',Message::all());
    }

    function OSP2000II(){
        return view('OSP2000II') 
        -> with('messages',Message::all());
    }

    function OSP2008(){
        return view('OSP2008') 
        -> with('messages',Message::all());
    }
    //拉布

    function M190G(){
        return view('M190G') 
        -> with('messages',Message::all());
    }
    function J3(){
            return view('J3') 
            -> with('messages',Message::all());
        }

    function KPro(){
            return view('KPro') 
            -> with('messages',Message::all());
    }

    function KProLite(){
        return view('KProLite') 
        -> with('messages',Message::all());
    }

    function F8(){
        return view('F8') 
        -> with('messages',Message::all());
    }

    function T5(){
        return view('T5') 
        -> with('messages',Message::all());
    }
    
    //裁剪

    function OneCut(){
        return view('product/category/cutting/OneCut') 
        -> with('messages',Message::all());
    }

    function M6S(){
        return view('product/category/cutting/M6S') 
        -> with('messages',Message::all());
    }

    function TAC(){
        return view('product/category/cutting/TAC') 
        -> with('messages',Message::all());
    }

    function OC510(){
        return view('product/category/cutting/OC510') 
        -> with('messages',Message::all());
    }

    function OB90(){
        return view('product/category/cutting/OB90') 
        -> with('messages',Message::all());
    }

    function A100U(){
        return view('product/category/cutting/A100U') 
        -> with('messages',Message::all());
    }

    function LU933(){
        return view('product/category/cutting/LU933') 
        -> with('messages',Message::all());
    }

    function OB700A(){
        return view('product/category/cutting/OB700A') 
        -> with('messages',Message::all());
    }

    // <*--------  整燙定型 -----------*>

    function OP800SDS(){
        return view('product/category/ironing/OP800SDS') 
        -> with('messages',Message::all());
    }

    function OP87(){
        return view('product/category/ironing/OP87') 
        -> with('messages',Message::all());
    }

    function OP302(){
        return view('product/category/ironing/OP302') 
        -> with('messages',Message::all());
    }

    function OP301(){
        return view('product/category/ironing/OP301') 
        -> with('messages',Message::all());
    }

    function OP122A(){
        return view('product/category/ironing/OP122A') 
        -> with('messages',Message::all());
    }

    function OP500(){
        return view('product/category/ironing/OP500') 
        -> with('messages',Message::all());
    }

    function OP606(){
        return view('product/category/ironing/OP606') 
        -> with('messages',Message::all());
    }

    function OP120T(){
        return view('product/category/ironing/OP120T') 
        -> with('messages',Message::all());

    }

    function OP535(){
        return view('product/category/ironing/OP535') 
        -> with('messages',Message::all());
    }

    function OP565(){
        return view('product/category/ironing/OP565') 
        -> with('messages',Message::all());
    }

    function OP5881(){
        return view('product/category/ironing/OP5881') 
        -> with('messages',Message::all());
    }

    function OP5851(){
        return view('product/category/ironing/OP5851') 
        -> with('messages',Message::all());
    }
    // <*--------  轉印 -----------*>

    function OP10A5(){
        return view('product/category/heatTransfer/OP10A5') 
        -> with('messages',Message::all());
    }
    
    function OP380A(){
        return view('product/category/heatTransfer/OP380A') 
        -> with('messages',Message::all());
    }

    function OP15A(){
        return view('product/category/heatTransfer/OP15A') 
        -> with('messages',Message::all());
    }

    function OP305S(){
        return view('product/category/heatTransfer/OP305S') 
        -> with('messages',Message::all());
    }

    function OP15A4(){
        return view('product/category/heatTransfer/OP15A4') 
        -> with('messages',Message::all());
    }

    function OS5R(){
        return view('product/category/heatTransfer/OS5R') 
        -> with('messages',Message::all());
    }

    function OP54A(){
        return view('product/category/heatTransfer/OP54A') 
        -> with('messages',Message::all());
    }

    function OP251(){
        return view('product/category/heatTransfer/OP251') 
        -> with('messages',Message::all());
    }

    function OP105A(){
        return view('product/category/heatTransfer/OP105A') 
        -> with('messages',Message::all());
    }

    function OP38AII(){
        return view('product/category/heatTransfer/OP38AII') 
        -> with('messages',Message::all());
    }

    function OP5288(){
        return view('product/category/heatTransfer/OP5288') 
        -> with('messages',Message::all());
    }

    // <*--------  黏合 -----------*>

    function OP450GS(){
        return view('product/category/fusingPress/OP450GS') 
        -> with('messages',Message::all());
    }
    
    function OP1200NL(){
        return view('product/category/fusingPress/OP1200NL') 
        -> with('messages',Message::all());
    }

    function OP1400(){
        return view('product/category/fusingPress/OP1400') 
        -> with('messages',Message::all());
    }

    function OP1000NE(){
        return view('product/category/fusingPress/OP1000NE') 
        -> with('messages',Message::all());
    }

    function OP600N(){
        return view('product/category/fusingPress/OP600N') 
        -> with('messages',Message::all());
    }

    function OP60LN(){
        return view('product/category/fusingPress/OP60LN') 
        -> with('messages',Message::all());
    }

    function OP600SP(){
        return view('product/category/fusingPress/OP600SP') 
        -> with('messages',Message::all());
    }

    function OP100LE(){
        return view('product/category/fusingPress/OP100LE') 
        -> with('messages',Message::all());
    }

    function OP600SPII(){
        return view('product/category/fusingPress/OP600SPII') 
        -> with('messages',Message::all());
    }

    function OP900A(){
        return view('product/category/fusingPress/OP900A') 
        -> with('messages',Message::all());
    }

    function OP600FA(){
        return view('product/category/fusingPress/OP600FA') 
        -> with('messages',Message::all());
    }

    function Feeder(){
        return view('product/category/fusingPress/Feeder') 
        -> with('messages',Message::all());
    }

    // <*--------  無縫黏合 -----------*>

    function MB9018B(){
        return view('product/category/seamless/MB9018B') 
        -> with('messages',Message::all());
    }

    function OP114(){
        return view('product/category/seamless/OP114') 
        -> with('messages',Message::all());
    }

    function OP114S(){
        return view('product/category/seamless/OP114S') 
        -> with('messages',Message::all());
    }

    function OP701HAS(){
        return view('product/category/seamless/OP701HAS') 
        -> with('messages',Message::all());
    }

    function OP11403(){
        return view('product/category/seamless/OP11403') 
        -> with('messages',Message::all());
    }

    function OP11406(){
        return view('product/category/seamless/OP11406') 
        -> with('messages',Message::all());
    }

    function OP11416(){
        return view('product/category/seamless/OP11416') 
        -> with('messages',Message::all());
    }

    function OP115(){
        return view('product/category/seamless/OP115') 
        -> with('messages',Message::all());
    }

    function OP11402(){
        return view('product/category/seamless/OP11402') 
        -> with('messages',Message::all());
    }

    function OP115CSN(){
        return view('product/category/seamless/OP115CSN') 
        -> with('messages',Message::all());
    }

    function OP11512T(){
        return view('product/category/seamless/OP11512T') 
        -> with('messages',Message::all());
    }

    function OP806A(){
        return view('product/category/seamless/OP806A') 
        -> with('messages',Message::all());
    }

    

    // <*--------  包裝 -----------*>

    function OFC1(){
        return view('product/category/packaging/OFC1') 
        -> with('messages',Message::all());
    }

    function OFC450(){
        return view('product/category/packaging/OFC450') 
        -> with('messages',Message::all());
    }

    function OSZ50(){
        return view('product/category/packaging/OSZ50') 
        -> with('messages',Message::all());
    }

    function OSZK02(){
        return view('product/category/packaging/OSZK02') 
        -> with('messages',Message::all());
    }

    function OSZ50X(){
        return view('product/category/packaging/OSZ50X') 
        -> with('messages',Message::all());
    }

    function OSZ50N(){
        return view('product/category/packaging/OSZ50N') 
        -> with('messages',Message::all());
    }

    function OSZ50XN(){
        return view('product/category/packaging/OSZ50XN') 
        -> with('messages',Message::all());
    }

    // <*--------  其他機械 -----------*>

    function ON5(){
        return view('product/category/others/ON5') 
        -> with('messages',Message::all());
    }
    function ONCM(){
        return view('product/category/others/ONCM') 
        -> with('messages',Message::all());
    }

    function WLS301(){
        return view('product/category/others/WLS301') 
        -> with('messages',Message::all());
    }
    function OM78(){
        return view('product/category/others/OM78') 
        -> with('messages',Message::all());
    }
    function OB201L(){
        return view('product/category/others/OB201L') 
        -> with('messages',Message::all());
    }
    function OP408S(){
        return view('product/category/others/OP408S') 
        -> with('messages',Message::all());
    }
    function OP747(){
        return view('product/category/others/OP747') 
        -> with('messages',Message::all());
    }
    function OW40(){
        return view('product/category/others/OW40') 
        -> with('messages',Message::all());
    }
    function DSFS(){
        return view('product/category/others/DSFS') 
        -> with('messages',Message::all());
    }
    function OP102A(){
        return view('product/category/others/OP102A') 
        -> with('messages',Message::all());
    }
   

    
}
