<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class MarkdownPackage extends Package {

	protected $pkgHandle = 'markdown';
	protected $appVersionRequired = '5.2.0';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Content added using the markdown syntax.");
	}
	
	public function getPackageName() {
		return t("Markdown Content");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('markdown', $pkg);
		
	}




}