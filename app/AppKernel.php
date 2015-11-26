<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        	new Sonata\CoreBundle\SonataCoreBundle(),
        	new Sonata\CacheBundle\SonataCacheBundle(),
        	new Sonata\BlockBundle\SonataBlockBundle(),
        	new Sonata\SeoBundle\SonataSeoBundle(),
        	new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
        	new Sonata\NotificationBundle\SonataNotificationBundle(),
        	new Sonata\AdminBundle\SonataAdminBundle(),
        	new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
        	new Sonata\PageBundle\SonataPageBundle(),
        	new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        	new Symfony\Cmf\Bundle\RoutingBundle\CmfRoutingBundle,
        	new FOS\UserBundle\FOSUserBundle(),
        	new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
        	new Sonata\MediaBundle\SonataMediaBundle(),
        	new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
        	new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
        	new Sonata\FormatterBundle\SonataFormatterBundle(),
        	new JMS\SerializerBundle\JMSSerializerBundle(),
        	new Sonata\ClassificationBundle\SonataClassificationBundle(),
        	new Application\Sonata\PageBundle\ApplicationSonataPageBundle(),
        	new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
        	new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
        	new Application\Sonata\NotificationBundle\ApplicationSonataNotificationBundle(),
        	new Application\Sonata\ClassificationBundle\ApplicationSonataClassificationBundle(),
        	new Sonata\IntlBundle\SonataIntlBundle(),
        	new Sonata\NewsBundle\SonataNewsBundle(),
        	new Application\Sonata\NewsBundle\ApplicationSonataNewsBundle(),
            new InfoMiage\AppBundle\InfoMiageAppBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
