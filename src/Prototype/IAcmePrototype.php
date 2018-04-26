<?php

namespace Umbijani\Prototype;

abstract class IAcmePrototype 
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;
    /**
     * Setting an Employee's department
     *
     * @param string $orgCode
     * @return void
     */
    public abstract function setDept($orgCode);
    
    /**
     * Fetching an Employee's department
     *
     * @return void
     */
    public abstract function getDept();
   
    /**
     * Setting an Employee's name
     *
     * @param string $emName
     * @return void
     */
    public function setName($emName){
        $this->name = $emName;
    }

    /**
     * Fetching an Employee's name
     *
     * @return void
     */
    public function getName(){
        return $this->name;
    }   
    
    /**
     * Setting an Employe's Id
     *
     * @param int $emId
     * @return void
     */
    public function setId($emId){
        $this->id = $enId;
    }

   /**
    *Fetching the Employee Identification Number
    *
    * @return int
    */ 
    public function getId(){
        return $this->id;
    }
    
    /**
     * Setting the Employee Picture
     *
     * @param meame $emPic
     * @return void
     */
    public function setPic($emPic){
        $this->employeePic = $emPic;
    }
    
    /**
     * Cloning method
     *
     * @return void
     */
    abstract function __clone();
    
    
    
}


