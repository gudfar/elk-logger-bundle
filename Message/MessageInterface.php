<?php declare(strict_types = 1);

namespace Mspy\ElkLoggerBundle\Message;

/**
 * Interface MessageInterface
 * @package Mspy\ElkLoggerBundle\Message
 */
interface MessageInterface
{

    /**
     * @return array
     */
    public function getBody() :array;


    /**
     * @return string
     */
    public function getFile(): string;


    /**
     * @return int
     */
    public function getCode(): int;


    /**
     * @return int
     */
    public function getLine(): int;


    /**
     * @return string
     */
    public function getTrace(): string;


    /**
     * @return string
     */
    public function getMessage(): string;


    /**
     * @return string
     */
    public function getException(): string;
}