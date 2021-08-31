<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API-Ebplex ",
 *      description="Swagger OpenApi description",
 *   @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @@OA\Server(url="http://localhost")
 *
 * @OA\Tag(
 *     name="API-Ebplex",
 *     description="API Endpoints of API-Ebplex"
 * )
 */


class Controller extends BaseController
{ 
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
