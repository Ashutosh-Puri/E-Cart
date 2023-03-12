<?php

namespace App\Http\Controllers\User;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
   
    public function index()
    {   
        $contacts=Contact::paginate(10);
       return view('admin.contact.view_contacts',compact('contacts'));
    }

   
    public function store(Contact $contact ,ContactFormRequest $request)
    {
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('s-status','We Will Contact You Soon.');
    }

    
    public function destroy(Contact $contact)
    {   
        $contact->delete();
        return redirect()->route('contact.index')->with('s-status','Contact Deleted Successfully.');
    }
}
