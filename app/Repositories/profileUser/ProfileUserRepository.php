<?php

namespace App\Repositories\ProfileUser;
use App\Models\ProfileUser;

class ProfileUserRepository implements ProfileUserRepositoryInterface
{
    protected $profileUser;

    public function __construct(ProfileUser $profileUser)
    {
        $this->profileUser = $profileUser;
    }
    public function all()
    {
        reutrn $this->profileUser->all();
    }
    public function find($id)
    {
        return $this->profileUser->find($id);
    }
    public function create(array $data)
    {
        return $this->profileUser->create($data);
    }
    public function update($id, array $data)
    {
        return $this->profileUser->find($id)->update($data);
    }
    public function delete($id)
    {
        return $this->profileUser->find($id)->delete();
    }
}