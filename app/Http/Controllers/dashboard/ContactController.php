<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contacts.index',compact('contacts'));
    }


    public function create(){
        $jobs = Job::all();
        return view('dashboard.contacts.create',compact('jobs'));
    }


    public function store(ContactRequest $request)
    {
        $request->merge([
            'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('/covers', 'public');
            $request->merge([
                'image_path' => $path
            ]);
        }

        // dd($request->all());

        Contact::create($request->all());


        return redirect()->route('contacts.index')->with('success', 'Contact Created Successfully')->with('type', 'success');



    }



    public function edit(Request $request , $id){

        $contact = Contact::find($id);
        $jobs = Job::all();
                return view('dashboard.contacts.edit',compact('contact','jobs'));
    }


    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        if ($request->hasFile('image')) {
            if ($contact->image_path) {
                Storage::disk('public')->delete($contact->image_path);
            }

                $file = $request->file('image');
                $path = $file->store('/covers', 'public');
                $request->merge([
                    'image_path' => $path
                ]);


        } else {
            $path = $contact->image_path;
        }

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact Updated Successfully');;
    }


    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
         if ($contact->image_path) {
             Storage::disk('public')->delete($contact->image_path);
         }
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact Deleted Successfully');

    }
}
