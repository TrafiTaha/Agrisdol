<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Only allow admin user (you can modify this logic as needed)
        if (auth()->user()->email !== 'admin@agrisol.tn') {
            abort(403, 'Unauthorized');
        }

        $totalContacts = Contact::count();
        $totalUsers = User::count();
        $recentContacts = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalContacts', 'totalUsers', 'recentContacts'));
    }

    public function contacts()
    {
        if (auth()->user()->email !== 'admin@agrisol.tn') {
            abort(403, 'Unauthorized');
        }

        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts', compact('contacts'));
    }

    public function users()
    {
        if (auth()->user()->email !== 'admin@agrisol.tn') {
            abort(403, 'Unauthorized');
        }

        $users = User::latest()->paginate(10);
        return view('admin.users', compact('users'));
    }
}
