function checkQuiz(quizNum){
	
	var[][] quizzes;
	quizzes[0] = [0,1,2,3]; //a ,b ,c ,d
	quizzes[5]= [1,2,1,1,2];
	var quizForm = document.getElementsByTagName('form')[0];
	
	for(var i = 0; i<quizzes[quizNum].length; i++){
		var ans = document.getElementsByName('answer'+(i+1))[quizzes[quizNum][i]];
		
		if(!ans.checked){
			document.getElementsByClassName('question')[i].style.color = 'red';
		}
		else
		{
			document.getElementsByClassName('question')[i].style.color = 'black';
		}
		//alert (ans.checked ? 'Correct!':'Wrong :(');
	}
	
}