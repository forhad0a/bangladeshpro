<?php
require 'src/tracy.php';
use Tracy\Debugger;
use Tracy\OutputDebugger;
class TraceMe
{
	public function tracy()
	{
		//setup tracy
		Debugger::$strictMode = TRUE;
		Debugger::$logSeverity = E_NOTICE | E_WARNING;
		// sending an email for every new error record.
		//Debugger::$email = 'admin@example.com';
		Debugger::enable(Debugger::DETECT, APPPATH . '/logs');		
	}
}