const questions = [
    {
        question: "1. What does CSS Stands for?",
        answers: [
            { text: " Computer Style Sheets" ,correct:false },
            { text: "Cascading Style Sheets ", correct: true },
            { text: " Creative Style Sheets", correct: false },
            { text: " Colorful Style Sheets", correct: false }
        ]
    },
    {
        question: '2. Which HTML tag is used to link an external CSS file?',
        answers: [
            { text: "<style>", correct: false },
            { text: " <script>", correct: false },
            { text: " <css>", correct: false },
            { text: "  <link>", correct: true }
        ]
    },
    {
        question: "3. What is the purpose of the CSS property text-transform: uppercase;?",
        answers: [
            { text: "Transforms the text to uppercase letters", correct: true},
            { text: "  Adds an uppercase background to the text", correct: false },
            { text: " Sets the text to uppercase font", correct: false},
            { text: " Transforms the text to uppercase bold", correct: false }
        ]
    },
    {
        question: "4. Which CSS property is used to control the size of text?",
        answers: [
            { text: "text-size", correct: false },
            { text: " text-style", correct: false },
            { text: "font-size", correct:true},
            { text: "  font-style", correct: false}
        ]
    },
    {
        question: '5. How can you center align a block-level element horizontally in CSS?',
        answers: [
            { text: "text-align: center;", correct: false },
            { text: "margin: auto;", correct: true },
            { text: "align: center;", correct: false },
            { text: "center: true;", correct: false }
        ]
    },
    {
        question: "6. Which CSS property is used to add shadow to text?",
        answers: [
            { text: "box-shadow", correct:false  },
            { text: "font-shadow ", correct: false },
            { text: "text-shadow ", correct: true},
            { text: "shadow-text", correct: false }
        ]
    },
    {
        question: "7. In CSS, what does the acronym 'RGB' stand for?",
        answers: [
            { text: "Really Good Blue", correct: false },
            { text: "Random Gradient Background", correct: false },
            { text: " Red, Green, Blue", correct: true },
            { text: "Radical Green Box", correct: false }
        ]
    },
    {
        question: "8. How can you select all paragraphs in CSS?",
        answers: [
            { text: " p:all", correct: false },
            { text: " paragraph:all", correct:true },
            { text: " p *", correct: false},
            { text: " p", correct:false }
        ]
    },
    {
        question: "9. Which CSS property is used to control the spacing between lines of text?",
        answers: [
            { text: " text-spacing", correct: false },
            { text: "letter-spacing", correct: false },
            { text: "line-height", correct: true },
            { text: " word-spacing", correct: false }
        ]
    },
    {
        question: "10. What does the CSS property display: none; do?",
        answers: [
            { text: " Makes the element invisible", correct: false },
            { text: " Hides the element but preserves the space", correct: false },
            { text: " Removes the element from the document flow", correct: true },
            { text: "  Displays the element with no style", correct: false }
        ]
    },
    {
        question: "11. Which CSS property is used to change the color of text?",
        answers: [
            { text: "text-color", correct:false },
            { text: "color", correct: true },
            { text: "font-color", correct: false  },
            { text: "  text-style", correct: false }
        ]
    },
    {
        question: '12.In CSS, what does the "box-sizing: border-box;" property do?',
        answers: [
            { text: " Excludes padding and border from the element's total width and height ", correct: false },
            { text: "Sets the box model to circular", correct: false  },
            { text: "Includes padding and border in the element's total width and height", correct: true},
            { text: "  Adds extra padding to the element", correct: false }
        ]
    },
    {
        question: "13. Which CSS property is used to control the position of an element within its containing element?",
        answers: [
            { text: "positioning", correct: false },
            { text: "placement", correct: false },
            { text: "position", correct: true },
            { text: "location", correct: false }
        ]
    },
    {
        question: '14. Which CSS pseudo-class is used to select and style an element when the user hovers over it?s',
        answers: [
            { text: " active", correct: false },
            { text: " focus", correct: false },
            { text: " hover", correct: true },
            { text: " link", correct: false }
        ]
    },
    {
        question: '15. Which CSS property is used to align text within a container horizontally?',
        answers: [
            { text: " align-text ", correct: false },
            { text: "text-align", correct: true },
            { text: " horizontal-align", correct: false },
            { text: "  text-alignment", correct: false }
        ]
    },
    {
        question: "16.What is the purpose of the CSS property text-decoration: underline;?",
        answers: [
            { text: "it adds a background color to the text", correct: false },
            { text: "It adds an underline to the text", correct: true },
            { text: "It makes the text bold", correct:  false},
            { text: " It changes the font style of the text", correct: false }
        ]
    },
    {
        question: "17. Which CSS property is used to set the width of a border?",
        answers: [
            { text: "border-size ", correct: false },
            { text: "border-style", correct: false },
            { text: "border-width ", correct: true },
            { text: "  border-width ", correct: false }
        ]
    },
    {
        question: '18. What is the purpose of the CSS property max-width?',
        answers: [
            { text: " Sets the maximum font size of an element", correct: false },
            { text: "Sets the maximum height of an element", correct:false  },
            { text: "Sets the maximum width of an element", correct:true},
            { text: "Sets the maximum height of an element", correct: false }
        ]
    },
    {
        question: '19. How can you set the text alignment to justify in CSS?',
        answers: [
            { text: "text-align: center;", correct: false },
            { text: "text-align: left;", correct: false },
            { text: "text-align: justify", correct: true },
            { text: "text-align:right", correct: false }
        ]
    },
    {
        question: "20. Which CSS property is used to control the visibility of an element?",
        answers: [
            { text: " display", correct: false },
            { text: " visibility", correct:  true },
            { text: "visible", correct:false },
            { text: "hidden", correct: false }
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
