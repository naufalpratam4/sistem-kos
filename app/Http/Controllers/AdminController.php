<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penghuni;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $kamar = Kamar::count();
        $kamar_kosong = Kamar::where('status', 'kosong')->count();

        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json([
                'total_kamar' => $kamar,
                'kamar_kosong' => $kamar_kosong
            ]);
        } else {
            return view('admin.adminDashboard', compact('kamar', 'kamar_kosong'));
        }
    }

    public function penghuni(Request $request)
    {
        $penghuni = Penghuni::all();
        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json([
                'data' => $penghuni
            ]);
        } else {
            return view('admin.penghuni', compact('penghuni'))->with('penghuni', $penghuni);
        }
    }
}
