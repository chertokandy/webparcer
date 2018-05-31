    use Goutte\Client;


    use Symfony\Component\DomCrawler\Crawler;


    public function crawlerAction()


    {


        $url = "http://www.agiratech.com";


        $client = new Client();


        $crawler = $client->request('GET', $url);


        $links_count = $crawler->filter('a')->count();


        $all_links = [];


        if($links_count > 0){


            $links = $crawler->filter('a')->links();


            foreach ($links as $link) {


                $all_links[] = $link->getURI();


            }


            $all_links = array_unique($all_links);


            echo "All Avialble Links From this page $url Page<pre>"; print_r($all_links);echo "</pre>";


        } else {


            echo "No Links Found";


        }


        die;


    }