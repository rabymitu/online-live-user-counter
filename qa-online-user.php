<?php
/*
 * Add Online User Count
 */

class qa_html_theme_layer extends qa_html_theme_base
{
	public function head_metas()
	{
		qa_html_theme_base::head_metas();
			$this->content['script'][]='<SCRIPT async src="'.
            qa_html(QA_HTML_THEME_LAYER_URLTOROOT.'ovc/counter.js').
            '" TYPE="text/javascript"></SCRIPT>';

			
			//$this->output("<script src='/q2a/ovc/counter.js'></script>");
		
	}
}
