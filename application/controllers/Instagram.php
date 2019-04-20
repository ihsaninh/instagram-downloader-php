<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use GuzzleHttp\Client;

class Instagram extends CI_Controller {

	private function guzzleRequest($endPoint)
	{
		$client = new Client();
		try {
			$response = $client->request('GET', 'https://rest.farzain.com/api/'. $endPoint, [
				'query' => [
					'apikey' => 'Z6OIZrudRcWtEuScCI9Nc38qx',
					'id' => $this->input->post('id')
				]
			]);

			$result = json_decode($response->getBody()->getContents(), true);
			return $result;	

		} catch (ConnectException $e) {	}
	}

	private function getResponse($title, $viewUrl, $endPoint = 'ig_post.php') 
	{
		$data = [
			'title' => $title,
			'menu' => [
				['menu_name' => 'Instagram Photos Downloader', 'url' => ''],
				['menu_name' => 'Instagram Videos Downloader', 'url' => 'instagramvideodownloader'],
				['menu_name' => 'Instagram Stories Downloader', 'url' => 'instagramstoriesdownloader'] 
			],
			'response' => $this->guzzleRequest($endPoint)
		];
		$this->load->view('templates/header',$data);
		$this->load->view('instagram/'. $viewUrl, $data);
		$this->load->view('templates/footer');
	}

	public function index()
	{
		$this->getResponse('Instagram Photos Downloader', 'index');
	}
	
	public function instagramVideoDownloader()
	{
		$this->getResponse('Instagram Videos Downloader', 'instagramvideodownloader');
	}

	public function instagramStoriesDownloader()
	{
		$this->getResponse('Instagram Stories Downloader', 'instagramstorydownloader', 'ig_story.php');
	}

}
