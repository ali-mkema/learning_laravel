<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateEmpRequest; 
use App\Http\Requests\UpdateEmpRequest;
use App\Models\emp;
use App\Traits\HttpResponses;

class EmpController extends Controller
{
    use HttpResponses;
    //
    public function createEmp(Request $request){
        return view('pages.about', ['title2'=>"jaribu"]);
    } 
        // function to Insert employee
    public function create(CreateEmpRequest $request){
       
        $request->validated();
        $model = new emp();
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->gender = $request->gender;
        $model->nationality = $request->nationality;
        $model->address = $request->address;
        $model->department = $request->department;
        
           if($model->save()) {
            return redirect('emp/create-emp')->with ('success', 'Data added');
           }
            return redirect()->route('create-emp')-> with ('error', 'Problem on saving data');
    } 
    
    //Function to retrieve data
    public function index(request $request){
        $items = emp::get();
        return view('pages.index', ['items'=>$items]);
    }

    //Delete function
    public function destroy($id)
    {
        $employee = emp::find($id);

        if ($employee) {
            $employee->delete();
            return redirect('emp/list-emp')->with('success', 'Employee deleted successfully');
        } else {
            return redirect('emp/list-emp')->with('error', 'Employee not found');
        }
    }  


 //modify function
    public function modify($id)
    {
        $employee = emp::find($id);
        return view('pages.update', ['items'=>$employee, 'title2'=>"Update EMP Info"]);
    
    }

    //Update
    public function update(UpdateEmpRequest $request)
    {
        $employee = emp::find($request->id);
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->gender=$request->gender;
        $employee->nationality=$request->nationality;
        $employee->address=$request->address;
        $employee->department=$request->department;

        if ($employee->update()) {
            return redirect('emp/list-emp')->with('success', 'Employee deleted successfully');
        } else {
            return redirect('emp/list-emp')->with('error', 'Employee not found');
        }
    }  


    // API FUNCTION
    public function empList(request $request){
        $data = emp::where('id', $request->ido)->get();
        if($data){
            return $this->success($data, 'Successful', 200);
        }
        return $this->error('', 'Problem in fetching data', 500);
    }
            
}
