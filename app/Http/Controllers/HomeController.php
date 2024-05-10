<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food_menu;
use App\Models\Table_reservation;
use App\Models\Chefs;
use App\Models\Add_to_cart;
use App\Models\FoodOrders;

class HomeController extends Controller
{
    public function index() {

        if (Auth::id()) {

            return redirect('redirects');

        } else {

            $data = Food_menu::all();

            $cdata = Chefs::all();

            return view('index', compact('data','cdata'));


        }
    }

    public function redirect() {

        $data = Food_menu::all();

        $cdata = Chefs::all();

        $userType = Auth::user()->user_type;

        if ($userType == 1) {
            //Administrator
            return view('admin.index_admin');
        } else {
            //User or Guest

            $user_id = Auth::id();
            $count = Add_to_cart::where('user_id',$user_id)->count();

            return view('index', compact('data','cdata','count'));
        }

    }

    public function table_reservation(Request $request) {


        $data = new Table_reservation;


        $data -> guest_name = $request -> guest_name;
        $data -> guest_email = $request -> guest_email;
        $data -> guest_phone = $request -> guest_phone;
        $data -> number_of_guests = $request -> number_of_guests;
        $data -> date = $request -> date;
        $data -> time = $request -> time;
        $data -> guest_message = $request -> guest_message;

        $data -> save();
        return redirect()->back();
    }

    public function add_to_cart(Request $request, $id) {

        if (Auth::id()) {

            $user_id = Auth::id();
            $food_id = $id;
            $food_quantity = $request->food_quantity;

            $cart = new Add_to_cart;

            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->food_quantity = $food_quantity;

            $cart -> save();
            return redirect()->back();

        } else {


            return redirect('/login');

        }
    }

    public function show_cart(Request $request, $id) {

        $count = Add_to_cart::where('user_id',$id)->count();

        if (Auth::id()==$id) {

            $cdata = Add_to_cart::select('*')->where('user_id', '=' ,$id)->get();

            $data = Add_to_cart::where('user_id',$id)->join('food_menus', 'add_to_carts.food_id', '=' , 'food_menus.id')->get();


            return view('frontend.show_cart', compact('count', 'data', 'cdata'));


        } else {

            return redirect()->back();


        }



    }

    public function remove_cart_item($id) {

        $data = Add_to_cart::find($id);
        //  echo "<pre>";
        //  print_r($data->toArray());
        //  die;
        $data->delete();
        return redirect()->back();
    }

    public function order_con_details(Request $request) {

        foreach($request -> food_name as $key => $food_name) {

            $data = new FoodOrders;


            $data -> food_name = $food_name;
            $data -> food_price = $request -> food_price[$key];
            $data -> food_quantity = $request -> food_quantity[$key];

            $data -> user_name = $request -> user_name;
            $data -> user_email = $request -> user_email;
            $data -> user_phone = $request -> user_phone;
            $data -> user_city = $request -> user_city;
            $data -> user_state = $request -> user_state;
            $data -> user_address = $request -> user_address;

            $data -> save();


        }

        return redirect()->back();

    }
}
