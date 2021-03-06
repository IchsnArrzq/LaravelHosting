<?php

namespace App\Http\Controllers;

use App\Models\FilePegawai;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class DevController extends Controller
{
    public static function encrypt(Request $request)
    {
        $file_encrypt = encrypt($request->file('file')->get());
        $original_file_name = $request->file('file')->getClientOriginalName();
        $fake = preg_replace('/\\.[^.\\s]{3,4}$/', '', $original_file_name);
        $fake_file_name = rand() . '_' . Carbon::now()->format('Ymd') . '_' . $fake . '.rda';
        $path_file = '/pegawai/file_pegawai/' . $fake_file_name;
        // Storage::put($path_file,$file_encrypt);
        dd($path_file);
    }
    public static function decrypt($name)
    {
        $file = Storage::get('encrypt/' . $name);
        $file_decrypt = decrypt($file);
        return response()->streamDownload(function () use ($file_decrypt) {
            echo $file_decrypt;
        }, $name);
    }
    public function test()
    {
        File::link(
            storage_path('app/public'),
            public_path('storage')
        );
    }

    public static function DownloadOrView($id)
    {
        try {
            $file_pegawai = FilePegawai::findOrFail($id);
            $path = $file_pegawai->file;
            $file = Storage::get($path);
            $file_decrypt = decrypt($file);
            return response()->streamDownload(function () use ($file_decrypt) {
                echo $file_decrypt;
            }, $file_pegawai->original);
        } catch (Exception $error) {
            Alert::error('Error',$error->getMessage());
            return back();
        }
    }
    public function SuratMasukLaporan(Request $request)
    {
        $this->validate($request,[
            'from' => 'required',
            'to' => 'required'
        ]);

        $surat_masuk = SuratMasuk::whereBetween('tanggal', [$request->from,$request->to])->get();
        return view('admin.surat_masuk.laporan',[
            'surat_masuks' => $surat_masuk,
            'from' => $request->from,
            'to' => $request->to
        ]);
    }
    public function SuratKeluarLaporan(Request $request)
    {
        $this->validate($request,[
            'from' => 'required',
            'to' => 'required'
        ]);

        $surat_keluar = SuratKeluar::whereBetween('tanggal', [$request->from,$request->to])->get();
        return view('admin.surat_keluar.laporan',[
            'surat_keluars' => $surat_keluar,
            'from' => $request->from,
            'to' => $request->to
        ]);
    }
}
