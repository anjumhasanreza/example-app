<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function index()
    // {
    //     // Fetch contacts with pagination (e.g., 10 per page)
    //     $contacts = Contact::latest()->paginate(10);

    //     // Pass the contacts to the admin view
    //     return view('admin.contacts', compact('contacts'));
    // }

    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%");
        }

        $contacts = $query->latest()->paginate(10);

        return view('admin.contacts', compact('contacts'));
    }

}
