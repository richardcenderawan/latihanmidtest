<?php
    namespace App\Repository;
    use App\todo;

    interface todoInterface{
        public function create (string $description);
        public function all();
        public function delete(int $id);
        public function get(int $id);   
        public function update(int $id, todo $data);
        
    }

?>