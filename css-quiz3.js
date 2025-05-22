const questions = [
    {
        question: "1. Which CSS property is used to create a three-dimensional effect by adding shadows to an element?",
        answers: [
            { text: "box-shadow", correct:false },
            { text: "perspective", correct: true },
            { text: " transform", correct: false  },
            { text: " text-shadow", correct: false }
        ]
    },
    {
        question: '2. How can you create a responsive font size in CSS that adjusts based on the viewport size?',
        answers: [
            { text: "font-size: auto;", correct: false },
            { text: "font-size: responsive;", correct: false  },
            { text: "font-size: vw;", correct: true},
            { text: " font-size: rem;", correct: false }
        ]
    },
    {
        question: "3. Which CSS property is used to apply a smooth transition between two property values?",
        answers: [
            { text: " animate", correct: false },
            { text: "transform", correct: false },
            { text: " transition", correct: true },
            { text: " smooth", correct: false }
        ]
    },
    {
        question: '4. In CSS Grid, what does the fr unit represent?',
        answers: [
            { text: " Flow Rate", correct: false },
            { text: " Frame Unit", correct: false },
            { text: "  Fractional Unit", correct: true },
            { text: "Flex Unit", correct: false }
        ]
    },
    {
        question: '5. How can you select an element with a specific attribute value using CSS?',
        answers: [
            { text: "element[attribute==value]", correct: false },
            { text: "element[attribute=value]", correct: true },
            { text: "element[attribute*=value]", correct: false },
            { text: " element[attribute~=value]", correct: false }
        ]
    },
    
    {
        question: "6. Which CSS property is used to create a flexible box layout?",
        answers: [
            { text: "box-flex", correct: false },
            { text: " flexbox", correct: true },
            { text: " flex-container", correct:  false},
            { text: "box-layout", correct: false }
        ]
    },
    {
        question: "7. How can you create a circular shape in CSS using only one class?",
        answers: [
            { text: "marker-type", correct: false },
            { text: "class: round;", correct: false },
            { text: "class: circular;", correct: true },
            { text: "class: ellipse;", correct: false }
        ]
    },
    {
        question: '8. Which CSS property is used to control the stacking order of elements?',
        answers: [
            { text: " stack-order", correct: false },
            { text: "layer-index", correct:false  },
            { text: "z-index", correct:true},
            { text: " order", correct: false }
        ]
    },
    {
        question: '9.How can you create a gradient background in CSS?',
        answers: [
            { text: "background: gradient(red, blue);", correct: false },
            { text: "gradient: linear(red, blue);", correct: false },
            { text: "background: linear-gradient(red, blue);", correct: true },
            { text: "background: color-gradient(red, blue);", correct: false }
        ]
    },
    {
        question: "10. What is the purpose of the ch unit in CSS?",
        answers: [
            { text: "Defines the width of a container", correct: false },
            { text: "Represents the height of a character in the element's font", correct:  true },
            { text: 'Stands for "child height" in a flex container', correct:false },
            { text: "Represents the width of a character in the element's font", correct: false }
        ]
    },
    {
        question: "11. Which CSS property is used to add a border to only one side of an element?",
        answers: [
            { text: "border-side", correct:false },
            { text: "border-left, border-right, etc.", correct: true },
            { text: "border-part", correct: false },
            { text: "border: 1px solid;", correct: false }
        ]
    },
    {
        question: '12.What is the purpose of the CSS property pointer-events?',
        answers: [
            { text: "Controls the style of the cursor", correct: false },
            { text: "Defines the visibility of the mouse pointer", correct: false },
            { text: "Specifies the order of pointer events", correct: false },
            { text: "Determines whether an element can be the target for pointer events", correct: true }
        ]
    },
    {
        question: "13. How can you create a sticky navigation bar in CSS?",
        answers: [
            { text: "position: sticky;",correct: true},
            { text: " position: fixed;",correct: false },
            { text: " position: absolute;", correct: false},
            { text: " position: relative;", correct: false }
        ]
    },
    {
        question: "14. What is the purpose of the mask property in CSS",
        answers: [
            { text:  "Sets the transparency of an element", correct: false },
            { text: " Masks the entire page", correct: false },
            { text: "Applies a mask to hide part of an element", correct:true},
            { text: " Applies a gradient to an element", correct: false}
        ]
    },
    {
        question: '15. What is the purpose of the object-fit property in CSS',
        answers: [
            { text: " Fits a text content into a container", correct: false },
            { text: "Fits an image into a specified container by preserving its aspect ratio", correct: true },
            { text: " Fits an object into the viewport", correct: false },
            { text: "Fits a background image to cover the entire page", correct: false }
        ]
    },
    {
        question: "16. Which CSS pseudo-class selects the first child of an element?",
        answers: [
            { text: "first;", correct:false  },
            { text: "first-element ", correct: false },
            { text: "first-child", correct: true},
            { text: "first-of-type", correct: false }
        ]
    },
    {
        question: "17.Which CSS property is used for text ellipsis when it overflows its container?",
        answers: [
            { text: "  ellipsis", correct: false },
            { text: " overflow-text", correct: false },
            { text: "text-overflow", correct: true },
            { text: " text-ellipsis", correct: false }
        ]
    },
    {
        question: "18. How can you select an element when the user hovers over its parent using only CSS?",
        answers: [
            { text: " parent:hover child {}", correct: false },
            { text: "parent:hover + child {}", correct:true },
            { text: " parent > child:hover {}", correct: false},
            { text: " parent:hover ~ child {}", correct:false }
        ]
    },
    {
        question: "19. How can you apply a filter to an image to make it grayscale using CSS?",
        answers: [
            { text: "filter: grayscale(100%);;", correct: true },
            { text: "image-filter: grayscale;", correct: false },
            { text: " grayscale: 100%;", correct: false },
            { text: "color-filter: grayscale;", correct: false }
        ]
    },
    {
        question: "20. How can you create a custom shape for a button in CSS without using images?",
        answers: [
            { text: " shape: polygon();", correct: false },
            { text: " shape: custom();", correct: false },
            { text: "clip-path: polygon();", correct: true },
            { text: " clip-shape: custom();", correct: false }
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
