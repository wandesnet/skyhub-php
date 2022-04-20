<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  SkuHub
 * @package   SkuHub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

namespace SkyHub\Api\Log\TypeInterface;

interface TypeInterface
{
    
    /**
     * @return string
     */
    public function __toString();
    
    
    /**
     * @param string|array $id
     *
     * @return $this
     */
    public function setRequestId($id = null);
    
    
    /**
     * @param string|array $body
     *
     * @return $this
     */
    public function setBody($body = null);
    
    
    /**
     * @param string $message
     *
     * @return $this
     */
    public function setCustomMessage($message = null);
    
    
    /**
     * @param array $headers
     *
     * @return $this
     */
    public function setHeaders(array $headers = []);
    
    
    /**
     * @param string $version
     *
     * @return $this
     */
    public function setProtocolVersion($version = null);
}