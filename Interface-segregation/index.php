<?php

/* A client should not be forced to implement an interface that it doesnt use */

interface ManageableInterface
{
    public function isManageable();
}

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    public function work()
    {
        return 'human sleeping';
    }

    public function sleep()
    {
    }

    public function isManageable()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface, ManageableInterface
{
    public function work()
    {
        return 'android working';
    }

    public function isManageable()
    {
        $this->work();
    }
}

class Captain
{
    public function manage(ManageableInterface $worker)
    {
        $worker->isManageable();
    }
}
