<?php

namespace App\Http\Controllers;

use App\Models\ApplyForCompaign;
use App\Models\CompaignRegistration;
use App\Models\Location;
use App\Models\Rating;
use App\Models\Registration;
use App\Models\Reviews;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Stripe\Review;
use App;
use App\Models\TrainerReview;

class UserFrontendController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function langIndex()
    {
        return view('lang');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function langChange(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }



    public function index()
    {
        return view('user.pages.index');
    }
    public function privacy_policy()
    {
        return view('user.pages.privacy-policy');
    }
    public function terms_service()
    {
        return view('user.pages.terms-service');
    }

    public function welcome_homepage()
    {
        $user = auth()->user();
        $toasterValue = session()->get('toasterValue');

        // Check if toasterValue is already set in the session
        if (!$toasterValue) {
            $toasterValue = 1;
            session()->put('toasterValue', $toasterValue);
        } else {
            // ToasterValue is already set, so set it to 0 to prevent displaying the toaster message again
            $toasterValue = 0;
        }
        return view('user.pages.welcomeHopePage', get_defined_vars());
    }

    public function login_page()
    {
        return view('user.auth.pages.login');
    }


    public function register_page()
    {
        return view('user.auth.pages.register');
    }
    public function trainee_register_page()
    {
        return view('user.auth.pages.traineeRegister');
    }
    public function trainer_register_page()
    {
        return view('user.auth.pages.trainerRegister');
    }

    // Forgot password
    public function forgor_password_page()
    {
        return view('user.auth.pages.forgotPassword');
    }

    // Profile pages
    public function trainer_profile()
    {
        $trainer = Users::where('id', auth()->user()->id)->first();
        $rating = Rating::where('trainee_id', auth()->user()->id)->where('trainer_id', $trainer->id)->first();
        $request = Registration::where('trainer_id', auth()->user()->id)->where('seen', null)->with('trainees')->get();
        $compaignRegistration = CompaignRegistration::where('trainer_id', auth()->user()->id)->first();
        $compaignRequests = ApplyForCompaign::where('trainer_id', auth()->user()->id)->where('seen',  null)->get()->count();
        // dd($request);

        // $checkRegistrationCount = count($compaignRegistration);

        $trainerLocation = Location::where('trainer_id', auth()->user()->id)->first();
        // dd($checkRegistrationCount);
        if ($trainerLocation  != null) {
            $latitude = $trainerLocation->latitude;
            $longitude = $trainerLocation->longitude;
        }
        $countRequest = count($request);
        $totalNotification = $countRequest + $compaignRequests;

        return view('user.pages.trainerProfile', get_defined_vars());
    }

    public function trainee_profile()
    {
        $auth = auth()->user()->id;
        $trainee = Users::where('id', auth()->user()->id)->first();

        $now = Carbon::now();
        $nowFormatted = $now->format('Y-m-d');
        $checkCompaign = Registration::where('trainee_id', auth()->user()->id)->where('end_date', '<', $nowFormatted)->get();
        $registrationStatus = Registration::where('trainee_id', $auth)->first();
        // dd($checkCompaign);
        $allReviews = Reviews::where('trainee_id', auth()->user()->id)->get();

        $compaign = [];
        foreach ($checkCompaign as $compaignTrainer) {

            $checkNotification = Users::where('id', $compaignTrainer->trainer_id)->where('compaign', 1)->get();
            $compaign[] = $checkNotification;
            // dd($checkNotification);
        }

        $count = count($compaign);

        $task = Registration::where('trainee_id', $trainee->id)->first();
        if (isset($task) && !empty($task)) {
            $startDate = Carbon::parse($task->created_at);
            $endDate = $startDate->copy()->addMonths(3);
            $elapsedDays = $startDate->diffInDays(Carbon::now());
            $totalDays = $startDate->diffInDays($endDate);
            $progress = round(($elapsedDays / $totalDays) * 100, 2);
            // dd($startDate);
        }
        // dd($endDate);


        return view('user.pages.traineeProfile', get_defined_vars());
    }

    public function view_trainee_profile($id)
    {
        $auth = $id;
        $trainee = Users::where('id', $id)->first();

        $now = Carbon::now();

        $nowFormatted = $now->format('Y-m-d');
        $checkCompaign = Registration::where('trainee_id', auth()->user()->id)->where('end_date', '<', $nowFormatted)->get();
        $registrationStatus = Registration::where('trainee_id', $auth)->first();

        // dd($endDateFormat);
        $allReviews = Reviews::where('trainee_id', $id)->get();

        $compaign = [];
        foreach ($checkCompaign as $compaignTrainer) {

            $checkNotification = Users::where('id', $compaignTrainer->trainer_id)->get();
            $compaign[] = $checkNotification;
            // dd($checkNotification);
        }

        $count = count($compaign);
        $task = Registration::where('trainee_id', $trainee->id)->first();
        if (isset($task) && !empty($task)) {
            $startDate = Carbon::parse($task->created_at);
            $endDate = $startDate->copy()->addMonths(3);
            $elapsedDays = $startDate->diffInDays(Carbon::now());
            $totalDays = $startDate->diffInDays($endDate);
            $progress = round(($elapsedDays / $totalDays) * 100, 2);
        }
        // dd($endDate);


        return view('user.pages.traineeProfile', get_defined_vars());
    }

    public function edit_image(Request $request)
    {

        $id = Auth()->user()->id;
        if ($id) {

            if ($request->file('image')) {
                $imageName = time() . rand(9, 999) . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/user'), $imageName);
                Users::whereId($id)->update([
                    'image' => $imageName,
                ]);
                return response()->json([
                    'status' => 200,
                    'image' => $request->file(),
                ]);
            } else {

                return response()->json([
                    "status" => 404,
                    'message' => 'Image not upload',
                ]);
            }
        }
    }

    // All trainers
    public function all_category()
    {

        return view('user.pages.allCategory', get_defined_vars());
    }

    public function all_trainers($id)
    {
        $role = $id;
        $trainersCategory = Users::where('trainer_role', $id)->with('ratings', 'reviews')->get();

        foreach ($trainersCategory as $trainer) {
            $numReviews = $trainer->reviews->count();
        }
        // $rating = Rating::where('trainer_id', $trainersCategory->id)->first();
        // dd($trainersCategory->reviews);
        return view('user.pages.allTrainers', get_defined_vars());
    }

    public function trainer_review_detail(Request $req)
    {
        $obj = TrainerReview::whereId($req->id)->first();
        echo view('user.pages.reviews.detail', compact('obj'));
    }

    public function search_trainer(Request $request)
    {


        $role = $request->input('role');

        $searchTrainer = $request->input('search_trainer');
        $trainerName = $name = explode(' ', $searchTrainer);
        // dd($trainerName);
        $query = Users::query();

        if ($searchTrainer) {
            // dd('ok');
            if (count($trainerName) >= 2) {
                $query->where('trainer_role', $role)
                    ->where('first_name', 'like', '%' . $trainerName[0] . '%')
                    ->orWhere('last_name', 'like', '%' . $trainerName[1] . '%');
            } else {
                $query->where('trainer_role',  $role)->where('first_name', 'like', '%' . $searchTrainer . '%')->orWhere('last_name', 'like', '%' . $searchTrainer . '%');
            }
        } else {
            dd('ok1');

            $query->where('trainer_role',  $role)->where('first_name', 'like', '%' . $searchTrainer . '%')->orWhere('last_name', 'like', '%' . $searchTrainer . '%');
        }

        $trainersCategory = $query->where('trainer_role', $role)->get();

        return view('user.pages.allTrainers', get_defined_vars());
    }

    public function search_category(Request $request)
    {
        $categorySearch = $request->search_trainer;
        // dd($categorySearch);
        return view('user.pages.allCategory', get_defined_vars());
    }

    public function trainer_category_profile($id)
    {

        $trainer = Users::where('id', $id)->first();
        $rating = Rating::where('trainee_id', auth()->user()->id)->where('trainer_id', $trainer->id)->first();
        if (auth()->user()) {
            $checkregistration = Registration::where('trainer_id', $trainer->id)->where('trainee_id', auth()->user()->id)->first();
        }

        $trainerLocation = Location::where('trainer_id', $trainer->id)->first();
        if ($trainerLocation) {
            $latitude = $trainerLocation->latitude;
            $longitude = $trainerLocation->longitude;
        }

        $now = Carbon::now();
        $formattedDate = $now->format('Y-m-d H:i:s');
        // dd($formattedDate);


        return view('user.pages.trainerCategoryProfile', get_defined_vars());
    }

    public function trainer_change_status(Request $request)
    {
        // dd($request);
        Log::info($request->all());
        $user = Users::find($request->user_id);
        $user->availability = $request->status;
        $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }

    public function trainer_compaign(Request $request)
    {
        // dd($request);

        Log::info($request->all());
        $user = Users::find($request->user_id);
        $user->compaign = $request->status;
        $user->save();

        return response()->json(['success' => 'Compaign started']);
    }

    public function course_type(Request $request)
    {
        // dd($request);
        Log::info($request->all());
        $user = Users::find($request->user_id);
        $user->online_course = $request->status;
        $user->save();

        return response()->json(['success' => 'Online course.']);
    }

    public function trainee_apply_compaign($id)
    {

        $checkApplied = ApplyForCompaign::where('trainee_id', auth()->user()->id)->where('trainer_id', $id)->first();

        if ($checkApplied) {
            return redirect()->back()->with('message', 'Already registered for compaign!');
        } else {
            ApplyForCompaign::create([

                'trainer_id' => $id,
                'trainee_id' => auth()->user()->id,
                'status' => 0,
            ]);
            return redirect()->back()->with('message', 'Applied! Trainer will contact you!');
        }
    }

    public function rating(Request $request)
    {
        $trainerId = $request->input('trainer_id');
        $rating = Rating::where('trainee_id', auth()->user()->id)->where('trainer_id', $trainerId)->first();
        if ($rating) {
            $rating->update([
                'rating' => $request['rating']
            ]);
        } else {
            Rating::create([
                'rating' => $request['rating'],
                'trainer_id' => $request->input('trainer_id'),
                'trainee_id' => auth()->user()->id,
            ]);
        }
    }

    public function register_course(Request $request)
    {
        $auth = auth()->user()->id;
        $trainerId = $request->input('trainer_id');
        $register_couse = Registration::where('trainee_id', $auth)->where('trainer_id', $trainerId)->first();

        if ($register_couse) {

            $toasterValue = 2;
            session()->put('toasterValue', $toasterValue);
            return back();
        } else {
            Registration::create([
                'trainer_id' => $request->input('trainer_id'),
                'trainee_id' => auth()->user()->id,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addMonths(3),
            ]);
            // return back()->with('message', 'Applied successfully! Now, pay for start the course');
            // return back()->with('message', 'You have applied for the course');
            $toasterValue = 10;
            session()->put('toasterValue', $toasterValue);
            return back();
        }
    }

    public function registration_image(Request $request)
    {

        $user = auth()->user()->id;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/user'), $imageName);
            $uploaded = Registration::where('trainee_id', $user)->update([
                'registration_image' => $imageName,
            ]);
            // dd($uploaded);
        }
        return back()->with('message', 'You have registered for course');
        // return back();
    }

    public function registration_compaign(Request $request)
    {
        // dd($request);

        $user = auth()->user()->id;
        $checkRegistration = CompaignRegistration::where('trainer_id', $user)->first();
        if ($checkRegistration) {
            $toasterValue = 1;
            session()->put('toasterValue', $toasterValue);
            return back();
        } else {
            if (isset($request->image)  && ($request->image->extension() != '')) {
                $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/user'), $imageName);
                CompaignRegistration::create([
                    'trainer_id' => $user,
                    'receipt_image' => $imageName,
                ]);
            }
            $toasterValue = 2;
            session()->put('toasterValue', $toasterValue);
            return back();
        }
    }

    public function trainer_location($id)
    {
        $trainer_id = $id;

        $trainer = Users::where('id', $id);



        $request = Registration::where('trainer_id', $trainer_id)->get();
        $countRequest = count($request);
        $trainerLocation = Location::where('trainer_id', $trainer_id)->first();
        // dd($trainerLocation);
        $locations = [
            ["lat" =>  $trainerLocation->latitude, "lng" =>  $trainerLocation->longitude],
            // ["lat" => 26.9124, "lng" => 75.7873],
            // ["lat" => 22.2587, "lng" => 71.1924],
        ];

        // Pass the latitude and longitude values to the view
        $latitude = $trainerLocation->latitude;
        $longitude = $trainerLocation->longitude;
        return view('user.pages.trainerLocation', get_defined_vars());
    }

    public function trainerStoreLocation(Request $request)
    {
        $auth = auth()->user()->id;

        $location = new Location();
        $location->trainer_id = $auth;
        $location->latitude = $request->input('latitude');
        $location->longitude = $request->input('longitude');
        $location->save();

        // redirect to a success page or display a success message
        return back();
    }

    public function storeReviews(Request $request)
    {
        // dd($request);
        $auth = auth()->user()->id;

        $location = new Reviews();
        $location->trainer_id = $auth;
        $location->trainee_id = $request->input('trainee_id');
        $location->reviews = $request->input('review');
        $location->save();

        // redirect to a success page or display a success message
        return back();
    }

    public function storeTrainerReviews(Request $request)
    {
        // dd($request);
        $auth = auth()->user()->id;

        $trainerReview = new TrainerReview();
        $trainerReview->trainee_id = $auth;
        $trainerReview->trainer_id = $request->input('trainer_id');
        $trainerReview->reviews = $request->input('review');
        $trainerReview->save();

        // redirect to a success page or display a success message
        $toasterValue = 3;
        session()->put('toasterValue', $toasterValue);
        return back();
    }

    // trainer all reviews
    public function trainer_all_reviews($id)
    {

        $trainer = Users::where('id', $id)->first();
        $reviews = TrainerReview::where('trainer_id', $trainer->id)->with('trainees.ratings')->get();
        $rating = Rating::where('trainer_id', $trainer->id)->get();
        $trainersCategory = Users::where('id', $id)->with('ratings', 'reviews')->get();

        foreach ($trainersCategory as $trainer) {
            $numReviews = $trainer->reviews->count();
        }
        // dd($reviews);


        return view('user.pages.reviews.allReviews', get_defined_vars());
    }

    // trainer all reviews
    public function trainee_all_reviews($id)
    {

        $trainee = Users::where('id', $id)->first();
        $reviews = Reviews::where('trainee_id', $trainee->id)->with('trainers')->get();
        $rating = Rating::where('trainee_id', $trainee->id)->get();
        $traineesCategory = Users::where('id', $id)->with('traineeReviews')->get();

        foreach ($traineesCategory as $trainee) {
            $numReviews = $trainee->traineeReviews->count();
        }
        // dd($reviews);


        return view('user.pages.reviews.allTraineeReviews', get_defined_vars());
    }
}
