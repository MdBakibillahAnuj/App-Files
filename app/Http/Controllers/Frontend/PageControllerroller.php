<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;

class PageControllerroller extends Controller
{
//    public function indexHome(){
//        return view('frontend.index', [
//            'foods' => Food::where('status', 1)->simplepaginate(8),
//        ]);
//    }

    public function indexHome(){

        $search = request()->query('search');
        if ($search){
            $foods = Food::where('food_name', 'LIKE', "%$search%")->orWhere('food_details', 'LIKE', "%$search%")->simplepaginate(3);
        }else{
            $foods = Food::orderBy('id', 'DESC')->where('status', 1)->simplepaginate(10);
        }


        return view('frontend.index')
            ->with('categories', Category::all())
//            ->with('tags', Tag::all())
            ->with('foods', $foods);


    }


    public function aboutUs(){
        return view('frontend.about.about_us');
    }
    public function contactUs(){
        return view('frontend.contact.contact_us');
    }
    public function allMenu(){

        return view('frontend.menu.our_menu', [
            'categoris1' => Food::where('category_id', 4)->get(),
            'categoris2' => Food::where('category_id', 5)->get(),
            'categoris3' => Food::where('category_id', 6)->get(),
            'categoris4' => Food::where('category_id', 7)->get(),
            'categoris5' => Food::where('category_id', 8)->get(),
            'categoris6' => Food::where('category_id', 9)->get(),
        ]);
    }
    public function reserveTable(){
        return view('frontend.reservation.reserve');
    }
}
