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
            'ImgPath' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $extension = request()->ImgPath->getClientOriginalExtension(); //副檔名
        $imageName = time() . "." . $extension;    //重新命名
        
        
        $path=request()->ImgPath->move(public_path().'/uploads', $imageName); //移動至指定目錄

        // if(isset($_FILES['ImgPath'])){ //如果表單夾帶檔案送出的話
        //     $filename = $_FILES['ImgPath']['name']; //抓出檔案的名字
        //     $tmp_name = $_FILES['ImgPath']['tmp_name'];//抓出檔案的站存名稱
        //     move_uploaded_file($tmp_name, "upload/$filename");//移動檔案到upload資料夾	
        // }


        // $imageName = time().'.'.request()->ImgPath->getClientOriginalExtension();       
        // request()->ImgPath->move(public_path('upload'), $imageName);
        
        Contact::create($request->all());

      return response()->json(['你已成功上傳頭像'], 200);

           

    }
    
    // public function getImageUrlAttribute()
    // {
    //     // 如果 image 字段本身就已经是完整的 url 就直接返回
    //     if (Str::startsWith($this->attributes['ImgPath'])) {
    //         return $this->attributes['ImgPath'];
    //     }
    //     return \Storage::disk('public\upload')->url($this->attributes['ImgPath']);
    // }

public function destroy($id)
{
    Contact::find($id)->delete();

    return response()->json(['刪除資料成功'], 200);
}
}
