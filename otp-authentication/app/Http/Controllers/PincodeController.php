<?php

namespace App\Http\Controllers;

use App\Models\Pincode;
use App\Models\City;
use Illuminate\Http\Request;

class PincodeController extends Controller
{
    public function index()
    {
        $pincodes = Pincode::all();
        return view('pincodes.index', compact('pincodes'));
    }

    public function create()
    {
        $cities = City::all();
        return view('pincodes.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pincode' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
        ]);

        Pincode::create([
            'pincode' => $request->pincode,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('pincodes.index')->with('success', 'Pincode created successfully.');
    }

    public function show(Pincode $pincode)
    {
        return view('pincodes.show', compact('pincode'));
    }

    public function edit(Pincode $pincode)
    {
        $cities = City::all();
        return view('pincodes.edit', compact('pincode', 'cities'));
    }

    public function update(Request $request, Pincode $pincode)
    {
        $request->validate([
            'pincode' => 'required|string|max:255',
            'city_id' => 'required|exists:cities,id',
        ]);

        $pincode->update([
            'pincode' => $request->pincode,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('pincodes.index')->with('success', 'Pincode updated successfully.');
    }

    public function destroy(Pincode $pincode)
    {
        $pincode->delete();
        return redirect()->route('pincodes.index')->with('success', 'Pincode deleted successfully.');
    }
}
