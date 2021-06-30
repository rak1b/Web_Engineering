const myQuestions = [
  {
    question: "What is your name?",
    answers: {
      a: "Douglas Crockford",
      b: "Sheryl Sandberg",
      c: "Brendan Eich",
    },
    correctAnswer: "c",
  },
  {
    question: "Which one of these is a JavaScript package manager?",
    answers: {
      a: "Node.js",
      b: "TypeScript",
      c: "npm",
    },
    correctAnswer: "c",
  },
  {
    question: "Which tool can you use to ensure code quality?",
    answers: {
      a: "Angular",
      b: "jQuery",
      c: "RequireJS",
      d: "ESLint",
    },
    correctAnswer: "d",
  },
  {
    question: "Which is not programming language here?",
    answers: {
      a: "Python",
      b: "JS",
      c: "C",
      d: "ESLint",
    },
    correctAnswer: "d",
  },

  {
    question: "Which is  programming language here?",
    answers: {
      a: "Django",
      b: "React",
      c: "C",
      d: "ESLint",
    },
    correctAnswer: "c",
  },

  {
    question: "Django is a ____ ?",
    answers: {
      a: "Language",
      b: "Library",
      c: "Framework",
      d: "None of these",
    },
    correctAnswer: "d",
  },
];
var i = 0;
var count = 0;
const question = document.getElementById("question");
const ans1 = document.getElementById("ans1");
const ans2 = document.getElementById("ans2");
const ans3 = document.getElementById("ans3");
const ans4 = document.getElementById("ans4");
const nextButton = document.getElementById("nextButton");
const submitButton = document.getElementById("submit");
const radiobtn = document.getElementsByClassName("radiobtn");
const correctAnswer = myQuestions[i]["correctAnswer"];
const currentresult = document.getElementById("result");
const question_container = document.getElementsByClassName("question_container");
let num = prompt("How many question you want to solve?:", "10");

function CreateQuestion() {
  question.innerHTML = myQuestions[i]["question"];
  ans1.innerHTML = myQuestions[i]["answers"]["a"];
  ans2.innerHTML = myQuestions[i]["answers"]["b"];
  ans3.innerHTML = myQuestions[i]["answers"]["c"];
  ans4.innerHTML = myQuestions[i]["answers"]["d"];
}

function showTotalResult(){
    question_container.innerHTML = "Result";
}

if (myQuestions.length < num) {
    num = myQuestions.length;
  }
CreateQuestion();

nextButton.onclick = function () {
    console.log(i);
    console.log(myQuestions.length);
  if (i == myQuestions.length) {
    confirm("Quiz Finished,See your result.");
    showTotalResult();
  } else {
    CreateQuestion(i);
    i++;

    document.querySelectorAll(".radiobtn").forEach((item) => {
        item.checked = false;
    });
    currentresult.innerHTML = "";

  }
};

document.querySelectorAll(".radiobtn").forEach((item) => {
  item.addEventListener("click", (event) => {
      if (item.id === correctAnswer) {
        currentresult.innerHTML = "Answer Correct";
        count++;
      } else {
        currentresult.innerHTML = "Correct Answer is " + correctAnswer;
      }
  });
});
