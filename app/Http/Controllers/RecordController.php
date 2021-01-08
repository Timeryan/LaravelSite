<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function ListRecord()
    {
        return view('list-record', ['listRecord' => Record::all()]);

    }

    public function FullRecord($id)
    {
        return view('full-record', ['record' => Record::find($id)]);
    }

    public function SearchRecord(Request $request)
    {

        $record = new Record();
        return view('list-record',
            ['listRecord' => $record->
            where('title', 'like', '%' . $request->input('searchTitle') . '%')->get()]);

    }

    public function insert_base64_encoded_image($img)
    {
        $imageSize = getimagesize($img);
        $imageData = base64_encode(file_get_contents($img));
        return "<img src='data:{$imageSize['mime']};base64,{$imageData}' {$imageSize[3]} />";
    }

    public function PostRecord(Request $request)
    {
        $img = $request->file("srcImage");
        $imageSize = getimagesize($img);
        $imageData = base64_encode(file_get_contents($img));

        $record = new Record();
        $record->title = $request->input('title');
        $record->text = $request->input('text');
        $record->srcImage = 'data:' . $imageSize['mime'] . ';base64, ' . $imageData;

        $record->save();

        return redirect()->route('list-record');
    }
}
