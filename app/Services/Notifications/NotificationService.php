<?php
namespace App\Services\Notofications;

use App\Repositories\Notofications\NotoficationRepositoryInterface;

class NotoficationService implements NotoficationServiceInterface
{
    private $notoficationRepository;

    public function __construct(NotoficationRepositoryInterface $notoficationRepository)
    {
        $this->notoficationRepository = $notoficationRepository;
    }
    public function getAllNotofications()
    {
        return $this->notoficationRepository->all();
    }
    public function getNotoficationById($id)
    {
        return $this->notoficationRepository->find($id);
    }
    public function createNotofication(array $data)
    {
        return $this->notoficationRepository->create($data);
    }
    public function updateNotofication($id, array $data)
    {
        return $this->notoficationRepository->update($id,  $data);
    }
    public function deleteNotofication($id)
    {
        return $this->notoficationRepository->delete($id);
    }

}