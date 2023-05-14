<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminRegisterController extends Controller
{
    //
    public function show_list(){
        // $admins = Admin::all();
        // return view('admin.adminregister.list',compact('admins'));
        return view('admin.adminregister.list');
    }

    public function getAllAdmins(Request $request) {
      $draw = $request->get('draw');
      $start = $request->get("start");
      $rowperpage = $request->get("length"); // total number of rows per page

      $columnIndex_arr = $request->get('order');
      $columnName_arr = $request->get('columns');
      $order_arr = $request->get('order');
      $search_arr = $request->get('search');

      $columnIndex = $columnIndex_arr[0]['column']; // Column index
      $columnName = $columnName_arr[$columnIndex]['data']; // Column name
      $columnSortOrder = $order_arr[0]['dir']; // asc or desc
      $searchValue = $search_arr['value']; // Search value

      $totalRecords = Admin::select('count(*) as allcount')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                  ->orWhere('name', 'like', '%' . $searchValue . '%')
                  ->orWhere('email', 'like', '%' . $searchValue . '%');
          })
          ->count();
      $totalRecordswithFilter = $totalRecords;

      $records = Admin::orderBy($columnName, $columnSortOrder)
          ->orderBy('created_at', 'desc')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                  ->orWhere('name', 'like', '%' . $searchValue . '%')
                  ->orWhere('email', 'like', '%' . $searchValue . '%');
          })
          ->select('admins.*')
          ->skip($start)
          ->take($rowperpage)
          ->get();
      //    return $records;
      $data_arr = array();

      foreach ($records as $record) {
          $data_arr[] = array(
              "id" => $record->id,
              "name" => $record->name,
              "email" => $record->email,
              "action" => $record->id,
              "created_at" => date('F d, Y ( h:i A )', strtotime($record->created_at)),
          );
      }

      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordswithFilter,
          "aaData" => $data_arr,
      );
      echo json_encode($response);
    }

    public function create_admin_register(){
            return view('admin.adminregister.create');
    }
    public function edit_admin_register($id){
            $admins = Admin::findorfail($id);
            return view('admin.adminregister.edit',compact('admins'));
    }
}
