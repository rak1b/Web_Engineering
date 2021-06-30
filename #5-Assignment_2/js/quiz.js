const myQuestions = [
  {
    question: "Who created Facebook?",
    answers: {
      a: "Douglas Crockford",
      b: "Sheryl Sandberg",
      c: "Brendan Eich",
      d: "None of these"
    },
    correctAnswer: "d",
  },
  {
    question: "Which one of these is a JavaScript package manager?",
    answers: {
      a: "Node.js",
      b: "TypeScript",
      c: "npm",
      d: "python"
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
    correctAnswer: "c",
  },
  {
    question: "Grand Central Terminal, Park Avenue, New York is the world",
    answers: {
      a: "largest railway station",
      b: "highest railway station",
      c: "longest railway station",
      d: "None of these",
    },
    correctAnswer: "a",
  },

  {
    question:
      "C99 standard guarantees uniqueness of __________ characters for internal name",
    answers: {
      a: "33",
      b: "63",
      c: "22",
      d: "222",
    },
    correctAnswer: "b",
  },

  {
    question: "Full form of HTTP ____",
    answers: {
      a: "High power transfer protocol",
      b: "hyper Text protocol",
      c: "High power protocol",
      d: "Hyper Text transfer protocol",
    },
    correctAnswer: "d",
  },

  {
    question: "Full form of HTML ____",
    answers: {
      a: "High power many language",
      b: "Hypertext Markup Language",
      c: "Hypertext Many Language",
      d: "None",
    },
    correctAnswer: "b",
  },

  {
    question: "Which of the following is not a valid variable name declaration",
    answers: {
      a: "a56",
      b: "a45dddd",
      c: "_a44",
      d: "aaa a",
    },
    correctAnswer: "d",
  },
  {
    question: "All keywords in C are in ____________",
    answers: {
      a: "LowerCase letters",
      b: "UpperCase letters",
      c: "camelCase letters",
      d: "None",
    },
    correctAnswer: "a",
  },

  {
    question: "Which of the following is not a valid C variable name",
    answers: {
      a: "int number",
      b: "loat rate",
      c: "int variable_count",
      d: "int $main",
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
const currentresult = document.getElementById("result");
const question_container = document.getElementsByClassName("question_container");
let num = prompt("How many question you want to solve?:", "10");
var rand_list = [];
function randomNumber() {
    var rand_num = [Math.floor(Math.random() * myQuestions.length)];
    if(rand_list.includes(rand_num)){
      randomNumber();
    }else{
      rand_list.push(rand_num);
      return rand_num;
    }
}




function CreateQuestion() {
  var rand_num = randomNumber();
  var correctAnswer = myQuestions[rand_num]["correctAnswer"];
  console.log(rand_num);
  console.log(correctAnswer)
  console.log(myQuestions[rand_num])
  question.innerHTML = myQuestions[rand_num]["question"];
  ans1.innerHTML = myQuestions[rand_num]["answers"]["a"];
  ans2.innerHTML = myQuestions[rand_num]["answers"]["b"];
  ans3.innerHTML = myQuestions[rand_num]["answers"]["c"];
  ans4.innerHTML = myQuestions[rand_num]["answers"]["d"];
  i++;

  document.querySelectorAll(".radiobtn").forEach((item) => {
    item.addEventListener("click", (event) => {
        if (item.id === correctAnswer ) {
          currentresult.innerHTML = "Correct";
          currentresult.classList.add("correct");
          currentresult.classList.remove("wrong");
          count++;
        } else {
          currentresult.innerHTML = "Wrong!!Correct Answer is " + myQuestions[rand_num]["answers"][correctAnswer];
          currentresult.classList.add("wrong");
          currentresult.classList.remove("correct");



        }
    });
  });
}

function showTotalResult() {
  console.log(`You got ${count} out of ${num} \nPercentage : ${(num/count) * 100}`);
  var res=confirm(`You got ${count} out of ${num} \nPercentage : ${(count/num) * 100}\nTry again?`);
  if (res == true) {
    location.reload();
  } else {
    location.replace("/");
  }
}

if (myQuestions.length < num) {
    num = myQuestions.length;
  }
CreateQuestion();

function nextButtonfunction () {
  if (i == num) {
    // confirm("Quiz Finished,See your result.");
    showTotalResult();
  } else {
    CreateQuestion();
    document.querySelectorAll(".radiobtn").forEach((item) => {
        item.checked = false;
    });
    currentresult.innerHTML = "";

  }
};


