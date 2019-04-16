<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instagram extends CI_Controller {

	private function http_request($url)
	{
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($ch); 
		curl_close($ch);      
		return json_decode($output, TRUE);
	}

	private function getApi($title, $viewUrl, $endpoint = 'ig_post.php') 
	{
		$data['title'] = $title;
		$data['menu'] = $this->db->get('menu')->result_array();
		$apiKey = 'Z6OIZrudRcWtEuScCI9Nc38qx';
		$id = $this->input->post('id');
		$data['response'] = $this->http_request('https://rest.farzain.com/api/'. $endpoint .'?id='. $id . '&apikey='. $apiKey);
		$this->load->view('templates/header',$data);
		$this->load->view('instagram/'. $viewUrl, $data);
		$this->load->view('templates/footer');
	}

	public function index()
	{
		$this->getApi('Instagram Photos Downloader', 'index');
	}
	
	public function instagramVideoDownloader()
	{
		$this->getApi('Instagram Videos Downloader', 'instagramvideodownloader');
	}

	public function instagramStoriesDownloader()
	{
		$this->getApi('Instagram Stories Downloader', 'instagramstorydownloader', 'ig_story.php');
	}

}
