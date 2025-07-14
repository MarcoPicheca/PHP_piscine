<?php

class MyException extends Exception
{
    public function	getMyMessage()
    {
        echo "Errore catturato";
    }
}
