<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as LaravelController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Person;
use App\Models\Country;


class UserAccountController extends LaravelController{

    private $data = array();

    public function profile(){
        $user = \Auth::User();
        $this->data["bloods"] = Person::BloodTypes();
        $this->data["maritals"] = Person::MaritalStatus();
        $this->data["countries"] = Country::all();
        $this->data["profile"] = $user->Profile;
        $this->data["title"] = "Change Profile";
        $this->data["subtitle"] = "Personal Info";
        $this->data["module"] = "User Profile";
        return view("app.backend.user-account.profile", $this->data);
    }

    public function account(){
        $this->data["user"] = \Auth::User();
        $this->data["title"] = "Change Account";
        $this->data["subtitle"] = "Personal Account";
        $this->data["module"] = "User Account";
        return view("app.backend.user-account.account", $this->data);
    }

    public function password(){
        $this->data["title"] = "Change Password";
        $this->data["subtitle"] = "Password Account";
        $this->data["module"] = "User Account";
        return view("app.backend.user-account.password", $this->data);
    }

    public function profileUpdate(Request $request){
        $user = \Auth::user();
        $user_id = $user->id;
        $profile = Person::where("user_id", $user_id)->first();
        $profile->first_name = $request->get("first_name") ? $request->get("first_name") : null;
        $profile->last_name = $request->get("last_name") ? $request->get("last_name") : null;
        $profile->gender = $request->get("gender") ? $request->get("gender") : null;
        $profile->blood_type = $request->get("blood_type") ? $request->get("blood_type") : null;
        $profile->marital_status = $request->get("marital_status") ? $request->get("marital_status") : null;
        $profile->postal_code = $request->get("postal_code") ? $request->get("postal_code") : null;
        $profile->fax_number = $request->get("fax_number") ? $request->get("fax_number") : null;
        $profile->birth_place = $request->get("birth_place") ? $request->get("birth_place") : null;
        $profile->birth_date = $request->get("birth_date") ? $request->get("birth_date") : null;
        $profile->address = $request->get("address") ? $request->get("address") : null;
        $profile->country_id = $request->get("country_id") ? $request->get("country_id") : null;
        $profile->about_me = $request->get("about_me") ? $request->get("about_me") : null;
        $profile->save();
        return redirect()->route("admin.personal.profile")->with('success','Success, your profile account has changed.');
    }

    public function passwordUpdate(Request $request){
        $rules = array(
            "password"=> "required",
            "new_password"=> "required|string|min:6|confirmed",
        );
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $user = \Auth::User();
            $password = $request->get("password");
            if(!\Hash::check($password, $user->password)) {
                return back()->withErrors(['password' => ['The current password you entered is incorrect. Please try again.']]);
            }else{
                $user->password = bcrypt($request->get('new_password'));
                $user->save();
                \Auth::logout();
                return redirect()->route("login")->with('success','Your password has changed. Please log in again.');
            }
        }else{
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
    }

    public function accountUpdate(Request $request){
        $user = \Auth::user();
        $id = $user->id;
        $rules = array(
            'username' => 'required|alpha_dash|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
        );
        if($request->get('phone')) $rules["phone"] = 'required|regex:/^[0-9]+$/|unique:users,phone,'.$id;
        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $user->username = $request->get("username");
            $user->email = $request->get("email");
            if($request->get("phone")){
                $user->phone = $request->get("phone");
            }
            $user->save();
            return redirect()->route("admin.personal.account")->with('success','Success, your personal account has changed.');
        }else{
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
    }

}