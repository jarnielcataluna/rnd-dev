<?php
	include 'functions.php';

	if(isset($_POST['respondents_name']) && !empty($_POST['respondents_name'])){
		$respondent['respondent_name'] = $_POST['respondents_name'];
		$respondent['respondent_id'] = uniqid(rand(), true);
		$respondent['respondent_email'] = '';
		$respondent['survey_id'] = $_POST['survey_id'];
		$survey = getSurveyInfo($respondent['survey_id']);
		$count = getRespondentsCount($respondent['survey_id']);
		
		if(isset($_POST['respondents_email']) && !empty($_POST['respondents_email'])){
			if(filter_var($_POST['respondents_email'], FILTER_VALIDATE_EMAIL)){
			$respondent['respondent_email'] = $_POST['respondents_email'];
				if(validateRespondentsEmail($respondent['respondent_email'], $_POST['survey_id'])){
					
					if(isset($_POST['respondent_id']) && !empty($_POST['respondent_id'])){
						global $dbh;
						$query = "DELETE FROM duplicateRespondents WHERE respondent_id = ?";
						$sth = $dbh->prepare($query);
						$sth->execute(array($_POST['respondent_id']));
					}
					
					if(addRespondents($respondent)){
				 		echo $respondent['survey_id'];
					}
				}else{
					echo 'email already exist';
				}
				
			}else{
				echo 'invalid email format';
			}
		}else{
			 if(addRespondents($respondent)){
			 	echo $respondent['survey_id'];
			 }
		}



		
	}else{
		echo 'respondent name is required';
	}
	
?>