<?php

namespace App\Controller\Admin;

use App\Entity\StudyProgrammes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StudyProgrammesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return StudyProgrammes::class;
    }

    public function createEntity(string $entityFqcn)
    {
        $product = new StudyProgrammes();
        if(!empty($product->getShortDesc())){
            $product->setShortDesc(substr($product->getDetails(), 0, 30));
        }
        return $product;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            AssociationField::new('dean', 'Doyen'),
            ChoiceField::new('grade')->setChoices([
                'Licence' => 'LICENCE',
                'Master' => 'MASTER'
            ]),
            TextEditorField::new('shortDesc'),
            TextEditorField::new('details'),
            ImageField::new('primaryImage')
                ->setBasePath('/uploads/programmes/')
                ->setUploadDir('/public/uploads/programmes/'),
        ];
    }
    
}
