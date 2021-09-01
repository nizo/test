<?php
class faqs
{
    private $list;

	function __construct ()
	{
        $this->list = [];
	}

    function faq_add ($q, $a)
    {
        $this->list[] = new faq_entry($q, $a);
    }

    function structured_data_get_raw ()
	{
		$data = [];
        
		$data['@context']		= 'http://schema.org/';
		$data['@type']			= 'FAQPage';

		$main_entity = [];
		
        foreach ($this->list as $faq) {
            $entry = [];
            $entry['@type'] = 'Question';
            $entry['name'] = $faq->question_get ();
            $accepted_answer = [];
            $accepted_answer['@type'] = 'Answer';
            $accepted_answer['text'] = $faq->answer_get ();
            $entry['acceptedAnswer'] = $accepted_answer;
            $main_entity[] = $entry;
        }

		$data['mainEntity'] = $main_entity;

		return $data;
	}

	function structured_data_get_code ()
	{
		echo '<script type="application/ld+json">';
		echo json_encode ($this->structured_data_get_raw ());
		echo '</script>';
	}

    function html_get_code ($extra_classes = '')
    {
        $html = '';

        foreach ($this->list as $faq) {
            $html .= '<div class="toggle-box '.$extra_classes.'">';
            $html .= '<input type="checkbox" id="'.md5($faq->question_get ()).'" />';
            $html .= '<label for="'.md5($faq->question_get ()).'">'.$faq->question_get ().'</label>';
            $html .= '<div class="toggle-box__content">'.$faq->answer_get ().'</div>';
            $html .= '</div>';
        }

        echo $html;
    }
}

class faq_entry
{
    private $question;
    private $answer;

    function __construct ($question, $answer)
    {
        $this->question_set ($question);
        $this->answer_set ($answer);
    }

    function question_set ($question)
    {
        $this->question = $question;
    }

    function question_get ()
    {
        return $this->question;
    }

    function answer_set ($answer)
    {
        $this->answer = $answer;
    }

    function answer_get ()
    {
        return $this->answer;
    }
}
?>