// HOME PAGE

// path to images
var image_path = "./images/";
// create array of all images
var image_array = new Array();
// input names of images
image_array = ['home1.jpg', 'home2.jpg', 'home3.jpg', 'home4.jpg', 'home5.jpg', 'home6.jpg', 'home7.jpg', 'home8.jpg', 'home9.jpg', 'home10.jpg', 'home11.jpg'];


var arr_length = image_array.length;
var current_idx =  0;


var slideInterval;

function initBanner() {	
    setImage(0);
    slideInterval = setInterval(function(){
        nextImage();
    },3000);
}

function nextImage() {
    if(arr_length == current_idx + 1){
        current_idx = 0;
    } 
    else {
        current_idx++;
    }
    setImage(current_idx);
}


function setImage(idx) {
    document.banner.src = image_path+image_array[idx];
}
