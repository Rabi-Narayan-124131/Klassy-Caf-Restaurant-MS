<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Food_menu;
use App\Models\Table_reservation;
use App\Models\Chefs;
use App\Models\FoodOrders;

class AdminController extends Controller
{
    public function users() {

        $data = User::all();

        return view('admin.users', compact('data'));
    }

    public function delete_user($id) {

        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function food_menu() {

        $data = Food_menu::all();
        return view('admin.food_menus_admin', compact('data'));
    }

    public function upload_food_menu(Request $request) {


        $data = new Food_menu;

        $image = $request->file('food_image');
        // echo "<pre>";
        // print_r($image->toArray());
        // die;
        $imageName = time() . '-rabi.' . $image->getClientOriginalExtension();

        $request -> food_image -> move('food_menu-images',$imageName);

        $data -> food_image = $imageName;
        $data -> food_name = $request -> food_name;
        $data -> food_price = $request -> food_price;
        $data -> food_description = $request -> food_description;

        $data -> save();
        return redirect()->back();
    }

    public function delete_food_menu($id) {

        $data = Food_menu::find($id);
        //  echo "<pre>";
        //  print_r($data->toArray());
        //  die;
        $data->delete();
        return redirect()->back();
    }
    public function edit_food_menu($id) {

        $data = Food_menu::find($id);
        return view('admin.edit_food_menus_admin', compact('data'));

    }

    public function update_food_menu(Request $request, $id) {


        $data = Food_menu::find($id);

        $image = $request->file('food_image');
        // echo "<pre>";
        // print_r($image->toArray());
        // die;
        $imageName = time() . '-rabi.' . $image->getClientOriginalExtension();

        $request -> food_image -> move('food_menu-images',$imageName);

        $data -> food_image = $imageName;
        $data -> food_name = $request -> food_name;
        $data -> food_price = $request -> food_price;
        $data -> food_description = $request -> food_description;

        $data -> save();
        return redirect()->back();
    }

    public function reservation() {

        $data = Table_reservation::all();
        return view('admin.reservation_admin', compact('data'));
    }

    public function chefs() {

        if (Auth::id()) {
            $data = Chefs::all();
            return view('admin.chefs_admin', compact('data'));

        } else {
            return redirect('login');
        }

    }

    public function upload_chef(Request $request) {


        $data = new Chefs;

        $image = $request->file('chef_image');
        // echo "<pre>";
        // print_r($image->toArray());
        // die;
        $imageName = time() . '-rabi.' . $image->getClientOriginalExtension();

        $request -> chef_image -> move('chef-images',$imageName);

        $data -> chef_image = $imageName;
        $data -> chef_name = $request -> chef_name;
        $data -> chef_speciality = $request -> chef_speciality;

        $data -> save();
        return redirect()->back();
    }

    public function delete_chef($id) {

        $data = Chefs::find($id);
        //  echo "<pre>";
        //  print_r($data->toArray());
        //  die;
        $data->delete();
        return redirect()->back();
    }

    public function edit_chef($id) {

        $data = Chefs::find($id);
        return view('admin.edit_chef_admin', compact('data'));

    }

    public function update_chef(Request $request, $id) {


        $data = Chefs::find($id);

        $image = $request->file('chef_image');
        // echo "<pre>";
        // print_r($image->toArray());
        // die;
        if($image){
            $imageName = time() . '-rabi.' . $image->getClientOriginalExtension();

            $request -> chef_image -> move('chef-images',$imageName);

            $data -> chef_image = $imageName;
        }
        $data -> chef_name = $request -> chef_name;
        $data -> chef_speciality = $request -> chef_speciality;

        $data -> save();
        return redirect()->back();
    }

    public function orders() {

        $data = FoodOrders::all();
        return view('admin.food_orders_admin', compact('data'));
    }

    public function delete_order($id) {

        $data = FoodOrders::find($id);
        //  echo "<pre>";
        //  print_r($data->toArray());
        //  die;
        $data->delete();
        return redirect()->back();
    }

    public function search(Request $request) {

        $search = $request->search;

        $data = FoodOrders::where('user_name', 'Like', '%' . $search . '%')->orWhere('food_name', 'Like', '%' . $search . '%')->get();
        return view('admin.food_orders_admin', compact('data'));
    }

}
