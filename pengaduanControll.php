<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class pengaduanControll extends Controller
{
    function index()
    {

        $judul = "Welcomeeeee";

        return view('home', ['TextJudul' => $judul]);
    }

    function pengaduan()
    {

        $data = "Data Laporan";
        // $pengaduan = DB::table('pengaduan')->get();
 
        $pengaduan = Pengaduan::all();

        return view('pengaduan', ['TextIsi' => $data, 'pengaduan' => $pengaduan]);  
    }

    function tampil_isi()
    {

        $isi = "Silahkan Isi Laporan anda";

        return view('isi-pengaduan', ['isi' => $isi]);
    }

    function proses_tambah_pengaduan(Request $request)
    {

        return Auth::user();
        //validasi
        $nama_foto = $request->foto->getClientOriginalName();
        
        $request->validate([
            'isi_laporan' => 'required|min:2'
        ]);
        
        $request->foto->storeAs('public/image', $nama_foto);

        // $isi_pengaduan = $_POST['isi_laporan'];
        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => Auth::user()->nik,
            'isi_laporan' => $isi_pengaduan,
            'foto' => $request->foto->getClientOriginalName(),
            'status' => '0'
        ]);
        return redirect('/pengaduan');
    }

    function masyarakat()
    {

        $dataM = "Data pelapor";
        $masyarakat = DB::table('masyarakat')->get();

        return view('masyarakat', ['TextIsi' => $dataM, 'masyarakat' => $masyarakat]);
    }

    function tampil_isiM()
    {

        $isiM = "Silahkan Daftar";

        return view('isi-masyarakat', ['isiM' => $isiM]);
    }

    function proses_tambah_masyarakat(Request $request)
    {

        //validasi
        $request->validate([
            'isi_daftar' => 'required|min:2'
        ]);


        // $isi_masyarakat = $_POST['isi_laporan'];
        $isi_masyarakat = $request->isi_daftar;
        $isi_username = $request->isi_user;
        $isi_password = $request->isi_pass;
        $isi_telp = $request->isi_no;

        DB::table('masyarakat')->insert([
            'nik' => '08',
            'nama' => $isi_masyarakat,
            'username' => $isi_username,
            'password' => $isi_password,
            'telp' => $isi_telp,
        ]);
        return redirect('/masyarakat');
    }


    function petugas()
    {

        $dataP = "Data petugas";
        $petugas = DB::table('petugas')->get();

        return view('petugas', ['TextIsi' => $dataP, 'petugas' => $petugas]);
    }

    function tampil_isiP()
    {

        $isiP = "Silahkan Daftar Petugas";

        return view('isi-petugas', ['isiP' => $isiP]);
    }

    function proses_tambah_petugas(Request $request)
    {

        //validasi
        $request->validate([
            'isi_daftar' => 'required|min:2'
        ]);


        // $isi_petugas = $_POST['isi_laporan'];
        $isi_petugas = $request->isi_daftar;
        $isi_username = $request->isi_user;
        $isi_password = $request->isi_pass;
        $isi_telp = $request->isi_no;
        $level = $request->isi_level;

        DB::table('masyarakat')->insert([
            'id_petugas' => '',
            'nama' => $isi_petugas,
            'username' => $isi_username,
            'password' => $isi_password,
            'telp' => $isi_telp,
            'level' => $level,
        ]);
        return redirect('/petugas');
    }

    //tanggapan
    function tanggapan()
    {

        $dataT = "Tanggapan Anda";
        $tanggapan = DB::table('tanggapan')->get();

        return view('tanggapan', ['TextIsi' => $dataT, 'tanggapan' => $tanggapan]);
    }

    function tampil_isiT()
    {

        $isiT = "Beri Tanggapan";

        return view('isi-tanggapan', ['isiT' => $isiT]);
    }

    function proses_tambah_tanggapan(Request $request)
    {

        //validasi
        $request->validate([
            'isi_daftar' => 'required|min:2'
        ]);


        // $isi_tanggapan = $_POST['isi_laporan'];
        // $isi_tanggapan = $request->isi_daftar;
        // $isi_ = $request->isi_user;
        // $isi_password = $request->isi_pass;
        // $isi_telp = $request->isi_no;
        // $level = $request->isi_level;

        // DB::table('masyarakat')->insert([
        //     'id_petugas' => '',
        //     'nama' => $isi_petugas,
        //     'username' => $isi_username,
        //     'password' => $isi_password,
        //     'telp' => $isi_telp,
        //     'level' => $level,
        // ]);
        // return redirect('/petugas');
    }

    //hapus
    function hapus($id)
    {
        $deleted=DB::table('pengaduan')->where('id_pengaduan', $id)->delete();
        if($deleted){
            return redirect()->back();
        }
    }

    function detail_pengaduan($id)
    {
        $data = DB::table('pengaduan')
            ->where('id_pengaduan', '=', $id)
            ->first();
        return view("detail_pengaduan", ["data" => $data]);
    }

    //update
    function update_pengaduan($id)
    {
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan' , $id)->first();
        return view('update' , ['pengaduan' => $pengaduan]);
    }
    function proses_update_pengaduan(Request $request, $id)
    {
        $isi_laporan = $request->isi_laporan;

        // return $isi_laporan;

        DB::table('pengaduan')
        ->where('id_pengaduan', $id)
        ->update(['isi_laporan' => $isi_laporan]);
        
        return redirect('/pengaduan');
    }

}
