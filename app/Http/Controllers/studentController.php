<?php
namespace App\Http\Controllers;
use App\Models\presherStudent;
use Illuminate\Http\Request;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // return presherStudent::all();

        // $data['student'] = presherStudent::all();
        $data['student'] = presherStudent::orderBy('id', 'asc')->paginate(10);
        return view('home.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.create');
        // return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request->validate(
            ['name'=>'required',
                'gender'=>'required',
                'salary'=>'required',
                'desig'=>'required',
            ]);
        // echo "Worked !!";
        $data = new presherStudent();
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->salary = $request->input('salary');
        $data->designation = $request->input('desig');
        $data->designation = $request->input('desig');

        // $img = $request->file('image_name');
        // $name = $img->getClientOriginalName();
        // $filename = 'public/images/' . $name;
        $filename = time().'.'.$request->image_name->getClientOriginalName();  
        $request->image_name->move(public_path('images'), $filename);
        // return back()->with('success','You have successfully upload image.')->with('image',$imageName); 
        $data->image_name = $filename;
        $data->save();
        return redirect('employee')->with('insert_message',' Data Inserted Successfully !!')->with('image',$filename);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    //    echo presherStudent::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = presherStudent::find($id);
        // return $data;
        return view('home.edit',['stud' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
        $data = presherStudent::find($id);
        
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->salary = $request->input('salary');
        $data->designation = $request->input('designation');
        
        $filename = time().'.'.$request->image_name->getClientOriginalName();  
        $request->image_name->move(public_path('images'), $filename);
        $data->image_name = $filename;
        $data->save();

        return redirect('/employee')->with('insert_message',' Data Updated Successfully !!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = presherStudent::find($id);
        $data->delete();
        return redirect('/employee')->with('insert_message',' Data Deleted Successfully !!');
    }
}
