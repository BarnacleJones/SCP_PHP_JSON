// function for hamburger menu
    function myFunction() 
    {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") 
        {
            x.style.display = "none";
        } 
        else 
        {
            x.style.display = "block";
        }
    }

// functions for speechAPI


// define speech in global scope for stop function
const speech = new SpeechSynthesisUtterance;

//function to set up text to speech
function TextToSpeech(toSpeech){    
    let voices = speechSynthesis.getVoices;
    //set the text to be spoke as that as the inner text of the description paragraph
    speech.text = toSpeech;
    speech.volume = 1;
    speech.rate = 0.8;
    speech.pitch = 1;
    speech.voice = voices[2];
    window.speechSynthesis.speak(speech);
}

// To save the sanity of the user
function StopSpeech()
{
window.speechSynthesis.cancel(speech);
}


//attach the speech function to each button

//002
let button002Text = document.getElementById("SCP-002").innerText;
document.getElementById("SCP-002(1)").onclick = () => TextToSpeech(button002Text);


//003
let button003Text = document.getElementById("SCP-003").innerText;
document.getElementById("SCP-003(1)").onclick = () => TextToSpeech(button003Text);


//004
let button004Text = document.getElementById("SCP-004").innerText;
document.getElementById("SCP-004(1)").onclick = () => TextToSpeech(button004Text);


//005
let button005Text = document.getElementById("SCP-005").innerText;
document.getElementById("SCP-005(1)").onclick = () => TextToSpeech(button005Text);


//006
let button006Text = document.getElementById("SCP-006").innerText;
document.getElementById("SCP-006(1)").onclick = () => TextToSpeech(button006Text);
