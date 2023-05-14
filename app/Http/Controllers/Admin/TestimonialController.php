<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facade\Repair;
use Illuminate\Support\Facades\Validator;
use App\Testimonial;
use App\Http\Requests\testimonailImageRequest;
class TestimonialController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }
    //
    function show_testimonial_list()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.list',compact('testimonials'));
    }
    public function getAllTestimonials(Request $request) {
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

      $totalRecords = Testimonial::select('count(*) as allcount')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                    ->orWhere('photo', 'like', '%' . $searchValue . '%')
                    ->orWhere('name', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%');
          })
          ->count();
      $totalRecordswithFilter = $totalRecords;

      $records = Testimonial::orderBy($columnName, $columnSortOrder)
          ->orderBy('created_at', 'desc')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                    ->orWhere('photo', 'like', '%' . $searchValue . '%')
                    ->orWhere('name', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%');
          })
          ->select('testimonials.*')
          ->skip($start)
          ->take($rowperpage)
          ->get();
      //    return $records;
      $data_arr = array();

      foreach ($records as $record) {
          $data_arr[] = array(
              "id" => $record->id,
              "photo" => $record->photo,
              "name" => $record->name,
              "description" => $record->description,
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
    function add_testimonial_data()
    {
        return view('admin.testimonial.create');
    }
    function store_testimonial_data(testimonailImageRequest $request)
    {
        // dd($request->all());
        $folderPath = public_path().'/frontend/testimonial/';
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->photo = Repair::encode($request->photo,$folderPath);
        $testimonial->save();
         return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    function delete_testimonial_list(Request $request)
    {
        $delete_test = Testimonial::find($request->test_id);
        $delete_test->delete();
        return response()->json("success");
    }
    public function edit_testimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }
    function update_testimonial_list(Request $request,$id)
    {
        // dd($request->id);
        $folderPath = public_path().'/frontend/testimonial/';
        $update_testimonial = Testimonial::findOrFail($id);
        $update_testimonial->name = $request->name;
        $update_testimonial->description = $request->description;
        if($request->photo){
        $update_testimonial->photo = Repair::encode($request->photo,$folderPath);
        }
        $updateSuccess = $update_testimonial->update();
        alert()->success("Successfully Updated testimonial!");
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
}
