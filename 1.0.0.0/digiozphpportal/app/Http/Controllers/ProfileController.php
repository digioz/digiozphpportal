<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();

        return view('profile.index', compact('profile'));
    }

    public function changepassword()
    {
        return view('profile.changepassword');
    }

    public function changepassword_rules(array $data)
    {
      $messages = [
        'oldpassword.required' => 'Please enter current password',
        'newpassword.required' => 'Please enter new password',
      ];

      $validator = Validator::make($data, [
        'oldpassword' => 'required',
        'newpassword' => 'required|same:newpassword',
        'newpasswordconfirm' => 'required|same:newpassword',
      ], $messages);

      return $validator;
    }

    public function changepasswordprocess(Request $request)
    {
        if(Auth::Check())
        {
            $request_data = $request->All();
            $validator = $this->changepassword_rules($request_data);

            if($validator->fails())
            {
                //return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
                return redirect()->back()->withErrors($validator)->withInput();
            }
            else
            {
                $current_password = Auth::User()->password;

                if(Hash::check($request_data['oldpassword'], $current_password))
                {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['newpassword']);;
                    $obj_user->save();
                    //return "ok";
                    return redirect()->to('profile');
                }
                else
                {
                    $error = array('oldpassword' => 'Please enter correct current password');
                    //return response()->json(array('error' => $error), 400);
                    return redirect()->back()->withErrors($validator)->withInput();
                }
            }
        }
        else
        {
            return redirect()->to('/');
        }

        return view('profile.changepassword');
    }

    public function update(Request $request, $id)
    {
        if(Auth::Check())
        {
            $user_id = Auth::User()->id;
            $request->merge(array('user_id' => $user_id));

            // Update email if needed
            $email = $request->input('email');
            // TODO - Update Email

            // Set to false if birthday_visible not checked
            if ($request->input('birthday_visible') == null)
            {
                $request->request->add(['birthday_visible' => false]);
            }

            Profile::find($id)->update($request->all());
            return redirect()->route('profile.index')
                            ->with('success','Profile updated successfully');
        }
        else
        {
            return redirect()->to('/');
        }

        return view('home');
    }
}
