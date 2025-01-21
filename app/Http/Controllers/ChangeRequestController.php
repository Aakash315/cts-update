<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChangeRequest;


class ChangeRequestController extends Controller
{
    public function approved()
    {
        // Fetch approved change requests from the database
        $approvedRequests = ChangeRequest::with('user')->where('status', 'approved')->get();
        return view('change-requests.approved', compact('approvedRequests'));
    }

    // Display Rejected requests
    public function rejected()
    {
        // Fetch rejected change requests from the database
        $rejectedRequests = ChangeRequest::with('user')->where('status', 'rejected')->get();
        return view('change-requests.rejected', compact('rejectedRequests'));
    }

    // Display Pending requests
    public function pending()
    {
        // Fetch pending change requests from the database
        $pendingRequests = ChangeRequest::with('user')->where('status', 'pending')->get();
        return view('change-requests.pending', compact('pendingRequests'));
    }

    public function showAllChangeRequests()  {
        // Fetch change requests based on their status
        $approvedRequests = ChangeRequest::with('user')->where('status', 'approved')->get();
        $pendingRequests = ChangeRequest::with('user')->where('status', 'pending')->get();
        $rejectedRequests = ChangeRequest::with('user')->where('status', 'rejected')->get();

        // Pass the data to the view
        return view('changeall', compact('approvedRequests', 'pendingRequests', 'rejectedRequests'));
    }
}
