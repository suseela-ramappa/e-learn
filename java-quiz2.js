const questions = [
    {
        question: "1. What does the static keyword mean in Java?",
        answers: [
            { text: " A variable is dynamic", correct: false },
            { text: " A variable is a class variable", correct: true },
            { text: "  A variable is constant", correct: false },
            { text: "A variable is local", correct: false }
        ]
    },
    {
        question: '2. What is the output of the following code snippet?\n\
        for (int i = 0; i < 5; i++) {\n\
            if (i == 2) {\n\
                continue;\n\
            }\n\
            System.out.print(i + " ");\n\
        }',
        answers: [
            { text: "0 1 2 3 4", correct: false },
            { text: " 0 1 2 4", correct: false },
            { text: " 1 3 4", correct: false },
            { text: "  0 1 3 4", correct: true }
        ]
    },
    {
        question: "3. What does the super keyword refer to in Java?",
        answers: [
            { text: "The superclass of the current class", correct: true},
            { text: " The current class instance", correct: false },
            { text: " The current object", correct: false},
            { text: " The subclass of the current class", correct: false }
        ]
    },
    {
        question: "4. Which of the following is true about the ArrayList class in Java?",
        answers: [
            { text: "It is a synchronized collection class", correct: false },
            { text: " It can only store primitive data types", correct: false },
            { text: "It allows duplicate elements", correct:true},
            { text: " It is part of the java.lang package", correct: false}
        ]
    },
    {
        question: '5. What is the output of the following code?\n\
        Copy code\n\
        int x = 5;\n\
        System.out.println(x-- + --x);',
        answers: [
            { text: "9", correct: false },
            { text: "8", correct: true },
            { text: "10", correct: false },
            { text: "7", correct: false }
        ]
    },
    {
        question: "6. Which of the following is true about the StringBuilder class in Java?",
        answers: [
            { text: "It is immutable", correct:false  },
            { text: " It is synchronized by default", correct: false },
            { text: " It allows mutable string manipulation ", correct: true},
            { text: "It is part of the java.util package", correct: false }
        ]
    },
    {
        question: "7. What is the default value of a local variable in Java?",
        answers: [
            { text: "0", correct: false },
            { text: "null ", correct: false },
            { text: " Depends on the variable type", correct: true },
            { text: "not initialised", correct: false }
        ]
    },
    {
        question: "8.What does the instanceof operator in Java do?",
        answers: [
            { text: "Checks if two objects are equal", correct: false },
            { text: " Checks if an object is an instance of a particular class", correct:true },
            { text: "Checks if an object is null", correct: false},
            { text: "Checks if an object is primitive", correct:false }
        ]
    },
    {
        question: "9. What is the purpose of the throw statement in Java?",
        answers: [
            { text: "To catch exceptions", correct: false },
            { text: "To rethrow an exception", correct: false },
            { text: "To create a new exception", correct: true },
            { text: "To terminate the program", correct: false }
        ]
    },
    {
        question: "10. Which of the following is used to define a thread in Java?",
        answers: [
            { text: " Thread.start()", correct: false },
            { text: "Thread.run()", correct: false },
            { text: " Thread.execute()", correct: true },
            { text: " Thread.create()", correct: false }
        ]
    },
    {
        question: "11. What is the purpose of the StringBuffer class in Java?",
        answers: [
            { text: "To create immutable strings", correct:false },
            { text: "To create mutable strings", correct: true },
            { text: "To represent a fixed-size array of characters", correct: false  },
            { text: "  To concatenate strings", correct: false }
        ]
    },
    {
        question: 'What is the output of the following Java code?\n\
        int[] arr = {1, 2, 3, 4, 5};',
        answers: [
            { text: "0 ", correct: false },
            { text: "7", correct: false  },
            { text: "compilateion error", correct: true},
            { text: "  It will throw an exception", correct: false }
        ]
    },
    {
        question: "13. What is the purpose of the assert keyword in Java?",
        answers: [
            { text: "To check if an object is null", correct: false },
            { text: "To perform mathematical calculations", correct: false },
            { text: "To test code during development and enable/disable it during production", correct: true },
            { text: " To declare constants", correct: false }
        ]
    },
    {
        question: '14. What will be the output of the following code snippet?\n\
        int i = -5;\n\
        while (i < 0) {\n\
            System.out.print(i-- + " ");\n\
        }',
        answers: [
            { text: " -4 -3 -2 -1 0", correct: false },
            { text: " -6 -7 -8 -9 -10", correct: false },
            { text: "  -5 -6 -7 -8 -9", correct: true },
            { text: " -5 -6 -7 -8 -9 -10", correct: false }
        ]
    },
    {
        question: '15. What is the output of the following code snippet?\n\
        int num = 7;\n\
        do {\n\
            System.out.print(num + " ");\n\
            num -= 2;\n\
        } while (num >= 1);',
        answers: [
            { text: "7 5 3 ", correct: false },
            { text: "7 5 3 1", correct: true },
            { text: " 1 3 5 7", correct: false },
            { text: " 1 3 5 ", correct: false }
        ]
    },
    {
        question: "16. How many times will the following loop execute?\n\
        for (int i = 0; i <= 10; i += 2) {\n\
            // loop body\n\
        }",
        answers: [
            { text: "5", correct: false },
            { text: "6", correct: true },
            { text: "10", correct:  false},
            { text: "8", correct: false }
        ]
    },
    {
        question: "17. In Java, which keyword is used to implement multiple inheritance?",
        answers: [
            { text: "super ", correct: false },
            { text: "extends", correct: false },
            { text: "implements ", correct: true },
            { text: " inheritance ", correct: false }
        ]
    },
    {
        question: '18. What is the output of the following Java code?\n\
        System.out.println("5 + 2 = " + 5 + 2);',
        answers: [
            { text: "7", correct: false },
            { text: "5+2", correct:false  },
            { text: "52", correct:true},
            { text: "error", correct: false }
        ]
    },
    {
        question: '19. What is the difference between equals() and == in Java?',
        answers: [
            { text: "They are interchangeable", correct: false },
            { text: "equals() compares object references, while == compares object contents", correct: false },
            { text: "== compares primitive types, while equals() compares objects", correct: true },
            { text: "There is no difference", correct: false }
        ]
    },
    {
        question: "20. Which method is used to read input from the console in Java?",
        answers: [
            { text: "System.in.read()", correct: false },
            { text: "Console.readLine()", correct:  true },
            { text: "Scanner.nextLine()", correct:false },
            { text: "InputStreamReader.read()", correct: false }
        ]
    }
];

let currentQuestionIndex = 0;
let score = 0;
let timer;

const questionContainer = document.getElementById('question-container');
const answerButtonsContainer = document.getElementById('answer-buttons');
const timerContainer = document.getElementById('timer');
const nextButton = document.getElementById('next-button');
const scoreContainer = document.getElementById('score-container');
const retryButton = document.getElementById('retry-button');

function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    showQuestion(questions[currentQuestionIndex]);
}

function showQuestion(question) {
    questionContainer.innerText = question.question;
    answerButtonsContainer.innerHTML = '';

    question.answers.forEach(answer => {
        const button = document.createElement('button');
        button.innerText = answer.text;
        button.classList.add('btn');
        button.addEventListener('click', () => selectAnswer(button, answer));
        answerButtonsContainer.appendChild(button);
    });

    startTimer(15); // 30 seconds timer for each question
}

function selectAnswer(button, answer) {
    clearInterval(timer);

    // Disable all buttons after an answer is selected
    const buttons = answerButtonsContainer.getElementsByTagName('button');
    for (let btn of buttons) {
        btn.disabled = true;
    }


// Assuming 'button' is the selected button element
const selectedButtonText = button.innerText.trim(); // Trim to remove leading/trailing whitespaces

// Check if the selected answer is correct
if (answer.correct) {
    // Display selected answer with green border if correct
    button.classList.add('correct');
    score++;
} else {
    // Display selected answer with red border if incorrect
    button.classList.add('incorrect');

    // Find and display the correct answer with green border for the current question
    const correctButton = Array.from(buttons).find(btn => {
        const correctAnswer = questions[currentQuestionIndex].answers.find(a => a.correct);
        return correctAnswer && correctAnswer.text.trim() === btn.innerText.trim();
    });

    if (correctButton) {
        correctButton.classList.add('correct');
    }
}

    // Display the "Next" button
    nextButton.style.display = 'block';
}

function startTimer(seconds) {
    let timeLeft = seconds;
    timerContainer.innerText = `Time Left: ${timeLeft} seconds`;
    timer = setInterval(() => {
        timeLeft--;

        if (timeLeft >= 0) {
            timerContainer.innerText = `Time Left: ${timeLeft} seconds`;
        } else {
            clearInterval(timer);
            displayCorrectAnswer();
        }
    }, 1000);
}

function displayCorrectAnswer() {
    // Display the correct answer with green border
    const buttons = answerButtonsContainer.getElementsByTagName('button');
    const correctButton = Array.from(buttons).find(btn => questions[currentQuestionIndex].answers.find(a => a.correct).text === btn.innerText);
    if (correctButton) {
        correctButton.classList.add('correct');
    }

    // Display the "Next" button
    nextButton.style.display = 'block';
}

function nextQuestion() {
    // Move to the next question
    currentQuestionIndex++;

    // Check if there are more questions
    if (currentQuestionIndex < questions.length) {
        showQuestion(questions[currentQuestionIndex]);

        // Enable all answer buttons for the new question
        const buttons = answerButtonsContainer.getElementsByTagName('button');
        for (let btn of buttons) {
            btn.disabled = false;
            btn.classList.remove('correct', 'incorrect');
        }

        // Hide the "Next" button until an answer is selected
        nextButton.style.display = 'none';
    } else {
        // End of the quiz
        endQuiz();
    }
}

function endQuiz() {
    questionContainer.innerText = 'Quiz completed!';
    // Add the CSS class to the element
    questionContainer.classList.add('quiz-completed');
    answerButtonsContainer.innerHTML = '';
    timerContainer.innerText = '';

        // Hide the "Quiz time" element
        var quizTimeContainer = document.getElementById('quizTimeContainer');
        if (quizTimeContainer) {
            quizTimeContainer.style.display = 'none';  // or 'hidden' if you prefer
        }


    


    // Display the score
    scoreContainer.innerText = `Your Score: ${score}/${questions.length}`;
    scoreContainer.classList.add('score');

    // Show retry button
    // retryButton.style.display = 'block';
    timerContainer.style.display='none'
    nextButton.style.display = 'none';

} 
startQuiz();
