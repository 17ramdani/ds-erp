<?php

namespace App\Http\Controllers;

use App\Models\Pesanan\Pesanan;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload_bt(Request $request, $id)
    {
        // return response()->json(['data' => $request->project_document], 200);
        $cust_id = auth()->user()->customer_id;
        if ($request->hasFile('image_bt')) {
            $file = $request->file('image_bt');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('public/bt/' . $folder, $filename);

            Pesanan::where([
                ['customer_id', $cust_id], ['id', $id]
            ])->update([
                'bukti_transfer' => url('/storage/bt/' . $folder . '/' . $filename)
            ]);

            return $folder;
        }
        return '';
    }
}
