<?php


namespace App\Http\Controllers;
use App\Models\Members;
use Illuminate\Http\Request;

class MainController extends Controller
{
public function members(){
    $model = new Members();
    $data = $model->getMembers();
    return view('championat', ['data' => $data]);
}
    public function addMember(Request $request){
    $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        $model = new Members();
        $model->newMember($name, $email, $age);
        return '<h3>Участник добавлен, перейдите на <a href="/">главную</a> </h3>';
    }
    public function deleteMember(Request $request){
        $id = $request->id;
        $model = new Members();
        $model->deleteMember($id);
        return '<h3>Участник удален, перейдите на <a href="/">главную</a> </h3>';
    }
    public function editMember(Request $request){
        $id = $request->id;
        $model = new Members();
        if(isset($request->email)) {
            $email = $request->email;
            $name = $request->name;
            $age = $request->age;
            $data = $model->editMember($id, $email, $name, $age);
        }
        else{
            $email = '';
            $name = '';
            $age = '';
            $data = $model->editMember($id, $email, $name, $age);
        }

        return view('editmember', ['data' => $data, 'id'=>$id]);
    }
}
