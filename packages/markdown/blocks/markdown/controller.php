<?
defined('C5_EXECUTE') or die(_("Access Denied."));

use Michelf\Markdown;

class MarkdownBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Content added using the markdown syntax.";
		protected $btName = "Markdown Content";
		protected $btTable = 'btContentLocal';
		protected $btInterfaceWidth = "500";
		protected $btInterfaceHeight = "400";
		
		function getContent() {
			$content = Markdown::defaultTransform($this->content);
			return $content;				
		}
		
		public function getSearchableContent(){
			$content = Markdown::defaultTransform($this->content);
			return $content;
		}
	}
	
?>