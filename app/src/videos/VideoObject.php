<?php
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\CheckboxsetField;

class VideoObject extends DataObject{
	private static $db = [
		'Title' => 'Text',
		'Description' => 'Text',
	];

	private static $has_one = [
		'VideoSource' => File::class,
		'VideoPage' => VideoPage::class
	];

	private static $many_many = [
		'VideoCategories' => VideoCategory::class
	];

	// to save. when comment $owns function, will be just DRAFT status.
	private static $owns = [
		'VideoSource'
	];

	public function getCMSFields(){
		return new FieldList(
			TextField::create('Title'),
			TextareaField::create('Description'),
			UploadField::create('VideoSource'),
			CheckboxsetField::create('VideoCategories', 'Categories', VideoCategory::get()),
		);
	}
}