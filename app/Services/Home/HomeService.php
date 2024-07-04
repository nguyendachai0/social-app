<?php

namespace App\Services\Home;
use  App\Repositories\ProfileUser\ProfileUserRepositoryInterface;
class HomeService implements HomeServiceInterface
{
    /**
     * Create a new class instance.
     */
    private $profileUserRepository;
    public function __construct(ProfileUserRepositoryInterface $profileUserRepository)
    {
        $this->profileUserRepository = $profileUserRepository;
    }
    public function getDataForHomePage($profileUserId)
    {
        $profileUser = $this->profileUserRepository->find($profileUserId);
        $dataWithRelationship  = $this->profileUserRepository->findWithRelationships($profileUserId);
        $friends  = $this->profileUserRepository->getFriends($profileUser);
        $friendsStories = $this->profileUserRepository->getFriendsWithStories($profileUser);
        return [
            'profile' => $dataWithRelationship,
            'friends'  => $friends,
            'friendsStories' => $friendsStories
        ];
    }
}
