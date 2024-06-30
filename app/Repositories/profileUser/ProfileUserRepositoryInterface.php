<?php 

namespace App\Repositories\ProfileUser;

interface ProfileUserRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function updated($id, array $data);
    public function delete($id);
}