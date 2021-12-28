<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Requests\studentRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        return view('index', [
            'students' =>  student::get(),
        ]);
    }

    
    public function create()
    {
        return view('create');
    }

    public function store(studentRequest $request)
    {
        $attr = $request->all();

        $thumbnail = request()->file('image') ? request()->file('image')->store('images/posts') : null ;

        $attr['name'] = $request->name;
        $attr['photo'] = $thumbnail;
        $attr['nim'] = $request->nim;
        $attr['email'] = $request->email;
        $attr['jurusan'] = $request->jurusan;
        student::create($attr);
        Alert::success('Success Title', 'Success Message');
        return redirect('/');
        
    }

    
    public function edit(student $student)
    {
        return view('edit', [
            'student' => $student,
        ]);
    }

    
    public function update(studentRequest $request, student $student)
    {
        if($request->file('image'))
        {
            Storage::delete($student->photo);
            $image = request()->file('image')->store('images/posts');
        } else {
            $image = $student->photo;
        }

        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'photo' => $image,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/')->with('status berhasil diupdate');
    }

   
    public function delete(student $student)
    {
        Storage::delete($student->photo);
        $student->delete();
       return redirect('/');
    }

}
