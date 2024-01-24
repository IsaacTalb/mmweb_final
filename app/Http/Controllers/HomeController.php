<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;
class HomeController extends Controller
{
	protected $navbar = [];
	private $articles;
	private $pageActionId;
	public function __construct()
	{
		$this->pageActionId = 1;
		$this->fetchArticles(); 
	}
	private function fetchArticles()
    {
        $data['article'] = DB::table('activities')
		->where('status', 1)->orderBy('created_at', 'DESC')->limit(13)->get();
        $this->articles = [];
        foreach ($data['article'] as $item) {
            $article = unserialize($item->action_key);
            if (is_array($article) && in_array($this->pageActionId, $article)) {
                $this->articles[] = $item;
            }
        }
    }

	public function index()
	{
		$data['new_video_feed'] = DB::table('video')
		->where('status', 1)
		->orderBy('created_at', 'DESC')
		->limit(3)
		->get();
		$data['New_activty_posting'] = DB::table('activities')
		->where('status', 1)
		->orderBy('created_at', 'DESC')
		->limit(3)
		->get();
		return view('front.home', compact('data'));
	}

	public function academy_cafe(){
		$data['video'] = DB::table('video')
		->select()
		->orderBy('created_at', 'DESC')
		->get();
		$video_target = [];
			foreach($data['video'] as $item){
				$categoryIds = unserialize($item->category);
				if (is_array($categoryIds) && in_array(1, $categoryIds)){
					$video_target[]  = $item;
				}
			} 
			$data['videoArtegSelected'] = $video_target;
			$this->pageActionId = 1; // Example: change the value to 2
			$this->fetchArticles();
			$data['article_target'] = $this->articles;
			return view('front/academy_cafe', compact('data'));
	}
	public function readingArticle($articleSlug){
        $data['article'] = DB::table('activities')
		->where('title', $articleSlug)
		->first();
		return view('front/reading_article', compact('data'));
	}

	public function watch($videoSlug, Request $request)
	{
		$data['video_taget'] = DB::table('video')
		->where('title', $videoSlug)
		->first();
		return view('front/waching_video')->with('data', $data);
	}
   public function	entreprenuers(){
		$data['video'] = DB::table('video')
		->select()
		->orderBy('created_at', 'DESC')
		->get();
			$video_target = [];
			foreach($data['video'] as $item){
				$categoryIds = unserialize($item->category);
				if (is_array($categoryIds) && in_array(3, $categoryIds)) {
					$video_target[]  = $item;
				}
			} 
		$data['videoArtegSelected'] = $video_target;
		$this->pageActionId = 3; // Example: change the value to 2
		$this->fetchArticles();
		$data['article_target'] = $this->articles;
		return view('front/entreprenuers', compact('data'));
   }

   public function	food_product(){
	$data['video'] = DB::table('video')
	->select()
	->orderBy('created_at', 'DESC')
	->get();
		$video_target = [];
		foreach($data['video'] as $item){
			$categoryIds = unserialize($item->category);
			if (is_array($categoryIds) && in_array(3, $categoryIds)) {
				$video_target[]  = $item;
			}
		} 
	$data['videoArtegSelected'] = $video_target;
	$this->pageActionId = 3; // Example: change the value to 2
	$this->fetchArticles();
	$data['article_target'] = $this->articles;
	return view('front/food_product', compact('data'));
}

public function	community_college(){
	$data['video'] = DB::table('video')
	->select()
	->orderBy('created_at', 'DESC')
	->get();
		$video_target = [];
		foreach($data['video'] as $item){
			$categoryIds = unserialize($item->category);
			if (is_array($categoryIds) && in_array(3, $categoryIds)) {
				$video_target[]  = $item;
			}
		} 
	$data['videoArtegSelected'] = $video_target;
	$this->pageActionId = 3; // Example: change the value to 2
	$this->fetchArticles();
	$data['article_target'] = $this->articles;
	return view('front/community_college', compact('data'));
}

public function	livelihood(){
	$data['video'] = DB::table('video')
	->select()
	->orderBy('created_at', 'DESC')
	->get();
		$video_target = [];
		foreach($data['video'] as $item){
			$categoryIds = unserialize($item->category);
			if (is_array($categoryIds) && in_array(3, $categoryIds)) {
				$video_target[]  = $item;
			}
		} 
	$data['videoArtegSelected'] = $video_target;
	$this->pageActionId = 3; // Example: change the value to 2
	$this->fetchArticles();
	$data['article_target'] = $this->articles;
	return view('front/livelihood', compact('data'));
}
   public function	mayamer_shope_desing(){
	return view('front/myamershop');
   }
}