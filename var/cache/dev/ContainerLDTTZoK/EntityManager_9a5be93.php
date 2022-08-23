<?php

namespace ContainerLDTTZoK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66ead = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3d2d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6044 = [
        
    ];

    public function getConnection()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getConnection', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getMetadataFactory', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getExpressionBuilder', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'beginTransaction', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getCache', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'transactional', array('func' => $func), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'wrapInTransaction', array('func' => $func), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'commit', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->commit();
    }

    public function rollback()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'rollback', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getClassMetadata', array('className' => $className), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'createQuery', array('dql' => $dql), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'createNamedQuery', array('name' => $name), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'createQueryBuilder', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'flush', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'clear', array('entityName' => $entityName), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->clear($entityName);
    }

    public function close()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'close', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->close();
    }

    public function persist($entity)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'persist', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'remove', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'refresh', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'detach', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'merge', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'contains', array('entity' => $entity), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getEventManager', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getConfiguration', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'isOpen', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getUnitOfWork', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getProxyFactory', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'initializeObject', array('obj' => $obj), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'getFilters', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'isFiltersStateClean', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'hasFilters', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return $this->valueHolder66ead->hasFilters();
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

        $instance->initializera3d2d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder66ead) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder66ead = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder66ead->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, '__get', ['name' => $name], $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        if (isset(self::$publicPropertiesf6044[$name])) {
            return $this->valueHolder66ead->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66ead;

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

        $targetObject = $this->valueHolder66ead;
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
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66ead;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66ead;
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
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, '__isset', array('name' => $name), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66ead;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66ead;
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
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, '__unset', array('name' => $name), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66ead;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66ead;
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
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, '__clone', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        $this->valueHolder66ead = clone $this->valueHolder66ead;
    }

    public function __sleep()
    {
        $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, '__sleep', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;

        return array('valueHolder66ead');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3d2d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3d2d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3d2d && ($this->initializera3d2d->__invoke($valueHolder66ead, $this, 'initializeProxy', array(), $this->initializera3d2d) || 1) && $this->valueHolder66ead = $valueHolder66ead;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66ead;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66ead;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
