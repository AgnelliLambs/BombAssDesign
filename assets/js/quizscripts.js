function checkQuizDeprecated(quizNum){
	quizNum++;
	var quizzes = [[]];
	//quizzes[0] = [0,1,2,3]; //a ,b ,c ,d
	//quizzes[1]= [1,2,1,1,2];
	//tutorial4 quiz [0,2,2,1,4]
	var quizForm = document.getElementsByTagName('form')[0];
	
	for(var i = 0; i<quizzes[quizNum].length; i++){
		var ans = document.getElementsByClassName('select')[quizzes[quizNum][i]];
		
		var ops = ans.options;
		
		
		if(true){//ops[quizzes[quizNum][i].selected){
			document.getElementsByClassName('question')[i].style.color = 'black';
		}
		else{
			document.getElementsByClassName('question')[i].style.color = 'red';
		}
		//alert (ans.checked ? 'Correct!':'Wrong :(');
	}
	
}

function checkQuiz(quizNum){
	quizNum--;
	var quizzes = [	[0,0,0,0],
						[0,0,0,0],
						[0,0,0,0],
						[0,2,2,1,4],
						[1,2,1,1,2],
						[0,0,0,0],
						[0,0,0,0],
						[0,0,0,0],
						[0,0,0,0]
					];
	for(var i=0;i<quizzes[quizNum].length;i++){
		var question = document.getElementsByClassName('question')[i];
		var inputs = question.getElementsByTagName('input');
		var shouldBeSelected = quizzes[quizNum][i];
		if(inputs[shouldBeSelected].checked){
			question.style.color = "green";
		}
		else{
			question.style.color='red';
		}
	}
}
