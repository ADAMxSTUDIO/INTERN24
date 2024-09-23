<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use PDF; // Assurez-vous d'avoir installé le package domPDF via composer
use Maatwebsite\Excel\Facades\Excel; // Assurez-vous d'avoir installé Laravel Excel
use App\Exports\LeaveRequestsExport; // La classe d'export doit être créée

class ReportController extends Controller
{
    // Générer un rapport PDF des demandes de congé
    public function generatePDF(Request $request)
    {
        // Valider les dates de début et de fin
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Récupérer les demandes de congé dans la période spécifiée
        $leaveRequests = LeaveRequest::whereBetween('created_at', [$request->start_date, $request->end_date])->get();

        // Vérifier s'il y a des demandes à afficher
        if ($leaveRequests->isEmpty()) {
            return response()->json(['message' => 'Aucune demande de congé trouvée pour cette période.'], 404);
        }

        // Générer le PDF
        $pdf = PDF::loadView('reports.leave_requests', compact('leaveRequests'));

        return $pdf->download('leave_requests_report.pdf');
    }
}
