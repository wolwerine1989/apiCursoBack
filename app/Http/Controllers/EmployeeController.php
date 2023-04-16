<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use App\Mail\PaymentDone;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    //hace un select * from employee de la bd y los muestra en la pagina
    public function index()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

    //Crea un nuevo usuario con los campos asignados
    public function store(Request $request)
    {
        $employee = new Employee([
            'nombre'   =>  $request->input ('nombre'),
            'email'    =>  $request->input ('email'),
            'telefono' =>  $request->input ('telefono'),
            'mensaje'  =>  $request->input ('mensaje'),
        ]);
        $employee->save();
        Mail::to($request->input ('email'))->send(new PaymentDone());
        return response()->json('Empleado creado');
    }

    public function show($id)
    {
        $contact = Employee::find($id);
        return response()->json($contact);
    }

    public function update(Request $request,$id)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return response()->json('Empleado actualizado');
    }

    public function delete(Request $request,$id)
    {
        $employee = Employee::find($id);
        $employee->delete($request->all());
        return response()->json('Empleado borrar');
    }

}

/*public function store(Request $request)
    {
        $employees = new Employee([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile'),
 
        ]);
        $employees->save();
        return response()->json('Employee created!');
    }*/

