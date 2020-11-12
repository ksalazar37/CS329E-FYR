// HOME PAGE

// path to images
var image_path = "./images/";
// create array of all images
var image_array = new Array();
// input names of images
image_array = ['home1.jpg', 'home2.jpg', 'home3.jpg', 'home4.jpg', 'home5.jpg', 'home6.jpg', 'home7.jpg', 'home8.jpg', 'home9.jpg', 'home10.jpg', 'home11.jpg'];


var arr_length = image_array.length;
var current_idx = 0;


var slideInterval;

function initBanner() {
    setImage(0);
    slideInterval = setInterval(function() {
        nextImage();
    }, 3000);
}

function nextImage() {
    if (arr_length == current_idx + 1) {
        current_idx = 0;
    } else {
        current_idx++;
    }
    setImage(current_idx);
}


function setImage(idx) {
    document.banner.src = image_path + image_array[idx];
}
//-----------------------------
//Start popup login form script
function openForm() {
    document.getElementById('loginwindow').style.display = 'block';
}

function closeForm() {
    document.getElementById('loginwindow').style.display = 'none';
}


//End popup login form script
//-----------------------------


//-----------------------------
//Start registration signup form script
var ButtonClear = document.getElementById("clear");
var ButtonRegister = document.getElementById("reg");

ButtonClear.addEventListener("click", clear);
ButtonRegister.addEventListener("click", register);

function OnlyLettersandDigits(userinput) {
    inputlength = userinput.length
    LetterCount = 0
    NumberCount = 0

    for (i = 0; i < inputlength; i++) {
        var char = userinput.charAt(i)

        if (isNaN(char) == false) {
            NumberCount++
        }

        if ((userinput.charCodeAt(i) >= 65 && userinput.charCodeAt(i) <= 90) || (userinput.charCodeAt(i) >= 97 && userinput.charCodeAt(i) <= 122)) {
            LetterCount++
        }

    }

    if (inputlength != (LetterCount + NumberCount)) {
        return false
    } else {
        return true
    }
};

function containsLowerUpperDigit(userinput) {
    inputlength = userinput.length
    UpperCount = 0
    LowerCount = 0
    NumberCount = 0

    for (var i = 0; i < inputlength; i++) {

        if (isNaN(userinput.charAt(i))) {
            upperChar = userinput.charAt(i).toUpperCase()
            lowerChar = userinput.charAt(i).toLowerCase()
            if (userinput.charAt(i) === upperChar) {
                UpperCount++
            }
            if (userinput.charAt(i) === lowerChar) {
                LowerCount++
            }
        }
        if (isNaN(userinput.charAt(i)) == false) {
            NumberCount++
        }
    }

    if (UpperCount == 0 || LowerCount == 0 || NumberCount == 0) {
        return false
    } else {
        return true
    }
};

function register(event) {
    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass2").value;

    if (user.length < 6 || user.length > 10) {
        window.alert("Invalid username or password.")
    } else if (OnlyLettersandDigits(user) == false) {
        window.alert("Invalid username or password.")
    } else if (isNaN(user.charAt(0)) == false) {
        window.alert("Invalid username or password.")
    } else if (pass !== pass2) {
        window.alert("Invalid username or password.")
    } else if (pass.length < 6 || pass.length > 10) {
        window.alert("Invalid username or password.")
    } else if (OnlyLettersandDigits(pass) == false) {
        window.alert("Invalid username or password.")
    } else if (containsLowerUpperDigit(pass) == false) {
        window.alert("Invalid username or password.")
    } else {
        window.alert("User validated.")
    }
};

function clear(event) {
    // Define the variables I will use
    user = document.getElementById("user")
    pass = document.getElementById("pass")
    pass2 = document.getElementById("pass2")

    user.value = null
    pass.value = null
    pass2.value = null

}

//End registration signup form script
//-----------------------------


//-----------------------------
//Start DHTML script for the registration page
var helpers = ["Your username must be 6-10 characters.",
    "Your email address must have the form: user@domain",
    "Your password must have at least 6-10 characters.",
    "This password must match the one you typed in above",
    "This box provides advice on filling out the form on this page. Put the mouse cursor over any input field to get advice"
]

function messages(index) {
    document.getElementById("adviceBox").value = helpers[index];
}
//End DHTML script for the registration page
//-----------------------------

//-----------------------------
//Start DHTML script for the home page
//End DHTML script for the home page
//-----------------------------