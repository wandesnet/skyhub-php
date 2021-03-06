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

namespace SkyHub\Api\EntityInterface\Sales;

use SkyHub\Api\EntityInterface\EntityAbstract;
use SkyHub\Api\Handler\Request\Sales\FreightsHandler;

class Freights extends EntityAbstract
{
    
    /**
     * @return \SkyHub\Api\Handler\Response\HandlerInterface
     */
    public function freights()
    {
        /** @var FreightsHandler $handler */
        $handler = $this->requestHandler();
        return $handler->freights();
    }
}
