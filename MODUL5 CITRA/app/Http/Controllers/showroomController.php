<?php

namespace App\Http\Controllers;

use App\Models\showroom;
use Illuminate\Http\Request;

class showroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'showroom';
        $data['q'] = $request->get('q');
        $data['showroom'] = showroom::where('user_id', 'like', '%' . $data['q'] . '%')->get();
        return view('showroom', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('views.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$user_id)
    {
                $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '-' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);

        showroom::create([
            'name' => $request -> name,
            'owner' => $request -> owner,
            'image' => $imgName,
            'brand' => $request -> brand,
            'purchase_order' => $request -> purchase_order,
            'description' => $request -> description,
            'status' => $request -> status
        ]);

        return redirect('/views');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function show(showroom $showroom,$user_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function edit(showroom $showroom,$user_id)
    {
        $showroom = showroom::find($user_id);

        return view('views.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, showroom $showroom,$user_id)
    {
        $showroom = showroom::find($user_id);

        $imgName = $showroom->img_path;
        if ($request->img_path) {
            $imgName = $request->img_path->getClientoriginalName() . '-' . time()
                        . '-' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        }

        showroom::find($user_id)->update([
            'name' => $request -> name,
            'owner' => $request -> owner,
            'image' => $imgName,
            'brand' => $request -> brand,
            'purchase_order' => $request -> purchase_order,
            'description' => $request -> description,
            'status' => $request -> status
        ]);

        return redirect('/product')->with('success', 'Customer updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(showroom $showroom)
    {
        //
    }
}
