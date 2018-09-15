<?php declare(strict_types = 1);

namespace Mspy\ElkLoggerBundle\Logger;

use Monolog\Logger;
use Mspy\ElkLoggerBundle\Message\MessageInterface;
use Psr\Log\LogLevel;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * Class ElkLogger
 * @package Mspy\ElkLoggerBundle\ElkLogger
 */
class ElkLogger
{
    /**
     * @var array valid levels are:
     *
     *  LogLevel::ERROR,
     *  LogLevel::WARNING,
     *  LogLevel::NOTICE,
     *  LogLevel::WARNING,
     *  LogLevel::INFO,
     *  LogLevel::DEBUG
     */
    protected $levels = [];

    /**
     * @var array
     */
    protected $levelMaps = [
        E_ERROR       => LogLevel::ERROR,
        E_WARNING     => LogLevel::WARNING,
        E_NOTICE      => LogLevel::NOTICE,
        E_STRICT      => LogLevel::WARNING,
        Logger::INFO  => LogLevel::INFO,
        Logger::DEBUG => LogLevel::DEBUG,
    ];

    /**
     * @var string Type.
     */
    protected $type;

    /**
     * @var string Index.
     */
    protected $index;

    /**
     * @var array Hosts with elasticsearch connection strings.
     */
    protected $hosts;

    /**
     * @var array Ignore exceptions.
     */
    protected $ignoreExceptions = [];

    /**
     * @var array Body fields.
     */
    protected $bodyFields = [];

    /**
     * @var string Path to log files.
     */
    protected $fileLogPath = '/var/log/app/';


    public function __construct(ParameterBagInterface $bag)
    {

        dump($bag->all());exit();

//        $this->index = $index;
//        $this->hosts = $hosts;
//        $this->type  = $type;
    }


    public function send(MessageInterface $message)
    {

        dump($this->index);exit();

//        if (in_array($message->getException(), $this->getIgnoreExceptions())) {
//            return [];
//        }
//
//        $request = $this->getRequest();
//        $level = $message->getLevel();
//
//        $level = !empty($this->levelMaps[$level]) ? $this->levelMaps[$level] : $level;
//
//        if (!in_array($level, $this->levels)) {
//            return [];
//        }
//
//        $params = [
//            'params'         => print_r($request, 1),
//            'host'           => gethostname(),
//            'clientip'       => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '-',
//            'request'        => (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'cli'),
//            'log_level'      => strtoupper($level),
//            'server_ip'      => empty($_SERVER['SERVER_ADDR']) ? gethostbyname(gethostname()) : $_SERVER['SERVER_ADDR'],
//            'request_method' => !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : '-',
//            'remote_host'    => !empty($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : '-',
//            'remote_addr'    => !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '-',
//            'body_fields'    => $this->getBodyFields(),
//        ];
//
//        $params = array_merge($params, $message->getBody(), $this->getBodyFields());
//
//        $line = json_encode($params) . PHP_EOL;
//        $file = $this->getFileLogPath() . $this->getIndex() . '-' . $level . '.log';
//
//        if (!file_exists($file)) fopen($file, 'w+');
//        file_put_contents($file, $line, FILE_APPEND);

    }


}