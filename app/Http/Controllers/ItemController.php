<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Customer;
use App\Order;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('admin.manage_items',compact('items'));
    }

    public function dashboard()
      {
        //
        $customer = Customer::all();
        $low = Item::where('status','Low Quantity')->get();
        $high = Item::where('status','High Quantity')->get();
        $order = Order::all();
        return view('admin.dashboard',compact('customer','high','low','order'));
    }

    public function get_invoice(Request $request){
        $payment_method = $request->get('payment_method');
        $date = $request->get('date');
        $customer_name = $request->get('customer_name');

        $product1 = $request->get('product1');
        $qty1 = $request->get('qty1');
        $price1 = Item::where('item_name',$product1)->first();

        $product2 = $request->get('product2');
        $qty2 = $request->get('qty2');
        if(!empty($product2)) {
        $price2 = Item::where('item_name',$product2)->first();
        }

        $product3 = $request->get('product3');
        $qty3 = $request->get('qty3');
        if(!empty($product3)) {
        $price3 = Item::where('item_name',$product3)->first();
        }

        $product4 = $request->get('product4');
        $qty4 = $request->get('qty4');
        if(!empty($product4)) {
        $price4 = Item::where('item_name',$product4)->first();
        }
        $product5 = $request->get('product5');
        $qty5 = $request->get('qty5');
        if(!empty($product5)) {
        $price5 = Item::where('item_name',$product5)->first();
        }
        $product6 = $request->get('product6');
        $qty6 = $request->get('qty6');
        if(!empty($product6)) {
        $price6 = Item::where('item_name',$product6)->first();
        }

        return view('admin.invoice', compact('payment_method','date','customer_name','product1','qty1',
        'product2','qty2','product3','qty3','product4','qty4','product5','qty5','product6','qty6',
        'product7','qty7','price1','price2','price3','price4','price5','price6'));
    }
    public function billing() {
        $customers = Customer::all();
        $items = Item::all();
        return view('admin.billing', compact('customers','items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add_item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new Item;
        $item->item_name = $request->post('item_name');
        $item->price = $request->post('price');
        $item->quantity = $request->post('quantity');
        if($request->post('quantity') < 50) {
            $item->status = 'Low Quantity';
        } elseif ($request->post('quantity') >= 50) {
            $item->status = 'High Quantity'; 
        }

      $item->save();
        return redirect('manage_items')->with('success','Item Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
