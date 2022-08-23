<?php

namespace Container7nStn9W;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder14f0e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer18f84 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfc862 = [
        
    ];

    public function getConnection()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getConnection', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getMetadataFactory', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getExpressionBuilder', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'beginTransaction', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getCache', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'transactional', array('func' => $func), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'commit', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->commit();
    }

    public function rollback()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'rollback', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getClassMetadata', array('className' => $className), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'createQuery', array('dql' => $dql), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'createNamedQuery', array('name' => $name), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'createQueryBuilder', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'flush', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'clear', array('entityName' => $entityName), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->clear($entityName);
    }

    public function close()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'close', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->close();
    }

    public function persist($entity)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'persist', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'remove', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'refresh', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'detach', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'merge', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'contains', array('entity' => $entity), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getEventManager', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getConfiguration', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'isOpen', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getUnitOfWork', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getProxyFactory', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'initializeObject', array('obj' => $obj), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'getFilters', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'isFiltersStateClean', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'hasFilters', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return $this->valueHolder14f0e->hasFilters();
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

        $instance->initializer18f84 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder14f0e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder14f0e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder14f0e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, '__get', ['name' => $name], $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        if (isset(self::$publicPropertiesfc862[$name])) {
            return $this->valueHolder14f0e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14f0e;

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

        $targetObject = $this->valueHolder14f0e;
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
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14f0e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder14f0e;
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
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, '__isset', array('name' => $name), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14f0e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder14f0e;
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
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, '__unset', array('name' => $name), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14f0e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder14f0e;
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
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, '__clone', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        $this->valueHolder14f0e = clone $this->valueHolder14f0e;
    }

    public function __sleep()
    {
        $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, '__sleep', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;

        return array('valueHolder14f0e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18f84 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18f84;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer18f84 && ($this->initializer18f84->__invoke($valueHolder14f0e, $this, 'initializeProxy', array(), $this->initializer18f84) || 1) && $this->valueHolder14f0e = $valueHolder14f0e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder14f0e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder14f0e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
