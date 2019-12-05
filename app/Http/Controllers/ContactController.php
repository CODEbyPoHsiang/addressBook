<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    } //

    public function show($id)
{
   return Contact::find($id);
}






public function store(Request $request)
{
    // request()->validate([
    //     'ImgPath' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);
    // $extension = request()->ImgPath->getClientOriginalExtension(); 
    // $imageName = time() . "." . $extension;    
    // request()->ImgPath->move(public_path('images'), $imageName);
    
    Contact::create($request->all());

    return response()->json(['新增資料成功'], 200);
}

public function update(Request $request, $ID)
{
    Contact::find($id)->update($request->all());

    return response()->json(['修改資料成功'], 200);
}

public function imageUploadPost(Request $request)

    {   
        request()->validate([
            'ImgPath' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $extension = request()->ImgPath->getClientOriginalExtension(); 
        $imageName = time() . "." . $extension;    
        $img1path = request()->ImgPath->move(('images'), $imageName);

        Contact::insert(
            [
                 'ImgPath' =>  $img1path,
            ]
        );

        // Contact::create($request->all());
        return response()->json(['你已成功上傳頭像'], 200);

        
    }
    
    

public function destroy($id)
{
    Contact::find($id)->delete();

    return response()->json(['刪除資料成功'], 200);
}
}
