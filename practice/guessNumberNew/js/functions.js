 var randomNumber = randomNumber = Math.floor(Math.random() * 99) + 1;
                    var guesses = document.querySelector("#guesses");
                    var lastResult = document.querySelector("#lastResult");
                    var lowOrHigh = document.querySelector("#lowOrHigh");
                    
                    var guessSubmit = document.querySelector('.guessSubmit');
                    var guessField = document.querySelector('.guessField');
                    
                    var guessCount = 1;
                    var resetButton = document.querySelector('#reset');
                    resetButton.style.display = 'none';
                    guessField.focus();
                    //document.getElementById("numberToGuess").innerHTML = randomNumber;
                    
                    function checkGuess(){
                        var userGuess = Number(guessField.value);
                        if(guessCount === 1){
                            guesses.innerHTML = 'Previous guesses: ';
                        }
                        guesses.innerHTML += userGuess + ' ';
                        
                        if(userGuess === randomNumber){
                            lastResult.innerHTML = 'Congratulations! You got it right!';
                            lastResult.style.backgroundColor = 'green';
                            lowOrHigh.innerHTML = '';
                            setGameOver();
                            
                        } else if(guessCount === 7){
                            lastResult.innerHTML = 'Sorry, you lost!';
                            setGameOver();
                        } else{
                            lastResult.innerHTML = 'Wrong!';
                            lastResult.style.backgroundColor = 'red';
                            if(userGuess < randomNumber){
                                lowOrHigh.innerHTML = 'Last guess was too low!';
                                
                            } else if(userGuess > randomNumber){
                                lowOrHigh.innerHTML = 'Last guess was too high!';
                            }
                        }
                        guessCount++;
                        guessField.value = '';
                        guessField.focus();
                    }
                    guessSubmit.addEventListener('click', checkGuess);
                    function setGameOver(){
                        guessField.disable = true;
                        guessSubmit.disalble = true;
                        resetButton.stylee.display = 'inline';
                        resetButton.addEventListener('click', resetGame);
                    }
                    
                    function resetGame(){
                        guessCount = 1;
                        
                        var resetParas = document.querySelectorAll('.resultsParas p');
                        for(var i = 0; i < resetParas.length; i++){
                            resetParas[i].textContent = '';
                        }
                        resetButton.style.display = false;
                        guessSubmit.disable = false;
                        guessField.value = '';
                        guessField.focus();
                        
                        lastResult.style.backgroundColor = 'white';
                        randomNumber = Math.floor(Math.random() * 99) + 1;
                    }