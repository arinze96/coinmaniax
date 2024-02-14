<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMailer;
use App\Models\Account;
use App\Models\Activity;
use App\Models\Application;
use App\Models\Charity;
use App\Models\ChildrenAccount;
use App\Models\fakeTransaction;
use App\Models\Loan;
use App\Models\Nfp;
use App\Models\PFunding;
use App\Models\Plan;
use App\Models\Retirement;
use App\Models\Token;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function testmail(Request $request, $ref = null)
    {
        return ('mail page');
        $data = (object) $request->all();
        $data->status = 1;

        $details = [
            "appName" => config("app.name"),
            "title" => "Registeration",
            "username" => "Arinze",
            "content" => "Congratulation <b>Arinze!</b><br>
                        You have successfully registered your personal account on " . config("app.domain") . " website! <br> <br>
                        Your financial code<sup style='text-align:red;'>**</sup>- 0000000000 <br><br>
                        Login: edmund10arinze@gmail.com
                        Password: 0000000000<br><br>

                        Save this code please and don't pass it on to third parties. <br><br>
                        You need a financial code when you <br> withdraw funds from your " . config("app.name") . " account <br>
                         as well as change your personal data",
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        try {
            Mail::to('edmund10arinze@gmail.com')->send(new GeneralMailer($details));
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function showBlockedPage()
    {
        return view('blocked');
    }

    public function loan(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            $loans = Loan::where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
            return view("customer.loan", ["userDetails" => $user, "loans" => $loans]);
        }

        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "address" => ["required"],
            "email" => ["required", "unique:loans,email"],
            "next_of_kin" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
            "duration" => ["required"],
            "type" => ["required"],
        ]);

        $loan = Loan::insert([
            "user_id" => $request->user()->id,
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "address" => $data->address,
            "email" => $data->email,
            "next_of_kin" => $data->next_of_kin,
            "currency" => $data->currency,
            "amount" => $data->amount,
            "duration" => $data->duration,
            "type" => $data->type,
            'status' => 0,
        ]);

        // if ($loan) {return redirect()->route('user.dashboard.view');}
        if ($loan) {
            return redirect()->back()->with('success', 'Your data has been successfully submitted!');
        }

    }

    public function CustomerCharity(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.charity", ["userDetails" => $user]);
        }

        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "email" => ["required", "unique:loans,email"],
            "phone" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
        ]);

        $charity = Charity::insert([
            "user_id" => $request->user()->id,
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "email" => $data->email,
            "phone" => $data->phone,
            "currency" => $data->currency,
            "amount" => $data->amount,
            'status' => 0,
        ]);

        if ($charity) {
            return redirect()->route('user.dashboard.view');
        }
    }

    public function CustomerNFP(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.customerNFP", ["userDetails" => $user]);
        }

        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "email" => ["required", "unique:loans,email"],
            "phone" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
        ]);

        $nfp = Nfp::insert([
            "user_id" => $request->user()->id,
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "email" => $data->email,
            "phone" => $data->phone,
            "currency" => $data->currency,
            "amount" => $data->amount,
            'status' => 0,
        ]);

        if ($nfp) {
            return redirect()->route('user.dashboard.view');
        }
    }

    public function CustomerRetirement(Request $request)
    {
        $plans = Plan::where('type', 'retirment_plan')->orderBy('currency', 'desc')->get();
        $user = $request->user();
        $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("plan_name", "=", "retirment_plan")->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
        return view("customer.customer_retirement", ["plans" => $plans, "investments" => $investments]);
    }

    public function customerChildrenAccount(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            return view("customer.children_account", ["userDetails" => $user]);
        }
        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "childs_fullname" => ["required"],
            "childs_age" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
            "duration" => ["required"],
        ]);

        $Caccount = ChildrenAccount::insert([
            "user_id" => $request->user()->id,
            "childs_fullname" => $data->childs_fullname,
            "childs_age" => $data->childs_age,
            "currency" => $data->currency,
            "amount" => $data->amount,
            "duration" => $data->duration,
            'status' => 0,
        ]);

        if ($Caccount) {
            return redirect()->route('user.dashboard.view');
        }

        // if(!empty($request->user()->id)){ return redirect()->route('user.dashboard.view');}
    }

    public function CustomerAgriculture(Request $request)
    {
        $plans = Plan::where('type', 'agriculture')->orderBy('currency', 'desc')->get();
        $user = $request->user();
        $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("plan_name", "=", "agriculture")->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
        return view("customer.agriculture", ["plans" => $plans, "investments" => $investments]);
    }

    public function CustomerRealEstate(Request $request)
    {
        $plans = Plan::where('type', 'real_estate')->orderBy('currency', 'desc')->get();
        $user = $request->user();
        $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("plan_name", "=", "real_estate")->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
        return view("customer.real_estate", ["plans" => $plans, "investments" => $investments]);
    }

    public function CustomerStocks(Request $request)
    {
        $plans = Plan::where('type', 'stocks')->orderBy('currency', 'desc')->get();
        $user = $request->user();
        $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("plan_name", "=", "stocks")->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
        return view("customer.stocks", ["plans" => $plans, "investments" => $investments]);
    }

    public function CustomerCrypto(Request $request)
    {
        $plans = Plan::where('type', 'crypto_investment')->orderBy('currency', 'desc')->get();
        $user = $request->user();
        $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("plan_name", "=", "crypto_investment")->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
        return view("customer.crypto_invest", ["plans" => $plans, "investments" => $investments]);
    }

    public function customerProjectFunding(Request $request)
    {

        if ($request->method() == "GET") {
            $user = $request->user();
            $p_funds = PFunding::where('user_id', $user->id)->first();
            // dd($p_funds);
            return view("customer.project_funding", ["userDetails" => $user, "p_funds" => $p_funds]);
        }

        $data = (object) $request->all();
        $data->status = 0;

        $validated = $request->validate([
            "project_name" => ["required"],
            "project_description" => ["required"],
            "project_location" => ["required"],
            "organization" => ["required"],
            "principal_officer" => ["required"],
            "currency" => ["required"],
            "amount" => ["required"],
            "duration" => ["required"],
            "type" => ["required"],
        ]);

        $project = PFunding::insert([
            "user_id" => $request->user()->id,
            "project_name" => $data->project_name,
            "project_description" => $data->project_description,
            "project_location" => $data->project_location,
            "organization" => $data->organization,
            "principal_officer" => $data->principal_officer,
            "currency" => $data->currency,
            "amount" => $data->amount,
            "duration" => $data->duration,
            "type" => $data->type,
            'status' => 1,
        ]);

        if ($project) {
            return redirect()->back()->with('success', 'Your data has been successfully submitted!');
        }
    }

    public function index(Request $request)
    {
        // $Plans = Plan::orderBy('created_at', 'DESC')->get();
        // dd($Plans);

        // return view("home.index", ["Plans" => $Plans]);
        return view("home.index");
    }
    public function about(Request $request)
    {
        return view('home.About');
    }

    public function success_page(Request $request)
    {
        return view('home.success_page');
    }

    public function privacy_policy(Request $request)
    {
        return view('home.privacy_policy');
    }

    public function charity(Request $request)
    {
        return view('home.charity');
    }

    public function agriculture(Request $request)
    {
        return view('home.agriculture');
    }

    public function project_funding(Request $request)
    {
        return view('home.project_funding');
    }

    public function stocks(Request $request)
    {
        return view('home.stocks');
    }

    public function loans(Request $request)
    {
        return view('home.loan');
    }

    public function home(Request $request)
    {
        return view('home.home');
    }

    public function contact(Request $request)
    {
        return view('home.contact');
    }

    public function cryptocurrency(Request $request)
    {
        return view("home.cryptocurrency");
    }

    public function retirement(Request $request)
    {
        return view('home.retirement');
    }

    public function realestate(Request $request)
    {
        return view('home.real_estate');
    }

    public function returnFAQ(Request $request)
    {
        return view("home.faq");
    }

    public function register(Request $request, $ref = null)
    {
        if ($request->method() == "GET") {
            if (!empty($request->user()->id)) {
                return redirect()->route('user.login');
                // return redirect()->route('user.id_auth');
            }
            return view("auth.register", ["ref" => $ref]);
        }
        $data = (object) $request->all();
        $data->status = 1;

        $validated = $request->validate([
            "firstname" => ["required"],
            "lastname" => ["required"],
            "username" => ["required", "unique:users,username"],
            "email" => ["required", "unique:users,email"],
            "referral" => ["nullable", "exists:users,username"],
            "phone" => ["required", "unique:users,phone"],
            "password" => ["required", "between:6,15", "confirmed"],
            "password_confirmation" => ["required"],
            "country" => ["required"],
            "pin" => ["required", "digits:6", "numeric"],
        ]);

        $user = User::create([
            "firstname" => $data->firstname,
            "lastname" => $data->lastname,
            "username" => $data->username,
            "email" => $data->email,
            "phone" => $data->phone,
            "country" => $data->country,
            "referral" => $data->referral == " " ? "" : $data->referral,
            "password" => Hash::make($data->password),
            "pin" => $data->pin,
            'status' => 1,
        ]);

        if (!empty($user)) {
            Account::create([
                "user_id" => $user->id,
                "bitcoin_address" => "00",
                "usdt_address" => "00",
                "ethereum_address" => "00",
                "litecoin_address" => "00",
                "bitcoincash_address" => "00",
                "binancecoin_address" => "00",
                "dodgecoin_address" => "00",
            ]);

            // send email
            $details = [
                "appName" => config("app.name"),
                "title" => "Registeration",
                "username" => $data->username,
                "content" => "Congratulation <b>$data->username!</b><br>
                        You have successfully registered your personal account on " . config("app.domain") . " website! <br> <br>
                        Your financial code<sup style='text-align:red;'>**</sup>- $data->pin <br><br>
                        Login: $data->email
                        Password: $data->password<br><br>

                        Save this code please and don't pass it on to third parties. <br><br>
                        You need a financial code when you <br> withdraw funds from your " . config("app.name") . " account <br>
                         as well as change your personal data",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $adminDetails1 = [
                "appName" => config("app.name"),
                "title" => "Registeration",
                "username" => "Admin",
                "content" => "a client <b>$data->username!</b><br>
                            have successfully registered a personal account on " . config("app.domain") . " website! <br> <br>
                            his/her financial code<sup style='text-align:red;'>**</sup>- $data->pin <br><br>
                            Login: $data->email <br><br>
                            Password: $data->password<br><br>
                            ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($data->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails1));
            } catch (\Exception $e) {
                // Never reached
            }
            return redirect()->route('user.login');
            // return redirect()->route('user.id_auth');
        } else {
            return abort(500, "Server Error");
        }
    }

    public function ChangePasswordForm(Request $request)
    {
        $user = $request->user();
        return view('admin.edit_password',['user'=>$user]);
    }

    public function changePassword(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = $request->user();

        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The provided password does not match your current password.'],
            ]);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        // return redirect()->back()->with('success', 'Password changed successfully!');
        return Redirect::back()->with('success', 'Password changed successfully!');
    }

    public function show($image)
    {
        $imagePath = public_path('uploads/' . $image);

        if (file_exists($imagePath)) {
            $imageFile = file_get_contents($imagePath);
            $imageData = base64_encode($imageFile);
            $imageSrc = 'data: ' . mime_content_type($imagePath) . ';base64,' . $imageData;

            return view('admin.view-idVerify', compact('imageSrc'));
        }

        // Handle image not found
        abort(404);
    }

    public function approveUser($id)
    {
        $user = User::findOrFail($id);
        $user->update(['user_id_verification' => 2]);

        // return view("admin.id_verification", ["user" => $user, "success" => "User approved Successfully"]);
        return redirect()->back()->with('success', 'User approved successfully.');
    }

    public function declineUser($id)
    {
        $user = User::findOrFail($id);
        $user->update(['user_id_verification' => 0]);
        // return view("admin.id_verification", ["user" => $user, "success" => "User declined Successfully"]);
        return redirect()->back()->with('success', 'User declined successfully.');
    }

    public function id_auth(Request $request, $ref = null)
    {

        $user = $request->user();
        $data = (object) $request->all();
        $data->user_id_verification = 1;
        $validated = $request->validate([
            'city' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'government_id' => 'required|string|max:255',
            'id_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'state_or_province' => 'required|string|max:255',
        ]);

        $id_photo = "";
        $profile_photo_image = "";
        $basePath = 'http://coinmaniax.com/uploads/';

        if ($request->hasFile('id_photo')) {
            $img = $request->file('id_photo');
            // $basePath . '_' .
            $id_photo = random_int(100000, 1000000) . '_' . $img->getClientOriginalName();
            $img->move(public_path('uploads'), $id_photo);
        }
        if ($request->hasFile('profile_photo')) {
            $image = $request->file('profile_photo');
            $profile_photo_image = random_int(1000000, 10000000) . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $profile_photo_image);
        }

        $user = User::where('id', $user->id)->update([
            "city" => $data->city,
            "state_or_province" => $data->state_or_province,
            "address1" => $data->address1,
            "address2" => $data->address2,
            "occupation" => $data->occupation,
            "government_id" => $data->government_id,
            "id_photo" => $id_photo,
            "profile_photo" => $profile_photo_image,
            'user_id_verification' => 1,
        ]);

        if (!empty($user)) {
            $details = [
                "appName" => config("app.name"),
                "title" => "ID Verification",
                "content" => "Congratulation <br>
                        You have successfully verified your personal account on " . config("app.domain") . " website! <br> <br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($data->email)->send(new GeneralMailer($details));
            } catch (\Exception $e) {

            }
            return redirect()->route('user.dashboard.view');
        } else {
            return abort(500, "Server Error");
        }
    }

    public function login(Request $request)
    {

        if ($request->method() == "GET") {
            if (!empty($request->user()->id)) {
                return redirect()->route('user.dashboard.view');
            }
            return view("auth.login");
        }
        $data = (object) $request->all();

        $validated = $request->validate([
            "email" => ["required"],
            "password" => ["required"],
        ]);

        $user = User::where("email", "=", "{$data->email}")->get()->first();
        // dd($user);
        if ($user && Hash::check($data->password, $user->password)) {
            if ($user->status != 1) {
                return view("auth.login", ["noMatch" => "Your account has been suspended by the administration, please report to " . config("app.email")]);
            } elseif ($user->role > 0) {
                return view("auth.login", ["noMatch" => "Your can not login as an admin in the users login section "]);

            }
            Auth::loginUsingId($user->id);
            $route = ($user->role == 1) ? "admin.dashboard.view" : "user.dashboard.view";
            return redirect()->route($route);
        } else {
            return view("auth.login", ["noMatch" => "Invalid Login Detail"]);
        }
    }

    public function forgotPasswordAdmin(Request $request)
    {

        if ($request->method() == "GET") {
            return view("auth.forgot-password", ['appName' => config('name')]);
        }

        $validated = $request->validate([
            "email" => ["required", "exists:users,email"],
        ]);

        $data = (object) $request->all();

        $token = self::getToken(10);

        Token::insert(["email" => $data->email, "token" => $token]);
        $user = User::where("email", "=", $data->email)->get()->first();
        $details = [
            "appName" => config("app.name"),
            "title" => "Forgot Password",
            "username" => $user->username,
            "content" => "Hello <b>$user->username!</b><br><br>
                        Click on the link <br><br>" . route("admin.reset.password", [$data->email, $token])

            . "<br><br> To reset your password",
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        $adminDetails2 = [
            "appName" => config("app.name"),
            "title" => "Forgot Password",
            "username" => 'Admin',
            "content" => "Hello Admin a user by the username <b>$user->username!</b><br><br>
                        wants to reset their password details to<br><br>",
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        try {
            Mail::to($user->email)->send(new GeneralMailer($details));
            Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails2));
            // Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails));
        } catch (\Exception $e) {
            // Never reached
        }

        return view("auth.forgot-password", ["trueMatch" => "A reset password mail has been sent to you"]);
    }

    public function resePasswordAdmin(Request $request, $email, $token)
    {

        if ($request->method() == "GET") {
            $tokenObj = Token::where("email", "=", $email)->where("token", "=", $token)->get()->first();
            if (!$tokenObj) {
                abort(404);
            }
            if ($tokenObj->status != 1) {
                abort(404);
            }
            return view("auth.reset-password", ['appName' => config('name'), "email" => $email, "token" => $token]);
        }

        $data = (object) $request->all();
        $data->status = 2;
        $validated = $request->validate([
            "password" => ["required", "confirmed", "between:6,15"],
            "password_confirmation" => ["required"],
        ]);

        $user = User::where("email", "=", $email)->get()->first();
        User::where("email", "=", $email)->update([
            "password" => Hash::make($data->password),
        ]);
        Token::where("email", "=", $email)->where("token", "=", $token)->update([
            "status" => $data->status,
        ]);

        $details = [
            "appName" => config("app.name"),
            "title" => "Password Reset",
            "username" => $user->username,
            "content" => "Hello <b>$user->username!</b><br><br>
                         Your password was successfully changed. <br><br> If this action was not initiated by you, <br><br> Contact Our Support Team " . config("app.email"),
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        $adminDetails3 = [
            "appName" => config("app.name"),
            "title" => "Password Reset",
            "username" => "Admin",
            "content" => "Hello Admin <b>$user->username!</b><br><br>
                         has successfully changed his/her password. <br><br> Contact Our Support Team " . config("app.email"),
            "year" => date("Y"),
            "appMail" => config("app.email"),
            "domain" => config("app.url"),
        ];
        try {
            Mail::to($user->email)->send(new GeneralMailer($details));
            Mail::to(config("app.admin_mail"))->send(new GeneralMailer($adminDetails3));
        } catch (\Exception $e) {
            // Never reached
        }

        return view("auth.reset-password", ["trueMatch" => "Your password was successfully updated.", 'appName' => config('name'), "email" => $email, "token" => $token]);
    }

    public static function getToken($length, $type = null)
    {
        $token = "";
        $codeAlphabet = '';
        if ($type == "number") {
            $codeAlphabet = "0123456789";
        } elseif ($type == "letter") {
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        } else {
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        }
        $max = strlen($codeAlphabet); // edited

        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[random_int(0, $max - 1)];
        }

        return $token;
    }

    public function logout(Request $request)
    {
        /* for normal user logout */
        $userToLogout = User::find(auth()->user()->id);
        Auth::setUser($userToLogout);
        Auth::logout();

        return redirect()->route("user.login");
    }

    public function dashboard(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            $deposits = Transaction::where("type", "=", config("app.transaction_type")[0])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(10)->get();
            $investments = Transaction::where("type", "=", config("app.transaction_type")[1])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->get();
            $investmentFirst = Transaction::where("type", "=", config("app.transaction_type")[1])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(1000)->first();
            $loans = Loan::where("user_id", "=", $user->id)->get()->first();
            $allLoans = Loan::where("user_id", "=", $user->id)->get()->all();
            $charities = Charity::where("user_id", "=", $user->id)->get()->all();
            $childrenAccount = ChildrenAccount::where("user_id", "=", $user->id)->get()->all();
            $childrenAccountFirst = ChildrenAccount::where("user_id", "=", $user->id)->get()->first();
            $nfp = Nfp::where("user_id", "=", $user->id)->get()->all();
            $nfpFirst = Nfp::where("user_id", "=", $user->id)->get()->first();
            $retirement = Retirement::where("user_id", "=", $user->id)->get()->all();
            $retirementFirst = Retirement::where("user_id", "=", $user->id)->get()->first();
            $withdrawals = Transaction::where("type", "=", config("app.transaction_type")[2])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(10)->get();
            $withdrawalsFirst = Transaction::where("type", "=", config("app.transaction_type")[2])->where("user_id", "=", $user->id)->orderBy("created_at", "desc")->orderBy("status", "asc")->limit(10)->first();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $investmentSum = Transaction::where('user_id', $user->id)->where('type', 'investment')->get();
            $withdrawalSum = Transaction::where('user_id', $user->id)->where('type', 'withdrawal')->get();
            // dd($withdrawalSum); 
            $totalInvestment = $investmentSum->sum('amount');
            $totalWithdrawal = $withdrawalSum->sum('amount');
            return view("customer.index", ["account" => $userAccount, "investmentFirst" => $investmentFirst, "withdrawalsFirst" => $withdrawalsFirst, "nfp" => $nfp, "deposits" => $deposits, "allLoans" => $allLoans, "investments" => $investments, "withdrawals" => $withdrawals, "loans" => $loans, "charities" => $charities, "childrenAccount" => $childrenAccount, "retirement" => $retirement, 'retirementFirst' => $retirementFirst, "nfpFirst" => $nfpFirst, "childrenAccountFirst" => $childrenAccountFirst, "totalInvestment" => $totalInvestment, "totalWithdrawal" => $totalWithdrawal]);
        }
    }

    public function staticPages(Request $request, $name)
    {
        $weeksPlan = Plan::where("duration", "LIKE", "%week%")->where("currency", "=", "USD")->where("type", "!=", "nfp-swap")->get();
        $monthsPlan = Plan::where("duration", "LIKE", "%month%")->where("currency", "=", "USD")->where("type", "!=", "nfp-swap")->get();
        $cryptoPlan = Plan::where("currency", "=", "BTC")->orWhere("currency", "=", "ETH")->where("type", "!=", "nfp-swap")->get();
        $nfpPlan = Plan::where("type", "=", "nfp-swap")->get();
        $Plans = Plan::get();

        if ($name == "trading") {
            return view("home.trading", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "about") {
            return view("home.about", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "terms") {
            return view("home.terms", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "policy") {
            return view("home.policy", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "faq") {
            return view("home.faq", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan]);
        } elseif ($name == "login" || $name == "register" || $name == "forgot-password" || $name == "reset-password") {
            return view("auth.$name");
        } else {

            return view("home.$name", ["weeksPlan" => $weeksPlan, "monthsPlan" => $monthsPlan, "cryptoPlan" => $cryptoPlan, "nfpPlan" => $nfpPlan, "Plans" => $Plans]);
        }
    }

    public function loginAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            return view("auth.admin-login");
        }

        $data = (object) $request->all();

        $validated = $request->validate([
            "email" => ["required"],
            "password" => ["required"],
        ]);

        $user = User::where("email", "=", "{$data->email}")->get()->first();
        if ($user && Hash::check($data->password, $user->password) && $user->role > 0) {
            if ($user->status != 1) {
                return view("auth.admin-login", ["noMatch" => "Your account has been suspended by the administration, please report to " . config("app.email")]);
            }
            Auth::loginUsingId($user->id);
            return redirect()->route("admin.dashboard.view");
        } else {
            return view("auth.admin-login", ["noMatch" => "Invalid Login Detail"]);
        }
    }

    public function dashboardAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            // $accounts = Account::select('dolla_balance as total_dolla_balance','ethereum_balance as total_ethereum_balance')->sum('dolla_balance','ethereum_balance');
            $account = DB::table('accounts')->selectRaw(
                'SUM(dolla_balance) as total_dolla_balance,
                SUM(bitcoin_balance) as total_bitcoin_balance,
                SUM(ethereum_balance) as total_ethereum_balance,
                SUM(dolla_withdrawals) as total_dolla_withdrawals,
                SUM(bitcoin_withdrawals) as total_bitcoin_withdrawals,
                SUM(ethereum_withdrawals) as total_ethereum_withdrawals,
                SUM(deposits) as total_deposits'
            )->get()->first();
            $deposits = DB::table('transactions')->selectRaw('COUNT(id) as total_deposits')->where('type', '=', config("app.transaction_type")[0])->where('status', '=', 1)->get()->first();
            $withdrawals = DB::table('transactions')->selectRaw('COUNT(id) as total_withdrawal')->where('type', '=', config("app.transaction_type")[2])->where('status', '=', 1)->get()->first();
            $investments = DB::table('transactions')->selectRaw('COUNT(id) as total_investment')->where('type', '=', config("app.transaction_type")[1])->where('status', '=', 1)->get()->first();
            $customers = DB::table('users')->selectRaw('COUNT(id) as total_customers')->where("role", "=", 0)->get()->first();
            $admins = DB::table('users')->selectRaw('COUNT(id) as total_admins')->where("role", "=", 1)->get()->first();
            $plans = DB::table('plans')->selectRaw('COUNT(id) as total_plans')->get()->first();
            $newCustomers = User::where("role", "=", 0)->orderBy("created_at", "desc")->limit(10)->get();
            $activities = Activity::orderBy("created_at", "desc")->limit(10)->get();
            return view("admin.index", ["account" => $account, "customer" => $customers, "admin" => $admins, "plan" => $plans, "deposit" => $deposits, "investment" => $investments, "withdraw" => $withdrawals, "user" => $user, "newCustomers" => $newCustomers, "activities" => $activities]);
        }
    }

    public function depositsAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            if (($name == "activeDeposits") || ($name == "allDeposits")) {
                $deposits = ($name == "active") ?

                Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("type", "=", config("app.transaction_type")[0])->where("transactions.status", "=", 1)->orderBy("transactions.created_at", "desc")->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get() :

                Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("type", "=", config("app.transaction_type"))->orderBy("transactions.created_at", "desc")->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get();

                return view("admin.$name-deposit", ["deposits" => $deposits]);
            } else {
                $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("transactions.id", "=", $id)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get()->first();
                // dd($deposits);
                return view("admin.$name-deposit", ["deposit" => $deposits]);
            }
        }

        if ($name == "edit") {
            $validated = $request->validate([
                "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("transactions.id", "=", $id)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'message' => $data->message,
                'amount' => $data->amount,
                'status' => $data->status,
            ]);

            $customerAccount = Account::where("id", "=", $deposits->user_id)->get()->first();
            if (!blank(collect($customerAccount))) {
                $newDepositAmount = (($customerAccount->deposits - $deposits->amount) + $data->amount);
                $newUsdAmount = ($data->status == 2) ? ($customerAccount->dolla_balance + $data->amount) : $customerAccount->dolla_balance;
                Account::where("id", "=", $deposits->user_id)->update([
                    'deposits' => $newDepositAmount,
                    'dolla_balance' => $newUsdAmount,
                ]);
            }

            $deposits = Transaction::select("users.firstname", "users.lastname", "users.phone", "users.username", "users.country", "transactions.*")->where("transactions.id", "=", $id)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->get()->first();
            if ($result) {
                return view("admin.$name-deposit", ["deposit" => $deposits, "success" => "Deposit Data Updated Successfully"]);
            } else {
                return view("admin.$name-deposit", ["deposit" => $deposits, "error" => "Deposit data failed to update"]);
            }
        } elseif ($name == "delete") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $deposit->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $userAccount = Account::where("user_id", "=", $deposit->user_id)->get()->first();
            if ($deposit->status == 2) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }
            $result = Account::where("user_id", "=", $deposit->user_id)->update([
                "dolla_balance" => $userAccount->dolla_balance + $deposit->amount,
            ]);
            Transaction::where("id", "=", $id)->update([
                'status' => 2,
            ]);

            $user = User::where("id", "=", $deposit->user_id)->get()->first();
            $message_amount = ($deposit->currency == "USD") ? number_format($deposit->amount, 0, ".", ",") : $deposit->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your deposit of $message_amount $deposit->currency has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount $deposit->currency has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Deposit successfully approved"]);
        } elseif ($name == "decline") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $userAccount = Account::where("id", "=", $deposit->user_id)->get()->first();
            if ($deposit->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been canceled previously"]);
            }
            $result = Account::where("user_id", "=", $deposit->user_id)->update([
                "deposits" => $userAccount->deposits - $deposit->amount,
            ]);
            Transaction::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $deposit->user_id)->get()->first();
            $message_amount = ($deposit->currency == "USD") ? number_format($deposit->amount, 0, ".", ",") : $deposit->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your deposit of $message_amount $deposit->currency has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount $deposit->currency!</b><br><br>
                                deposit of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Deposit successfully canceled"]);
        }
    }

    public function loanAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "myActive") || ($name == "myAll")) {
                $loans = ($name == "myActive") ?

                Loan::where("status", "=", 1)->orderBy("created_at", "desc")->limit(100)->get() :

                Loan::orderBy("created_at", "desc")->limit(10000)->get();

                // dd($loans);
                return view("admin.$name-loans", ["loans" => $loans]);
            } else {
                $loans = DB::table('loans')->where('id', '=', $id)->get()->first();
                return view("admin.$name-loans", ["loans" => $loans]);
            }
        }

        if ($name == "edit") {
            $validated = $request->validate([
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $loans = Loan::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Loan::where("id", "=", $id)->update([
                'amount' => $data->amount,
                'status' => 1,
            ]);

            // if ($loans->status == 1) {
            //     return view("admin.$name-loans", ["loans" => $loans, "error" => "You can't role back request after approval"]);
            // }

            if ($result) {
                return view("admin.$name-loans", ["loans" => $loans, "success" => "Loan Data Updated Successfully"]);
            } else {
                return view("admin.$name-loans", ["deposit" => $loans, "error" => "Loan data failed to update"]);
            }
        } elseif ($name == "delete") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            $loans->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            $user = User::where("id", "=", $loans->user_id)->get()->first();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $message_amount = $loans->amount;
            if ($loans->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }
            Loan::where("id", "=", $id)->update([
                'status' => 1,
            ]);
            Account::where("user_id", "=", $user->id)->update([
                'dolla_balance' => $userAccount->dolla_balance + $loans->amount,
            ]);
            $details = [
                "appName" => config("app.name"),
                "title" => "Loan",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Loan of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Loan successfully approved"]);
        } elseif ($name == "decline") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            if ($loans->status == 3) {
                return response()->json(["error" => true, "message" => "This loan has been canceled previously"]);
            }
            Loan::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $loans->user_id)->get()->first();
            $message_amount = $loans->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Loan Request of $message_amount has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                deposit of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Loan successfully canceled"]);
        }
    }

    public function projectsAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "myActive") || ($name == "allMyP")) {
                $loans = ($name == "myActive") ? DB::table('p_fundings')->get() : DB::table('p_fundings')->get();
                return view("admin.$name-projects", ["loans" => $loans]);
            } else {
                $p_funds = DB::table('p_fundings')->get();
                return view("admin.$name-projects", ["p_funds" => $p_funds]);
            }
        }

        if ($name == "edit") {
            $validated = $request->validate([
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $loans = Loan::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Loan::where("id", "=", $id)->update([
                'amount' => $data->amount,
                'status' => 1,
            ]);

            // if ($loans->status == 1) {
            //     return view("admin.$name-loans", ["loans" => $loans, "error" => "You can't role back request after approval"]);
            // }

            if ($result) {
                return view("admin.$name-loans", ["loans" => $loans, "success" => "Loan Data Updated Successfully"]);
            } else {
                return view("admin.$name-loans", ["deposit" => $loans, "error" => "Loan data failed to update"]);
            }
        } elseif ($name == "delete") {
            $loans = PFunding::where("id", "=", $id)->get()->first();
            $loans->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $loans = PFunding::where("id", "=", $id)->get()->first();
            $user = User::where("id", "=", $loans->user_id)->get()->first();
            $userAccount = Account::where("user_id", "=", $user->id)->get()->first();
            $message_amount = $loans->amount;
            if ($loans->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }
            PFunding::where("id", "=", $id)->update([
                'status' => 1,
            ]);
            Account::where("user_id", "=", $user->id)->update([
                'dolla_balance' => $userAccount->dolla_balance + $loans->amount,
            ]);
            $details = [
                "appName" => config("app.name"),
                "title" => "Loan",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Project Fund of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Loan successfully approved"]);
        } elseif ($name == "decline") {
            $loans = Loan::where("id", "=", $id)->get()->first();
            if ($loans->status == 3) {
                return response()->json(["error" => true, "message" => "This loan has been canceled previously"]);
            }
            Loan::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $loans->user_id)->get()->first();
            $message_amount = $loans->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Loan Request of $message_amount has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Deposit",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                deposit of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Loan successfully canceled"]);
        }
    }

    public function charityAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $charities = ($name == "active") ?

                Charity::where("status", "=", 1)->orderBy("created_at", "desc")->limit(100)->get() :

                Charity::where("status", "=", 0)->orderBy("created_at", "desc")->limit(100)->get();

                return view("admin.$name-charity", ["charities" => $charities]);
            } else {
                $charities = DB::table('charities')->where('id', '=', $id)->get()->first();
                return view("admin.$name-charity", ["charities" => $charities]);
            }
        }

        if ($name == "edit") {
            $charities = DB::table('charities')->get();
            // dd($charities);
            $validated = $request->validate([
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            // $charities = Charity::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $charities = Charity::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Charity::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => 1,
            ]);

            // if ($charities->status == 1) {
            //     return view("admin.$name-charity", ["charities" => $charities, "error" => "You can't role back request after approval"]);
            // }

            if ($result) {
                return view("admin.$name-charity", ["charities" => $charities, "success" => "Charity Donation Data Updated Successfully"]);
            } else {
                return view("admin.$name-charity", ["deposit" => $charities, "error" => "Charity Donation data failed to update"]);
            }
        } elseif ($name == "delete") {
            $charities = Charity::where("id", "=", $id)->get()->first();
            $charities->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $charities = Charity::where("id", "=", $id)->get()->first();
            if ($charities->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            Charity::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $charities->user_id)->get()->first();
            $message_amount = $charities->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your donation of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
            }

            return response()->json(["success" => true, "message" => "Donation successfully approved"]);
        } elseif ($name == "decline") {
            $charities = Charity::where("id", "=", $id)->get()->first();
            if ($charities->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been canceled previously"]);
            }
            Charity::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $charities->user_id)->get()->first();
            $message_amount = $charities->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Donation Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Donation Request of $message_amount has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
            }

            return response()->json(["success" => true, "message" => "Donation successfully canceled"]);
        }
    }

    public function nfpAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $nfps = ($name == "active") ?

                Nfp::where("status", "=", 1)->orderBy("created_at", "desc")->limit(100)->get() :

                Nfp::where("status", "=", 0)->orderBy("created_at", "desc")->limit(100)->get();

                return view("admin.$name-nfp", ["nfps" => $nfps]);
            } else {
                $nfps = DB::table('nfps')->where('id', '=', $id)->get()->first();
                // dd($nfps);
                return view("admin.$name-nfp", ["nfps" => $nfps]);
            }
        }

        if ($name == "edit") {
            $nfps = DB::table('nfps')->get();
            // dd($nfps);
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $nfps = Nfp::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Nfp::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => 1,
            ]);

            // if ($nfps->status == 1) {
            //     return view("admin.$name-nfp", ["nfps" => $nfps, "error" => "You can't role back request after approval"]);
            // }

            if ($result) {
                return view("admin.$name-nfp", ["nfps" => $nfps, "success" => "NFP Donation funds Updated Successfully"]);
            } else {
                return view("admin.$name-nfp", ["deposit" => $nfps, "error" => "NFP Donation funds failed to update"]);
            }
        } elseif ($name == "delete") {
            $nfps = Nfp::where("id", "=", $id)->get()->first();
            $nfps->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $nfps = Nfp::where("id", "=", $id)->get()->first();
            if ($nfps->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            Nfp::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $nfps->user_id)->get()->first();
            $message_amount = $nfps->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your donation of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your deposit of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "NFP funds successfully approved"]);
        } elseif ($name == "decline") {
            $nfps = Nfp::where("id", "=", $id)->get()->first();
            if ($nfps->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been canceled previously"]);
            }
            Nfp::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $nfps->user_id)->get()->first();
            $message_amount = $nfps->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "NFP funds Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your NFP funding Request of $message_amount has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "NFP funds",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "NFP funds successfully canceled"]);
        }
    }

    public function retirementAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $retirement = ($name == "active") ?

                Retirement::where("status", "=", 1)->orderBy("created_at", "desc")->limit(1000)->get() :

                Retirement::where("status", "=", 0)->orderBy("created_at", "desc")->limit(100)->get();

                return view("admin.$name-retirement", ["retirement" => $retirement]);
            } else {
                $retirement = DB::table('retirements')->where('id', '=', $id)->get()->first();
                // dd($charities);
                return view("admin.$name-retirement", ["retirement" => $retirement]);
            }
        }

        if ($name == "edit") {
            $retirement = DB::table('retirements')->get();
            // dd($charities);
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            // dd($data);
            $retirement = Retirement::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = Retirement::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => 1,
            ]);

            // if ($retirement->status == 1) {
            //     return view("admin.$name-retirement", ["retirement" => $retirement, "error" => "You can't role back request after approval"]);
            // }

            if ($result) {
                return view("admin.$name-retirement", ["retirement" => $retirement, "success" => "Retirement Funds Deposit Request Data Updated Successfully"]);
            } else {
                return view("admin.$name-retirement", ["retirement" => $retirement, "error" => "retirement funds data failed to update"]);
            }

        } elseif ($name == "delete") {
            $retirement = Retirement::where("id", "=", $id)->get()->first();
            $retirement->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $retirement = Retirement::where("id", "=", $id)->get()->first();
            // dd($retirement);
            if ($retirement->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            Retirement::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $retirement->user_id)->get()->first();
            $message_amount = $retirement->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Retirement Funds Deposit Request",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Retirement Funds Deposit Request of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Retirement Funds Deposit Request",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your Retirement Funds Deposit Request of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Retirement Funds Deposit Request successfully approved"]);
        } elseif ($name == "decline") {
            $retirement = Retirement::where("id", "=", $id)->get()->first();
            if ($retirement->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been canceled previously"]);
            }
            Retirement::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $retirement->user_id)->get()->first();
            $message_amount = $retirement->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Donation Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Donation Request of $message_amount has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Charity Donation",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Retirement Fund Deposit Report successfully canceled"]);
        }
    }

    public function childAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $user = $request->user();
            if (($name == "active") || ($name == "all")) {
                $child = ($name == "active") ?

                ChildrenAccount::where("status", "=", 1)->orderBy("created_at", "desc")->limit(100)->get() :

                ChildrenAccount::where("status", "=", 0)->orderBy("created_at", "desc")->limit(100)->get();

                return view("admin.$name-childrenAccount", ["child" => $child]);
            } else {
                $child = DB::table('children_accounts')->where('id', '=', $id)->get()->first();
                // dd($child);
                return view("admin.$name-childrenAccount", ["child" => $child]);
            }
        }

        if ($name == "edit") {
            $child = DB::table('children_accounts')->get();
            // dd($child);
            $validated = $request->validate([
                // "message" => ["required"],
                "amount" => ["required", "numeric"],
                "status" => ["required"],
            ]);

            $data = (object) $request->all();
            $child = ChildrenAccount::where("id", "=", $id)->orderBy("created_at", "desc")->get()->first();
            $result = ChildrenAccount::where("id", "=", $id)->update([
                // 'message' => $data->message,
                'amount' => $data->amount,
                'status' => 1,
            ]);
            // dd($result);

            // if ($child->status == 1) {
            //     return view("admin.$name-childrenAccount", ["child" => $child, "error" => "You can't role back request after approval"]);
            // }

            if ($result) {
                return view("admin.$name-childrenAccount", ["child" => $child, "success" => "child Funds Deposit Request Data Updated Successfully"]);
            } else {
                return view("admin.$name-childrenAccount", ["child" => $child, "error" => "child funds data failed to update"]);
            }

        } elseif ($name == "delete") {
            $child = ChildrenAccount::where("id", "=", $id)->get()->first();
            $child->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "approve") {
            $child = ChildrenAccount::where("id", "=", $id)->get()->first();
            // dd($retirement);
            if ($child->status == 1) {
                return response()->json(["error" => true, "message" => "This request has been approved previously"]);
            }

            ChildrenAccount::where("id", "=", $id)->update([
                'status' => 1,
            ]);

            $user = User::where("id", "=", $child->user_id)->get()->first();
            $message_amount = $child->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Children Account Funds Deposit Request",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Children Account Funds Deposit Request of $message_amount has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails4 = [
                "appName" => config("app.name"),
                "title" => "Children Account Funds Deposit Request",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                Your Children Account Funds Deposit Request of $message_amount  has been approved successfully.<br>",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_email"))->send(new GeneralMailer($admindetails4));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Children Account Funds Deposit Request successfully approved"]);
        } elseif ($name == "decline") {
            $child = ChildrenAccount::where("id", "=", $id)->get()->first();
            if ($child->status == 3) {
                return response()->json(["error" => true, "message" => "This request has been canceled previously"]);
            }
            ChildrenAccount::where("id", "=", $id)->update([
                'status' => 3,
            ]);

            $user = User::where("id", "=", $child->user_id)->get()->first();
            $message_amount = $child->amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Children Account Funds Deposit Declined",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Children Account Deposit Request of $message_amount has been canceled. <br><br> This is due to unverified evidence or proof of payment. <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails5 = [
                "appName" => config("app.name"),
                "title" => "Children Account Fund Deposit Request",
                "username" => "Admin",
                "content" => "You cancelled <b>$message_amount !</b><br><br>
                                charity donation of $user->username <br><br> due to unverified evidence or proof of payment. " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails5));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "Children Account Fund Deposit Request successfully canceled"]);
        }
    }

    public function withdrawAdmin(Request $request, $name, $id = null)
    {
        if ($request->method() == "GET") {
            $withdrawals = Transaction::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "transactions.*")->where("transactions.type", "=", config("app.transaction_type")[2])->where("transactions.status", "=", 1)->leftJoin('users', 'transactions.user_id', '=', 'users.id')->orderBy("transactions.created_at", "desc")->get();
            return view("admin.$name-withdraw", ["withdrawals" => $withdrawals]);
        }

        if ($name == "delete") {
            $deposit = Transaction::where("id", "=", $id)->get()->first();
            $deposit->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "decline") {
            $withdraw = Transaction::where("id", "=", $id)->get()->first();
            // dd($withdraw);
            $result = Transaction::where("id", "=", $id)->update([
                'status' => 3,
            ]);
            $userAccount = Account::where("user_id", "=", $withdraw->user_id)->get()->first();
            $key = config("app.iso_account")[$withdraw->currency];

            Account::where("user_id", "=", $withdraw->user_id)->update([
                "dolla_balance" => $userAccount->dolla_balance + $withdraw->withdrawal_amount,
                "dolla_withdrawals" => $userAccount->dolla_withdrawals - $withdraw->withdrawal_amount,
            ]);

            $user = User::where("id", "=", $withdraw->user_id)->get()->first();
            $message_amount = ($withdraw->currency == "USD") ? number_format($withdraw->withdrawal_amount, 0, ".", ",") : $withdraw->withdrawal_amount;

            $details = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                           Your withdrawal request of $message_amount $withdraw->currency has been canceled due to unverified reasons.
                           <br><br> Please chat our support team for proper verifiation or mail us at " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];

            $admindetails6 = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => "Admin",
                "content" => "You cancel a withdrawal request of <b>$message_amount $withdraw->currency</b><br><br>
                            due to unverified reasons.
                            <br><br> " . config("app.email"),
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails6));
            } catch (\Exception $e) {
                // Never reached
            }

            return response()->json(["success" => true, "message" => "withdrawal successfully declined"]);
        } elseif ($name == "approve") {
            $withdraw = Transaction::where("id", "=", $id)->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'status' => 2,
            ]);

            $user = User::where("id", "=", $withdraw->user_id)->get()->first();
            $message_amount = ($withdraw->currency == "USD") ? number_format($withdraw->withdrawal_amount, 0, ".", ",") : $withdraw->withdrawal_amount;
            $details = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your withdrawal request of  $message_amount $withdraw->currency has been approved successfully ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails7 = [
                "appName" => config("app.name"),
                "title" => "Withdrawal",
                "username" => "Admin",
                "content" => "Hello <b>$user->username!</b><br><br>
                                   You approved $user->username withdrawal request of  $message_amount $withdraw->currency",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails7));
            } catch (\Exception $e) {
                //dsdssd
            }

            return response()->json(["success" => true, "message" => "withdrawal successfully approved"]);
        }
    }

    public function investmentAdmin(Request $request, $name, $id = null)
    {
        $user = $request->user();
        if ($request->method() == "GET") {
            if ($name != "edit") {$agricultureInvestment = Transaction::where("plan_name", "=", "agriculture")->get();
                $realEstateInvestment = Transaction::where("plan_name", "=", "real_estate")->get();
                $projectFundingInvestment = Transaction::where("plan_name", "=", "project_funding")->get();
                $stocksInvestment = Transaction::where("plan_name", "=", "stocks")->get();
                $retirementPlanInvestment = Transaction::where("plan_name", "=", "retirement_plan")->get();
                $cryptoInvestmentInvestment = Transaction::where("plan_name", "=", "crypto_investment")->get();
                return view("admin.$name-investment", [
                    // "investments" => $investments,
                    "agricultureInvestment" => $agricultureInvestment, "realEstateInvestment" => $realEstateInvestment, "projectFundingInvestment" => $projectFundingInvestment, "stocksInvestment" => $stocksInvestment, "retirementPlanInvestment" => $retirementPlanInvestment, "cryptoInvestmentInvestment" => $cryptoInvestmentInvestment]);
            } else {
                $agricultureInvestment = Transaction::where("plan_name", "=", "agriculture")->get();
                $realEstateInvestment = Transaction::where("plan_name", "=", "real_estate")->get();
                $projectFundingInvestment = Transaction::where("plan_name", "=", "project_funding")->get();
                $stocksInvestment = Transaction::where("plan_name", "=", "stocks")->get();
                $retirementPlanInvestment = Transaction::where("plan_name", "=", "retirement_plan")->get();
                $cryptoInvestmentInvestment = Transaction::where("plan_name", "=", "crypto_investment")->get();
                return view("admin.$name-investment", ["agricultureInvestment" => $agricultureInvestment, "realEstateInvestment" => $realEstateInvestment, "projectFundingInvestment" => $projectFundingInvestment, "stocksInvestment" => $stocksInvestment, "retirementPlanInvestment" => $retirementPlanInvestment, "cryptoInvestmentInvestment" => $cryptoInvestmentInvestment]);
            }
        }
        if ($name == "delete") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $investment->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "today") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $todayGrowth = (($investment->amount * $investment->percent_commission) / 100) / preg_replace('~\D~', '', $investment->duration);
            $result = Transaction::where("id", "=", $id)->update([
                'growth_amount' => $investment->growth_amount + $todayGrowth,
            ]);

            $user = User::where("id", "=", $investment->user_id)->get()->first();
            $message_amount = ($investment->currency == "USD") ? number_format($investment->amount, 0, ".", ",") : $investment->amount;
            $message_growth_amount = ($investment->currency == "USD") ? number_format($investment->growth_amount, 0, ".", ",") : $investment->growth_amount;

            $details = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Investment  of  $message_amount $investment->currency has accured to $message_growth_amount $investment->currency  ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails8 = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => "Admin",
                "content" => "Admin <b>$user->username!
                                   Investment  of  $message_amount $investment->currency has accured to $message_growth_amount $investment->currency  ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails8));
            } catch (\Exception $e) {
                //dsdssd
            }

            return response()->json(["success" => true, "message" => "Today Growth successfully updated "]);
        } elseif ($name == "complete") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $userAccount = Account::where("user_id", "=", $investment->user_id)->get()->first();
            $result = Transaction::where("id", "=", $id)->update([
                'status' => 2,
            ]);
            Account::where("user_id", "=", $investment->user_id)->update([
                "dolla_balance" => $userAccount->dolla_balance + $investment->growth_amount,
            ]);

            $user = User::where("id", "=", $investment->user_id)->get()->first();
            $message_amount = ($investment->currency == "USD") ? number_format($investment->amount, 0, ".", ",") : $investment->amount;
            $message_growth_amount = ($investment->currency == "USD") ? number_format($investment->growth_amount, 0, ".", ",") : $investment->growth_amount;

            $details = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => $user->username,
                "content" => "Hello <b>$user->username!</b><br><br>
                            Your Investment  of  $message_growth_amount $investment->currency has been completed successfully   ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            $admindetails9 = [
                "appName" => config("app.name"),
                "title" => "Investment",
                "username" => "Admin",
                "content" => "Admin <b>$user->username!</b><br><br>
                                   Investment  of  $message_growth_amount $investment->currency has been completed successfully   ",
                "year" => date("Y"),
                "appMail" => config("app.email"),
                "domain" => config("app.url"),
            ];
            try {
                Mail::to($user->email)->send(new GeneralMailer($details));
                Mail::to(config("app.admin_mail"))->send(new GeneralMailer($admindetails9));
            } catch (\Exception $e) {
                //dsdssd
            }

            return response()->json(["success" => true, "message" => "Investment Successfully Completed"]);
        } elseif ($name == "edit") {
            $investment = Transaction::where("id", "=", $id)->get()->first();
            $validated = $request->validate([
                "message" => ["required"],
                "amount" => ["required", "numeric"],
                "growth_amount" => ["required", "numeric"],
                "duration" => ["required"],
                "percent_commission" => ["required"],
                "status" => ["required"],
            ]);
            $data = (object) $request->all();
            if ($data->status == 2 || $data->status == 3) {
                return view("admin.$name-investment", ["investment" => $investment, "error" => "You can't approve/decline an investment from this end, please select completed from the previous table"]);
            }
            $result = Transaction::where("id", "=", $id)->update([
                'message' => $data->message,
                'amount' => $data->amount,
                'growth_amount' => $data->growth_amount,
                'duration' => $data->duration,
                'duration' => $data->duration,
                'percent_commission' => $data->percent_commission,
                'status' => $data->status,
            ]);
            $investment = Transaction::where("id", "=", $id)->get()->first();

            if ($result) {
                return view("admin.$name-investment", ["investment" => $investment, "success" => "Investment Data Updated Successfully"]);
            } else {
                return view("admin.$name-investment", ["investment" => $investment, "error" => "Investment data failed to update"]);
            }
        }
    }

    public function walletAdmin(Request $request, $name = null, $id = 154)
    {
        if ($request->method() == "GET") {
            if (($name == "edit") || ($name == "view")) {
                $wallet = Account::select("users.firstname", "users.lastname", "users.email", "users.username", "accounts.*")->where("accounts.user_id", "=", $id)->leftJoin('users', 'accounts.user_id', '=', 'users.id')->get()->first();
                return view("admin.$name-wallet", ["account" => $wallet]);
            } else {
                $accounts = Account::select("users.firstname", "users.lastname", "users.email", "users.username", "users.country", "accounts.*")->leftJoin('users', 'accounts.user_id', '=', 'users.id')->orderBy("accounts.created_at", "desc")->get();
                return view("admin.wallet", ["accounts" => $accounts]);
            }
        }

        if ($name == "edit") {
            $wallet = Account::where("user_id", "=", $id)->get()->first();
            $data = (object) $request->all();
            $validated = $request->validate([
                'dolla_balance' => ["required", "numeric"],
                'ethereum_balance' => ["required", "numeric"],
                'bitcoin_balance' => ["required", "numeric"],
                'referral_balance' => ["required", "numeric"],
                'dolla_withdrawals' => ["required", "numeric"],
                'bitcoin_withdrawals' => ["required", "numeric"],
                'ethereum_withdrawals' => ["required", "numeric"],
                'dolla_invested' => ["required", "numeric"],
                'bitcoin_invested' => ["required", "numeric"],
                'ethereum_invested' => ["required", "numeric"],
                'dolla_earned' => ["required", "numeric"],
                'ethereum_earned' => ["required", "numeric"],
                'bitcoin_earned' => ["required", "numeric"],
                'deposits' => ["required", "numeric"],
                'bitcoin_address' => [],
                'usdt_address' => [],
                'ethereum_address' => [],
                'litecoin_address' => [],
            ]);

            $result = Account::where("user_id", "=", $id)->update([
                'dolla_balance' => $data->dolla_balance,
                'ethereum_balance' => $data->ethereum_balance,
                'bitcoin_balance' => $data->bitcoin_balance,
                'referral_balance' => $data->referral_balance,
                'dolla_withdrawals' => $data->dolla_withdrawals,
                'bitcoin_withdrawals' => $data->bitcoin_withdrawals,
                'ethereum_withdrawals' => $data->ethereum_withdrawals,
                'dolla_invested' => $data->dolla_invested,
                'bitcoin_invested' => $data->bitcoin_invested,
                'ethereum_invested' => $data->ethereum_invested,
                'dolla_earned' => $data->dolla_earned,
                'ethereum_earned' => $data->ethereum_earned,
                'bitcoin_earned' => $data->bitcoin_earned,
                'deposits' => $data->deposits,
                'bitcoin_address' => $data->bitcoin_address,
                'usdt_address' => $data->usdt_address,
                'ethereum_address' => $data->ethereum_address,
                'litecoin_address' => $data->litecoin_address,
            ]);
            $wallet = Account::where("user_id", "=", $id)->get()->first();
            if ($result) {
                return view("admin.$name-wallet", ["account" => $wallet, "success" => "wallet Data Updated Successfully"]);
            } else {
                // dd($wallet);
                return view("admin.$name-wallet", ["account" => $wallet, "error" => "wallet data failed to update"]);
            }
        }
    }

    public function usersAdmin(Request $request, $name = null, $id = null)
    {
        if ($request->method() == "GET") {
            if ($name == "edit-customer-profile") {
                $user = User::where("id", "=", $id)->get()->first();
                return view("admin.$name", ["user" => $user]);
            } elseif ($name == "view-profile") {
                $user = User::where("id", "=", $id)->get()->first();
                return view("admin.$name", ["user" => $user]);
            } elseif ($name == "change-customer-password") {
                $user = User::where("id", "=", $id)->get()->first();
                return view("admin.$name", ["user" => $user]);
            } else {
                $users = ($name == "allAdmin") ? User::where("role", "=", 1)->get() : User::where("role", "=", 0)->get();
                $usersWithCity = User::whereNotNull('city')->get();
                return view("admin.$name", ["users" => $users, 'usersWithCity' => $usersWithCity]);
            }
        }

        if ($name == "edit-customer-profile") {
            $user = User::where("id", "=", $id)->get()->first();
            $data = (object) $request->all();
            // dd($data);
            $validated = $request->validate([
                "firstname" => ["required"],
                "lastname" => ["required"],
                "username" => ["required", "unique:users,username,$user->id"],
                "email" => ["required", "unique:users,email,$user->id"],
                "country" => ["required"],
                "phone" => ["required", "unique:users,phone,$user->id"],
                "enable_or_disable_withdrawals" => ["nullable"],
                "withdrawal_message" => ["nullable"],
                "block_or_unblock_account" => ["nullable"],
                "block_account_message" => ["nullable"],
                // "verification_status" => ["nullable"],
                "pin" => ["required", "digits:6", "numeric"],
            ]);

            $result = User::where("id", "=", $id)->update([
                'firstname' => $data->firstname,
                'lastname' => $data->lastname,
                'username' => $data->username,
                'email' => $data->email,
                'country' => $data->country,
                'phone' => $data->phone,
                'pin' => $data->pin,
                'enable_or_disable_withdrawals' => $data->enable_or_disable_withdrawals,
                'withdrawal_message' => $data->withdrawal_message,
                'block_or_unblock_account' => $data->block_or_unblock_account,
                'block_account_message' => $data->block_account_message,
                // 'user_id_verification' => $data->verification_status,
            ]);
            $user = User::where("id", "=", $id)->get()->first();

            if ($result) {
                return view("admin.$name", ["user" => $user, "success" => "profile Data Updated Successfully"]);
            } else {
                return view("admin.$name", ["user" => $user, "error" => "profile data failed to update"]);
            }
        } elseif ($name == "delete") {
            $user = User::where("id", "=", $id)->get()->first();
            $user->delete();
            echo json_encode(["success" => true]);
        } elseif ($name == "change-customer-password") {
            $user = User::where("id", "=", $id)->get()->first();
            $data = (object) $request->all();
            $validated = $request->validate([
                "password" => ["required", "between:6,15"],
            ]);

            $result = User::where("id", "=", $id)->update([
                'password' => Hash::make($data->password),
            ]);
            $user = User::where("id", "=", $id)->get()->first();
            if ($result) {
                return view("admin.$name", ["user" => $user, "success" => "profile password Data Updated Successfully"]);
            } else {
                return view("admin.$name", ["user" => $user, "error" => "profile password data failed to update"]);
            }
        } elseif ($name == "suspend") {
            $result = User::where("id", "=", $id)->update([
                'status' => 2,
            ]);
            return response()->json(["success" => true, "message" => "User suspended successfully"]);
        } elseif ($name == "activate") {
            $result = User::where("id", "=", $id)->update([
                'status' => 1,
            ]);
            return response()->json(["success" => true, "message" => "User activation successfully"]);
        } elseif ($name == "make-admin") {
            $result = User::where("id", "=", $id)->update([
                'role' => 1,
            ]);
            return response()->json(["success" => true, "message" => "User made admin successfully"]);
        } elseif ($name == "unmake-admin") {
            $result = User::where("id", "=", $id)->update([
                'role' => 0,
            ]);
            return response()->json(["success" => true, "message" => "User  admin canceled successfully"]);
        }
    }

    public function plansAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            $plans = Plan::all();
            return view("admin.plan", ["plans" => $plans]);
        }
    }

    public function applicationAdmin(Request $request, $name = null)
    {
        if ($request->method() == "GET") {
            if ($name == "edit-application") {
                $app = Application::where("id", "=", 1)->get()->first();
                return view("admin.$name", ["app" => $app]);
            } else {
                $app = Application::where("id", "=", 1)->get()->first();
                return view("admin.application", ["app" => $app]);
            }
        }

        if ($name == "edit-application") {
            $data = (object) $request->all();
            $result = Application::where("id", "=", 1)->update([
                'bitcoin_address' => $data->bitcoin_address,
                'ethereum_address' => $data->ethereum_address,
                'btc_cash_address' => $data->btc_cash_address,
                'litecoin_address' => $data->litecoin_address,
                'binancecoin_address' => $data->binancecoin_address,
                'dodgecoin_address' => $data->dodgecoin_address,
                'usdt_address' => $data->usdt_address,

            ]);
            $app = Application::where("id", "=", 1)->get()->first();
            if ($result) {
                return view("admin.$name", ["app" => $app, "success" => "App  Data Updated Successfully"]);
            } else {
                return view("admin.$name", ["app" => $app, "error" => "App Data failed to update"]);
            }
        }
    }

    public function profileAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            $user = User::where("id", "=", $request->user()->id)->get()->first();
            return view("admin.profile", ["user" => $user]);
        }
    }

    public function logoutAdmin(Request $request)
    {
        /* for normal user logout */
        $userToLogout = User::find(auth()->user()->id);
        Auth::setUser($userToLogout);
        Auth::logout();
        return redirect()->route("admin.login");
    }

    public function editWalletAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-wallet");
        }
    }

    public function editCustomerProfileAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-customer-profile");
        }
    }

    public function editCustomerPasswordAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-customer-password");
        }
    }

    public function editPlanAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            $plan = Plan::where("id", "=", $id)->get()->first();
            if (empty($plan)) {
                abort(404);
            }
            return view("admin.edit-plan", ["plan" => $plan]);
        }
        $data = $request->all();
        $validated = $request->validate([
            "name" => ["required"],
            "min" => ["required", "numeric", "lt:max"],
            "max" => ["required", "numeric", "gt:min"],
            "type" => ["required"],
            "roi" => ["required"],
            "currency" => ["required"],
            "duration" => ["required"],
            "commission" => ["required", "numeric"],
        ]);
        unset($data["_token"], $data["edit-plan"]);
        $result = Plan::where("id", "=", $id)->update([
            'name' => $data['name'],
            "min" => ($data['currency'] == "USD") ? round($data['min'], 2) : $data['min'],
            "max" => ($data['currency'] == "USD") ? round($data['max'], 2) : $data['max'],
            'type' => $data['type'],
            'roi' => $data['roi'],
            'currency' => $data['currency'],
            'commission' => $data['commission'],
            'duration' => $data['duration'],
        ]);
        $plan = Plan::where("id", "=", $id)->get()->first();
        if ($result) {
            return view('admin.edit-plan', ["success" => "Plan updated successfully", "plan" => $plan]);
        } else {
            return view('admin.edit-plan', ["error" => "Plan Failed To update", "plan" => $plan]);
        }
    }

    public function deletePlanAdmin(Request $request, $id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        echo json_encode(["success" => true]);
    }

    public function addPlanAdmin(Request $request)
    {
        if ($request->method() == "GET") {
            return view("admin.add-plan");
        }
        $data = $request->all();
        $validated = $request->validate([
            "name" => ["required"],
            "plan_description" => ["required"],
            "min" => ["required", "numeric", "lt:max"],
            "max" => ["required", "numeric", "gt:min"],
            "type" => ["required"],
            "roi" => ["required"],
            "currency" => ["required"],
            "duration" => ["required"],
            "commission" => ["required", "numeric"],
            // "plan_image" => ["required"],
        ]);

        unset($data["_token"], $data["add-plan"]);
        $result = Plan::insert([
            'name' => $data['name'],
            'plan_description' => $data['plan_description'],
            "min" => ($data['currency'] == "USD") ? round($data['min'], 2) : $data['min'],
            "max" => ($data['currency'] == "USD") ? round($data['max'], 2) : $data['max'],
            'type' => $data['type'],
            'roi' => $data['roi'],
            'currency' => $data['currency'],
            'commission' => $data['commission'],
            'duration' => $data['duration'],
            // "plan_image" => $data["plan_image"],
        ]);

        if ($result) {
            return view('admin.add-plan', ["success" => "Plan Added successfully"]);
        } else {
            return view('admin.add-plan', ["error" => "Plan Failed To Add"]);
        }
    }

    public function fakeTransaction(Request $request, $name = null, $id = null)
    {
        if ($request->method() == "GET") {
            if ($name == "add") {
                return view("admin.add-fake-transaction");
            }

            $fakeTransactions = fakeTransaction::get();
            // $depositsfakeTransactions = fakeTransaction::where("type","=","deposits")->limit(10)->get();
            return view("admin.fake-transaction", ["fakeTransactions" => $fakeTransactions]);
        }

        if ($name == "add") {
            $data = (object) $request->all();
            $validated = $request->validate([
                "name" => ["required", "unique:fake_transactions,name"],
                "amount" => ["required"],
                "transaction_type" => ["required"],
                "currency" => ["required"],
            ]);

            $result = fakeTransaction::create([
                "name" => $data->name,
                "type" => $data->transaction_type,
                "currency" => $data->currency,
                "amount" => $data->amount,
            ]);

            if ($result) {
                return view("admin.add-fake-transaction", ["success" => "Transaction Added successfully"]);
            } else {
                return view("admin.add-fake-transaction", ["error" => "Transaction Failed To Add"]);
            }
        } else if ($name == "delete") {
            $data = (object) $request->all();

            $fake = fakeTransaction::where("id", "=", $id)->delete();

            echo json_encode(["success" => true]);
        }
    }

    public function editApplicationAdmin(Request $request, $id)
    {
        if ($request->method() == "GET") {
            return view("admin.edit-application");
        }
    }
}
