<?php  
namespace App\Http\Controllers; 
 
use App\Models\Mahasiswa; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
 
class MahasiswaController extends Controller 
{ 
   /** 

*	Display a listing of the resource. 
     * 
*	@return \Illuminate\Http\Response 
     */     
    public function index() 
    { 
        // $mahasiswas = Mahasiswa::all();
        $mahasiswas = Mahasiswa::orderBy('Nim', 'asc')
        ->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
        // ->with('i', (request()->input('page', 1) - 1) * 5);
        

     }     
     public function create() 
    {         
        return view('mahasiswas.create'); 
    }     
    public function store(Request $request) 
    { 
 
    //melakukan validasi data 
        $request->validate([ 
            'nim' => 'required', 
            'nama' => 'required', 
            'kelas' => 'required', 
            'jurusan' => 'required', 
            'no_handphone' => 'required',
            'email'=>'required',
            'tgl_lahir'=>'required' 
        ]); 
 
        //fungsi eloquent untuk menambah data 
        Mahasiswa::create($request->all()); 
 
        //jika data berhasil ditambahkan, akan kembali ke halaman utama         
        return redirect()->route('mahasiswas.index') 
            ->with('success', 'Mahasiswa Berhasil Ditambahkan'); 
    }      
    
    public function show($Nim) 
    { 
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa 
        $Mahasiswa = Mahasiswa::find($Nim);         
        return view('mahasiswas.detail', compact('Mahasiswa'));     
    }   
    public function edit($Nim)    
    { 
 //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit 
        $Mahasiswa = Mahasiswa::find($Nim);         
        return view('mahasiswas.edit', compact('Mahasiswa'));     
    }     
    public function update(Request $request, $Nim) 
    { 
 
 //melakukan validasi data 
        $request->validate([ 
            'nim' => 'required', 
            'nama' => 'required', 
            'kelas' => 'required', 
            'jurusan' => 'required', 
            'no_handphone' => 'required', 
            'email'=>'required',
            'tgl_lahir'=>'required'
        ]); 
 
 //fungsi eloquent untuk mengupdate data inputan kita 
        Mahasiswa::find($Nim)->update($request->all());  
//jika data berhasil diupdate, akan kembali ke halaman utama         
        return redirect()->route('mahasiswas.index') 
            ->with('success', 'Mahasiswa Berhasil Diupdate'); 
    }    
     public function destroy( $Nim) 
     { 
 //fungsi eloquent untuk menghapus data         
         Mahasiswa::find($Nim)->delete();         
         return redirect()->route('mahasiswas.index') 
            -> with('success', 'Mahasiswa Berhasil Dihapus'); 
     } 
     public function cari (Request $request)
    {

         $cari = $request -> get ('cari');
         $post = DB::table('mahasiswa')->where('nama','like','%'.$cari.'%')->paginate(5);
        return view('mahasiswas.index',['mahasiswas' => $post]);

         
    }
}; 
