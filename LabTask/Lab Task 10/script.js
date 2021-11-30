var number1 = Math.floor(Math.random() * 10);
var number2 = Math.floor(Math.random() * 10);
var total1 = number1 + number2;

var number3 = Math.floor(Math.random() * 10);
var number4 = Math.floor(Math.random() * 10);
var total2 = number3 + number4;

var z = 0;
z++;
var y = 0;
y++;

function start() {
	q1.innerHTML ="Question: " + y++;
	hide.innerHTML = "";
	msg1.innerHTML = number1 +  "  +  "   + number2;
	msg2.innerHTML = "<input type=text id=input /> <br /> <button onclick=submit()>Submit</button>";
}

function submit() {
	var result = input.value;
	show.innerHTML = result;
	if (result == total1) {
		q1.innerHTML ="Question:" + z++;;
		msg3.innerHTML = "Correct";
		msg2.innerHTML = "";
		msg4.innerHTML = "<button onclick=nextQues()>Next</button>";
	}
	else {
		msg3.innerHTML = "Incorrect";
		msg2.innerHTML = "";
		msg4.innerHTML = "<button onclick=nextQues()>Next</button>";
	}
}

function nextQues() {
	q1.innerHTML ="Question: " + y++;
	msg1.innerHTML = number3 +  "  +  "  + number4;
	msg2.innerHTML = "<input type=text id=input /> <br /> <button onclick=nextSubmit()>Submit</button>";
	msg3.innerHTML = "";
	show.innerHTML = "";
	msg4.innerHTML = "";
}

function nextSubmit() {
	var result = input.value;
	show.innerHTML = result;
	if (result == total2) {
		z++;
		msg3.innerHTML = "Correct";
		msg2.innerHTML = "";
		msg4.innerHTML = "<button onclick=quizEnd()>End of Quiz</button>";
	}
	else {
		msg3.innerHTML = "Incorrect";
		msg2.innerHTML = "";
		msg4.innerHTML = "<button onclick=quizEnd()>End of Quiz</button>";
	}
}

function quizEnd() {
	msg1.innerHTML = ""
	msg2.innerHTML = "You scored " + (z - 1);
	msg3.innerHTML = "Thanks  &#128512;";
	show.innerHTML = "";
	msg4.innerHTML = "<button onclick=repeat()>Repeat</button>";
}

function repeat() {
	location.reload();
}