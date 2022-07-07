<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function hello(){
        return <<<EOF
          <html>
          <head>
            <title>Hello</title>
          </head>
        <body>
            <h1>Hello</h1> 
            <p>Hello page.</p>
          </body>
          </html>
EOF;

    }

    public function access(Request $request,Response $response){
$html = 
<<<EOF
        <html>
        <head><title>Access</title></head>        
        <body><h3>Request</h3>
<pre>
EOF
.$request.
<<<EOF
</pre>
        <h3>Response</h3>
        <pre>
EOF
.$response.
<<<EOF
</pre>
        </body>
        </html>
EOF;
$response->setContent($html);
      return $response;

    }

    //
}


