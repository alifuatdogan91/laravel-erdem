<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserFormController extends Controller
{
    public function index(){
        return view('index');
    }
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'firstName' => 'required|string|max:255',
                'email'     => 'required|email|max:255',
                'phone'     => 'required|string|max:20',
                'terms'     => 'accepted',
            ], __('app.validate'));

            UserPost::create([
                'name'  => $validated['firstName'],
                'email' => $validated['email'],
                'telephone' => $validated['phone'],
                'terms_privacy_accepted' => $request->has('terms') ? 1 : 0,
            ]);

            return response()->json(['success' => true]);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        }
    }
}
