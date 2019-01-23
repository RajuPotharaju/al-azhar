<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    

    public function addProfile(){
    	$data = \Alazhar\AboutUsProfile::find(1);
    	$user_name = Auth()->user()->name;
    	return view('aboutus.profile.add_profile')->with('user_name',$user_name)->with('data',$data);
    }

    public function storeProfile(\Alazhar\Http\Requests\SaveAboutUsProfile $request){

            $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
            $file = $request->file('profile_image');
            $upload = $file->move(base_path('public/imgs/profiles'));
            $attachment['attachment'] = substr($file,5,strlen($file)-1);
            //save file name to DB:
            $saving_files = \Alazhar\Attachments::where('id',28)->update($attachment);

    		$request = $request->except('_token','form_botcheck','profile_image');
            $request['attachment_id'] = 28;

    		$is_profile_created = \Alazhar\AboutUsProfile::where('id',1)->update($request);

    		if(isset($is_profile_created) && $is_profile_created>0){
    				return redirect()->route('addoreditProfile')->with('status', 'Profile has been added/updated successfully.');
    		}else{
    				return redirect()->route('addoreditProfile')->with('status', 'Something went wrong.');
    		}
    }

     public function addMessages(){
        $data = \Alazhar\AboutUsMessages::find(1);
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data);
    }

    

    public function addChairManMessages(){
         $page_title = 'Add/Edit Chairman\'s Message';
         $role_id = 3;
         $data = \Alazhar\AboutUsMessages::where('role_id',$role_id)->get();//first()->value('id');
         $data = current($data->toArray());
         $name_field_label = "Chairman Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label)->with('role_id',$role_id);

    }

    public function addCeoMessages(){
        $page_title = 'Add/Edit CEO\'s Message';
        $role_id = 6;
        $data = \Alazhar\AboutUsMessages::where('role_id',$role_id)->get();//first()->value('id');
        $data = current($data->toArray());
        $name_field_label = "CEO Name";
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label)->with('role_id',$role_id);

    }

    public function addGmMessages(){
        $page_title = 'Add/Edit General Manager\'s Message';
        $name_field_label = "General Manager Name";
        $role_id = 5;
        $data = \Alazhar\AboutUsMessages::where('role_id',$role_id)->get();//first()->value('id');
        $data = current($data->toArray());
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label)->with('role_id',$role_id);
    }
    public function addDgmMessages(){
         $page_title = 'Add/Edit Deputy General Manager\'s Message';
         $name_field_label = "Deputy General Manager Name";
         $role_id = 7;
         $data = \Alazhar\AboutUsMessages::where('role_id',$role_id)->get();//first()->value('id');
         $data = current($data->toArray());
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label)->with('role_id',$role_id);

    }
    public function addTomDirMessages(){
        $page_title = 'TQM Director\'s Message';
        $name_field_label = "TQM Director Name";
        $role_id = 8;
        $data = \Alazhar\AboutUsMessages::where('role_id',$role_id)->get();//first()->value('id');
        $data = current($data->toArray());
        $user_name = Auth()->user()->name;
        return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label)->with('role_id',$role_id);

    } 
    public function addMedDirMessages(){
         $page_title = 'Medical Director\'s Message';
         $name_field_label = "Medical Director Name";
         $role_id = 10;
         $data = \Alazhar\AboutUsMessages::where('role_id',$role_id)->get();//first()->value('id');
         $data = current($data->toArray());
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label)->with('role_id',$role_id);

    } 
     public function misandvis(){
         $data = \Alazhar\AboutUsMessages::find(8);
         $page_title = 'Medical Director\'s Message';
         $name_field_label = "Medical Director Name";
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_message')->with('user_name',$user_name)->with('data',$data)->with('page_title',$page_title)->with('name_field_label',$name_field_label);

    } 
    public function addManagemen(){
         
         $page_title = 'Management';
         $user_name = Auth()->user()->name;
         return view('aboutus.messages.addoredit_managementessage')->with('user_name',$user_name)->with('page_title',$page_title);

    }

    public function storeMessages(\Alazhar\Http\Requests\AboutUsMessages $request){
 
            //check if the record exists with that role id if so go fetch the image id and update the new image into it if not create a new image record.
            $data = \Alazhar\AboutUsMessages::where('role_id',$request->role_id)->get();//first()->value('id');
            $data = current($data->toArray());
            if(!empty($data)){
                $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
                $file = $request->file('profile_image');
                $upload = $file->move(base_path('public/imgs/profiles'));
                $attachment['attachment'] = substr($file,5,strlen($file)-1);
                //save file name to DB:
                $saving_files = \Alazhar\Attachments::where('id',28)->update($attachment);

                $request = $request->except('_token','form_botcheck','profile_image');
           
                $is_profile_created = \Alazhar\AboutUsMessages::where('role_id',$request['role_id'])->update($request);

            }else{
                $uniqueFileName = uniqid() . $request->file('profile_image')->getClientOriginalName() . '.' . $request->file('profile_image')->getClientOriginalExtension();
                $file = $request->file('profile_image');
                $upload = $file->move(base_path('public/imgs/profiles'));
                $attachment['attachment'] = substr($file,5,strlen($file)-1);
                //save file name to DB:
                $saving_files = \Alazhar\Attachments::create($attachment);
                $request['attachment_id'] = $saving_files->id;
                $request = $request->except('_token','form_botcheck','profile_image');
                $is_profile_created = \Alazhar\AboutUsMessages::create($request);

            }
            
            if(isset($is_profile_created->id) && $is_profile_created->id){
                    return redirect()->route('home')->with('status', 'Chair Man Message has been added/updated successfully.');
            }else{
                    return redirect()->route('home')->with('status', 'Something went wrong.');
            }
        
    } 
}
