function checkQuiz1(){
	
	var answers = [0,1,2,3]; //a ,b ,c ,d
	var quizForm = document.getElementsByTagName('form')[0];
	
	for(var i = 0; i<answers.length; i++){
		var ans = document.getElementsByName('answer'+(i+1))[answers[i]];
		
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