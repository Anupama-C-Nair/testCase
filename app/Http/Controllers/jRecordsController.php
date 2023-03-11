<?php

namespace App\Http\Controllers;

use App\Models\jTable;
use Illuminate\Http\Request;

class jRecordsController extends Controller
{
    public function index(Request $request){
        //$record = jTable::all();
              
        return view('jRecords.listRecords');
    }
    public function listRecord(Request $request){
        $record = jTable::all();
        $TotalRecordCount = jTable::count();
        
        return response()->json(['Result' => 'OK', 'Records' => $record, "TotalRecordCount" => $TotalRecordCount ]);
    }
    public function createRecord(Request $request){
       
            $record = new jTable();
            $record->name = $request->input('name');
            $record->city = $request->input('city');
            $record->save();
            return response()->json(['Result' => 'OK', 'Record' => $record]);
        
    
    }
}
