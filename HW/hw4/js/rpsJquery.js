//player and computer 
var computerChoice;
var playerChoice;

window.onload = init();

function init(){
	$("#imgPlayer");
	$("#btnRock")
	$("#btnPaper")
	$("#btnScissors")
	$("#btnGo")
	
	deselectAll();
}

function select(choice){
	playerChoice = choice;
	$("#imgPlayer").attr("src",  "img/" + choice + ".png");
	deselectAll();
	if(choice == 'rock') $("#btnRock").css("backgroundColor", "#888888");
	if(choice == 'paper') $("#btnPaper").css("backgroundColor", "#888888");
	if(choice == 'scissors') $("#btnScissors").css("backgroundColor", "#888888");
	
	$("#btnGo").show();
}

function deselectAll(){
	$("#btnPaper").css("backgroundColor", "silver");
	$("#btnScissors").css("backgroundColor", "silver");
	$("#btnRock").css("backgroundColor", "silver");
}

function go(){
	
	var numChoice = Math.floor(Math.random() * 3);
	
	
	$("#lblRock").css("backgroundColor","#EEEEEE");
	$("#lblPaper").css("backgroundColor","#EEEEEE");
	$("#lblScissors").css("backgroundColor","#EEEEEE");

	if(numChoice == 0){ 
		computerChoice = 'rock';
		$("#imgComputer").attr("src", "img/rock.png");
		$("#lblRock").css("backgroundColor", "cyan");
		if(playerChoice == 'rock'){
			$("#txtEndTitle").text('');
			$("#txtEndMessage").text("TIE");
		} 
		else if(playerChoice == 'paper'){
			$("#txtEndTitle").text("Paper covers Rock");
			$("#txtEndMessage").text("YOU WIN");
		}
		else if(playerChoice == 'scissors'){
			$("#txtEndTitle").text("Rock smashes Scissors");
			$("#txtEndMessage").text("YOU LOSE");	
		}
	}
	else if(numChoice == 1){
		computerChoice = 'paper';
		$("#imgComputer").attr("src", 'img/paper.png');
		$("#lblPaper").css("backgroundColor", "cyan");
		if(playerChoice == 'rock'){
			$("#txtEndTitle").text("Paper covers Rock");
			$("#txtEndMessage").text("YOU LOSE");
		} 
		else if(playerChoice == 'paper'){
			$("#txtEndMessage").text("");
			$("#txtEndMessage").text("TIE");
		}
		else if(playerChoice == 'scissors'){
			$("#txtEndTitle").text("Scissors cuts Paper");
			$("#txtEndMessage").text("YOU WIN");	
		}
	} 
	else if(numChoice == 2){
		computerChoice = 'scissors';
		$("#imgComputer").attr("src", "img/scissors.png");
		$("#lblScissors").css("backgroundColor", "cyan");
		if(playerChoice == 'rock'){
			$("#txtEndTitle").text("Rock smashes Scissors");
			$("#txtEndMessage").text("YOU WIN");
		} 
		else if(playerChoice == 'paper'){
			$("#txtEndTitle").text("Scissors cuts Paper");
			$("#txtEndMessage").text("YOU LOSE");
		}
		else if(playerChoice == 'scissors'){
			$("#txtEndTitle").text("");
			$("#txtEndMessage").text("TIE");
		}
	}
	$("#endScreen").show();
}


function startGame(){
	//alert('Start Game Button pressed!');
	
	document.getElementById('introScreen').style.display = 'none';
}

function replay(){
	
	//location.reload();
	
	$("#endScreen").hide();
	$("#btnGo").hide();
	//btnGo.style.display = 'none';
	
	deselectAll();
	
	$("#lblRock").css("backgroundColor", "#EEEEEE");
	$("#lblPaper").css("backgroundColor", "#EEEEEE");
	$("#lblScissors").css("backgroundColor", "#EEEEEE");
	
	$("#imgPlayer").attr("scr", "img/question.png");
	$("#imgComputer").attr("src", "img/question.png");
}