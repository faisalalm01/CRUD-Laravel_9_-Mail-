<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){

        //get post
        $mail = Surat::latest()->paginate(5);

        return view('mail.index', compact('mail'));
    }

    public function create() {
        return view('mail.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nosurat'     => 'required',
            'title'     => 'required',
            'date'   => 'required'
        ]);


        //create mail
        Surat::create([
            'nosurat'   => $request->nosurat,
            'title'   => $request->title,
            'date'   => $request->date
        ]);

        //redirect to index
        return redirect()->route('mail.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    //delete
    public function destroy(Surat $mail)
    {
      
        //delete post
        $mail->delete();

        //redirect to index
        return redirect()->route('mail.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


    public function edit(Surat $mail)
    {
        return view('mail.update', compact('mail'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    public function update(Request $request, Surat $mail)
    {
        //validate form
        $this->validate($request, [
            'nosurat'   => 'required',
            'title'     => 'required',
            'date'      => 'required'
        ]);
        
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$mail->image);

            //update post with new image
            $mail->update([
                'nosurat'   => $request->nosurat,
                'title'     => $request->title,
                'date'      => $request->date
            ]);

        } else {

            //update post without image
            $mail->update([
                'nosurat'   => $request->nosurat,
                'title'     => $request->title,
                'date'      => $request->date
            ]);
        }
        return redirect()->route('mail.index')->with(['success' => 'Data Berhasil Diubah!']);
  
    }


    
}


