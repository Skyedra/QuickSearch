<?php

/**
 * Quick Search Plugin
 * Adds a search button to the top right of pages to quickly execute a search.
 */
class QuickSearchPlugin extends MantisPlugin  {
        /**
         * A method that populates the plugin information and minimum requirements.
         * @return void
         */
        function register() {
                $this->name = "Quick Search";
                $this->description = "Adds a search button to the top right of pages to quickly execute a search.";
                $this->page = '';

                $this->version = '0.1';
                $this->requires = array(
                        'MantisCore' => '2.3.0-dev',
                );

                $this->author = 'Skye';
				//$this->contact = '';
                $this->url = 'https://github.com/Skyebold/QuickSearch';
        }

        /**
         * plugin hooks
         * @return array
         */
        function hooks() {
			$t_hooks = array(
				'EVENT_LAYOUT_RESOURCES' => 'inject_quick_search_resources'
			);

			return $t_hooks;
        }

		function inject_quick_search_resources()
		{
			echo '<script type="text/javascript" src="' . plugin_file("jquery.min.js") . '"></script>' . "\n";
			echo '<script type="text/javascript" src="' . plugin_file("QuickSearch.js") . '"></script>' . "\n";
			echo '<link rel="stylesheet" type="text/css" href="' . plugin_file("QuickSearch.css") . '" />' . "\n";
		}
}

?>

