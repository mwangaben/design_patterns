<?php 

namespace Umbijani\Strategy;

class Client
{
    public function log(Logger $log)
    {
        return $log->log();
    }
}
