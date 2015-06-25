<?php

/**
 * 
 * HTML Hider v0.1
 * By AyoobAli.com
 * License: The MIT License (MIT)
 * Copyright (c) 2015 Ayoob Ali
 * 
 * This tool will hide the HTML source code of your page from the normal 'view source' option.
 * 
 * Use:-
 * include('HTMLhider.class.php');
 * $hider = new \HTMLhider\hider();
 * $hider->hide($FullHTMLpage);
 * $hider->activateJS();
 * echo $hider->getHiddenPage();
 * 
 */

namespace HTMLhider;

class hider
{
    private $hiddenData     = "";
    private $showErrors     = false;
    private $lastError      = "";
    private $javascriptPath = "/hjs.php";

    public function __construct( $session = true )
    {
        if ( $session == true ) {
            session_start();
        }
    }

    // Hide Data
    public function hide( $string = "" )
    {
        if ( $string == "" ) {
            $this->ErrorMSG( "String can't be empty." );
            return false;
        } else {
            $arr = str_split( $string );
            $data = "";
            foreach ( $arr as $key => $value ) {
                $data .= sprintf( "%08d", decbin( ord( $value ) ) );
            }
            $data = str_replace( "1", chr( 9 ), $data );
            $data = str_replace( "0", chr( 32 ), $data );
            $this->hiddenData .= $data;
            return $data;
        }
    }

    // Change JavaScript file Path
    public function setJSpath( $path = "" )
    {
        if ( trim( $path ) == "" ) {
            $this->ErrorMSG( "path can't be empty" );
            return false;
        } else {
            $this->javascriptPath = trim( $path );
            return $this->javascriptPath;
        }
    }

    // Clear Hidden Data
    public function clearHiddenData()
    {
        $this->hiddenData = "";
        return $this->hiddenData;
    }

    // Activate javascript
    public function activateJS()
    {
        if ( session_id() === '' ) {
            $this->ErrorMSG( "Session is not active." );
            return false;
        } else {
            $_SESSION['HTMLhider'] = true;
            return true;
        }
    }

    // Get hidden HTML page
    public function getHiddenPage( $activateJS = false )
    {
        $hiddenPage = '<html lang="en"><head><script src="';
        $hiddenPage .= $this->javascriptPath;
        $hiddenPage .= '" type="text/javascript"></script></head><body>' . "\n";
        $hiddenPage .= $this->hiddenData;
        $hiddenPage .= "\n</body></html>";
        if ( $activateJS === true ) {
            $this->activateJS();
        }
        return $hiddenPage;
    }

    // Get Hidden Data
    public function getHiddenData()
    {
        return $this->hiddenData;
    }

    // Get JavaScript file Path
    public function getJSpath()
    {
        return $this->javascriptPath;
    }

    // Set Show Errors
    public function setShowErrors( $trueOrFalse = true )
    {
        if ( $trueOrFalse == false ) {
            $this->showErrors = false;
        } else {
            $this->showErrors = true;
        }
        return $this->showErrors;
    }

    // Get Show Errors
    public function getShowErrors()
    {
        return $this->showErrors;
    }

    // Get Last Error
    public function getLastError()
    {
        return $this->lastError;
    }

    // Show error messages
    private function ErrorMSG( $string = "" )
    {
        $this->lastError = "Error: " . $string . ".";
        if ( $this->showErrors === true ) {
            echo $this->lastError . "\n<br />";
        }
        return $this->lastError;
    }

}

?>