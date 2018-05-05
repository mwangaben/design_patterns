<?php

namespace Umbijani\Strategy;

class LogToFile implements Logger
{
    public function log()
    {
        return 'log to file';
    }
}
