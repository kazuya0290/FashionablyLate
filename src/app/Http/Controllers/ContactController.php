<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['category_id','first_name', 'last_name','gender', 'email','tell1','tell2','tell3','address','building','contact-form','detail']);
    return view('confirm', compact('contact'));
  }

  public function store(ContactRequest $request)
  {
    $contact = $request->only(['category_id','first_name','last_name', 'gender', 'email','tell1','tell2','tell3','address','building','contact-form','detail']);
    Contact::create($contact);
      return view('thanks');
  }
}