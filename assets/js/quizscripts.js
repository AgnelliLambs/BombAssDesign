function checkQuiz(var quizNum){
	quizNum++;
	var[] quizzes = [];
	quizzes[0] = [0,1,2,3]; //a ,b ,c ,d
	quizzes[5]= [1,2,1,1,2];
	var quizForm = document.getElementsByTagName('form')[0];
	
	for(var i = 0; i<quizzes[quizNum].length; i++){
		var ans = document.getElementsByClassName('select')[quizzes[quizNum][i]];
		
		var ops = ans.options;
		
		
		if[ops[quizzes[quizNum][i].selected]{
			document.getElementsByClassName('question')[i].style.color = 'black';
		}
		else{
			document.getElementsByClassName('question')[i].style.color = 'red';
		}
		//alert (ans.checked ? 'Correct!':'Wrong :(');
	}
	
}