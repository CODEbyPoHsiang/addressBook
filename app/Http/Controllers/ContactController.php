<?php

namespace App\Http\Controllers;

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
    Contact::create($request->all());

    return response()->json(['新增資料成功'], 200);
}

public function update(Request $request, $id)
{
    Contact::find($id)->update($request->all());

    return response()->json(['修改資料成功'], 200);
}

public function imageUploadPost(Request $request)

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $imageName = time().'.'.request()->image->getClientOriginalExtension();

       
        request()->image->move(public_path('upload'), $imageName);

        Contact::create($request->all());

      return response()->json(['你已成功上傳頭像'], 200);

           

    }

public function destroy($id)
{
    Contact::find($id)->delete();

    return response()->json(['刪除資料成功'], 200);
}
}
