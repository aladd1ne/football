<?php

namespace App\Controller\Admin;

use App\Entity\Team;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TeamCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Team::class;
    }


    public function configureFields(string $pageName): iterable
    {

        $id = IntegerField::new('id');
        $name = TextField::new('name');
        $country = CountryField::new('country');
        $city = TextField::new('city');
        $logo = ImageField::new('logo')->setUploadDir('public/uploads/logos')->setBasePath('uploads/logos');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $name, $country, $city, $logo];
        }
        if (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $name, $country, $city, $logo];
        }
        if (Crud::PAGE_NEW === $pageName) {
            return [$name, $country, $city, $logo];
        }
        if (Crud::PAGE_EDIT === $pageName) {
            return [$name, $country, $city, $logo];
        }
        return [];
    }

}
