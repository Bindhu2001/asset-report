<?php

namespace App\Http\Controllers;

use App\Models\AssetAllocate;
use Illuminate\Http\Request;
use PDF;

class AssetReportController extends Controller
{
public function index()
{
    $assets = AssetAllocate::with(['assetModel.type', 'employee'])->get();
    return view('report.index', compact('assets'));
}


public function downloadPDF()
{
    $assets = AssetAllocate::with(['assetModel.type', 'employee'])->get();
    $pdf = PDF::loadView('report.pdf', compact('assets'))
          ->setPaper([0, 0, 1190.55, 841.89], 'landscape');
    return $pdf->download('asset-history-report.pdf');
}
}

