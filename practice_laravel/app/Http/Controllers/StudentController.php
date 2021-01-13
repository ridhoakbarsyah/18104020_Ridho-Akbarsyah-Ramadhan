<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DataTables;

class StudentController extends Controller
{
    public function index () {
        $data['student'] = Student::all();
        return view('student', $data);
    }
    public function create () {
        $data['gender'] = ['L','P'];
        $data['departement'] = ['S1 Software Engineering','S1 Informatika','S1 Sistem Informasi'];

        return view('student_create', $data);
    }
    public function store (Request $request) {
        $request->validate([
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:L,P',
            'departement' => 'required',
            'address' => '',
        ]);

        $student = new Student();
        $student ->nim = $request->nim;
        $student ->name =$request->name;
        $student ->gender =$request->gender;
        $student ->departement =$request->departement;
        $student ->address =$request->address;
        $student ->save();

        return redirect(route('student.index'))->with('pesan','Data Berhasil ditambahkan');

    }
    public function edit($id) {
        $data['gender'] = ['P','L'];
        $data['depatement'] = ['S1 Software Engineering','S1 Informatika','S1 Sistem Informasi'];
        $data['student'] = Student::find($id);

        return view('student_edit', $data);

    }
    public function update (Request $request, $id) {
        $request->validate([
            'nim' => 'required|size:8,unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:L,P',
            'departement' => 'required',
            'address' => '',
        ]);

        $student = Student::find($id);
        $student ->nim = $request->nim;
        $student ->name =$request->name;
        $student ->gender =$request->gender;
        $student ->departement =$request->departement;
        $student ->address =$request->address;
        $student ->save();

        return redirect(route('student.index'))->with('pesan','Data Berhasil diupdate');
    }
    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return redirect(route('student.index'))->with('pesan','Data Berhasil dihapus!');
    }
    public function data(Request $request){
		if ($request->ajax()) {
			$data = Student::all();
			return Datatables::of($data)
				->addIndexColumn()
				->addColumn('action', function($row){
					$btn = '
							<div class="text-center">
								<div class="btn-group">
									<a href="'.route('student.edit', ['id' => $row->id]).'" class="edit btn btn-success btn-sm"> Edit </a>
									<a href="'.route('student.data.destroy', ['id' => $row->id]).'" class="btn btn-danger btn-sm"> Hapus </a>
								</div>
							</div>
							';
					return $btn;
				})
				->rawColumns(['action']) 
				->make(true);
		}
		return view('student_data');
	}

}