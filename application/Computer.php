<?php
namespace application;
use helpers\Helper;

abstract class Computer
{
    protected $CPU;
    protected $RAM;
    protected $video;
    protected $memory;
    protected $computerName = 'Computer';
    private $isWork = false;

    public function __construct($CPU, $RAM, $video, $memory, $computerName)
    {
        $this->CPU = $CPU;
        $this->RAM = $RAM;
        $this->video = $video;
        $this->memory = $memory;
        $this->computerName = $computerName;
    }

    public function printParameters(){
        if ($this->isWork){
            $message = "cpu: {$this->getCPU()},<br> 
            ram: {$this->getRAM()}\n,<br> 
            memory: {$this->getMemory()}\n,<br> 
            video: {$this->getVideo()}<br>";
            Helper::printLine($message,Helper::$note);
        } else {
            throw new \Exception('Exeption!!!');
//            Helper::printLine('NOT WORK!!!',Helper::$failure);
        }
    }

    abstract public function identifyUser();

    public function start()
    {
        $this->isWork = true;
    }
    public function stop() {
        $this->isWork = false;
    }

    public function restart() {
        if ($this->isWork == true){
            $this->stop();
            $this->start();
        }
    }
    /**
     * @return mixed
     */
    public function getCPU()
    {
        return $this->CPU;
    }

    /**
     * @param mixed $CPU
     */
    public function setCPU($CPU): void
    {
        $this->CPU = $CPU;
    }

    /**
     * @return mixed
     */
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * @param mixed $RAM
     */
    public function setRAM($RAM): void
    {
        $this->RAM = $RAM;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     */
    public function setMemory($memory): void
    {
        $this->memory = $memory;
    }

}