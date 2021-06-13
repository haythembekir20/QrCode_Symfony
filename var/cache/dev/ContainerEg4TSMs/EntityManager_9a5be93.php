<?php

namespace ContainerEg4TSMs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5316e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0cd43 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e58c = [
        
    ];

    public function getConnection()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getConnection', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getMetadataFactory', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getExpressionBuilder', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'beginTransaction', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getCache', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'transactional', array('func' => $func), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->transactional($func);
    }

    public function commit()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'commit', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->commit();
    }

    public function rollback()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'rollback', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getClassMetadata', array('className' => $className), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'createQuery', array('dql' => $dql), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'createNamedQuery', array('name' => $name), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'createQueryBuilder', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'flush', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'clear', array('entityName' => $entityName), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->clear($entityName);
    }

    public function close()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'close', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->close();
    }

    public function persist($entity)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'persist', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'remove', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'refresh', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'detach', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'merge', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'contains', array('entity' => $entity), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getEventManager', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getConfiguration', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'isOpen', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getUnitOfWork', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getProxyFactory', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'initializeObject', array('obj' => $obj), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'getFilters', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'isFiltersStateClean', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'hasFilters', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return $this->valueHolder5316e->hasFilters();
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

        $instance->initializer0cd43 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5316e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5316e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5316e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, '__get', ['name' => $name], $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        if (isset(self::$publicProperties3e58c[$name])) {
            return $this->valueHolder5316e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5316e;

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

        $targetObject = $this->valueHolder5316e;
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
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5316e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5316e;
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
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, '__isset', array('name' => $name), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5316e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5316e;
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
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, '__unset', array('name' => $name), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5316e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5316e;
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
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, '__clone', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        $this->valueHolder5316e = clone $this->valueHolder5316e;
    }

    public function __sleep()
    {
        $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, '__sleep', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;

        return array('valueHolder5316e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0cd43 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0cd43;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0cd43 && ($this->initializer0cd43->__invoke($valueHolder5316e, $this, 'initializeProxy', array(), $this->initializer0cd43) || 1) && $this->valueHolder5316e = $valueHolder5316e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5316e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5316e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
