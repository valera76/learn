<?php

declare(strict_types=1);

namespace App\Controller;

use App\DomainModel\Acronym;
use App\Http\Request;
use App\Http\Response;

/**
 * Class ConverterController
 * @package App\Controller
 */
 
class ConverterController extends BaseController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function converter(Request $request): Response
    {
        $body = $request->getBody();

        $phrase = $body['note'];

        $acronym = new Acronym();
        
        $result = $acronym->makeAcronym($phrase);

        return new Response($this->render('result.tpl', [
            '{acronym}' => $result,
        ]));
    }
}
