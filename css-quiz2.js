const questions = [
    {
        question: "1. How do you comment in CSS?",
        answers: [
            { text: "<!-- Comment -->", correct:false },
            { text: "/* Comment */ ", correct: true },
            { text: " // Comment", correct: false },
            { text: " <!-- // Comment -->", correct: false }
        ]
    },
    {
        question: '2. Which CSS property is used to add rounded corners to an element?',
        answers: [
            { text: "corner-radius", correct:false },
            { text: "border-round", correct: false },
            { text: "rounded-corners", correct: false },
            { text: "border-radius", correct: true }
        ]
    },
    {
        question: "3. What does the CSS property position: absolute; do?",
        answers: [
            { text: "Positions the element relative to its normal position", correct: true},
            { text: " Removes the element from the document flow", correct:false },
            { text: " Centers the element horizontally", correct: false},
            { text: "  Fixes the element's position on the page", correct: false }
        ]
    },
    {
        question: "4. How can you make a text bold in CSS?",
        answers: [
            { text:  "bold: true;", correct: false },
            { text: " text-format: bold;", correct: false },
            { text: "font-weight: bold;", correct:true},
            { text: " style: bold;", correct: false}
        ]
    },
    {
        question: '5. What does the CSS property float do?',
        answers: [
            { text: "Adds a floating effect to the element", correct: false },
            { text: "Floats the element to the left", correct: true },
            { text: " Floats the element to the right", correct: false },
            { text: "Removes the element from the document flow", correct: false }
        ]
    },
{
        question: "6.What is the purpose of the CSS z-index property?",
        answers: [
            { text: " Sets the transparency of an element", correct: false },
            { text: " Controls the stacking order of positioned elements", correct: true },
            { text: "Changes the zoom level of an element", correct:  false},
            { text: " Sets the size of an element", correct: false }
        ]
    },
    {
        question: "7. Which CSS property is used to set the width of a border?",
        answers: [
            { text: "marker-type", correct: false },
            { text: "item-marker", correct: false },
            { text: " list-style-type", correct: true },
            { text: " list-marker", correct: false }
        ]
    },
    {
        question: '8. What is the default value of the CSS position property?',
        answers: [
            { text: " relative", correct: false },
            { text: "absolute", correct:false  },
            { text: "static", correct:true},
            { text: " fixed", correct: false }
        ]
    },
    {
        question: '9. Which CSS property is used to control the space between individual characters in text?',
        answers: [
            { text: "word-spacing", correct: false },
            { text: "line-height", correct: false },
            { text: "letter-spacing", correct: true },
            { text: "text-spacing", correct: false }
        ]
    },
    {
        question: "10. How can you select all links within a specific class in CSS?",
        answers: [
            { text: "  a .class", correct: false },
            { text: ".class > a", correct:  true },
            { text: ".class a", correct:false },
            { text: "a[class]", correct: false }
        ]
    },
    {
        question: "11. How can you apply a background image to an element in CSS?",
        answers: [
            { text: "background: image-url('path/to/image.jpg');", correct:false  },
            { text: "mage: url('path/to/image.jpg'); ", correct: false },
            { text: "background-image: url('path/to/image.jpg');", correct: true},
            { text: "background-url: ('path/to/image.jpg');", correct: false }
        ]
    },
    {
        question: "12.What is the purpose of the CSS property clear?",
        answers: [
            { text: " Clears the background of an element", correct: false },
            { text: "Clears the text formatting of an element", correct: false },
            { text: "Clears elements that are floated to the left or right", correct: true },
            { text: "Clears the content of an element", correct: false }
        ]
    },
    {
        question: "13. What is the purpose of the CSS property box-shadow?",
        answers: [
            { text: " Adds a shadow to the text of an element", correct: false },
            { text: "Adds a shadow to the border of an element", correct:true },
            { text: " Adds a shadow to the entire page", correct: false},
            { text: "Adds a shadow to the background of an element", correct:false }
        ]
    },
    {
        question: "14. How can you apply a background image to an element in CSS?",
        answers: [
            { text: "background: image-url('path/to/image.jpg');", correct: false },
            { text: "image: url('path/to/image.jpg');", correct: false },
            { text: " background-image: url('path/to/image.jpg');", correct: true },
            { text: " background-url: ('path/to/image.jpg');", correct: false }
        ]
    },
    {
        question: "15. What is the purpose of the CSS property border-collapse?",
        answers: [
            { text: " Adds a border to the entire page", correct: false },
            { text: " Removes borders from all elements", correct: false },
            { text: "Collapses the borders of adjacent cells in a table", correct: true },
            { text: " Collapses the borders of a div element", correct: false }
        ]
    },
    {
        question: "16. What is the purpose of the CSS box-model property?",
        answers: [
            { text: "It defines the layout of the webpage.", correct:false },
            { text: "It sets the margin and padding for elements.", correct: true },
            { text: "It changes the color of the background.", correct: false  },
            { text: "It controls the font size of text.", correct: false }
        ]
    },
    {
        question: '17. How can you set the opacity of an element in CSS?',
        answers: [
            { text: "oopacity: transparent; ", correct: false },
            { text: "alpha: 0.5;", correct: false  },
            { text: "opacity: 0.5;", correct: true},
            { text: " opacity: 0.5;", correct: false }
        ]
    },
    {
        question: "18. What is the purpose of the CSS property overflow?",
        answers: [
            { text: "Adds a shadow to the element", correct: false },
            { text: "Sets the content to overflow the container", correct: false },
            { text: "Hides the overflow content of an element", correct: true },
            { text: "Removes the overflow from the container", correct: false }
        ]
    },
    {
        question: '19.What is the purpose of the CSS property cursor?',
        answers: [
            { text: " Changes the font style of the cursor", correct: false },
            { text: " Sets the color of the cursor", correct: false },
            { text: " Defines the type of cursor to be displayed", correct: true },
            { text: "Hides the cursor from the screen", correct: false }
        ]
    },
    {
        question: '20. Which CSS property is used to set the background color of an element?',
        answers: [
            { text: "color-background ", correct: false },
            { text: "background-color", correct: true },
            { text: " bg-color", correct: false },
            { text: "  background", correct: false }
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
