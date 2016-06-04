<?php 

function createExam($ownerID, $name, $description, $startTime, $endTime, $open, $maxTries) {
	global $conn;
	if($startTime != null) {
		$stmt = $conn->prepare("INSERT INTO exam
    		(name, description, ownerID, startTime, endTime, openToPublic, maxTries)
            VALUES (?, ?, ?, ?, ?, ?, ?) RETURNING id");
		if($stmt->execute(array($name, $description, $ownerID, $startTime, $endTime, $open, $maxTries)))
	    {
	    	return $stmt->fetch(PDO::FETCH_ASSOC)['id'];
	    }
	    else return -1;
	}
	
	$stmt = $conn->prepare("INSERT INTO exam
    		(name, description, ownerID, openToPublic, maxTries)
            VALUES (?, ?, ?, ?, ?) RETURNING id");
	if($stmt->execute(array($name, $description, $ownerID, $open, $maxTries)))
    {
    	return $stmt->fetch(PDO::FETCH_ASSOC)['id'];
    }
    else return -1;
}

function getExam($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT id, name, description, ownerid, starttime, endtime, opentopublic, maxtries, maxscore
   		FROM exam
   		WHERE id = ?");
	$stmt->execute(array($examID));
	return $stmt->fetch();
}

function getExamStats($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT COUNT(id) AS attempts, AVG(finalscore) AS averagegrade
								FROM attempt
								WHERE examid = ?");
	$stmt->execute(array($examID));
	return $stmt->fetch();
}

function getExamApprovals($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
								FROM attempt
								WHERE examid = ? AND finalscore >= 9.5");
	$stmt->execute(array($examID));
	return $stmt->fetchAll();
}

function getExamQuestions($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT id, statement
								FROM question
								WHERE (category IS NOT NULL AND category IN (SELECT id FROM examelement WHERE examid = ?))
									OR (id IN (SELECT id FROM examelement WHERE examid = ?))");
	$stmt->execute(array($examID, $examID));
	return $stmt->fetchAll();
}

function getExamStudentGrades($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT attempt.id AS attemptid, registereduser.id AS userid, registereduser.name AS username, finalscore
							FROM attempt INNER JOIN registereduser ON registereduser.id = attempt.userid
							WHERE attempt.examid = ?");
	$stmt->execute(array($examID));
	return $stmt->fetchAll();
}

function getQuestion($questionID) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
								FROM question
								WHERE id = ?");
	$stmt->execute(array($questionID));
	return $stmt->fetch();
}

function getQuestionAverageScore($questionID) {
	global $conn;
	$stmt = $conn->prepare("SELECT question.id AS questionid, question.statement AS statement, AVG(answer.score) AS score, COUNT(answer.id) AS answers
								FROM questionattempt INNER JOIN question ON questionattempt.questionid = question.id
									INNER JOIN answer ON answerid = answer.id
								WHERE question.id = ?
								GROUP BY question.id, question.statement");
	$stmt->execute(array($questionID));
	return $stmt->fetch();
}

function getOwnedAndManagedExams($userID) {
	global $conn;
	$stmt = $conn->prepare("(SELECT id, name, description, startTime, endTime, openToPublic, ownerID FROM Exam WHERE ownerID = ? OR id IN
		(SELECT examID FROM ManagesExam WHERE managerID = ?)
		ORDER BY startTime DESC)");
	$stmt->execute(array($userID, $userID));
	return $stmt->fetchAll();
}

function getExamOwner($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT registereduser.id, registereduser.name
								FROM registereduser INNER JOIN exam ON exam.ownerid = registereduser.id
								WHERE exam.id = ?");
	$stmt->execute(array($examID));
	return $stmt->fetchAll();
}

function getExamManagers($examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT registereduser.id, registereduser.name
								FROM registereduser INNER JOIN managesexam ON managesexam.managerid = registereduser.id
								WHERE managesexam.examid = ?");
	$stmt->execute(array($examID));
	return $stmt->fetchAll();
}

function getOtherExamManagers($examID, $userID) {
	global $conn;
	$stmt = $conn->prepare("SELECT registereduser.id, registereduser.name
								FROM registereduser INNER JOIN managesexam ON managesexam.managerid = registereduser.id
								WHERE managesexam.examid = ? AND registereduser.id != ?");
	$stmt->execute(array($examID, $userID));
	return $stmt->fetchAll();
}

function isExamManager($userID, $examID) {
	global $conn;
	$stmt = $conn->prepare("SELECT managerid FROM managesexam WHERE managerid = ? AND examid = ?");
	$stmt->execute(array($userID, $examID));
	if(count($stmt->fetchAll()) > 0)
		return true;
	else
		return false;
}

function editExamName($examID, $newName) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET name = ? WHERE id = ? RETURNING name");
	$stmt->execute(array($newName, $examID));
	return $stmt->fetchAll();
}

function editExamDescription($examID, $newDescription) {
	global $conn;
	$stmt = $conn->prepare("UPDATE exam SET description = ? WHERE id = ? RETURNING description");
	$stmt->execute(array($newDescription, $examID));
	return $stmt->fetchAll();
}

function deleteExam($examID) {
	global $conn;
	$stmt = $conn->prepare("DELETE FROM exam WHERE id = ?");
	return $stmt->execute(array($examID));
}

function getNumberOfExams(){
	global $conn;
	$stmt = $conn->prepare("SELECT COUNT(*) AS total FROM exam");
	$stmt->execute();
	return $stmt->fetch()['total'];
}

function getUserPreviousExams($userID) {
	global $conn;
	$stmt = $conn->prepare("SELECT id, name, description, ownerid, starttime, endtime, opentopublic, maxtries, maxscore
   								FROM exam 
								WHERE has_access_exam(?,id) AND current_timestamp > endtime");
	$stmt->execute(array($userID));
	return $stmt->fetchAll();
}

function addManager($exam, $user) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO managesexam
    		(managerid, examid)
            VALUES (?, ?) RETURNING examid");
	if($stmt->execute(array($user, $exam)))
    {
    	return $stmt->fetch(PDO::FETCH_ASSOC)['examid'];
    }
    else return -1;
}

function removeManager($exam, $user) {
	global $conn;
	$stmt = $conn->prepare("DELETE FROM managesexam
            WHERE managerid = ? AND examid = ?");
	if($stmt->execute(array($user, $exam)))
    {
    	return $stmt->fetch(PDO::FETCH_ASSOC)['examid'];
    }
    else return -1;
}

function getOngoingExams($userID){
	global $conn;
	$stmt = $conn->prepare("SELECT id, name, description, ownerid, starttime, endtime, opentopublic, maxtries, maxscore
   								FROM exam 
								WHERE has_access_exam(?,id) AND (starttime - interval '1 hour') < current_timestamp AND (endtime IS NULL OR current_timestamp < endtime)
								ORDER BY starttime ASC");
	$stmt->execute(array($userID));
	return $stmt->fetchAll();	
}	

function getUpcomingExams($userID){
	global $conn;
	$stmt = $conn->prepare("SELECT id, name, description, ownerid, starttime, endtime, opentopublic, maxtries, maxscore
   								FROM exam 
								WHERE has_access_exam(?,id) AND (starttime - interval '7 days') < current_timestamp AND current_timestamp < (starttime - interval '1 hour')
								ORDER BY starttime ASC");
	$stmt->execute(array($userID));
	return $stmt->fetchAll();
}

function getFutureExams($userID){
	global $conn;
	$stmt = $conn->prepare("SELECT id, name, description, ownerid, starttime, endtime, opentopublic, maxtries, maxscore
   								FROM exam 
								WHERE has_access_exam(?,id) AND (starttime >= (current_timestamp + interval '7 day'))
								ORDER BY starttime ASC");
	$stmt->execute(array($userID));
	return $stmt->fetchAll();
}

function wasInvited($userID, $examID)
{
	global $conn;
	$stmt = $conn->prepare("SELECT has_access_exam(?,?) AS value");
	$stmt->execute(array($userID,$examID));
	return $stmt->fetch()['value'];
}

//If 1 then the exam is over
//If 2 then the exam is active
//if 0 then the exam is not yet available
function examStatus($examID)
{
	global $conn;
	$stmt = $conn->prepare
	("SELECT status AS status FROM 
		(SELECT exam.id AS id, CASE 
			WHEN (exam.id = :examID AND exam.endtime < current_timestamp) THEN 1
            WHEN (exam.id = :examID AND (exam.starttime) < current_timestamp AND (exam.endtime IS NULL OR current_timestamp < exam.endtime)) THEN 2
            ELSE 0
       	END AS status
		FROM exam) AS status WHERE id = :examID");
	$stmt->bindParam(':examID', $examID, PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch()['status'];
}

function getBestScore($userID, $examID)
{
	global $conn;
	$stmt = $conn->prepare("SELECT finalScore AS score FROM Attempt  
		WHERE get_best_score(?,?) = Attempt.id");
	$stmt->execute(array($userID, $examID));
	return $stmt->fetch()['score'];
}
function getAttempts($userID, $examID)
{
	global $conn;
	$stmt = $conn->prepare("SELECT id,startTime,endTime,finalScore 
		FROM Attempt
		WHERE userID = ? AND examID = ?
		ORDER BY finalScore DESC");
	$stmt->execute(array($userID, $examID));
	return $stmt->fetchAll();
}

function getAttempt($attemptID) {
	global $conn;
	$stmt = $conn->prepare("SELECT * 
		FROM Attempt
		WHERE id = ?");
	$stmt->execute(array($attemptID));
	return $stmt->fetchAll()[0];
}

function getAttemptQuestions($attemptID) {
	global $conn;
	$stmt = $conn->prepare("SELECT question.id AS questionid, questionattempt.answerid AS answerid, questionattempt.questionorder AS order, question.statement AS statement, question.maxscore AS maxscore
								FROM questionattempt INNER JOIN question ON questionattempt.questionid = question.id
								WHERE attemptid = ?
								ORDER BY questionorder ASC");
	$stmt->execute(array($attemptID));
	return $stmt->fetchAll();
}

function getQuestionAnswers($questionID) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
								FROM answer
								WHERE questionid = ?");
	$stmt->execute(array($questionID));
	return $stmt->fetchAll();
}

?> 
