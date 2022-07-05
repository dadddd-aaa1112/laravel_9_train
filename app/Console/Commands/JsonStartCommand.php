<?php

namespace App\Console\Commands;

use App\Components\ImportDataClient;
use App\Models\Post;
use Illuminate\Console\Command;

class JsonStartCommand extends Command
{

    protected $signature = 'import:jsonplaceholder';


    protected $description = 'get data';


    public function handle()
    {
        $import = new ImportDataClient();
        $response = $import->client->request('GET', 'posts');
        $data = json_decode($response->getBody()->getContents());

        foreach($data as $item) {
            Post::firstOrCreate( [
                'desc' => $item->title,
                'category_id'=> 2
            ]);
        }
    }
}
