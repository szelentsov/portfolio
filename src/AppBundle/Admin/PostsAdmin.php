<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('name', 'text');
        $formMapper->add('description', 'text');
        $formMapper->add('img', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('name');
        $datagridMapper->add('description');
        $datagridMapper->add('img');
    }

    protected function configureListFields(ListMapper $listMapper){
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('description');
        $listMapper->addIdentifier('img');
    }
}