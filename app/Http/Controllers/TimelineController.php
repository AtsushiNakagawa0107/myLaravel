<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TimelineController extends Controller
{
    public function showTimelinePage(Request $request, Response $response)
    {
    $html = <<<EOF
  <html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>タイトル</title>
  </head>
  <body>
    <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data"> <input name="_token" type="hidden" value="fd7woLGuMo6iV9CAzwDmIMk6ii3pmhS8aLjGCQSi"> <input type="hidden" name="_token" value="fd7woLGuMo6iV9CAzwDmIMk6ii3pmhS8aLjGCQSi">
      <div class="row mb-4">
        <div class="col-sm-4"><strong>名前</strong> <br><br> <input class="form-control mr-auto" name="tweet" type="text"> <input id="image_url" class="form-control mr-auto" name="image_url" type="file"> <input class="btn btn-primary" type="submit" value="ツイート"> </div>
      </div>
    </form>
  </body>
  </html>
EOF;

        $response->setContent($html);

        return $response;
    }
    
    public function postTweet()
    {

    }
}