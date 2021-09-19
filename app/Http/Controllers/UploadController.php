<?php

namespace App\Http\Controllers;

use App\Models\Studen;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function Store(Request  $request)
    {



        if ($request->file('file')) {
            $files = $request->file('file');

            if (!is_array($files)) {
                $files = [$files];
            }



            for ($i = 0; $i < count($files); $i++) {

                $file = $files[$i];
                $fileName = $file->getClientOriginalName();

                // $fileName = str_replace(' ', '', $fileName);

                $fileNames = explode('.', $fileName);

                $code = Studen::where('code', $fileNames[0])->get()[0];

                $file->storeAs('uploads', $code->sitting_number . '' . '.jpg');
            }



            return response()->json(['messages' => 'uploding images'], 200);
        } else {
            return response()->json(['error' => 'error uploding images'], 200);
        }
    }
}
