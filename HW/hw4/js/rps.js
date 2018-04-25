var imgPlayer;
var btnRock;
var btnPaper;
var btnScissors;
var btnGo;

//player and computer 
var computerChoice;
var playerChoice;

function init(){
	imgPlayer = document.getElementById("imgPlayer");
	btnRock = document.getElementById("btnRock");
	btnPaper = document.getElementById("btnPaper");
	btnScissors = document.getElementById("btnScissors");
	btnGo = document.getElementById('btnGo');
	deselectAll();
}

function select(choice){
	playerChoice = choice;
	imgPlayer.src = 'img/' + choice + '.png';
	deselectAll();
	if(choice == 'rock') btnRock.style.backgroundColor = '#888888';
	if(choice == 'paper') btnPaper.style.backgroundColor = '#888888';
	if(choice == 'scissors') btnScissors.style.backgroundColor = '#888888';
	
	btnGo.style.display = 'block';
}

function deselectAll(){
	btnPaper.style.backgroundColor = 'silver';
	btnScissors.style.backgroundColor = 'silver';
	btnRock.style.backgroundColor = 'silver';
}

function go(){
	
	var txtEndTitle = document.getElementById('txtEndTitle');
	var txtEndMessage = document.getElementById('txtEndMessage');
	
	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');
	
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';

	if(numChoice == 0){ 
		computerChoice = 'rock';
		imgComputer.src = 'img/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'cyan';
		if(playerChoice == 'rock'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE'
		} 
		else if(playerChoice == 'paper'){
			txtEndTitle.innerHTML = 'Paper covers Rock';
			txtEndMessage.innerHTML = 'YOU WIN'
		}
		else if(playerChoice == 'scissors'){
			txtEndTitle.innerHTML = 'Rock smashes Scissors';
			txtEndMessage.innerHTML = 'YOU LOSE'	
		}
	}
	else if(numChoice == 1){
		computerChoice = 'paper';
		imgComputer.src = 'img/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'cyan';
		if(playerChoice == 'rock'){
			txtEndTitle.innerHTML = 'Paper covers Rock';
			txtEndMessage.innerHTML = 'YOU LOSE';
		} 
		else if(playerChoice == 'paper'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE';
		}
		else if(playerChoice == 'scissors'){
			txtEndTitle.innerHTML = 'Scissors cuts Paper';
			txtEndMessage.innerHTML = 'YOU WIN';	
		}
	} 
	else if(numChoice == 2){
		computerChoice = 'scissors';
		imgComputer.src = 'img/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'cyan';
		if(playerChoice == 'rock'){
			txtEndTitle.innerHTML = 'Rock smashes Scissors';
			txtEndMessage.innerHTML = 'YOU WIN'
		} 
		else if(playerChoice == 'paper'){
			txtEndTitle.innerHTML = 'Scissors cuts Paper';
			txtEndMessage.innerHTML = 'YOU LOSE'
		}
		else if(playerChoice == 'scissors'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE'	
		}
	}
	
		document.getElementById('endScreen').style.display = 'block';
	//alert(playerChoice + ',' + computerChoice);
}

function startGame(){
	//alert('Start Game Button pressed!');
	
	document.getElementById('introScreen').style.display = 'none';
}

function replay(){
	
	//location.reload();
	
	document.getElementById('endScreen').style.display = 'none';
	btnGo.style.display = 'none';
	
	deselectAll();
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
	
	imgPlayer.scr = 'img/question.png';
	document.getElementById('imgComputer').src = 'img/question.png';
}