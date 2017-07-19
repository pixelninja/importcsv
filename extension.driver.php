<?php
require_once(TOOLKIT.'/class.author.php');

Class extension_importcsv extends Extension
{
	// About this extension:
	public function about()
	{
		return array(
			'name' => 'Import/export CSV',
			'version' => '0.4',
			'release-date' => '2011-12-15',
			'author' => array(
				'name' => 'Twisted Interactive',
				'website' => 'http://www.twisted.nl'),
			'description' => 'Import a CSV file to create new entries for a certain section, or export an existing section to a CSV file'
		);
	}

	public function fetchNavigation() {
		if(Symphony::Author()->isDeveloper())
		{
			return array(
				array(
					'location'	=> __('System'),
					'name'		=> __('Import / Export CSV'),
					'link'		=> '/'
				)
			);
		}
	}

    public function update()
    {
        if(file_exists(TMP.'/importcsv.csv'))
        {
            @unlink(TMP.'/importcsv.csv');
        }
    }


}
