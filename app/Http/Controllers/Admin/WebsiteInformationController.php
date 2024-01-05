<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInformation;
use Illuminate\Http\Request;


class WebsiteInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = WebsiteInformation::latest()->first();
        return view("admin.website-information")->with("basicInfo", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = WebsiteInformation::latest()->first();

        $request->validate([
            "mobile" => 'required',
            "email" => "required|email",
            "image" => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file("image");
        $path = $image->store("images", "public");

        if(!empty($data)){
            WebsiteInformation::find($data->id)->update([
                'email' => $request->email,
                'phone' => $request->mobile,
                'logo' => $path
            ]);
        }else{
            WebsiteInformation::create([
                'email' => $request->email,
                'phone' => $request->mobile,
                'logo' => $path
            ]);
        }
        return response()->json([
            "message" => "You are success update site",
            "success" => true
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
