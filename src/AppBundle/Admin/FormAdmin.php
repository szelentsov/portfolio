<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FormAdmin extends AbstractAdmin {
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('name', 'text');
        $formMapper->add('email', 'text');
        $formMapper->add('subject', 'text');
        $formMapper->add('message', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('name');
        $datagridMapper->add('email');
        $datagridMapper->add('subject');
        $datagridMapper->add('message');
    }

    protected function configureListFields(ListMapper $listMapper){
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('email');
        $listMapper->addIdentifier('subject');
        $listMapper->addIdentifier('message');
    }
}
