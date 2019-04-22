<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3f7a0d8dc00263943c4b0ab8a81697e
{
    public static $files = array (
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\view\\driver\\' => 18,
            'think\\composer\\' => 15,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\view\\driver\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-view/src',
        ),
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/framework/src/think',
            1 => __DIR__ . '/..' . '/topthink/think-template/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/extend',
    );

    public static $classMap = array (
        'Opis\\Closure\\Analyzer' => __DIR__ . '/..' . '/opis/closure/src/Analyzer.php',
        'Opis\\Closure\\ClosureContext' => __DIR__ . '/..' . '/opis/closure/src/ClosureContext.php',
        'Opis\\Closure\\ClosureScope' => __DIR__ . '/..' . '/opis/closure/src/ClosureScope.php',
        'Opis\\Closure\\ClosureStream' => __DIR__ . '/..' . '/opis/closure/src/ClosureStream.php',
        'Opis\\Closure\\ISecurityProvider' => __DIR__ . '/..' . '/opis/closure/src/ISecurityProvider.php',
        'Opis\\Closure\\ReflectionClosure' => __DIR__ . '/..' . '/opis/closure/src/ReflectionClosure.php',
        'Opis\\Closure\\SecurityException' => __DIR__ . '/..' . '/opis/closure/src/SecurityException.php',
        'Opis\\Closure\\SecurityProvider' => __DIR__ . '/..' . '/opis/closure/src/SecurityProvider.php',
        'Opis\\Closure\\SelfReference' => __DIR__ . '/..' . '/opis/closure/src/SelfReference.php',
        'Opis\\Closure\\SerializableClosure' => __DIR__ . '/..' . '/opis/closure/src/SerializableClosure.php',
        'Psr\\Cache\\CacheException' => __DIR__ . '/..' . '/psr/cache/src/CacheException.php',
        'Psr\\Cache\\CacheItemInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemInterface.php',
        'Psr\\Cache\\CacheItemPoolInterface' => __DIR__ . '/..' . '/psr/cache/src/CacheItemPoolInterface.php',
        'Psr\\Cache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/cache/src/InvalidArgumentException.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
        'app\\controller\\Index' => __DIR__ . '/../..' . '/app/controller/Index.php',
        'think\\App' => __DIR__ . '/..' . '/topthink/framework/src/think/App.php',
        'think\\Cache' => __DIR__ . '/..' . '/topthink/framework/src/think/Cache.php',
        'think\\Collection' => __DIR__ . '/..' . '/topthink/framework/src/think/Collection.php',
        'think\\Config' => __DIR__ . '/..' . '/topthink/framework/src/think/Config.php',
        'think\\Console' => __DIR__ . '/..' . '/topthink/framework/src/think/Console.php',
        'think\\Container' => __DIR__ . '/..' . '/topthink/framework/src/think/Container.php',
        'think\\Controller' => __DIR__ . '/..' . '/topthink/framework/src/think/Controller.php',
        'think\\Cookie' => __DIR__ . '/..' . '/topthink/framework/src/think/Cookie.php',
        'think\\Db' => __DIR__ . '/..' . '/topthink/framework/src/think/Db.php',
        'think\\Env' => __DIR__ . '/..' . '/topthink/framework/src/think/Env.php',
        'think\\Event' => __DIR__ . '/..' . '/topthink/framework/src/think/Event.php',
        'think\\Exception' => __DIR__ . '/..' . '/topthink/framework/src/think/Exception.php',
        'think\\Facade' => __DIR__ . '/..' . '/topthink/framework/src/think/Facade.php',
        'think\\File' => __DIR__ . '/..' . '/topthink/framework/src/think/File.php',
        'think\\Http' => __DIR__ . '/..' . '/topthink/framework/src/think/Http.php',
        'think\\Lang' => __DIR__ . '/..' . '/topthink/framework/src/think/Lang.php',
        'think\\Log' => __DIR__ . '/..' . '/topthink/framework/src/think/Log.php',
        'think\\Middleware' => __DIR__ . '/..' . '/topthink/framework/src/think/Middleware.php',
        'think\\Model' => __DIR__ . '/..' . '/topthink/framework/src/think/Model.php',
        'think\\Paginator' => __DIR__ . '/..' . '/topthink/framework/src/think/Paginator.php',
        'think\\Request' => __DIR__ . '/..' . '/topthink/framework/src/think/Request.php',
        'think\\Response' => __DIR__ . '/..' . '/topthink/framework/src/think/Response.php',
        'think\\Route' => __DIR__ . '/..' . '/topthink/framework/src/think/Route.php',
        'think\\Service' => __DIR__ . '/..' . '/topthink/framework/src/think/Service.php',
        'think\\Session' => __DIR__ . '/..' . '/topthink/framework/src/think/Session.php',
        'think\\Template' => __DIR__ . '/..' . '/topthink/think-template/src/Template.php',
        'think\\Validate' => __DIR__ . '/..' . '/topthink/framework/src/think/Validate.php',
        'think\\View' => __DIR__ . '/..' . '/topthink/framework/src/think/View.php',
        'think\\cache\\CacheHandlerInterface' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/CacheHandlerInterface.php',
        'think\\cache\\CacheItem' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/CacheItem.php',
        'think\\cache\\Driver' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/Driver.php',
        'think\\cache\\SimpleCache' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/SimpleCache.php',
        'think\\cache\\driver\\File' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/driver/File.php',
        'think\\cache\\driver\\Memcache' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/driver/Memcache.php',
        'think\\cache\\driver\\Memcached' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/driver/Memcached.php',
        'think\\cache\\driver\\Redis' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/driver/Redis.php',
        'think\\cache\\driver\\Sqlite' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/driver/Sqlite.php',
        'think\\cache\\driver\\Wincache' => __DIR__ . '/..' . '/topthink/framework/src/think/cache/driver/Wincache.php',
        'think\\composer\\Plugin' => __DIR__ . '/..' . '/topthink/think-installer/src/Plugin.php',
        'think\\composer\\ThinkExtend' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkExtend.php',
        'think\\composer\\ThinkFramework' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkFramework.php',
        'think\\composer\\ThinkTesting' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkTesting.php',
        'think\\console\\Command' => __DIR__ . '/..' . '/topthink/framework/src/think/console/Command.php',
        'think\\console\\Input' => __DIR__ . '/..' . '/topthink/framework/src/think/console/Input.php',
        'think\\console\\Output' => __DIR__ . '/..' . '/topthink/framework/src/think/console/Output.php',
        'think\\console\\Table' => __DIR__ . '/..' . '/topthink/framework/src/think/console/Table.php',
        'think\\console\\command\\Build' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/Build.php',
        'think\\console\\command\\Clear' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/Clear.php',
        'think\\console\\command\\Help' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/Help.php',
        'think\\console\\command\\Lists' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/Lists.php',
        'think\\console\\command\\Make' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/Make.php',
        'think\\console\\command\\RouteBuild' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/RouteBuild.php',
        'think\\console\\command\\RouteList' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/RouteList.php',
        'think\\console\\command\\RunServer' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/RunServer.php',
        'think\\console\\command\\ServiceDiscover' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/ServiceDiscover.php',
        'think\\console\\command\\VendorPublish' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/VendorPublish.php',
        'think\\console\\command\\Version' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/Version.php',
        'think\\console\\command\\make\\Command' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Command.php',
        'think\\console\\command\\make\\Controller' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Controller.php',
        'think\\console\\command\\make\\Event' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Event.php',
        'think\\console\\command\\make\\Listener' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Listener.php',
        'think\\console\\command\\make\\Middleware' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Middleware.php',
        'think\\console\\command\\make\\Model' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Model.php',
        'think\\console\\command\\make\\Service' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Service.php',
        'think\\console\\command\\make\\Subscribe' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Subscribe.php',
        'think\\console\\command\\make\\Validate' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/make/Validate.php',
        'think\\console\\command\\optimize\\Config' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/optimize/Config.php',
        'think\\console\\command\\optimize\\Facade' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/optimize/Facade.php',
        'think\\console\\command\\optimize\\Model' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/optimize/Model.php',
        'think\\console\\command\\optimize\\Route' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/optimize/Route.php',
        'think\\console\\command\\optimize\\Schema' => __DIR__ . '/..' . '/topthink/framework/src/think/console/command/optimize/Schema.php',
        'think\\console\\input\\Argument' => __DIR__ . '/..' . '/topthink/framework/src/think/console/input/Argument.php',
        'think\\console\\input\\Definition' => __DIR__ . '/..' . '/topthink/framework/src/think/console/input/Definition.php',
        'think\\console\\input\\Option' => __DIR__ . '/..' . '/topthink/framework/src/think/console/input/Option.php',
        'think\\console\\output\\Ask' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/Ask.php',
        'think\\console\\output\\Descriptor' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/Descriptor.php',
        'think\\console\\output\\Formatter' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/Formatter.php',
        'think\\console\\output\\Question' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/Question.php',
        'think\\console\\output\\descriptor\\Console' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/descriptor/Console.php',
        'think\\console\\output\\driver\\Buffer' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/driver/Buffer.php',
        'think\\console\\output\\driver\\Console' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/driver/Console.php',
        'think\\console\\output\\driver\\Nothing' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/driver/Nothing.php',
        'think\\console\\output\\formatter\\Stack' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/formatter/Stack.php',
        'think\\console\\output\\formatter\\Style' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/formatter/Style.php',
        'think\\console\\output\\question\\Choice' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/question/Choice.php',
        'think\\console\\output\\question\\Confirmation' => __DIR__ . '/..' . '/topthink/framework/src/think/console/output/question/Confirmation.php',
        'think\\db\\Builder' => __DIR__ . '/..' . '/topthink/framework/src/think/db/Builder.php',
        'think\\db\\Connection' => __DIR__ . '/..' . '/topthink/framework/src/think/db/Connection.php',
        'think\\db\\Fetch' => __DIR__ . '/..' . '/topthink/framework/src/think/db/Fetch.php',
        'think\\db\\Query' => __DIR__ . '/..' . '/topthink/framework/src/think/db/Query.php',
        'think\\db\\Raw' => __DIR__ . '/..' . '/topthink/framework/src/think/db/Raw.php',
        'think\\db\\Where' => __DIR__ . '/..' . '/topthink/framework/src/think/db/Where.php',
        'think\\db\\builder\\Mysql' => __DIR__ . '/..' . '/topthink/framework/src/think/db/builder/Mysql.php',
        'think\\db\\builder\\Pgsql' => __DIR__ . '/..' . '/topthink/framework/src/think/db/builder/Pgsql.php',
        'think\\db\\builder\\Sqlite' => __DIR__ . '/..' . '/topthink/framework/src/think/db/builder/Sqlite.php',
        'think\\db\\builder\\Sqlsrv' => __DIR__ . '/..' . '/topthink/framework/src/think/db/builder/Sqlsrv.php',
        'think\\db\\connector\\Mysql' => __DIR__ . '/..' . '/topthink/framework/src/think/db/connector/Mysql.php',
        'think\\db\\connector\\Pgsql' => __DIR__ . '/..' . '/topthink/framework/src/think/db/connector/Pgsql.php',
        'think\\db\\connector\\Sqlite' => __DIR__ . '/..' . '/topthink/framework/src/think/db/connector/Sqlite.php',
        'think\\db\\connector\\Sqlsrv' => __DIR__ . '/..' . '/topthink/framework/src/think/db/connector/Sqlsrv.php',
        'think\\db\\exception\\BindParamException' => __DIR__ . '/..' . '/topthink/framework/src/think/db/exception/BindParamException.php',
        'think\\db\\exception\\DataNotFoundException' => __DIR__ . '/..' . '/topthink/framework/src/think/db/exception/DataNotFoundException.php',
        'think\\db\\exception\\ModelNotFoundException' => __DIR__ . '/..' . '/topthink/framework/src/think/db/exception/ModelNotFoundException.php',
        'think\\debug\\Console' => __DIR__ . '/..' . '/topthink/framework/src/think/debug/Console.php',
        'think\\debug\\Html' => __DIR__ . '/..' . '/topthink/framework/src/think/debug/Html.php',
        'think\\event\\AppInit' => __DIR__ . '/..' . '/topthink/framework/src/think/event/AppInit.php',
        'think\\event\\HttpEnd' => __DIR__ . '/..' . '/topthink/framework/src/think/event/HttpEnd.php',
        'think\\event\\HttpRun' => __DIR__ . '/..' . '/topthink/framework/src/think/event/HttpRun.php',
        'think\\event\\LogLevel' => __DIR__ . '/..' . '/topthink/framework/src/think/event/LogLevel.php',
        'think\\event\\LogWrite' => __DIR__ . '/..' . '/topthink/framework/src/think/event/LogWrite.php',
        'think\\exception\\CacheException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/CacheException.php',
        'think\\exception\\ClassNotFoundException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/ClassNotFoundException.php',
        'think\\exception\\DbException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/DbException.php',
        'think\\exception\\ErrorException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/ErrorException.php',
        'think\\exception\\Handle' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/Handle.php',
        'think\\exception\\HttpException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/HttpException.php',
        'think\\exception\\HttpResponseException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/HttpResponseException.php',
        'think\\exception\\InvalidArgumentException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/InvalidArgumentException.php',
        'think\\exception\\ModelEventException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/ModelEventException.php',
        'think\\exception\\PDOException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/PDOException.php',
        'think\\exception\\RouteNotFoundException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/RouteNotFoundException.php',
        'think\\exception\\ValidateException' => __DIR__ . '/..' . '/topthink/framework/src/think/exception/ValidateException.php',
        'think\\facade\\App' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/App.php',
        'think\\facade\\Cache' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Cache.php',
        'think\\facade\\Config' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Config.php',
        'think\\facade\\Console' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Console.php',
        'think\\facade\\Cookie' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Cookie.php',
        'think\\facade\\Db' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Db.php',
        'think\\facade\\Env' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Env.php',
        'think\\facade\\Event' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Event.php',
        'think\\facade\\Lang' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Lang.php',
        'think\\facade\\Log' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Log.php',
        'think\\facade\\Middleware' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Middleware.php',
        'think\\facade\\Request' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Request.php',
        'think\\facade\\Route' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Route.php',
        'think\\facade\\Session' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Session.php',
        'think\\facade\\Validate' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/Validate.php',
        'think\\facade\\View' => __DIR__ . '/..' . '/topthink/framework/src/think/facade/View.php',
        'think\\initializer\\BootService' => __DIR__ . '/..' . '/topthink/framework/src/think/initializer/BootService.php',
        'think\\initializer\\Error' => __DIR__ . '/..' . '/topthink/framework/src/think/initializer/Error.php',
        'think\\initializer\\RegisterService' => __DIR__ . '/..' . '/topthink/framework/src/think/initializer/RegisterService.php',
        'think\\log\\LogHandlerInterface' => __DIR__ . '/..' . '/topthink/framework/src/think/log/LogHandlerInterface.php',
        'think\\log\\driver\\File' => __DIR__ . '/..' . '/topthink/framework/src/think/log/driver/File.php',
        'think\\log\\driver\\Socket' => __DIR__ . '/..' . '/topthink/framework/src/think/log/driver/Socket.php',
        'think\\middleware\\AllowCrossDomain' => __DIR__ . '/..' . '/topthink/framework/src/think/middleware/AllowCrossDomain.php',
        'think\\middleware\\CheckRequestCache' => __DIR__ . '/..' . '/topthink/framework/src/think/middleware/CheckRequestCache.php',
        'think\\middleware\\LoadLangPack' => __DIR__ . '/..' . '/topthink/framework/src/think/middleware/LoadLangPack.php',
        'think\\middleware\\SessionInit' => __DIR__ . '/..' . '/topthink/framework/src/think/middleware/SessionInit.php',
        'think\\middleware\\TraceDebug' => __DIR__ . '/..' . '/topthink/framework/src/think/middleware/TraceDebug.php',
        'think\\model\\Collection' => __DIR__ . '/..' . '/topthink/framework/src/think/model/Collection.php',
        'think\\model\\Pivot' => __DIR__ . '/..' . '/topthink/framework/src/think/model/Pivot.php',
        'think\\model\\Relation' => __DIR__ . '/..' . '/topthink/framework/src/think/model/Relation.php',
        'think\\model\\concern\\Attribute' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/Attribute.php',
        'think\\model\\concern\\Conversion' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/Conversion.php',
        'think\\model\\concern\\ModelEvent' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/ModelEvent.php',
        'think\\model\\concern\\OptimLock' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/OptimLock.php',
        'think\\model\\concern\\RelationShip' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/RelationShip.php',
        'think\\model\\concern\\SoftDelete' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/SoftDelete.php',
        'think\\model\\concern\\TimeStamp' => __DIR__ . '/..' . '/topthink/framework/src/think/model/concern/TimeStamp.php',
        'think\\model\\relation\\BelongsTo' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/BelongsTo.php',
        'think\\model\\relation\\BelongsToMany' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/BelongsToMany.php',
        'think\\model\\relation\\HasMany' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/HasMany.php',
        'think\\model\\relation\\HasManyThrough' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/HasManyThrough.php',
        'think\\model\\relation\\HasOne' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/HasOne.php',
        'think\\model\\relation\\MorphMany' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/MorphMany.php',
        'think\\model\\relation\\MorphOne' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/MorphOne.php',
        'think\\model\\relation\\MorphTo' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/MorphTo.php',
        'think\\model\\relation\\OneToOne' => __DIR__ . '/..' . '/topthink/framework/src/think/model/relation/OneToOne.php',
        'think\\paginator\\driver\\Bootstrap' => __DIR__ . '/..' . '/topthink/framework/src/think/paginator/driver/Bootstrap.php',
        'think\\response\\File' => __DIR__ . '/..' . '/topthink/framework/src/think/response/File.php',
        'think\\response\\Json' => __DIR__ . '/..' . '/topthink/framework/src/think/response/Json.php',
        'think\\response\\Jsonp' => __DIR__ . '/..' . '/topthink/framework/src/think/response/Jsonp.php',
        'think\\response\\Jump' => __DIR__ . '/..' . '/topthink/framework/src/think/response/Jump.php',
        'think\\response\\Redirect' => __DIR__ . '/..' . '/topthink/framework/src/think/response/Redirect.php',
        'think\\response\\View' => __DIR__ . '/..' . '/topthink/framework/src/think/response/View.php',
        'think\\response\\Xml' => __DIR__ . '/..' . '/topthink/framework/src/think/response/Xml.php',
        'think\\route\\Dispatch' => __DIR__ . '/..' . '/topthink/framework/src/think/route/Dispatch.php',
        'think\\route\\Domain' => __DIR__ . '/..' . '/topthink/framework/src/think/route/Domain.php',
        'think\\route\\Resource' => __DIR__ . '/..' . '/topthink/framework/src/think/route/Resource.php',
        'think\\route\\Rule' => __DIR__ . '/..' . '/topthink/framework/src/think/route/Rule.php',
        'think\\route\\RuleGroup' => __DIR__ . '/..' . '/topthink/framework/src/think/route/RuleGroup.php',
        'think\\route\\RuleItem' => __DIR__ . '/..' . '/topthink/framework/src/think/route/RuleItem.php',
        'think\\route\\RuleName' => __DIR__ . '/..' . '/topthink/framework/src/think/route/RuleName.php',
        'think\\route\\dispatch\\Callback' => __DIR__ . '/..' . '/topthink/framework/src/think/route/dispatch/Callback.php',
        'think\\route\\dispatch\\Controller' => __DIR__ . '/..' . '/topthink/framework/src/think/route/dispatch/Controller.php',
        'think\\route\\dispatch\\Redirect' => __DIR__ . '/..' . '/topthink/framework/src/think/route/dispatch/Redirect.php',
        'think\\route\\dispatch\\Response' => __DIR__ . '/..' . '/topthink/framework/src/think/route/dispatch/Response.php',
        'think\\route\\dispatch\\Url' => __DIR__ . '/..' . '/topthink/framework/src/think/route/dispatch/Url.php',
        'think\\route\\dispatch\\View' => __DIR__ . '/..' . '/topthink/framework/src/think/route/dispatch/View.php',
        'think\\service\\ModelService' => __DIR__ . '/..' . '/topthink/framework/src/think/service/ModelService.php',
        'think\\service\\PaginatorService' => __DIR__ . '/..' . '/topthink/framework/src/think/service/PaginatorService.php',
        'think\\service\\ValidateService' => __DIR__ . '/..' . '/topthink/framework/src/think/service/ValidateService.php',
        'think\\session\\SessionHandlerInterface' => __DIR__ . '/..' . '/topthink/framework/src/think/session/SessionHandlerInterface.php',
        'think\\session\\driver\\File' => __DIR__ . '/..' . '/topthink/framework/src/think/session/driver/File.php',
        'think\\session\\driver\\Memcache' => __DIR__ . '/..' . '/topthink/framework/src/think/session/driver/Memcache.php',
        'think\\session\\driver\\Memcached' => __DIR__ . '/..' . '/topthink/framework/src/think/session/driver/Memcached.php',
        'think\\session\\driver\\Redis' => __DIR__ . '/..' . '/topthink/framework/src/think/session/driver/Redis.php',
        'think\\template\\TagLib' => __DIR__ . '/..' . '/topthink/think-template/src/template/TagLib.php',
        'think\\template\\driver\\File' => __DIR__ . '/..' . '/topthink/think-template/src/template/driver/File.php',
        'think\\template\\exception\\TemplateNotFoundException' => __DIR__ . '/..' . '/topthink/think-template/src/template/exception/TemplateNotFoundException.php',
        'think\\template\\taglib\\Cx' => __DIR__ . '/..' . '/topthink/think-template/src/template/taglib/Cx.php',
        'think\\traits\\Jump' => __DIR__ . '/..' . '/topthink/framework/src/think/traits/Jump.php',
        'think\\validate\\ValidateRule' => __DIR__ . '/..' . '/topthink/framework/src/think/validate/ValidateRule.php',
        'think\\view\\TemplateHandlerInterface' => __DIR__ . '/..' . '/topthink/framework/src/think/view/TemplateHandlerInterface.php',
        'think\\view\\driver\\Php' => __DIR__ . '/..' . '/topthink/framework/src/think/view/driver/Php.php',
        'think\\view\\driver\\Think' => __DIR__ . '/..' . '/topthink/think-view/src/Think.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3f7a0d8dc00263943c4b0ab8a81697e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3f7a0d8dc00263943c4b0ab8a81697e::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInita3f7a0d8dc00263943c4b0ab8a81697e::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInita3f7a0d8dc00263943c4b0ab8a81697e::$classMap;

        }, null, ClassLoader::class);
    }
}
