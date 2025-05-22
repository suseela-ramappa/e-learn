const questions = [
    {
        question: "1. What is the correct way to declare a variable in Java?",
        answers: [
            { text: "a) variable = 10;", correct: false },
            { text: "b) int variable = 10;", correct: true },
            { text: "c) variable int = 10;", correct: false },
            { text: "d) declare variable 10;", correct: false }
        ]
    },
    {
        question: "2. Which keyword is used to define a constant in Java?",
        answers: [
            { text: "constant", correct: false },
            { text: "final", correct: false },
            { text: "const", correct: true },
            { text: "define", correct: false }
        ]
    },
    {
        question: "3. What is the range of the data type 'byte' in Java?",
        answers: [
            { text: "-128 to 127", correct: true},
            { text: "-32768 to 32767", correct: false },
            { text: "-256 to 255", correct: false},
            { text: "-127 10 126", correct: false }
        ]
    },
    {
        question: "4. Which method is called when an object is created?",
        answers: [
            { text: "start() ", correct: false },
            { text: "run() ", correct: false },
            { text: "main()", correct:false },
            { text: " constructor() ", correct: true }
        ]
    },
    {
        question: '5. What is the output of the following code snippet?\n\
        java\n\
        String str1 = "hello";\n\
        String str2 = new String("hello");\n\
        System.out.println(str1 == str2);',
        answers: [
            { text: "true", correct: false },
            { text: "false", correct: true },
            { text: "Compilation Error", correct: false },
            { text: "Runtime Error", correct: false }
        ]
    },
    {
        question: "6. Which operator is used to allocate memory to an object in Java?",
        answers: [
            { text: " new  ", correct: true  },
            { text: " malloc", correct: false },
            { text: "alloc ", correct: false},
            { text: "create ", correct: false }
        ]
    },
    {
        question: "7. Which of the following is not a primitive data type in Java?",
        answers: [
            { text: "byte ", correct: false },
            { text: "short ", correct: false },
            { text: "string ", correct: true },
            { text: "float  ", correct: false }
        ]
    },
    {
        question: "8. Which access modifier restricts the access of a member within the same package?",
        answers: [
            { text: "public ", correct: false },
            { text: "private", correct: false },
            { text: "protected", correct: false},
            { text: "default", correct:true  }
        ]
    },
    {
        question: "9. What is the output of the following code snippet?\n\
        int x = 5;\n\
        int y = 2;\n\
        System.out.println(x + y * 2);",
        answers: [
            { text: "9", correct: false },
            { text: "14", correct: true },
            { text: "7", correct: false },
            { text: "11", correct: false }
        ]
    },
    {
        question: "10. Which keyword is used to define a subclass in Java?",
        answers: [
            { text: "this ", correct: false },
            { text: "super", correct: false },
            { text: "extends", correct: true },
            { text: "subclass", correct: false }
        ]
    },
    {
        question: "11. What is the default value of a boolean variable in Java?",
        answers: [
            { text: " true ", correct:false },
            { text: "false", correct: true },
            { text: "0", correct: false  },
            { text: " null", correct: false }
        ]
    },
    {
        question: '12. Which of the following statements is true about Java?',
        answers: [
            { text: "Java supports multiple inheritance ", correct: false },
            { text: "Java supports automatic memory management through garbage collection", correct: true  },
            { text: "Java programs are compiled into machine code ", correct: false},
            { text: " Java is a procedural programming language ", correct: false }
        ]
    },
    {
        question: "13. What is the parent class of all classes in Java?",
        answers: [
            { text: "MainClass", correct: false },
            { text: "BaseClass", correct: false },
            { text: "Object ", correct: true },
            { text: "SuperClass ", correct: false }
        ]
    },
    {
        question: '14. What is the output of the following code snippet?\n\
        System.out.println("Java".substring(1, 3));',
        answers: [
            { text: "Jav", correct: false },
            { text: "ava", correct: true },
            { text: "Ja ", correct: false },
            { text: "va ", correct: false }
        ]
    },
    {
        question: "15. Which method is used to compare two strings in Java?",
        answers: [
            { text: "compare() ", correct: false },
            { text: "equals()", correct: true },
            { text: " compareTo() ", correct: false },
            { text: "equalsIgnoreCase() ", correct: false }
        ]
    },
    {
        question: "16. Which keyword is used to refer to the current instance of the class in Java?",
        answers: [
            { text: "new", correct: false },
            { text: "this", correct: true },
            { text: "self", correct:  false},
            { text: "that", correct: false }
        ]
    },
    {
        question: "17. What is the output of the following code snippet?\n\
        int x = 5;\n\
        System.out.println(x++);",
        answers: [
            { text: " 6  ", correct: false },
            { text: "7 ", correct: false },
            { text: "5  ", correct: true },
            { text: " Error ", correct: false }
        ]
    },
    {
        question: "18. Which data type is used to store decimal numbers in Java?",
        answers: [
            { text: "float", correct: false },
            { text: "double", correct: true  },
            { text: "int", correct:false},
            { text: "decimal", correct: false }
        ]
    },
    {
        question: '19. What is the output of the following code snippet?\n\
        System.out.println("Java".charAt(2));',
        answers: [
            { text: "J", correct: false },
            { text: "a", correct: false },
            { text: "v", correct: true },
            { text: "compilation error", correct: false }
        ]
    },
    {
        question: "20. Which loop is guaranteed to execute at least once in Java?",
        answers: [
            { text: "while loop", correct: false },
            { text: "do-while loop", correct:  true },
            { text: "for loop  ", correct:false },
            { text: "foreach loop", correct: false }
        ]
    },
    {
        question: '21. Which keyword is used to exit from a loop in Java?',
        answers: [
            { text: "break", correct: true },
            { text: "end ", correct: false },
            { text: "exit", correct:false },
            { text: "continue", correct: false }
        ]
    },
    {
        question: "22. Which of the following is used to read input from the user in Java?",
        answers: [
            { text: " read() ", correct: false },
            { text: "input() ", correct: false },
            { text: "System.in.read() ", correct: false },
            { text: "Scanner  ", correct: true }
        ]
    },
    {
        question: "23. Which of the following is not a valid identifier in Java?",
        answers: [
            { text: " _myVariable", correct: false },
            { text: "123variable", correct: true },
            { text: "$myVariable ", correct: false },
            { text: "myVariable123", correct: false }
        ]
    },
    {
        question: '24. What is the output of the following code snippet?\n\
        System.out.println(Math.sqrt(16));',
        answers: [
            { text: "4", correct: true },
            { text: "16", correct: false },
            { text: "2", correct: false},
            { text: "8", correct: false }
        ]
    },
    {
        question: "25. Which of the following is not a valid keyword in Java?",
        answers: [
            { text: "Class", correct: false },
            { text: "function", correct:  true },
            { text: "interface", correct:false },
            { text: "extends", correct: false }
        ]
    },
    {
        question: "26. What is the purpose of the 'finally' block in Java exception handling?",
        answers: [
            { text: "To catch exceptions", correct: false },
            { text: "To handle exceptions", correct: false },
            { text: "To execute code regardless of whether an exception is thrown or caught", correct: true },
            { text: "To throw exceptions", correct: false }
        ]
    },
    {
        question: "27. Which keyword is used to exit from a loop in Java?",
        answers: [
            { text: "exit ", correct: false },
            { text: " break", correct: true },
            { text: "continue", correct: false },
            { text: " return  ", correct: false }
        ]
    },
    {
        question: "28. What is the output of the following code snippet?\n\
        int x = 5;\n\
        int y = 2;\n\
        System.out.println(x -= y);",
        answers: [
            { text: "-3", correct: false },
            { text: "3", correct: true },
            { text: "4", correct: false},
            { text: "-4", correct: false }
        ]
    },
    {
        question: "29. Which of the following access modifiers restricts access the most in Java?",
        answers: [
            { text: " public", correct: false },
            { text: " protected ", correct: false },
            { text: " default  ", correct: false },
            { text: " private", correct: true }
        ]
    },
    {
        question: "30. Which of the following is a correct way to declare and initialize an array in Java?",
        answers: [
            { text: "  int arr[] = {1, 2, 3}; ", correct:true},
            { text: " int arr[3] = {1, 2, 3};   ", correct: false },
            { text: "  int arr[] = new int[3]{1, 2, 3};", correct: false },
            { text: "int arr[3] = new int[]{1, 2, 3};", correct: false }
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
