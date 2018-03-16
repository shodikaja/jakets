<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\karyawan;
use App\User;
use App\Role;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(Request $request, Builder $htmlBuilder)
    {
        $karyawan = karyawan::all();

     if ($request->ajax()) {
    $karyawan = karyawan::select(['id','nama','email','password','cover','alamat']);
        return Datatables::of($karyawan)
 ->addColumn('cover', function($karyawan){
            return '<img src="/img/img7/'.$karyawan->cover. '" height="100px" width="200px">';
        })
               ->addColumn('action', function($karyawan){
            return view('datatable._action', [
                'model'=> $karyawan,
                'edit_url'=> route('karyawan.edit', $karyawan->id),
                ]);
        })
               ->addColumn('delete', function($karyawan){
            return view('datatable._delete', [
                'model'=> $karyawan,
                'form_url'=> route('karyawan.destroy', $karyawan->id),
                ]);
        })->make(true);
    }
 
    $html = $htmlBuilder

    ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Foto'])
    ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'Nama Karyawan'])
    ->addColumn(['data' => 'alamat', 'name'=>'alamat', 'title'=>'Alamat'])
    ->addColumn(['data' => 'email', 'name'=>'email', 'title'=>'Email'])
    ->addColumn(['data' => 'password', 'name'=>'password', 'title'=>'Password'])

    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false])
    ->addColumn(['data' => 'delete', 'name'=>'delete', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('karyawan.index')->with(compact('karyawan','html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new User();
      $user->name =$request['nama'];
      $user->email =$request['email'];
      $user->password=bcrypt($request['password']);
      $user->save();
      
      $karyawanRole = Role::where('name','karyawan')->first();
      $user->attachRole($karyawanRole);
        $karyawan = karyawan::create($request->except('cover'));
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img7';
            $uploaded_cover->move($destinationPath, $filename);
// mengisi field cover di karyawan dengan filename yang baru dibuat
            $karyawan->cover = $filename;
            $karyawan->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $karyawan->nama"
            ]);
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $karyawan = karyawan::find($id);
        return view('karyawan.edit')->with(compact('karyawan'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {

     $user = user::findOrFail($id);
      $user->name =$request['nama'];
      $user->email =$request['email'];
      $user->password=bcrypt($request['password']);
      $user->save();
      
      $karyawanRole = Role::where('name','karyawan')->first();
      $user->attachRole($karyawanRole);
       
        $poto = karyawan::find($id);
        $poto->update($request->all());
        if ($request->hasFile('cover')) {
// menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img7';
// memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
// hapus cover lama, jika ada
            if ($poto->cover) {
                $old_cover = $poto->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img7'
                . DIRECTORY_SEPARATOR . $poto->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }

            // ganti field cover dengan cover yang baru
            $poto->cover = $filename;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data"
            ]);
        return redirect()->route('karyawan.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $karyawan= karyawan::find($id);
        if(!karyawan:: destroy($id))return redirect()->back(); 
            Session::flash("flash_notification", [
            "level"=>"danger",
            "massage"=>"Barang berhasil di hapus"]);
        return redirect()->route('karyawan.index');

    }
}
