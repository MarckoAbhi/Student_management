<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students= Student::where('status','!=',9)->get();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student Added!');

    //     $name = !empty($request ->name)?$request->name:Null;
    //     $display_flag = !empty($request ->display_flag)?$request ->display_flag:2;  
    //     $foreign_flag = !empty($request ->foreign_flag)?$request ->foreign_flag:2;  
    //     $status = !empty($request ->status)?$request ->status:2;  
    //     $created_by =Auth::user()->id;
    //     $created_at = date('y-m-d H:i:s');
    //     $updated_by = Null;
    //     $updated_at = Null;
    //    $myarr = [
    //     "name"=> $name,
    //     "display_flag"=> $display_flag,
    //     "foreign_flag"=> $foreign_flag,
    //     "status"=>$status,
    //     "created_by" => $created_by,
    //     "created_at" => $created_at,
    //     "updated_by" => $updated_by,
    //     "updated_at" => $updated_at,
    //    ] ;
    //    DB::beginTransaction();
    //     $query=UgcCsirNet::create($myarr);
    //     if ($query) {
    //         DB::commit();
    //         $message = 'Entry Saved Successfuly';
    //         Session::flash('message', $message);
    //     } else {
    //         DB::rollback();
    //         $message = 'Something Went Wrong';
    //         Session::flash('error', $message);
    //     }
    //     return redirect($this->current_menu);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $student = Student::findOrFail($id);
        $student->status = 9; 
        $student->save();
        return redirect('students')->with('flash_message', 'Student marked as deleted!');
    }
}