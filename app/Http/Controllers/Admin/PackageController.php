<?php

namespace App\Http\Controllers\Admin;
use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
// use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;

class PackageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth:admin']);
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'photo' => ['required','mimes:jpeg,bmp,png,jpg'],
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required','string', 'max:2255'],
            'made_in' => ['required', 'string', 'max:50'],
            'tailor' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string', 'max:50'],
            'link' => ['required'],
        ]);
    }

    public function updatevalidator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required','string', 'max:2255'],
            'made_in' => ['required', 'string', 'max:50'],
            'tailor' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string', 'max:50'],
            'link' => ['required'],
        ]);
    }

    function show_package_list()
    {
        $packages = Package::all();
        return view('admin.package.list',compact('packages'));
    }
    public function getAllPackages(Request $request) {
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

      $totalRecords = Package::select('count(*) as allcount')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                    ->orWhere('photo', 'like', '%' . $searchValue . '%')
                    ->orWhere('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%')
                    ->orWhere('made_in', 'like', '%' . $searchValue . '%')
                    ->orWhere('tailor', 'like', '%' . $searchValue . '%')
                    ->orWhere('price', 'like', '%' . $searchValue . '%')
                    ->orWhere('link', 'like', '%' . $searchValue . '%');
          })
          ->count();
      $totalRecordswithFilter = $totalRecords;

      $records = Package::orderBy($columnName, $columnSortOrder)
          ->orderBy('created_at', 'desc')
          ->where(function ($query) use ($searchValue) {
              $query->where('id', 'like', '%' . $searchValue . '%')
                    ->orWhere('photo', 'like', '%' . $searchValue . '%')
                    ->orWhere('title', 'like', '%' . $searchValue . '%')
                    ->orWhere('description', 'like', '%' . $searchValue . '%')
                    ->orWhere('made_in', 'like', '%' . $searchValue . '%')
                    ->orWhere('tailor', 'like', '%' . $searchValue . '%')
                    ->orWhere('price', 'like', '%' . $searchValue . '%')
                    ->orWhere('link', 'like', '%' . $searchValue . '%');
          })
          ->select('packages.*')
          ->skip($start)
          ->take($rowperpage)
          ->get();
      //    return $records;
      $data_arr = array();

      foreach ($records as $record) {
          $data_arr[] = array(
              "id" => $record->id,
              "photo" => $record->photo,
              "title" => $record->title,
              "description" => $record->description,
              "made_in" => $record->made_in,
              "tailor" => $record->tailor,
              "price" => $record->price,
              "link" => $record->link,
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

    function add_package_data()
    {
        return view('admin.package.create');
    }

    function store_package_data(Request $request)
    {
      // dd("package");
        $valid=$this->validator($request->except('_token'));
        if( $valid->fails())
        {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        // dd($request->photo);
        if ($request->hasfile('photo')) {
          $manager = new ImageManager(['driver' => 'imagick']);
          $photo = $request->photo->hashName();
          $path = 'frontend/package/'. $photo;
          $manager->make($request->photo)
          ->resize(300,300)
          ->save(public_path($path));

            // old store file
            // $photo = $request->photo;
            // $name = $photo->getClientOriginalName();

            // $photo->move(public_path() . '/frontend/package/', $photo);

            // $photo = $name;
            // end old
        }
        // dd($photo);
        $package = Package::create([
            'photo' => $photo,
            'title' => $request->title,
            'description' => $request->description,
            'made_in' => $request->made_in,
            'tailor' => $request->tailor,
            'price' => $request->price,
            'link' => $request->link,
        ]);
        return redirect()->route('package_list')->with('success','Your Package is successfully Created');
    }

    function delete_package_list(Request $request)
    {
        $delete_package = Package::find($request->package_id);
        $delete_package->delete();
        return response()->json("success");
    }


    public function edit_package($id){
        $package = Package::findOrFail($id);
        return view('admin.package.edit',compact('package'));
    }
    function update_package_list(Request $request,$id)
    {
        // dd($request->id);
        $valid=$this->updatevalidator($request->except('_token'));
        if( $valid->fails())
        {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        $update_package = Package::findOrFail($id);
        // dd($request->all());

        // dd($photo);

        $update_package->title = $request->title;
        $update_package->description = $request->description;
        $update_package->made_in = $request->made_in;
        $update_package->tailor = $request->tailor;
        $update_package->price = $request->price;
        $update_package->link = $request->link;
        if ($request->file('photo')) {

            if (File::exists(public_path($update_package->photo))) {
                File::delete(public_path($update_package->photo));
            }

            $photo = time() . '1.' . $request->file('photo')->getClientOriginalExtension();
            $get_path = $request->file('photo')->move(public_path('/frontend/package'), $photo);
             $update_package->photo = $photo;

        }
       $result = $update_package->update();
        return redirect()->route('package_list')->with('success','Your Package is successfully Updated');
    }

}

