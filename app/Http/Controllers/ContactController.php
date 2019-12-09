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
        //副檔名命名
        $extension = request()->ImgPath->getClientOriginalExtension(); 
        //檔名命名(不含副檔名)
        $imageReal = request()->ImgPath->getClientOriginalName();
        //(將上方的檔名+副檔名合併成第一次完整檔名)
        $imageName = time() . "." . $extension;    
        //圖片檔名搬移的路徑及搬移到指定資料夾
        $img1path = request()->ImgPath->move(('../../images/'), $imageName);
        //第二次變更檔案名字，指定成使用者想要的檔案名稱
        $img1_name = "." . "." . "/" . "images" . "/" . $imageName;
        Contact::insert(
            [
                 'ImgPath' =>  $img1_name,
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
