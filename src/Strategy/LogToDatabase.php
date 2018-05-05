<?php

namespace Umbijani\Strategy;

class LogToDatabase implements Logger
{
    public function log()
    {
        return 'log to database';
    }
}
