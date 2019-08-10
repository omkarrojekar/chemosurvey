<?php 
class Result extends CI_Model {
	public function index()
	{

	}




	public function submitQuiz($post)
	{

		$id = rand('1111','9999'); 
		$date = time();
		$name = $post['name'];
		$contact = $post['contact'];
		$email = $post['email'];
		$speciality = $post['speciality'];
		$hospital = $post['hospital'];
		$place = $post['place'];

		//Question 1
		$question1A = "";
		$question1B = "";
		$question1C = "";
		if(isset($post['question1A']))
		{
			$question1A = $post['question1A'];
		}

		if(isset($post['question1B']))
		{
			$question1B = $post['question1B'];
		}

		if(isset($post['question1C']))
		{
			$question1C = $post['question1C'];
		}

		//Question 2
		$question2A = "";
		$question2B = "";
		$question2C = "";
		if(isset($post['question2A']))
		{
			$question2A = $post['question2A'];
		}

		if(isset($post['question2B']))
		{
			$question2B = $post['question2B'];
		}

		if(isset($post['question1C']))
		{
			$question2C = $post['question2C'];
		}

		//Question 3
		$question3A1 = "";
		if(isset($post['question3A1']))
		{
			$question3A1 = $post['question3A1'];
		}

		$question3A2 = "";
		if(isset($post['question3A2']))
		{
			$question3A2 = $post['question3A2'];
		}

		$question3B1 = "";
		if(isset($post['question3B1']))
		{
			$question3B1 = $post['question3B1'];
		}

		$question3B2 = "";
		if(isset($post['question3B2']))
		{
			$question3B2 = $post['question3B2'];
		}

		$question3C1 = "";
		if(isset($post['question3C1']))
		{
			$question3C1 = $post['question3C1'];
		}

		$question3C2 = "";
		if(isset($post['question3C2']))
		{
			$question3C2 = $post['question3C2'];
		}

		$question3D1 = "";
		if(isset($post['question3D1']))
		{
			$question3D1 = $post['question3D1'];
		}

		$question3D2 = "";
		if(isset($post['question3D2']))
		{
			$question3D2 = $post['question3D2'];
		}

		$question3E1 = "";
		if(isset($post['question3E1']))
		{
			$question3E1 = $post['question3E1'];
		}


		$question3E2 = "";
		if(isset($post['question3E2']))
		{
			$question3E2 = $post['question3E2'];
		}

		$question3F1 = "";
		if(isset($post['question3F1']))
		{
			$question3F1 = $post['question3F1'];
		}

		$question3F2 = "";
		if(isset($post['question3F2']))
		{
			$question3F2 = $post['question3F2'];
		}

		$question3G1 = "";
		if(isset($post['question3G1']))
		{
			$question3G1 = $post['question3G1'];
		}

		$question3G2 = "";
		if(isset($post['question3G2']))
		{
			$question3G2 = $post['question3G2'];
		}

		$question3H1 = "";
		if(isset($post['question3H1']))
		{
			$question3H1 = $post['question3H1'];
		}

		$question3H2 = "";
		if(isset($post['question3H2']))
		{
			$question3H2 = $post['question3H2'];
		}

		$question3I1 = "";
		if(isset($post['question3I1']))
		{
			$question3I1 = $post['question3I1'];
		}

		$question3I2 = "";
		if(isset($post['question3I2']))
		{
			$question3I2 = $post['question3I2'];
		}

		//Question 4
		$question4 = "";
		if(isset($post['question4']))
		{
			$question4 = $post['question4'];
		}

		//Question 5
		$question5A = "";
		$question5B = "";
		$question5C = "";
		$question5D = "";
		if(isset($post['question5A']))
		{
			$question5A = $post['question5A'];
		}

		if(isset($post['question5B']))
		{
			$question5B = $post['question5B'];
		}

		if(isset($post['question5C']))
		{
			$question5C = $post['question5C'];
		}
		if(isset($post['question5D']))
		{
			$question5D = $post['question5D'];
		}

				//Question 6
		$question6A = "";
		$question6B = "";
		$question6C = "";
		if(isset($post['question6A']))
		{
			$question6A = $post['question6A'];
		}

		if(isset($post['question6B']))
		{
			$question6B = $post['question6B'];
		}

		if(isset($post['question6C']))
		{
			$question6C = $post['question6C'];
		}

		//Question 7
		$question7A = "";
		$question7B = "";
		$question7C = "";
		$question7D = "";
		if(isset($post['question7A']))
		{
			$question7A = $post['question7A'];
		}

		if(isset($post['question7B']))
		{
			$question7B = $post['question7B'];
		}

		if(isset($post['question7C']))
		{
			$question7C = $post['question7C'];
		}
		if(isset($post['question7D']))
		{
			$question7D = $post['question7D'];
		}

		//Question 8
		$question8 = "";
		if(isset($post['question8']))
		{
			$question8 = $post['question8'];
		}

		//Question 9
		$question9A = "";
		$Newquestion9A = "";
		$question9B = "";
		$Newquestion9B = "";

		if(isset($post['question9A']))
		{
			$question9A = $post['question9A'];
			$Newquestion9A = implode(',',$question9A);
		}

		if(isset($post['question9B']))
		{
			$question9B = $post['question9B'];
			$Newquestion9B = implode(',',$question9B);
		}

		//Question 10
		$question10 = "";
		if(isset($post['question10']))
		{
			$question10 = $post['question10'];
		}
		//Question 11
		$question11 = "";
		if(isset($post['question11']))
		{
			$question11 = $post['question11'];
		}
		//Question 12
		$question12 = "";
		if(isset($post['question12']))
		{
			$question12 = $post['question12'];
		}
		//Question 13
		$question13 = "";
		if(isset($post['question13']))
		{
			$question13 = $post['question13'];
		}
		
		//print_r("ans is:".$newQuestion1); exit();
		$this->load->database();
		$run = $this->db->insert('chemotherapy_survey',['name'=>$name,'email'=>$email,'contact'=>$contact,'speciality'=>$speciality,'hospital'=>$hospital,'place'=>$place,'question1A'=>$question1A,'question1B'=>$question1B,'question1C'=>$question1C,'question2A'=>$question2A,'question2B'=>$question2B,'question2C'=>$question2C,'question3A1'=>$question3A1,'question3A2'=>$question3A2,'question3B1'=>$question3B1,'question3B2'=>$question3B2,'question3C1'=>$question3C1,'question3C2'=>$question3C2,'question3D1'=>$question3D1,'question3D2'=>$question3D2,'question3E1'=>$question3E1,'question3E2'=>$question3E2,'question3F1'=>$question3F1,'question3F2'=>$question3F2,'question3G1'=>$question3G1,'question3G2'=>$question3G2,'question3H1'=>$question3H1,'question3H2'=>$question3H2,'question3I1'=>$question3I1,'question3I2'=>$question3I2,'question4'=>$question4,'question5A'=>$question5A,'question5B'=>$question5B,'question5C'=>$question5C,'question5D'=>$question5D,'question6A'=>$question6A,'question6B'=>$question6B,'question6C'=>$question6C,'question7A'=>$question7A,'question7B'=>$question7B,'question7C'=>$question7C,'question7D'=>$question7D,'question8'=>$question8,'question9A'=>$Newquestion9A,'question9B'=>$Newquestion9B,'question10'=>$question10,'question11'=>$question11,'question12'=>$question12,'question13'=>$question13,'date'=>$date]);
		if($this->db->affected_rows()===1)
		{
			return 1;
		}
		else
		{
			return 0;
		}


	}

	public  function get_all_responses()
	{
		$query = $this->db->query("SELECT * FROM `chemotherapy_survey`");
    	return $query->result();
	}

	public  function get_single_response($id)
	{
		$query = $this->db->query("SELECT * FROM `chemotherapy_survey` WHERE id =  '$id'");
    	return $query->result();
	}

}
 ?>