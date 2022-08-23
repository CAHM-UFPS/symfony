<?php

namespace ContainerDNIdU1p;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbf607 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere085f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesff2ea = [
        
    ];

    public function getConnection()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getConnection', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getMetadataFactory', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getExpressionBuilder', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'beginTransaction', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getCache', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getCache();
    }

    public function transactional($func)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'transactional', array('func' => $func), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'wrapInTransaction', array('func' => $func), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'commit', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->commit();
    }

    public function rollback()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'rollback', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getClassMetadata', array('className' => $className), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'createQuery', array('dql' => $dql), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'createNamedQuery', array('name' => $name), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'createQueryBuilder', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'flush', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'clear', array('entityName' => $entityName), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->clear($entityName);
    }

    public function close()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'close', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->close();
    }

    public function persist($entity)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'persist', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'remove', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'refresh', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'detach', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'merge', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getRepository', array('entityName' => $entityName), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'contains', array('entity' => $entity), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getEventManager', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getConfiguration', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'isOpen', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getUnitOfWork', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getProxyFactory', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'initializeObject', array('obj' => $obj), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'getFilters', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'isFiltersStateClean', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'hasFilters', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return $this->valueHolderbf607->hasFilters();
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

        $instance->initializere085f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderbf607) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbf607 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbf607->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, '__get', ['name' => $name], $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        if (isset(self::$publicPropertiesff2ea[$name])) {
            return $this->valueHolderbf607->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf607;

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

        $targetObject = $this->valueHolderbf607;
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
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf607;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbf607;
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
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, '__isset', array('name' => $name), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf607;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbf607;
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
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, '__unset', array('name' => $name), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf607;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbf607;
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
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, '__clone', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        $this->valueHolderbf607 = clone $this->valueHolderbf607;
    }

    public function __sleep()
    {
        $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, '__sleep', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;

        return array('valueHolderbf607');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere085f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere085f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere085f && ($this->initializere085f->__invoke($valueHolderbf607, $this, 'initializeProxy', array(), $this->initializere085f) || 1) && $this->valueHolderbf607 = $valueHolderbf607;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf607;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbf607;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
