<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    public function newDevice(Request $request)
    {
        $item = Device::create($request->all());

        return response()->json(['success' => true, 'data' => $item ], 200);
    } 
}
