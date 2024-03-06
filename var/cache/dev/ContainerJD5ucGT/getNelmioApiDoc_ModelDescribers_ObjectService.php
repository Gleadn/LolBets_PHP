<?php

namespace ContainerJD5ucGT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_ObjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.object' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ApplyOpenApiDiscriminatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ObjectModelDescriber.php';

        return $container->privates['nelmio_api_doc.model_describers.object'] = new \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber(($container->privates['property_info'] ?? $container->load('getPropertyInfoService')), ($container->privates['annotations.reader'] ?? $container->getAnnotations_ReaderService()), ($container->privates['nelmio_api_doc.object_model.property_describer'] ?? $container->load('getNelmioApiDoc_ObjectModel_PropertyDescriberService')), [0 => 'json'], ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->load('getSerializer_NameConverter_MetadataAwareService')), false, ($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService')));
    }
}
