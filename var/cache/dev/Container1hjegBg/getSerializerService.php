<?php

namespace Container1hjegBg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UnwrappingDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UidNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/FormErrorNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/BackedEnumNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';

        $a = ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'));
        $b = ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->load('getSerializer_NameConverter_MetadataAwareService'));
        $c = ($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService'));

        return $container->privates['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer($a), 1 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 2 => new \Symfony\Component\Serializer\Normalizer\UidNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $b), 5 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 7 => new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer(), 8 => new \Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer(), 9 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(NULL), 10 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(NULL, NULL), 11 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 12 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($c, $b, $a, ($container->privates['property_info'] ?? $container->load('getPropertyInfoService')), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($c), NULL)], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(NULL, NULL), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(NULL, NULL), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
    }
}
