<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;
use Intervention\Image\Facades\Image as Image;

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
            $user = User::where('id', $user_id)->first();
            $email = $request->input('email');

            if ($user->email != $email)
            {
                $user->email = $email;
                $user->update($request->only(['email']));
            }

            // Set to false if birthday_visible not checked
            if ($request->input('birthday_visible') == null)
            {
                $request->request->add(['birthday_visible' => false]);
            }

            // Check if there is a Gravatar option selected
            if ($request->input('usegravatar') == true)
            {
                $eml = $user->email;
                $gravemail = md5( strtolower( trim( $eml ) ) );
                $gravsrc = "http://www.gravatar.com/avatar/".$gravemail."?size=120";
                $gravcheck = "http://www.gravatar.com/avatar/".$gravemail."?d=404&size=120";
                $response = get_headers($gravcheck);
                $grav_img = "";

                if ($response[0] != "HTTP/1.0 404 Not Found"){
                    $grav_img = $gravsrc;
                }

                $image_ext = "jpeg";
                $image_name = time().'.'.$image_ext;

                $destinationPath = public_path('/images/avatar/full');
                copy($grav_img, $destinationPath .'/'.$image_name);

                $destinationPath = public_path('/images/avatar/thumb');
                copy($grav_img, $destinationPath .'/'.$image_name);

                $request->merge(array('avatar' => $image_name));
            }
            else
            {
                // Make sure it is an image
                $this->validate($request, [
                    'image' => 'sometimes|mimes:jpg,jpeg,bmp,png,gif|max:10000',
                ]);

                $image = $request->file('image');

                if ($image != null)
                {
                    $image_ext = $image->getClientOriginalExtension();

                    $image_name = time().'.'.$image_ext;
                    $destinationPath = public_path('/images/avatar/full');

                    // Add full sized image
                    $image->move($destinationPath, $image_name);

                    // Put together the thumbnail image path
                    $thumb_path = public_path('/images/avatar/thumb').'/'.$image_name;

                    // open the full image file and read it, converting it to an intervention image
                    $img = Image::make($destinationPath . '/'. $image_name);

                    // resize image instance
                    $img->resize(120, 120);

                    // save image in desired format
                    $img->save($thumb_path);

                    $request->merge(array('avatar' => $image_name));
                }
            }

            Profile::find($id)->update($request->all());
            return redirect()->route('home')
                            ->with('success','Profile updated successfully');
        }
        else
        {
            return redirect()->to('/');
        }

        return redirect()->route('home');
    }
}
