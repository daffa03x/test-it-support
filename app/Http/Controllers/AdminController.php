<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Atasan;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $jabatan = Jabatan::get(); // Data Jabatan Untuk Modal
            $atasan = Atasan::get(); // Data Atasan Untuk Modal
            $data = User::select('users.id','users.nama','users.jenis_kelamin','users.alamat','jabatan.nama AS jabatan','atasan.nama AS atasan')
            ->join('jabatan','jabatan.id','=','users.jabatan_id')
            ->join('atasan','atasan.id','=','users.atasan_id')
            ->paginate(5); // Query Select Join User
            return view('admin.index', compact('data','jabatan','atasan'));
        } catch (\Exception $e) {
            return view('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi Form
            $request->validate([
                'nama' => 'required|max:100',
                'alamat' => 'required',
            ]);
            // Create User
            $data = User::create([
                'nama' => $request->nama,
                'atasan_id' => $request->atasan_id,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'jabatan_id' => $request->jabatan_id
            ]);
            
            // Kondisi True Or False
            if($data){
                return redirect('/admin')->with('Success','Berhasil Tambah User');
            }else{
                return redirect('/admin')->with('Danger','Gagal Tambah User');
            }
        } catch (\Exception $e) {
            return view('error', $e->getMessage());
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = User::where('id',$id)->first(); // Data User Berdasarkan Id
        $jabatan = Jabatan::get(); // Semua Data Jabatan
        $atasan = Atasan::get();  // Semua Data Atasan
        return view('admin.edit',compact('data','jabatan','atasan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $data = User::where('id',$id)->first(); // Data User Berdasarkan Id
            // Validasi Form
            $request->validate([
                'nama' => 'required|max:100',
                'alamat' => 'required',
            ]);
            // Update User
            $data->update([
                'nama' => $request->nama,
                'atasan_id' => $request->atasan_id,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'jabatan_id' => $request->jabatan_id
            ]);
            return redirect('/admin')->with('Success','Berhasil Ubah User');
        } catch (\Throwable $th) {
            return view('error', $th->getMessage());
        }   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::where('id',$id)->first(); // Ambil data user berdasarkan id
        $data->delete(); // hapus data user dari var data
        return redirect('/admin')->with('Success','Berhasil Hapus User');
    }
}
