<?php

namespace MongoDBODMProxies\__PM__\App\Document\Pedido;

class Generated560228ff7e2616deb67346501a93288b extends \App\Document\Pedido implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b8dc = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker4fe9a = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8286 = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privatePropertiesf85a6 = [
        'user_id' => [
            'App\\Document\\Pedido' => true,
        ],
        'cantidad' => [
            'App\\Document\\Pedido' => true,
        ],
        'precio_unitario' => [
            'App\\Document\\Pedido' => true,
        ],
        'nombre_producto' => [
            'App\\Document\\Pedido' => true,
        ],
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedProperties42fc9 = [
        
    ];

    private static $signature560228ff7e2616deb67346501a93288b = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czoxOToiQXBwXERvY3VtZW50XFBlZGlkbyI7czo3OiJmYWN0b3J5IjtzOjQ0OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ0dob3N0RmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo0ODoidjEuMC4xMkA4NDE5ZjAxNTg3MTViMzBkNGI5OWE1YmQzN2M2YTM5NjcxOTk0YWQ3IjtzOjEyOiJwcm94eU9wdGlvbnMiO2E6MTp7czoxNzoic2tpcHBlZFByb3BlcnRpZXMiO2E6MTp7aTowO3M6MjM6IgBBcHBcRG9jdW1lbnRcUGVkaWRvAGlkIjt9fX0=';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializerf863f($methodName, array $parameters)
    {
        if ($this->initializationTracker4fe9a || ! $this->initializer2b8dc) {
            return;
        }

        $this->initializationTracker4fe9a = true;

        static $cacheApp_Document_Pedido;

        $cacheApp_Document_Pedido ?? $cacheApp_Document_Pedido = \Closure::bind(static function ($instance) {
            $instance->user_id = null;
            $instance->cantidad = null;
            $instance->precio_unitario = null;
            $instance->nombre_producto = null;
        }, null, 'App\\Document\\Pedido');

        $cacheApp_Document_Pedido($this);




        $properties = [

        ];

        static $cacheFetchApp_Document_Pedido;

        $cacheFetchApp_Document_Pedido ?? $cacheFetchApp_Document_Pedido = \Closure::bind(function ($instance, array & $properties) {
            $properties['' . "\0" . 'App\\Document\\Pedido' . "\0" . 'user_id'] = & $instance->user_id;
            $properties['' . "\0" . 'App\\Document\\Pedido' . "\0" . 'cantidad'] = & $instance->cantidad;
            $properties['' . "\0" . 'App\\Document\\Pedido' . "\0" . 'precio_unitario'] = & $instance->precio_unitario;
            $properties['' . "\0" . 'App\\Document\\Pedido' . "\0" . 'nombre_producto'] = & $instance->nombre_producto;
        }, $this, 'App\\Document\\Pedido');

        $cacheFetchApp_Document_Pedido($this, $properties);

        $result = $this->initializer2b8dc->__invoke($this, $methodName, $parameters, $this->initializer2b8dc, $properties);
        $this->initializationTracker4fe9a = false;

        return $result;
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

        \Closure::bind(function (\App\Document\Pedido $instance) {
            unset($instance->user_id, $instance->cantidad, $instance->precio_unitario, $instance->nombre_producto);
        }, $instance, 'App\\Document\\Pedido')->__invoke($instance);

        $instance->initializer2b8dc = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializer2b8dc && ! $this->initializationTracker4fe9a && $this->callInitializerf863f('__get', array('name' => $name));

        if (isset(self::$publicPropertiese8286[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedProperties42fc9[$name])) {
            if ($this->initializationTracker4fe9a) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties42fc9[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privatePropertiesf85a6[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf85a6[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker4fe9a || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf85a6[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2b8dc && $this->callInitializerf863f('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicPropertiese8286[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedProperties42fc9[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties42fc9[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privatePropertiesf85a6[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf85a6[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf85a6[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2b8dc && $this->callInitializerf863f('__isset', array('name' => $name));

        if (isset(self::$publicPropertiese8286[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedProperties42fc9[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties42fc9[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf85a6[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf85a6[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2b8dc && $this->callInitializerf863f('__unset', array('name' => $name));

        if (isset(self::$publicPropertiese8286[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedProperties42fc9[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties42fc9[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privatePropertiesf85a6[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privatePropertiesf85a6[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privatePropertiesf85a6[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2b8dc && $this->callInitializerf863f('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer2b8dc && $this->callInitializerf863f('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2b8dc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2b8dc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2b8dc && $this->callInitializerf863f('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializer2b8dc;
    }
}
