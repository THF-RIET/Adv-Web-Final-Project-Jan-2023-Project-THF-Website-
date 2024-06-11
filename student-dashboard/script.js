// Variables to keep track of quiz state
var currentQuestion = 0;
var quizData = [];

// Fetch quiz data from the server
function fetchQuizData() {
    var section = 'GK'; // Replace with the selected section
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'fetch_quiz.php?section=' + section, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            quizData = JSON.parse(xhr.responseText);
            showQuestion();
        }
    };
    xhr.send();
}

// Display the current question and options
function showQuestion() {
    var questionElement = document.getElementById('question');
    var optionsElement = document.getElementById('options');
    var currentQues = quizData[currentQuestion];

    questionElement.textContent = currentQues.question;

    // Clear previous options
    optionsElement.innerHTML = '';

    // Create and append option elements
    currentQues.options.forEach(function(option, index) {
        var optionElement = document.createElement('div');
        optionElement.textContent = option;
        optionElement.onclick = selectOption;
        optionsElement.appendChild(optionElement);
    });
}

// Handle option selection
function selectOption() {
    // Add your logic to handle the selected option
    // You can store the selected option, check the answer, etc.
}

// Handle the Next button click
function nextQuestion() {
    currentQuestion++;
    if (currentQuestion < quizData.length) {
        showQuestion();
    } else {
        // Quiz has ended, show final score or completion message
    }
}

// Event listener for the Next button
document.getElementById('next-btn').addEventListener('click', nextQuestion);

// Fetch quiz data when the page loads
fetchQuizData();
