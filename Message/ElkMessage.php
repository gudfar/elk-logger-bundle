<?php declare(strict_types = 1);

namespace Mspy\ElkLoggerBundle\Message;

/**
 * Class ElkMessage
 * @package Mspy\ElkLoggerBundle\Message
 */
class ElkMessage implements MessageInterface
{
    /**
     * @var string Filename.
     */
    protected $file;

    /**
     * @var integer Code number.
     */
    protected $code;

    /**
     * @var integer Level.
     */
    protected $level;

    /**
     * @var integer Line code.
     */
    protected $line;

    /**
     * @var string Trace.
     */
    protected $trace;

    /**
     * @var string Message text.
     */
    protected $message;

    /**
     * @var string Exception class name.
     */
    protected $exceptionClassName;

    /**
     * Message constructor.
     *
     * @param \Exception $ex Exception.
     */
    public function __construct(\Exception $ex = null)
    {
        if (null !== $ex) {
            $this->setFile($ex->getFile())
                ->setCode($ex->getCode())
                ->setLine($ex->getLine())
                ->setLevel(E_ERROR)
                ->setTrace($ex->getTraceAsString())
                ->setException(get_class($ex))
                ->setMessage($ex->getMessage());
        }
    }

    /**
     * Setter for file.
     *
     * @param string $file Filename.
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Setter for code.
     *
     * @param integer $code Code number.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Setter for line.
     *
     * @param integer $line Line number.
     *
     * @return $this
     */
    public function setLine($line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * Setter for trace.
     *
     * @param string $trace Trace.
     *
     * @return $this
     */
    public function setTrace($trace)
    {
        $this->trace = $trace;
        return $this;
    }

    /**
     * Setter for message.
     *
     * @param string $message Message text.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Setter for exception.
     *
     * @param string $exceptionClassName Exception class name.
     *
     * @return $this
     */
    public function setException($exceptionClassName)
    {
        $this->exceptionClassName = $exceptionClassName;
        return $this;
    }

    /**
     * Getter for exception.
     *
     * @return string Message text
     */
    public function getException(): string
    {
        return $this->exceptionClassName;
    }

    /**
     * Setter for level.
     *
     * @param integer $level Level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Getter for file.
     *
     * @return string Filename
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * Getter for code.
     *
     * @return integer Code
     */
    public function getCode(): int
    {
        return $this->code;
    }


    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * Getter for trace.
     *
     * @return string Trace
     */
    public function getTrace() :string
    {
        return $this->trace;
    }

    /**
     * Getter for message.
     *
     * @return string Message text
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Method build message body.
     *
     * @return array Message body
     */
    public function getBody(): array
    {
        return array_filter([
            'file'      => $this->getFile(),
            'code'      => $this->getCode(),
            'line'      => $this->getLine(),
            'trace'     => $this->getTrace(),
            'message'   => $this->getMessage(),
            'exception' => $this->getException(),
        ]);
    }

}