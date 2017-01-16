<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Send message response
     * @param string $message 
     * @param int    $status 
     * @param string $container 
     * @return \Illuminate\Http\Response
     */
    final protected function sendMessage($message, int $status = 200, $container = 'success')
    {
    	return response()->json([$container => $message], $status);
    }

    /**
     * Send success message response
     * @param string $message 
     * @return \Illuminate\Http\Response
     */
    final protected function sendSuccess($message)
    {
    	return $this->sendMessage($message);
    }

    /**
     * Send error message response
     * @param string $message 
     * @param int    $status 
     * @return \Illuminate\Http\Response
     */
    final protected function sendError($message, int $status = 404)
    {
    	return $this->sendMessage($message, $status, 'error');
    }
}
