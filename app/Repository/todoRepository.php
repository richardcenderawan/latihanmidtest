<?php
    namespace App\Repository;

    use App\todo;

    class todoRepository implements todoInterface{

        public function create(string $description){
            $newtodo = new todo;
            $newtodo->description = $description;
            $newtodo->status = 0;
            $newtodo->save();
        }
        public function all(){
            return todo::all();
        }
        public function get(int $id){
            return todo::findOrFail($id);
        }

        public function update(int $id, todo $data){
            todo::findOrFail($id)->update(['description'=>$data->description,'status'=>$data->status]);
        }
         public function delete(int $id){
             $newtodo = todo::find($id);
             $newtodo->delete();
        }
    }
?>