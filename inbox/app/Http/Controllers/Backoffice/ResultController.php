<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnalyticLog;
use App\Models\AnalyticDetail;
use Carbon\Carbon;


class ResultController extends Controller
{
    public function index()
    {
        $analyticLogs = AnalyticLog::search('name')
        ->latest()
        ->paginate(10)
        ->withQueryString();

        foreach ($analyticLogs as $item) {
            $item->created_at = Carbon::parse($item->created_at)->timezone('Asia/Jakarta');
        }

        return view('backoffice.result-saw.index', compact('analyticLogs'));
    }

    public function show($id)
    {

        $analyticLog = AnalyticLog::findOrFail($id);
        $analyticDetails = AnalyticDetail::join('orders', 'orders.id', 'analytic_details.order_id')
            ->where('analytic_log_id', $id)
            ->orderBy('rank')
            ->search('orders.name')
            ->paginate(6)
            ->withQueryString();

        return view('backoffice.result-saw.show', compact('analyticLog', 'analyticDetails'));
    }

    public function destroy($id)
    {
        $analyticLog = AnalyticLog::findOrFail($id);

        // Hapus semua detail analisa terkait
        $analyticLog->analyticDetails()->delete();

        // Hapus hasil analisa secara permanen
        $analyticLog->forceDelete();

        return back()->with('toast_success', 'Data berhasil dihapus');
    }

}
