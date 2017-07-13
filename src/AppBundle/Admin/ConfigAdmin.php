<?php


namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ConfigAdmin extends AbstractAdmin{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->add('name', 'text');
        $formMapper->add('value', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('name');
        $datagridMapper->add('value');
    }

    protected function configureListFields(ListMapper $listMapper){
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('value');
    }
}
