<?php
/**
 * Created by PhpStorm.
 * User: veerajshenoy
 * Date: 01/02/18
 * Time: 4:26 PM
 */

class ErrorController extends Controller {
    function __construct() {
        parent::__construct();
        $this->GetHtmlFileContents('./error.html');
    }

    function error() {
    }

}