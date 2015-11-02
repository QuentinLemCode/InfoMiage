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
		$formMapper->with('Contenu', array('class' => 'col-md-9'))
			->add('titre', 'text')
			->add('contenu', 'textarea')
		->end()
		->with('Affichage', array('class' => 'col-md-3'))
			->add('image', 'sonata_type_admin')
		->end();
	}
	
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper->add('titre');
	}
	
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper->addIdentifier('titre')
		->addIdentifier('contenu');
	}
	
	public function prePersist($subject)
	{
		ImageAdmin::manageEmbeddedImageAdmins($this, $subject);
	}
	public function preUpdate($subject)
	{
		ImageAdmin::manageEmbeddedImageAdmins($this, $subject);
	}
	
	public function toString($object)
	{
		return $object instanceof Article
		? $object->getTitre()
		: 'Article'; // Affiché dans le breadcrumb
	}
}