<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use App\Notifications\LeaveRequestApproved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveRequestController extends Controller
{
    // Obtenir toutes les demandes de congé de l'utilisateur
    public function index()
    {
        $leaveRequests = Auth::user()->leaveRequests;

        return response()->json($leaveRequests);
    }

    // Soumettre une demande de congé
    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'type' => 'required|in:annual,sick,maternity,paternity,other',
        ]);

        $leaveRequest = LeaveRequest::create([
            'user_id' => Auth::id(),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'pending',
            'type' => $request->type,
            'comments' => null,
        ]);

        return response()->json($leaveRequest, 201);
    }

    // Examen d'une demande de congé par le responsable
    public function update(Request $request, LeaveRequest $leaveRequest)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
            'comments' => 'nullable|string',
        ]);

        // Mettre à jour la demande de congé
        $leaveRequest->update([
            'status' => $request->status,
            'comments' => $request->comments,
        ]);

        // envoyer une notification par email
        $leaveRequest->user->notify(new LeaveRequestApproved($leaveRequest));

        return response()->json($leaveRequest);
    }
}
