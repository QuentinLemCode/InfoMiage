<?php

namespace InfoMiage\CMSBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use ZenSide\SonataImageBundle\Admin\ImageAdmin;

class Article extends Admin
{
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper->add('titre', 'text');
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper->add('titre');
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper->addIdentifier('titre');
	}
	
	public function prePersist($subject)
	{
		ImageAdmin::manageEmbeddedImageAdmins($this, $subject);
	}
	public function preUpdate($subject)
	{
		ImageAdmin::manageEmbeddedImageAdmins($this, $subject);
	}
}