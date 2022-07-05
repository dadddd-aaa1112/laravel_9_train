<?php

namespace App\Console\Commands;

use App\Components\Json;
use App\Models\Post;
use Illuminate\Console\Command;

class JsonCommand extends Command
{


    protected $signature = 'start:json';


    protected $description = 'start';

    public function handle()
    {
        $import = new Json();
        $response = $import->client->request('GET', 'posts');
        $data = json_decode($response->getBody()->getContents());

        foreach($data as $item) {
            Post::firstOrCreate([

                'desc' => $item->body,
                'category_id' => 1
            ]);
        }

        dd('finish');


    }
}
