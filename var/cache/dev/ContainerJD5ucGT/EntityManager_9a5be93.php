<?php

namespace ContainerJD5ucGT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfed22 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer744ee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties559e4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getConnection', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getMetadataFactory', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getExpressionBuilder', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'beginTransaction', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getCache', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getCache();
    }

    public function transactional($func)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'transactional', array('func' => $func), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'wrapInTransaction', array('func' => $func), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'commit', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->commit();
    }

    public function rollback()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'rollback', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getClassMetadata', array('className' => $className), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'createQuery', array('dql' => $dql), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'createNamedQuery', array('name' => $name), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'createQueryBuilder', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'flush', array('entity' => $entity), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'clear', array('entityName' => $entityName), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->clear($entityName);
    }

    public function close()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'close', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->close();
    }

    public function persist($entity)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'persist', array('entity' => $entity), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'remove', array('entity' => $entity), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'detach', array('entity' => $entity), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'merge', array('entity' => $entity), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getRepository', array('entityName' => $entityName), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'contains', array('entity' => $entity), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getEventManager', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getConfiguration', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'isOpen', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getUnitOfWork', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getProxyFactory', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'initializeObject', array('obj' => $obj), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'getFilters', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'isFiltersStateClean', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'hasFilters', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return $this->valueHolderfed22->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer744ee = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderfed22) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfed22 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfed22->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, '__get', ['name' => $name], $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        if (isset(self::$publicProperties559e4[$name])) {
            return $this->valueHolderfed22->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed22;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfed22;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed22;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfed22;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, '__isset', array('name' => $name), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed22;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfed22;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, '__unset', array('name' => $name), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfed22;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfed22;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, '__clone', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        $this->valueHolderfed22 = clone $this->valueHolderfed22;
    }

    public function __sleep()
    {
        $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, '__sleep', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;

        return array('valueHolderfed22');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer744ee = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer744ee;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer744ee && ($this->initializer744ee->__invoke($valueHolderfed22, $this, 'initializeProxy', array(), $this->initializer744ee) || 1) && $this->valueHolderfed22 = $valueHolderfed22;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfed22;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfed22;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
