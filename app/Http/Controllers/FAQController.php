<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class FAQController extends Controller
{
    public function index()
    {
        return view('FAQ', [
            'faqs' => Faq::all()
        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('faqs.createFaq');
    }

    public function store(Request $request)
    {
        Faq::create($this->validateQuestion($request));
        return redirect('/FAQ');
    }

    public function edit(Faq $FAQ)
    {
        return view('faqs.editFaq', [
            'faq'=> $FAQ
        ]);
    }

    public function update(Faq $FAQ, Request $request)
    {
        $FAQ->update($this->validateQuestion($request));
        return redirect('/FAQ');
    }

    public function destroy(Faq $FAQ)
    {
        Faq::findorfail($FAQ->id)->destroy($FAQ->id);
        return redirect('/FAQ');
    }

    /**
     * @return array
     */
    public function validateQuestion($request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
