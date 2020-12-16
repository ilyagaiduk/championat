<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Members extends Model
{
    public function getMembers(){
        $members =  DB::table('members')
        ->get();
        return $members;
    }
    public function newMember($name, $email, $age){
        DB::table('members')->insert([
            'name' => $name,
            'email' => $email,
            'age' => $age,
        ]);
    }
    public function deleteMember($id){
        DB::table('members')->where('id', '=', $id)->delete();
    }
    public function editMember($id, $email, $name, $age){
        if(!empty($name)) {
            $member =  DB::table('members')
                ->where('id', '=', $id)
                ->update(['name' =>$name, 'age' =>$age, 'email' =>$email]);
            return $member;
        }
        else{
            return NULL;
        }


    }
}
