<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Dotenv\Validator; 
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\menu;
use App\Models\menutitle;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function menu() {

       $menu = Menu::all();
       return view("menu",["data"=>$menu]);

    }

    function menue() {
        return view('menue');

     }
    function menueiteam() {
       
        $menu = Menutitle::all();
        return $menu;

     }

     function title($id) {
        if ($id==1){
        $mainmenu = menutitle::all();
        return view("title1",["data"=>$mainmenu]);
        }
        else {
        return view('footermenu'); 
        }
    }
}
?>