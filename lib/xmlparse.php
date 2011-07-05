<?php
//defined(ISDEFINED) die ('No direct access allowed');

class XMLParse {
	var $perpage;
	var $data;
	var $title;
	var $link;
	var $description;
	var $lastBuildDate;
	function __construct($xml,$perpage) {
		
		$this->data  = simplexml_load_file($xml);
		$this->perpage = $perpage;
		$this->title = $this->data->channel->title;
		$this->link = $this->data->channel->link;
		$this->description = $this->data->channel->description;
		$this->lastBuildDate = $this->data->channel->$description;
	}
	function getTitle() {
		return $this->title;
	}
	function getLink() {
		return $this->link;
	}
	function getDescription() {
		return $this->description;
	}
	function getLastBuildDate() {
		return $this->lastBuildDate;
	}
	function getItem($index) {
		
	}
}
