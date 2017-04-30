@@ -23,8 +23,9 @@ function checkQuizDeprecated(quizNum){
}

function checkQuiz(quizNum){
	quizNum++;
	var quizzes = [	[0,0,0,0],
	quizNum--;
	var quizzes = [
						[0,0,0,0],
						[0,0,0,0],
						[0,0,0,0],
						[0,0,0,0],
@@ -34,12 +35,15 @@ function checkQuiz(quizNum){
						[0,0,0,0],
						[0,0,0,0]
					];
	for(var i=1;i<=quizzes[quizNum].length;i++){
	for(var i=0;i<quizzes[quizNum].length;i++){
		var question = document.getElementsByClassName('question')[i];
		var inputs = question.getElementsByTagName('input');
		var shouldBeSelected = quizzes[quizNum][i];
		if(inputs[shouldBeSelected].checked){
			alert('yay');
			question.style.color="green";
		}
		else{
			question.style.color="red";
		}
	}
}
\ No newline at end of file