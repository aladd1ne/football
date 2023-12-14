<?php

namespace App\Controller\Admin;

use App\Entity\Coach;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CoachCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Coach::class;
    }

    public function configureFields(string $pageName): iterable
    {

        $id = IntegerField::new('id');
        $name = TextField::new('name');
        $team = AssociationField::new('team');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $name, $team];
        }
        if (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $name, $team];
        }
        if (Crud::PAGE_NEW === $pageName) {
            return [$name, $team];
        }
        if (Crud::PAGE_EDIT === $pageName) {
            return [$name, $team];
        }
        return [];
    }
}
