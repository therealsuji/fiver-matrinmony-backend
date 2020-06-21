<?php
namespace App\Filters;
use CodeIgniter\Config\DotEnv;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use function MongoDB\BSON\toJSON;

class RestAuth implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request
     *
     * @return mixed
     */
    public function before(RequestInterface $request)
    {
        $rest_userName =$_SERVER['rest.username'];
        $rest_password =$_SERVER['rest.password'];
        $auth = $request->getHeader('Authorization');
        $response = \Config\Services::response();

        $auth_array = explode(" ", $auth);
        $cred =base64_decode(end($auth_array));
        $cred_array = explode(':',$cred);
        if($cred_array[0] == $rest_userName && $cred_array[1] == $rest_password){
            return;
        }
        $response->setStatusCode(401);
        $response->setBody(json_encode(array('status_code'=>401,'message'=>'auth credentials invalid')));
        $response->send();

        die();
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param \CodeIgniter\HTTP\RequestInterface $request
     * @param \CodeIgniter\HTTP\ResponseInterface $response
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response)
    {

    }

    //--------------------------------------------------------------------
}
