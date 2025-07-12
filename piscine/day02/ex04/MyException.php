<?php

class MyException extends Exception
{
    public function	getMyMessage()
    {
        return "Errore catturato\n";
    }
}
