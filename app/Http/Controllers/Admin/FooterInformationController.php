<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Models\WebsiteInformation;

class FooterInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = WebsiteInformation::latest()->first();
        $request->validate([
            "address" => "nullable",
            "about_us_short" => "nullable",
            "copyright" => "nullable",
            "footer_background" => "nullable"
        ]);

        $fotterBackgroundPath = null;

        if(file_exists($request->file("footer_background"))){
            $fotterBackground = $request->file("footer_background");
            $fotterBackgroundPath = $fotterBackground->store("images", "public");
        }

        WebsiteInformation::updateOrInsert(
            ["id" => $data->id],
            [
                'address' => $request->address,
                'about_us' => $request->about_us_short,
                'copyright' => $request->copyright,
                'footer_background' => $fotterBackgroundPath,
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
