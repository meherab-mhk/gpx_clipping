<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Image;
class OrderController extends Controller
{
    public function viewOrders(){
        $orders = Order::all();
        return view ('admin-view',compact('orders'));
    }
    public function store(Request $request){
        $data = $request->validate(
            [
                "username" => 'required',
                "useremail" => 'required',
                "instructions" => 'required',
            ]
        );
        $new_order = Order::create($data);
        if($request->has('images')){
            foreach($request->file('images')as $image){
                $imageName = $data['username'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('order_images'),$imageName);
                Image::create([
                    'order_id'=>$new_order->id,
                    'image'=>$imageName
                ]);
            }
        }
        // return Redirect::back()->withErrors(['msg' => 'There was an error']);
        return redirect()->back()->with('success', 'Your trial order has been Placed!');   
        //->withSuccess(['Success Mressage here!']); return back()->with('success','Added');
        
    }

    public function images($id){
        $order = Order::find($id);
        if(!$order) abort(404);
        $images = $order->images;
        return view('view-images',compact('order','images'));
    }

}
