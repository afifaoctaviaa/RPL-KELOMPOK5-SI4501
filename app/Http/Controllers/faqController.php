<?php

namespace App\Http\Controllers;

use App\Models\faq;
use Illuminate\Http\Request;

class faqController extends Controller
{
    public function faqView ()
    {
        $faq = faq::all();
        return view('faq.faq', compact('faq'));

    }


    public function manageFaq ()
    {
        $faq = faq::all();
        return view('ManageFAQ.manageFaq', compact('faq'));
    }

    public function addFaqPage ()
    {
        return view('ManageFaq.addfaq');
    }

    public function addFaq (Request $request)
    {
        $validatedData = $request->validate([
            "Header"=>"required",
            "Content"=>"required",
        ]);
        $add=faq::create([
            'header' => $validatedData['Header'],
            'content' => $validatedData['Content'],
        ]);
        if ($add){
            return redirect('manageFaq')->with('success', 'FAQ Has Added');
        }else{
            return back();
        }
    }

    public function updateFaq ($id)
    {
        $updateFaq = faq::where('id',$id)->first();
        return view('ManageFAQ.updateFaq', compact('updateFaq'));
    }

    public function update(Request $request, $id){
        $updateFaq = faq::where('id',$id)->first();
        $validatedData = $request->validate([
            "Header" => "required",
            "Content" => "required",
        ]);
    
        $updateFaq->header = $validatedData['Header'];
        $updateFaq->content = $validatedData['Content'];
    
        if ($updateFaq->save()) {
            return redirect()->route('manageFaq')->with('success', 'FAQ Has Changed');
        } else {
            return back()->with('failed', 'Failed to update FAQ');
        }
    }
    public function delete($id){
        $deleteForm = faq::where('id',$id);
        $deleteForm->delete();
        return back()->with('success', 'Data Has Deleted    ');
    }
}
