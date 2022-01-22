<?php

namespace App\Http\Controllers;

use App\Models\jobIT;
use App\Models\jobkeuangan;
use App\Models\jobpbau;
use App\Models\jobpelkap;
use App\Models\jobsdm;
use App\Models\jobtpb;
use App\Models\jobumum;
use App\Models\pkmIT;
use App\Models\pkmkeuangan;
use App\Models\pkmpbau;
use App\Models\pkmpelkap;
use App\Models\pkmSDM;
use App\Models\pkmtpb;
use App\Models\pkmUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pelindoController extends Controller
{
    //!--- Log in ---!

    //!----------------------------Pengguna PKM-Action --------------------------------------------------------------!
    //!--- Pengguna PKM IT-Halaman Web ---!
    public function index()
    {
        $gambarit = pkmIT::all();
        return view('pengguna.pkmit', compact('gambarit'));
    }

    //!--- Pengguna PKM Keuangan-Halaman Web ---!
    public function keuangan()
    {
        $keuangan = pkmkeuangan::all();
        return view('pengguna.pkmkeuangan', compact('keuangan'));
    }

    //!--- Pengguna PKM Umum-Halaman Web ---!
    public function umum()
    {
        $umum = pkmUmum::all();
        return view('pengguna.pkmumum', compact('umum'));
    }
    //!--- Pengguna PKM SDM-Halaman Web ---!
    public function sdm()
    {
        $sdm = pkmSDM::all();
        return view('pengguna.pkmsdm', compact('sdm'));
    }

    //!--- Pengguna PKM PBAU-Halaman Web ---!
    public function PBAU()
    {
        $PBAU = pkmpbau::all();
        return view('pengguna.pkmpbau', compact('PBAU'));
    }

    //!--- Pengguna PKM Pelkap-Halaman Web ---!
    public function Pelkap()
    {
        $Pelkap = pkmpelkap::all();
        return view('pengguna.pkmpelkap', compact('Pelkap'));
    }

    //!--- Pengguna PKM TPB-Halaman Web ---!
    public function TPB()
    {
        $TPB = pkmtpb::all();
        return view('pengguna.pkmtpb', compact('TPB'));
    }
    //!----------------------------Pengguna JOB-Action --------------------------------------------------------------!
    //!--- Pengguna JOB SDM-Action ---!
    public function penggunaSDM()
    {
        $penggunaSDM = jobsdm::all();
        return view('pengguna.jobsdm', compact('penggunaSDM'));
    }
    public function addpenggunaSDM(Request $request)
    {

        jobsdm::create([
            'User_sdm' => $request->User_sdm,
            'To_Do_sdm' => $request->To_Do_sdm,
            'Progress_sdm' => $request->Progress_sdm,
            'Done_sdm' => $request->Done_sdm,
            'KomentarManager_sdm' => $request->KomentarManager_sdm,
            'KomentarAsistenManajer_sdm' => $request->KomentarAsistenManajer_sdm,
        ]);
        return redirect('/userjobsdm');
    }

    public function updatepenggunaSDM(Request $request)
    {

        jobsdm::where('id', $request->id)
            ->update([
                'User_sdm' => $request->User_sdm,
                'To_Do_sdm' => $request->To_Do_sdm,
                'Progress_sdm' => $request->Progress_sdm,
                'Done_sdm' => $request->Done_sdm,
                'KomentarManager_sdm' => $request->KomentarManager_sdm,
                'KomentarAsistenManajer_sdm' => $request->KomentarAsistenManajer_sdm,

            ]);

        return redirect('/userjobsdm');
    }

    public function deletepenggunaSDM($id)
    {
        jobsdm::where('id', $id)
            ->delete();
        return redirect('/userjobsdm');
    }

    //!--- JOB Umum-Action ---!
    public function penggunaumum()
    {
        $penggunaumum = jobumum::all();
        return view('pengguna.jobumum', compact('penggunaumum'));
    }
    public function addpenggunaumum(Request $request)
    {

        jobumum::create([
            'User_Umum' => $request->User_Umum,
            'To_Do_Umum' => $request->To_Do_Umum,
            'Progress_Umum' => $request->Progress_Umum,
            'Done_Umum' => $request->Done_Umum,
            'KomentarManager_Umum' => $request->KomentarManager_Umum,
            'KomentarAsistenManajer_Umum' => $request->KomentarAsistenManajer_Umum,
        ]);
        return redirect('/usermumum');
    }

    public function updatepenggunaumum(Request $request)
    {

        jobumum::where('id', $request->id)
            ->update([
                'User_Umum' => $request->User_Umum,
                'To_Do_Umum' => $request->To_Do_Umum,
                'Progress_Umum' => $request->Progress_Umum,
                'Done_Umum' => $request->Done_Umum,
                'KomentarManager_Umum' => $request->KomentarManager_Umum,
                'KomentarAsistenManajer_Umum' => $request->KomentarAsistenManajer_Umum,

            ]);

        return redirect('/usermumum');
    }

    public function deletepenggunaumum($id)
    {
        jobumum::where('id', $id)
            ->delete();
        return redirect('/usermumum');
    }

    //!--- JOB IT-Action ---!
    public function penggunait()
    {
        $penggunait = jobIT::all();
        return view('pengguna.jobit', compact('penggunait'));
    }
    public function addpenggunait(Request $request)
    {

        jobIT::create([
            'User_IT' => $request->User_IT,
            'To_Do_IT' => $request->To_Do_IT,
            'Progress_IT' => $request->Progress_IT,
            'Done_IT' => $request->Done_IT,
            // 'KomentarManager_IT' => $request->KomentarManager_IT,
            // 'KomentarAsistenManajer_IT' => $request->KomentarAsistenManajer_IT,
        ]);
        return redirect('/userit');
    }

    public function updatepenggunait(Request $request)
    {

        jobIT::where('id', $request->id)
            ->update([
                'User_IT' => $request->User_IT,
                'To_Do_IT' => $request->To_Do_IT,
                'Progress_IT' => $request->Progress_IT,
                'Done_IT' => $request->Done_IT,
                'KomentarManager_IT' => $request->KomentarManager_IT,
                'KomentarAsistenManajer_IT' => $request->KomentarAsistenManajer_IT,
            ]);

        return redirect('/userit');
    }

    public function updatestatuspenggunait(Request $request)
    {

        jobIT::where('id', $request->id)
            ->update([
                'Done_IT' => $request->Done_IT,
            ]);

        return response()->json(['success' => 'Status Berhasil Diubah']);
    }

    public function deletepenggunait($id)
    {
        jobIT::where('id', $id)
            ->delete();
        return redirect('/userit');
    }

    //!--- JOB Pelkap-Action ---!
    public function penggunapelkap()
    {
        $penggunapelkap = jobpelkap::all();
        return view('pengguna.jobpelkap', compact('penggunapelkap'));
    }
    public function addpenggunapelkap(Request $request)
    {

        jobpelkap::create([
            'User_Pelkap' => $request->User_Pelkap,
            'To_Do_Pelkap' => $request->To_Do_Pelkap,
            'Progress_Pelkap' => $request->Progress_Pelkap,
            'Done_Pelkap' => $request->Done_Pelkap,
            'KomentarManager_Pelkap' => $request->KomentarManager_Pelkap,
            'KomentarAsistenManajer_Pelkap' => $request->KomentarAsistenManajer_Pelkap,
        ]);
        return redirect('/userpelkap');
    }

    public function updatepenggunapelkap(Request $request)
    {

        jobpelkap::where('id', $request->id)
            ->update([
                'User_Pelkap' => $request->User_Pelkap,
                'To_Do_Pelkap' => $request->To_Do_Pelkap,
                'Progress_Pelkap' => $request->Progress_Pelkap,
                'Done_Pelkap' => $request->Done_Pelkap,
                'KomentarManager_Pelkap' => $request->KomentarManager_Pelkap,
                'KomentarAsistenManajer_Pelkap' => $request->KomentarAsistenManajer_Pelkap,
            ]);

        return redirect('/userpelkap');
    }

    public function deletepenggunapelkap($id)
    {
        jobpelkap::where('id', $id)
            ->delete();
        return redirect('/userpelkap');
    }

    //!--- JOB PBAU-Action ---!
    public function penggunapbau()
    {
        $penggunapbau = jobpbau::all();
        return view('pengguna.jobpbau', compact('penggunapbau'));
    }
    public function addpenggunapbau(Request $request)
    {

        jobpbau::create([
            'User_Pbau' => $request->User_Pbau,
            'To_Do_Pbau' => $request->To_Do_Pbau,
            'Progress_Pbau' => $request->Progress_Pbau,
            'Done_Pbau' => $request->Done_Pbau,
            'KomentarManager_Pbau' => $request->KomentarManager_Pbau,
            'KomentarAsistenManajer_Pbau' => $request->KomentarAsistenManajer_Pbau,
        ]);
        return redirect('/userpbau');
    }

    public function updatepenggunapbau(Request $request)
    {

        jobpbau::where('id', $request->id)
            ->update([
                'User_Pbau' => $request->User_Pbau,
                'To_Do_Pbau' => $request->To_Do_Pbau,
                'Progress_Pbau' => $request->Progress_Pbau,
                'Done_Pbau' => $request->Done_Pbau,
                'KomentarManager_Pbau' => $request->KomentarManager_Pbau,
                'KomentarAsistenManajer_Pbau' => $request->KomentarAsistenManajer_Pbau,
            ]);

        return redirect('/userpbau');
    }

    public function deletepenggunapbau($id)
    {
        jobpbau::where('id', $id)
            ->delete();
        return redirect('/userpbau');
    }

    //!--- JOB TPB-Action ---!
    public function penggunatpb()
    {
        $penggunatpb = jobtpb::all();
        return view('pengguna.jobtpb', compact('penggunatpb'));
    }
    public function addpenggunatpb(Request $request)
    {

        jobtpb::create([
            'User_Tpb' => $request->User_Tpb,
            'To_Do_Tpb' => $request->To_Do_Tpb,
            'Progress_Tpb' => $request->Progress_Tpb,
            'Done_Tpb' => $request->Done_Tpb,
            'KomentarManager_Tpb' => $request->KomentarManager_Tpb,
            'KomentarAsistenManajer_Tpb' => $request->KomentarAsistenManajer_Tpb,
        ]);
        return redirect('/usertpb');
    }

    public function updatepenggunatpb(Request $request)
    {

        jobtpb::where('id', $request->id)
            ->update([
                'User_Tpb' => $request->User_Tpb,
                'To_Do_Tpb' => $request->To_Do_Tpb,
                'Progress_Tpb' => $request->Progress_Tpb,
                'Done_Tpb' => $request->Done_Tpb,
                'KomentarManager_Tpb' => $request->KomentarManager_Tpb,
                'KomentarAsistenManajer_Tpb' => $request->KomentarAsistenManajer_Tpb,
            ]);

        return redirect('/usertpb');
    }

    public function deletepenggunatpb($id)
    {
        jobtpb::where('id', $id)
            ->delete();
        return redirect('/usertpb');
    }

    //!--- JOB TPB-Action ---!
    public function penggunakeuangan()
    {
        $penggunakeuangan = jobkeuangan::all();
        return view('pengguna.jobkeuangan', compact('penggunakeuangan'));
    }
    public function addpenggunakeuangan(Request $request)
    {

        jobkeuangan::create([
            'User_Keuangan' => $request->User_Keuangan,
            'To_Do_Keuangan' => $request->To_Do_Keuangan,
            'Progress_Keuangan' => $request->Progress_Keuangan,
            'Done_Keuangan' => $request->Done_Keuangan,
            'KomentarManager_Keuangan' => $request->KomentarManager_Keuangan,
            'KomentarAsistenManajer_Keuangan' => $request->KomentarAsistenManajer_Keuangan,
        ]);
        return redirect('/userkeuangan');
    }

    public function updatepenggunakeuangan(Request $request)
    {

        jobkeuangan::where('id', $request->id)
            ->update([
                'User_Keuangan' => $request->User_Keuangan,
                'To_Do_Keuangan' => $request->To_Do_Keuangan,
                'Progress_Keuangan' => $request->Progress_Keuangan,
                'Done_Keuangan' => $request->Done_Keuangan,
                'KomentarManager_Keuangan' => $request->KomentarManager_Keuangan,
                'KomentarAsistenManajer_Keuangan' => $request->KomentarAsistenManajer_Keuangan,
            ]);

        return redirect('/userkeuangan');
    }

    public function deletepenggunakeuangan($id)
    {
        jobkeuangan::where('id', $id)
            ->delete();
        return redirect('/userkeuangan');
    }

    //!----------------------------ADMIN PKM-Action --------------------------------------------------------------!
    //!--- PKM Umum-Action ---!
    public function pkmumum()
    {
        $pkmumum = pkmUmum::all();
        return view('admin.pkmumum', compact('pkmumum'));
    }
    public function addpkmumum(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_umum' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmUmum::create([
            'keterangan_umum' => $request->keterangan_umum,
            'gambar_umum' => $request->file('gambar_umum')->getClientOriginalName()
        ]);
        $request->file('gambar_umum')->storeAs('public/images', $request->file('gambar_umum')->getClientOriginalName());
        return redirect('/pkmumum');
    }

    public function updatepkmumum(Request $request)
    {

        if ($request->gambar_umum == '') {
            pkmUmum::where('id', $request->id)
                ->update([
                    'keterangan_umum' => $request->keterangan_umum,

                ]);
        } else {
            pkmUmum::where('id', $request->id)
                ->update([
                    'keterangan_umum' => $request->keterangan_umum,
                    'gambar_umum' => $request->file('gambar_umum')->getClientOriginalName()
                ]);
            $request->file('gambar_umum')->storeAs('public/images', $request->file('gambar_umum')->getClientOriginalName());
        }
        return redirect('/pkmumum');
    }

    public function deletepkmumum($id)
    {
        pkmUmum::where('id', $id)
            ->delete();
        return redirect('/pkmumum');
    }

    //!--- PKM Keuangan-Action ---!
    public function pkmKeuangan()
    {
        $pkmKeuangan = pkmkeuangan::all();
        return view('admin.pkmkeuangan', compact('pkmKeuangan'));
    }
    public function addpkmKeuangan(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_keuangan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmkeuangan::create([
            'keterangan_keuangan' => $request->keterangan_keuangan,
            'gambar_keuangan' => $request->file('gambar_keuangan')->getClientOriginalName()
        ]);
        $request->file('gambar_keuangan')->storeAs('public/images', $request->file('gambar_keuangan')->getClientOriginalName());
        return redirect('/pkmkeuangan');
    }

    public function updatepkmKeuangan(Request $request)
    {

        if ($request->gambar_keuangan == '') {
            pkmkeuangan::where('id', $request->id)
                ->update([
                    'keterangan_keuangan' => $request->keterangan_keuangan,

                ]);
        } else {
            pkmkeuangan::where('id', $request->id)
                ->update([
                    'keterangan_keuangan' => $request->keterangan_keuangan,
                    'gambar_keuangan' => $request->file('gambar_keuangan')->getClientOriginalName()
                ]);
            $request->file('gambar_keuangan')->storeAs('public/images', $request->file('gambar_keuangan')->getClientOriginalName());
        }
        return redirect('/pkmkeuangan');
    }

    public function deletepkmKeuangan($id)
    {
        pkmkeuangan::where('id', $id)
            ->delete();
        return redirect('/pkmkeuangan');
    }

    //!--- PKM PBAU-Action ---!
    public function pkmpbau()
    {
        $pkmpbau = pkmpbau::all();
        return view('admin.pkmpbau', compact('pkmpbau'));
    }
    public function addpkmPBAU(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_pbau' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmpbau::create([
            'keterangan_pbau' => $request->keterangan_pbau,
            'gambar_pbau' => $request->file('gambar_pbau')->getClientOriginalName()
        ]);

        $request->file('gambar_pbau')->storeAs('public/images', $request->file('gambar_pbau')->getClientOriginalName());
        return redirect('/pkmpbau');
    }

    public function updatepkmPBAU(Request $request)
    {

        if ($request->gambar_pbau == '') {
            pkmpbau::where('id', $request->id)
                ->update([
                    'keterangan_pbau' => $request->keterangan_pbau,

                ]);
        } else {
            pkmpbau::where('id', $request->id)
                ->update([
                    'keterangan_pbau' => $request->keterangan_pbau,
                    'gambar_pbau' => $request->file('gambar_pbau')->getClientOriginalName()
                ]);
            $request->file('gambar_pbau')->storeAs('public/images', $request->file('gambar_pbau')->getClientOriginalName());
        }
        return redirect('/pkmpbau');
    }

    public function deletepkmPBAU($id)
    {
        pkmpbau::where('id', $id)
            ->delete();
        return redirect('/pkmpbau');
    }

    //!--- PKM TPB-Action ---!
    public function pkmTPB()
    {
        $pkmTPB = pkmtpb::all();
        return view('admin.pkmtpb', compact('pkmTPB'));
    }
    public function addpkmTPB(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_tpb' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmtpb::create([
            'keterangan_tpb' => $request->keterangan_tpb,
            'gambar_tpb' => $request->file('gambar_tpb')->getClientOriginalName()
        ]);
        $request->file('gambar_tpb')->storeAs('public/images', $request->file('gambar_tpb')->getClientOriginalName());
        return redirect('/pkmtpb');
    }

    public function updatepkmTPB(Request $request)
    {

        if ($request->gambar_tpb == '') {
            pkmtpb::where('id', $request->id)
                ->update([
                    'keterangan_tpb' => $request->keterangan_tpb,

                ]);
        } else {
            pkmtpb::where('id', $request->id)
                ->update([
                    'keterangan_tpb' => $request->keterangan_tpb,
                    'gambar_tpb' => $request->file('gambar_tpb')->getClientOriginalName()
                ]);
            $request->file('gambar_tpb')->storeAs('public/images', $request->file('gambar_tpb')->getClientOriginalName());
        }
        return redirect('/pkmtpb');
    }

    public function deletepkmTPB($id)
    {
        pkmtpb::where('id', $id)
            ->delete();
        return redirect('/pkmtpb');
    }

    //!--- PKM PELKAP-Action ---!
    public function pkmPelkap()
    {
        $pkmPelkap = pkmpelkap::all();
        return view('admin.pkmpelkap', compact('pkmPelkap'));
    }
    public function addpkmPelkap(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_pelkap' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmpelkap::create([
            'keterangan_pelkap' => $request->keterangan_pelkap,
            'gambar_pelkap' => $request->file('gambar_pelkap')->getClientOriginalName()
        ]);
        $request->file('gambar_pelkap')->storeAs('public/images', $request->file('gambar_pelkap')->getClientOriginalName());
        return redirect('/pkmpelkap');
    }

    public function updatepkmPelkap(Request $request)
    {

        if ($request->gambar_pelkap == '') {
            pkmpelkap::where('id', $request->id)
                ->update([
                    'keterangan_pelkap' => $request->keterangan_pelkap,

                ]);
        } else {
            pkmpelkap::where('id', $request->id)
                ->update([
                    'keterangan_pelkap' => $request->keterangan_pelkap,
                    'gambar_pelkap' => $request->file('gambar_pelkap')->getClientOriginalName()
                ]);
            $request->file('gambar_pelkap')->storeAs('public/images', $request->file('gambar_pelkap')->getClientOriginalName());
        }
        return redirect('/pkmpelkap');
    }

    public function deletepkmPelkap($id)
    {
        pkmpelkap::where('id', $id)
            ->delete();
        return redirect('/pkmpelkap');
    }

    //!--- PKM SDM-Action ---!
    public function pkmsdm()
    {
        $pkmsdm = pkmSDM::all();
        return view('admin.pkmsdm', compact('pkmsdm'));
    }
    public function addpkmsdm(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_sdm' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmSDM::create([
            'keterangan_sdm' => $request->keterangan_sdm,
            'gambar_sdm' => $request->file('gambar_sdm')->getClientOriginalName()
        ]);
        $request->file('gambar_sdm')->storeAs('public/images', $request->file('gambar_sdm')->getClientOriginalName());
        return redirect('/pkmsdm');
    }

    public function updatepkmsdm(Request $request)
    {

        if ($request->gambar_sdm == '') {
            pkmSDM::where('id', $request->id)
                ->update([
                    'keterangan_sdm' => $request->keterangan_sdm,

                ]);
        } else {
            pkmSDM::where('id', $request->id)
                ->update([
                    'keterangan_sdm' => $request->keterangan_sdm,
                    'gambar_sdm' => $request->file('gambar_sdm')->getClientOriginalName()
                ]);
            $request->file('gambar_sdm')->storeAs('public/images', $request->file('gambar_sdm')->getClientOriginalName());
        }
        return redirect('/pkmsdm');
    }

    public function deletepkmsdm($id)
    {
        pkmSDM::where('id', $id)
            ->delete();
        return redirect('/pkmsdm');
    }


    //!--- PKM IT-Action ---!
    public function pkmIT()
    {
        $pkmIT = pkmIT::all();
        return view('admin.pkmit', compact('pkmIT'));
    }
    public function addpkmIT(Request $request)
    {

        $this->validate(
            $request,
            ['gambar_IT' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        pkmIT::create([
            'keterangan_IT' => $request->keterangan_IT,
            'gambar_IT' => $request->file('gambar_IT')->getClientOriginalName()
        ]);
        $request->file('gambar_IT')->storeAs('public/images', $request->file('gambar_IT')->getClientOriginalName());
        return redirect('/pkmit');
    }

    public function updatepkmIT(Request $request)
    {

        if ($request->gambar_IT == '') {
            pkmIT::where('id', $request->id)
                ->update([
                    'keterangan_IT' => $request->keterangan_IT,

                ]);
        } else {
            pkmIT::where('id', $request->id)
                ->update([
                    'keterangan_IT' => $request->keterangan_IT,
                    'gambar_IT' => $request->file('gambar_IT')->getClientOriginalName()
                ]);
            $request->file('gambar_IT')->storeAs('public/images', $request->file('gambar_IT')->getClientOriginalName());
        }
        return redirect('/pkmit');
    }

    public function deletepkmIT($id)
    {
        pkmIT::where('id', $id)
            ->delete();
        return redirect('/pkmit');
    }

    //!--------------------------------- ADMIN JOB-Action -------------------------------------!

    //!--- JOB SDM-Action ---!
    public function jobSDM()
    {
        $jobSDM = jobsdm::all();
        return view('admin.jobsdm', compact('jobSDM'));
    }
    public function addjobSDM(Request $request)
    {

        jobsdm::create([
            'User_sdm' => $request->User_sdm,
            'To_Do_sdm' => $request->To_Do_sdm,
            'Progress_sdm' => $request->Progress_sdm,
            'Done_sdm' => $request->Done_sdm,
            'KomentarManager_sdm' => $request->KomentarManager_sdm,
            'KomentarAsistenManajer_sdm' => $request->KomentarAsistenManajer_sdm,
        ]);
        return redirect('/adminsdm');
    }

    public function updatejobSDM(Request $request)
    {

        jobsdm::where('id', $request->id)
            ->update([
                'User_sdm' => $request->User_sdm,
                'To_Do_sdm' => $request->To_Do_sdm,
                'Progress_sdm' => $request->Progress_sdm,
                'Done_sdm' => $request->Done_sdm,
                'KomentarManager_sdm' => $request->KomentarManager_sdm,
                'KomentarAsistenManajer_sdm' => $request->KomentarAsistenManajer_sdm,

            ]);

        return redirect('/adminsdm');
    }

    public function deletejobSDM($id)
    {
        jobsdm::where('id', $id)
            ->delete();
        return redirect('/adminsdm');
    }

    //!--- JOB Umum-Action ---!
    public function jobumum()
    {
        $jobumum = jobumum::all();
        return view('admin.jobumum', compact('jobumum'));
    }
    public function addjobumum(Request $request)
    {

        jobumum::create([
            'User_Umum' => $request->User_Umum,
            'To_Do_Umum' => $request->To_Do_Umum,
            'Progress_Umum' => $request->Progress_Umum,
            'Done_Umum' => $request->Done_Umum,
            'KomentarManager_Umum' => $request->KomentarManager_Umum,
            'KomentarAsistenManajer_Umum' => $request->KomentarAsistenManajer_Umum,
        ]);
        return redirect('/adminumum');
    }

    public function updatejobumum(Request $request)
    {

        jobumum::where('id', $request->id)
            ->update([
                'User_Umum' => $request->User_Umum,
                'To_Do_Umum' => $request->To_Do_Umum,
                'Progress_Umum' => $request->Progress_Umum,
                'Done_Umum' => $request->Done_Umum,
                'KomentarManager_Umum' => $request->KomentarManager_Umum,
                'KomentarAsistenManajer_Umum' => $request->KomentarAsistenManajer_Umum,

            ]);

        return redirect('/adminumum');
    }

    public function deletejobumum($id)
    {
        jobumum::where('id', $id)
            ->delete();
        return redirect('/adminumum');
    }

    //!--- JOB IT-Action ---!
    public function jobit()
    {
        $jobit = jobIT::all();
        return view('admin.jobit', compact('jobit'));
    }
    public function addjobit(Request $request)
    {

        jobIT::create([
            'User_IT' => $request->User_IT,
            'To_Do_IT' => $request->To_Do_IT,
            'Progress_IT' => $request->Progress_IT,
            'Done_IT' => $request->Done_IT,
            'KomentarManager_IT' => $request->KomentarManager_IT,
            'KomentarAsistenManajer_IT' => $request->KomentarAsistenManajer_IT,
        ]);
        return redirect('/adminit');
    }

    public function updatejobit(Request $request)
    {

        jobIT::where('id', $request->id)
            ->update([
                'User_IT' => $request->User_IT,
                'To_Do_IT' => $request->To_Do_IT,
                'Progress_IT' => $request->Progress_IT,
                'Done_IT' => $request->Done_IT,
                'KomentarManager_IT' => $request->KomentarManager_IT,
                'KomentarAsistenManajer_IT' => $request->KomentarAsistenManajer_IT,
            ]);

        return redirect('/adminit');
    }

    public function deletejobit($id)
    {
        jobIT::where('id', $id)
            ->delete();
        return redirect('/adminit');
    }

    //!--- JOB Pelkap-Action ---!
    public function jobPelkap()
    {
        $jobPelkap = jobpelkap::all();
        return view('admin.jobpelkap', compact('jobPelkap'));
    }
    public function addjobPelkap(Request $request)
    {

        jobpelkap::create([
            'User_Pelkap' => $request->User_Pelkap,
            'To_Do_Pelkap' => $request->To_Do_Pelkap,
            'Progress_Pelkap' => $request->Progress_Pelkap,
            'Done_Pelkap' => $request->Done_Pelkap,
            'KomentarManager_Pelkap' => $request->KomentarManager_Pelkap,
            'KomentarAsistenManajer_Pelkap' => $request->KomentarAsistenManajer_Pelkap,
        ]);
        return redirect('/adminpelkap');
    }

    public function updatejobPelkap(Request $request)
    {

        jobpelkap::where('id', $request->id)
            ->update([
                'User_Pelkap' => $request->User_Pelkap,
                'To_Do_Pelkap' => $request->To_Do_Pelkap,
                'Progress_Pelkap' => $request->Progress_Pelkap,
                'Done_Pelkap' => $request->Done_Pelkap,
                'KomentarManager_Pelkap' => $request->KomentarManager_Pelkap,
                'KomentarAsistenManajer_Pelkap' => $request->KomentarAsistenManajer_Pelkap,
            ]);

        return redirect('/adminpelkap');
    }

    public function deletejobPelkap($id)
    {
        jobpelkap::where('id', $id)
            ->delete();
        return redirect('/adminpelkap');
    }

    //!--- JOB PBAU-Action ---!
    public function jobpbau()
    {
        $jobpbau = jobpbau::all();
        return view('admin.jobpbau', compact('jobpbau'));
    }
    public function addjobpbau(Request $request)
    {

        jobpbau::create([
            'User_Pbau' => $request->User_Pbau,
            'To_Do_Pbau' => $request->To_Do_Pbau,
            'Progress_Pbau' => $request->Progress_Pbau,
            'Done_Pbau' => $request->Done_Pbau,
            'KomentarManager_Pbau' => $request->KomentarManager_Pbau,
            'KomentarAsistenManajer_Pbau' => $request->KomentarAsistenManajer_Pbau,
        ]);
        return redirect('/adminpbau');
    }

    public function updatejobpbau(Request $request)
    {

        jobpbau::where('id', $request->id)
            ->update([
                'User_Pbau' => $request->User_Pbau,
                'To_Do_Pbau' => $request->To_Do_Pbau,
                'Progress_Pbau' => $request->Progress_Pbau,
                'Done_Pbau' => $request->Done_Pbau,
                'KomentarManager_Pbau' => $request->KomentarManager_Pbau,
                'KomentarAsistenManajer_Pbau' => $request->KomentarAsistenManajer_Pbau,
            ]);

        return redirect('/adminpbau');
    }

    public function deletejobpbau($id)
    {
        jobpbau::where('id', $id)
            ->delete();
        return redirect('/adminpbau');
    }

    //!--- JOB TPB-Action ---!
    public function jobtpb()
    {
        $jobtpb = jobtpb::all();
        return view('admin.jobtpb', compact('jobtpb'));
    }
    public function addjobtpb(Request $request)
    {

        jobtpb::create([
            'User_Tpb' => $request->User_Tpb,
            'To_Do_Tpb' => $request->To_Do_Tpb,
            'Progress_Tpb' => $request->Progress_Tpb,
            'Done_Tpb' => $request->Done_Tpb,
            'KomentarManager_Tpb' => $request->KomentarManager_Tpb,
            'KomentarAsistenManajer_Tpb' => $request->KomentarAsistenManajer_Tpb,
        ]);
        return redirect('/admintpb');
    }

    public function updatejobtpb(Request $request)
    {

        jobtpb::where('id', $request->id)
            ->update([
                'User_Tpb' => $request->User_Tpb,
                'To_Do_Tpb' => $request->To_Do_Tpb,
                'Progress_Tpb' => $request->Progress_Tpb,
                'Done_Tpb' => $request->Done_Tpb,
                'KomentarManager_Tpb' => $request->KomentarManager_Tpb,
                'KomentarAsistenManajer_Tpb' => $request->KomentarAsistenManajer_Tpb,
            ]);

        return redirect('/admintpb');
    }

    public function deletejobtpb($id)
    {
        jobtpb::where('id', $id)
            ->delete();
        return redirect('/admintpb');
    }

    //!--- JOB TPB-Action ---!
    public function jobkeuangan()
    {
        $jobkeuangan = jobkeuangan::all();
        return view('admin.jobkeuangan', compact('jobkeuangan'));
    }
    public function addjobkeuangan(Request $request)
    {

        jobkeuangan::create([
            'User_Keuangan' => $request->User_Keuangan,
            'To_Do_Keuangan' => $request->To_Do_Keuangan,
            'Progress_Keuangan' => $request->Progress_Keuangan,
            'Done_Keuangan' => $request->Done_Keuangan,
            'KomentarManager_Keuangan' => $request->KomentarManager_Keuangan,
            'KomentarAsistenManajer_Keuangan' => $request->KomentarAsistenManajer_Keuangan,
        ]);
        return redirect('/adminkeuangan');
    }

    public function updatejobkeuangan(Request $request)
    {

        jobkeuangan::where('id', $request->id)
            ->update([
                'User_Keuangan' => $request->User_Keuangan,
                'To_Do_Keuangan' => $request->To_Do_Keuangan,
                'Progress_Keuangan' => $request->Progress_Keuangan,
                'Done_Keuangan' => $request->Done_Keuangan,
                'KomentarManager_Keuangan' => $request->KomentarManager_Keuangan,
                'KomentarAsistenManajer_Keuangan' => $request->KomentarAsistenManajer_Keuangan,
            ]);

        return redirect('/adminkeuangan');
    }

    public function deletejobkeuangan($id)
    {
        jobkeuangan::where('id', $id)
            ->delete();
        return redirect('/adminkeuangan');
    }
}
