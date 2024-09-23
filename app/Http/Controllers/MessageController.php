<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        $unreadMessages = Message::where('is_read', false)->latest()->get();
        $readMessages = Message::where('is_read', true)->latest()->get();

        return view('admin.messages.index', compact('unreadMessages', 'readMessages'));
    }

    public function show(Message $message)
    {
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }
        return view('admin.messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save the message to the database
        $message = Message::create($validated);

        // Send email
        Mail::to('your-email@example.com')->send(new ContactFormMailable($validated));

        return redirect()->route('contact')->with('success', 'Message sent successfully. We will get back to you soon.');
    }
}