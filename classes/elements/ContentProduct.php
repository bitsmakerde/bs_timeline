<?php
	// classes/elements/ContentProduct.php
	namespace timeline\bs_timeline\classes\elements;
	 
	/**
	 * Class ContentProduct
	 * @package esitcontent\classes\elements
	 */
	class ContentProduct extends \ContentElement{
	 
	    /**
	     * Template
	     * @var string
	     */
	    protected $strTemplate = 'ce_timeline';
	 
	    /**
	     * Compile the content element
	     */
	    protected function compile(){
	        if (TL_MODE == 'BE') {
	            $this->genBeOutput();
	        } else {
	            $this->genFeOutput();
	        }
	    }
	 
	    /**
	     * Erzeugt die Ausgebe für das Backend.
	     * @return string
	     */
	    private function genBeOutput(){
	        $this->strTemplate          = 'be_wildcard';
	        $this->Template             = new \BackendTemplate($this->strTemplate);
	        $this->Template->title      = $this->headline;
	        $this->Template->wildcard   = "### ContentProduct ###";
	    }
		
		/**
	     * Erzeugt die Ausgebe für das Frontend.
	     * @return string
	     */
	    /**
	 * Return if the image does not exist
	 *
	 * @return string
	/* */
	public function generate()
	{
		if ($this->singleSRC == '')
		{
			return '';
		}

		$objFile = \FilesModel::findByUuid($this->singleSRC);

		if ($objFile === null)
		{
			if (!\Validator::isUuid($this->singleSRC))
			{
				return '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
			}

			return '';
		}

		if (!is_file(TL_ROOT . '/' . $objFile->path))
		{
			return '';
		}

		$this->singleSRC = $objFile->path;

		return parent::generate();
	}

	     
	    private function genFeOutput()
	    {	
		    	        
	        $this->addImageToTemplate($this->Template, $this->arrData);	        
	        $GLOBALS['TL_CSS'][] = 'system/modules/bs_timeline/assets/bs_timeline.css';
	    }
	}	
?>