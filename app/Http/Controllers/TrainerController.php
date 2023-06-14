<?php

namespace App\Http\Controllers;

use App\Models\ApplyForCompaign;
use App\Models\Users;
use App\Models\Registration;

use App\Models\CompaignRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    //
    function index()
    {
        $obj = Registration::where('trainer_id', auth()->user()->id)->count();
        return view('trainer.pages.dashboard.dashboard', compact('obj'));
    }

    public function user_list($id)
    {
        $now = Carbon::now();
        if ($id == '1') {
            $obj = Registration::where('trainer_id', auth()->user()->id)->with('trainees')->get();

            $obj->each(function ($registration) {
                $registration->seen = 1;
                $registration->save();
            });
        }

        $obj = Registration::where('trainer_id', auth()->user()->id)->where('end_date', '>', $now)->with('trainees')->get();
        // dd($obj);

        return view('trainer.pages.user.index', compact('obj'));
    }

    public function user_detail(Request $req)
    {
        $obj = Users::whereId($req->id)->first();
        echo view('trainer.pages.user.detail', compact('obj'));
    }

    public function updateStatus($id, $status = null)
    {
        // $check = Registration::where('trainee_id', $id)->first();

        $check = ApplyForCompaign::where('trainee_id', $id)->first();

        if ($check == null) {
            $check = Registration::where('trainee_id', $id)->first();
        }


        if ($check->status != "1") {
            $check->update([
                'status' => '1',
            ]);
        } else {
            $check->update([
                'status' => '0  ',
            ]);
        }
        if ($check->status == null) {
            $check->update([
                'status' => $status,
            ]);
        }

        return back();
    }

    // completed trainees
    public function completed_trainee_list()
    {

        $obj = Registration::where('trainer_id', auth()->user()->id)->with('trainees')->get();
        return view('trainer.pages.completed-trainees.index', compact('obj'));
    }

    public function completed_trainee_detail(Request $req)
    {
        $obj = Users::whereId($req->id)->first();
        echo view('trainer.pages.user.detail', compact('obj'));
    }

    // compaign trainees
    public function compaign_trainee_list($id)
    {

        if ($id == '1') {
            $obj = ApplyForCompaign::where('trainer_id', auth()->user()->id)->with('trainees')->get();

            $obj->each(function ($registration) {
                $registration->seen = 1;
                $registration->save();
            });
        }

        $obj = ApplyForCompaign::where('trainer_id', auth()->user()->id)->with('trainees')->get();
        $checkCompaignRegistration = CompaignRegistration::where('trainer_id', auth()->user()->id)->first();
        if ($checkCompaignRegistration) {
            $compaignRegistered = 1;
            return view('trainer.pages.compaign-trainees.index', get_defined_vars());
        } else {
            $compaignRegistered = 0;
            return view('trainer.pages.compaign-trainees.index', get_defined_vars());
        }
        // dd($checkCompaignRegistration);

    }

    public function compaign_trainee_detail(Request $req)
    {
        $obj = Users::whereId($req->id)->first();
        echo view('trainer.pages.user.detail', compact('obj'));
    }
}
