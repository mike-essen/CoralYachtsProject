<?php

namespace loginportal\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use loginportal\Banner;
use loginportal\Environment;
use loginportal\Importantdates;
use loginportal\Newsitems;

class HomeController extends Controller
{

    /**
     * Truncate the list with news items, and store them in the database
     */
    public static function storeNewsItem()
    {
        $url    = "https://www.validsign.nl/berichten/nieuwsberichten/feed/";
        $feeds  = simplexml_load_file($url);
        $items = $feeds->channel->item;

        // Empty all records
        Newsitems::truncate();

        if(!empty($feeds)) {
            $itemcount = 1;

            foreach ($items as $item) {

                // Loop through all newsitems
                if($itemcount > 5) {
                    break;
                }

                // For each item, create Database Item
                $newsitem               = new Newsitems();
                $newsitem->title        = $item->title;
                $newsitem->link         = $item->link;
                $newsitem->pubdate      = $item->pubdate;
                $newsitem->category     = $item->category;
                $newsitem->description  = $item->description;
                $newsitem->save();
                $itemcount++;
            }
        }
    }

    /**
     * Store the important dates in the database
     */
    public static function storeImportantDateItems()
    {
        $url = "https://www.validsign.nl/berichten/webinars/feed/";
        $feeds  = simplexml_load_file($url);
        $items  = $feeds->channel->item;

        // Empty all records
        Importantdates::truncate();

        if(!empty($feeds)) {
            $itemcount = 1;

            foreach ($items as $item) {

                // Loop through all Important Dates
                if($itemcount > 5) {
                    break;
                }

                // For each item, create Database Item
                $importantdate               = new Importantdates();
                $importantdate->title        = $item->title;
                $importantdate->link         = $item->link;
                $importantdate->pubdate      = $item->pubdate;
                $importantdate->category     = $item->category;
                $importantdate->description  = $item->description;
                $importantdate->save();
                $itemcount++;
            }
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $environments   = Environment::where('category', '=', 'public')->orderBy('order')->get();
        $banners        = Banner::all();
        $newsitems      = Newsitems::all();
        $importantdates = Importantdates::all();

        return view::make('index')->with(compact('environments', 'importantdates', 'banners', 'newsitems'));
    }
}
