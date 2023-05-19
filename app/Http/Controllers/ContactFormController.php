<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

  public function index()
  {
    return view('contacts.index');
  }


  public function confirm(Request $request)
  {

    $inputs = $request->all();

    return view('contacts.confirm', [
      'inputs' => $inputs
    ]);
  }


  public function send(Request $request)
  {

    ContactForm::create([
      'name' => $request->name,
      'title' => $request->title,
      'email' => $request->email,
      'url' => $request->url,
      'gender' => $request->gender,
      'age' => $request->age,
      'contact' => $request->contact,
    ]);

    if ($request->input('back') == 'back') {
      return redirect('contacts')
        ->withInput();
    }

    return to_route('contacts.index');
  }
}
