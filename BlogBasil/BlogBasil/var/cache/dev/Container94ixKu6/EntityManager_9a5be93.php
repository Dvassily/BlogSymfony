<?php

namespace Container94ixKu6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99097 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd909d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5e7a = [
        
    ];

    public function getConnection()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getConnection', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getMetadataFactory', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getExpressionBuilder', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'beginTransaction', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getCache', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'transactional', array('func' => $func), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->transactional($func);
    }

    public function commit()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'commit', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->commit();
    }

    public function rollback()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'rollback', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getClassMetadata', array('className' => $className), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'createQuery', array('dql' => $dql), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'createNamedQuery', array('name' => $name), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'createQueryBuilder', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'flush', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'clear', array('entityName' => $entityName), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->clear($entityName);
    }

    public function close()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'close', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->close();
    }

    public function persist($entity)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'persist', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'remove', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'refresh', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'detach', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'merge', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'contains', array('entity' => $entity), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getEventManager', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getConfiguration', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'isOpen', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getUnitOfWork', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getProxyFactory', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'initializeObject', array('obj' => $obj), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'getFilters', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'isFiltersStateClean', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'hasFilters', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return $this->valueHolder99097->hasFilters();
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

        $instance->initializerd909d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder99097) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99097 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99097->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, '__get', ['name' => $name], $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        if (isset(self::$publicPropertiesa5e7a[$name])) {
            return $this->valueHolder99097->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99097;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder99097;
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
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99097;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder99097;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, '__isset', array('name' => $name), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99097;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder99097;
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
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, '__unset', array('name' => $name), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99097;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder99097;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, '__clone', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        $this->valueHolder99097 = clone $this->valueHolder99097;
    }

    public function __sleep()
    {
        $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, '__sleep', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;

        return array('valueHolder99097');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd909d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd909d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd909d && ($this->initializerd909d->__invoke($valueHolder99097, $this, 'initializeProxy', array(), $this->initializerd909d) || 1) && $this->valueHolder99097 = $valueHolder99097;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99097;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99097;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
