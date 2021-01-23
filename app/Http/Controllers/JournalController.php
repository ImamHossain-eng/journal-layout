<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use File;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index(){
        $journals = Journal::all();
        return view('journal.index', compact('journals'));
    }
    public function create(){
        return view('journal.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'vol' => 'required',
            'no' => 'required',
            'title' => 'required',
            'author' => 'required',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048'            
        ]);

        if($request->hasFile('file')){
            $fileName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('uploads'), $fileName);
        }

        $journal = new Journal;

        $journal->vol = $request->input('vol');
        $journal->no = $request->input('no');
        $journal->title = $request->input('title');
        $journal->author = $request->input('author');
        $journal->file = $fileName;
        $journal->body = $request->input('body');

        $journal->save();
        return redirect()->route('journal.index');
    }
    public function destroy($id){
        $journal = Journal::find($id);
        $fileName = $journal->file;
        File::delete(public_path('uploads/'.$fileName));
        $journal->delete();
        return redirect()->route('journal.index');
    }
    public function edit($id){
        $journal = Journal::find($id);
        return view('journal.edit', compact('journal'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'vol' => 'required',
            'no' => 'required',
            'title' => 'required',
            'author' => 'required',
            'file' => 'mimes:pdf,xlx,csv|max:2048'            
        ]);

        $journal = Journal::find($id);

        $fileName = $journal->file;
        if($request->hasFile('file')){
            File::delete(public_path('uploads/'.$fileName));
            $fileN = time().'.'.$request->file->extension();  
            $request->file->move(public_path('uploads'), $fileN);
        }
        else{
            $fileN = $fileName;
        }
        $journal->vol = $request->input('vol');
        $journal->no = $request->input('no');
        $journal->title = $request->input('title');
        $journal->author = $request->input('author');
        $journal->file = $fileN;
        $journal->body = $request->input('body');

        $journal->save();
        return redirect()->route('journal.index');

    }
    public function show($id){
        $journal = Journal::find($id);
        return view('journal.show', compact('journal'));
    }
    public function test(){
        $journals = Journal::all();
        return view('journal.test', compact('journals'));
    }
}
