<?php

namespace Modules\Taxes\UseCases;

use Modules\Taxes\Dtos\CreateTaxeDTO;
use Shared\Repositories\TaxeRepository;
use Shared\Entities\Taxe;

class CreateTaxeUseCase{

    private $taxeRepository;

    function __construct(TaxeRepository $taxeRepository){
        $this->taxeRepository = $taxeRepository;
    }

    function run(CreateTaxeDTO $data){

        $entity = new Taxe();
        $entity->setName($data->getName());
        $entity->setPercentage($data->getPercentage());
        $entity->setCreatedAt(new \DateTime('now'));

        return $this->taxeRepository->save($entity);
    }
}