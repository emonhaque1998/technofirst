<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;


class WebsiteInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cache::remember('ws_information', Carbon::now()->addDay(), function () {
            return WebsiteInformation::latest()->first();;
        });
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
            "image" => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            "address" => "nullable",
            "about_us_short" => "nullable",
            "copyright" => "nullable",
            "footer_background" => "nullable"
        ]);

        $image = $request->file("image");
        $fotterBackground = $request->file("footer_background");
        $fotterBackgroundPath = $fotterBackground->store("images", "public");
        $path = $image->store("images", "public");

        WebsiteInformation::updateOrInsert(
            ["id" => $data->id],
            [
                'email' => $request->email,
                'phone' => $request->mobile,
                'logo' => $path,
                'address' => $request->address === null ? null : $request->address,
            ]
            );


        Cache::forget("ws_information");
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
