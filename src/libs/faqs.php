<?php
class faqs {
    private $list;

	function __construct ()
	{
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

		$mainEntity = [];
		
        foreach ($this->list as $faq) {
            $entry = [];
            $entry['@type'] = 'Question';
            $entry['name'] = $faq->question_get ();
            $acceptedAnswer = [];
            $acceptedAnswer['@type'] = 'Answer';
            $acceptedAnswer['text'] = $faq->answer_get ();
            $entry['acceptedAnswer'] = $acceptedAnswer;
            $mainEntity[] = $entry;
        }

		$data['mainEntity'] = $mainEntity;

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

class faq_entry {
    private $question;
    private $answer;

    function __construct ($question, $answer)
    {
        $this->question_set ($question);
        $this->answer_set ($answer);
    }

    function question_set ($q)
    {
        $this->question = $q;
    }
    function question_get () {
        return $this->question;
    }

    function answer_set ($a)
    {
        $this->answer = $a;
    }
    function answer_get ()
    {
        return $this->answer;
    }
}
?>