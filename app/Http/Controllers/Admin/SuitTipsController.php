<?php


namespace App\Http\Controllers\Admin;
use App\SuitTips;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;

class SuitTipsController extends Controller
{
    //
    public function validator(array $data)
    {
        return Validator::make($data, [
            'photo' => ['required','mimes:jpeg,bmp,png,jpg'],
            'brand' => ['required', 'string', 'max:50'],
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required'],
        ]);
    }

    public function updatevalidator(array $data)
    {
        return Validator::make($data, [
            'brand' => ['required', 'string', 'max:50'],
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required'],
        ]);
    }

    public function show_suit_tip_list()
    {
      $suit_tips = SuitTips::all();
      return view('admin.suit_tip.list',compact('suit_tips'));
    }
    public function getAllSuits(Request $request) {
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

      $totalRecords = SuitTips::select('count(*) as allcount')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                    ->orWhere('photo', 'like', '%' . $searchValue . '%')
                    ->orWhere('brand', 'like', '%' . $searchValue . '%')
                    ->orWhere('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%')
                    ->orWhere('feature', 'like', '%' . $searchValue . '%');
          })
          ->count();
      $totalRecordswithFilter = $totalRecords;

      $records = SuitTips::orderBy($columnName, $columnSortOrder)
          ->orderBy('created_at', 'desc')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                    ->orWhere('photo', 'like', '%' . $searchValue . '%')
                    ->orWhere('brand', 'like', '%' . $searchValue . '%')
                    ->orWhere('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%')
                    ->orWhere('feature', 'like', '%' . $searchValue . '%');
          })
          ->select('suit_tips.*')
          ->skip($start)
          ->take($rowperpage)
          ->get();
      //    return $records;
      $data_arr = array();

      foreach ($records as $record) {
          $data_arr[] = array(
              "id" => $record->id,
              "photo" => $record->photo,
              "brand" => $record->brand,
              "title" => $record->title,
              "description" => $record->description,
              "feature" => $record->feature,
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
    public function add_suit_tip_data()
    {
      return view('admin.suit_tip.create');
    }
    public function store_suit_tip_data(Request $request)
    {
        $valid=$this->validator($request->except('_token'));
        if( $valid->fails())
        {   
            return redirect()->back()->withErrors($valid)->withInput();
        }
      if ($request->hasfile('photo')) {
        $manager = new ImageManager(['driver' => 'imagick']);
        $photo = $request->photo->hashName();
        $path = '/assets/images/suit_tip/'. $photo;
        $manager->make($request->photo)
        ->resize(499,276)
        ->save(public_path($path));

          // old store file
          // $photo = $request->photo;
          // $name = $photo->getClientOriginalName();

          // $photo->move(public_path() . '/frontend/package/', $photo);

          // $photo = $name;
          // end old
      }

      if($request->feature){
        $feature = "Yes";
      }else{
        $feature = "NO";
      }
      SuitTips::create([
        'photo' => $photo,
        'brand' => $request->brand,
        'title' => $request->title,
        'description' => $request->description,
        'feature' => $feature,
        'admin' => Auth::guard('admin')->user()->name,
      ]);
      return redirect()->route('suit_tip_list')->with('success','Your SuitTip is successfully Created');
    }

    public function delete_suit_tip(Request $request)
    {
        $delete_suit_tip = SuitTips::find($request->suit_tip_id);
        $delete_suit_tip->delete();
        return response()->json("success");
    }
    public function edit_suit_tip($id){
      $suit_tip = SuitTips::findOrFail($id);
      return view('admin.suit_tip.edit',compact('suit_tip'));
  }
  function update_suit_tip_list(Request $request,$id)
  {
      // dd($request->id);
      $valid=$this->updatevalidator($request->except('_token'));
      if( $valid->fails())
      {   
          return redirect()->back()->withErrors($valid)->withInput();
      }
      $update_suit_tip = SuitTips::findOrFail($id);
      // dd($request->all());
     
      // dd($photo);
      if($request->feature){
        $feature = "Yes";
      }else{
        $feature = "NO";
      }
      $update_suit_tip->brand = $request->brand;
      $update_suit_tip->title = $request->title;
      $update_suit_tip->description = $request->description;
      $update_suit_tip->feature = $feature;
      
      if ($request->file('photo')) {
       
          if (File::exists(public_path($update_suit_tip->photo))) {
              File::delete(public_path($update_suit_tip->photo));
          }
          $manager = new ImageManager(['driver' => 'imagick']);
        //   $photo = time() . '1.' . $request->file('photo')->getClientOriginalExtension();
          // $get_path = $request->file('photo')->move(public_path('/frontend/package'), $photo);
           $photo = $request->file('photo')->hashName();
          
          $path = '/assets/images/suit_tip/'. $photo;
          
          $manager->make($request->file('photo'))
          ->resize(499,276)
          ->save(public_path($path));
        //   return dd($photo);
           $update_suit_tip->photo = $photo;
         

      }
      
     $result = $update_suit_tip->update();
      return redirect()->route('suit_tip_list')->with('success','Your SuitTip is successfully Updated');
  }

}
