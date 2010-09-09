<?php
defined('KOOWA') or die;
JImport('joomla.filesystem.file');

class ComSlideshowRowImage extends KDatabaseRowAbstract {
	protected $storage = '/media/com_slideshow/images/slideshows/';

	public function save() {
		$file = KRequest::get('FILES.fileupload', 'raw');
		
		if ($file) {
			if ($file['error'] !== 0) {
			} else {
				$safename 	= JFile::makeSafe(JFile::stripExt($file['name']));
				$extension	= JFile::getExt($file['name']);
				$src 		= $file['tmp_name'];
				$dest		= JPATH_SITE.$this->storage. $safename.'.'.$extension;
				
				$filename	= $this->storage .$safename.'.'.$extension;
				
				$i = 0;
				while (JFile::exists($dest)) {
					$dest = JPATH_SITE.$this->storage. $safename.$i.'.'.$extension;
					$filename = $this->storage. $safename.$i.'.'.$extension;
				}

				if (JFile::upload($src, $dest)) {
					if ($this->filename && JFile::exists(JPATH_SITE.$this->filename)) {
						JFile::delete(JPATH_SITE.$this->filename);
					}
					$this->filename = $filename;
				}
			}
		} 
		
		parent::save();
	}
	
	public function delete() {
		if (JFile::exists(JPATH_SITE.$this->filename))
			JFile::delete(JPATH_SITE.$this->filename);

		parent::delete();
	}
}