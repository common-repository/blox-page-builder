<?php

class UniteCreatorLibrary extends UniteCreatorLibraryWork{
	
	/**
	 * function for override, process provide library
	 * return true if library found and processed, and false if not
	 */
	public function processProviderLibrary($name){
		
		switch($name){
			case "jquery":
				UniteProviderFunctionsUC::addjQueryInclude();
			break;
			default:
				return(false);
			break;
		}
		
		return(true);
	}
	
	
}