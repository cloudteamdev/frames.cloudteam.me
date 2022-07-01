/*Logs & Logs Counter Elements*/
const logs = document.getElementById("logs-ping");
const logs_counter = document.getElementById("logs-ping-counter");

/*Mark pings as read*/        
function read() {
    logs.style.display = "none";
    logs_counter.innerText = 0;
}

/*Generates a new ping*/
function ping_new() {
    logs.style.display = "initial";

    if(logs_counter.value > 99) { 
        logs_counter.innerText = "99+" 
    } else {
        logs_counter.innerText = Number(logs_counter.innerText) + 1;
    }
}

/*Download Button, Dom2Image*/
$("#btn_dwl").on('click', function () {
const node = document.getElementById('holder');
domtoimage.toPng(node)
    .then(function (dataUrl) {
        const a = $("<a>").attr("href", dataUrl).attr("download", "overlay.png").appendTo("body");

        a[0].click();
        a.remove();

        var img = new Image();
        img.src = dataUrl;
        
        ping_new();
        weblog("success", "Success! You successfully downloaded the overlay without detected errors.")

        document.getElementById("downloads").style.display = "initial";
        document.getElementById("preview-list").appendChild(img);
    })
    .catch(function (error) {
        weblog("error", "Sorry, something went wrong! Try using the 'Device Upload' option to upload your avatar instead of the URL upload.");
    });
});

/*Select overlay/icon*/
function select(type, id, source) {
    if(type == "overlay"){document.getElementById("overlay-holder").src = source; const colorsettings = document.getElementById("overlay-settings"); colorsettings.style.display = "initial";}
    if(type == "icon"){document.getElementById("icon-holder").src = source; const iconsettings = document.getElementById("icon-settings"); iconsettings.style.display = "initial";}
}

/*Slider Color Range*/
function range(id) {
    const hue = document.getElementById("range-hue");
    const sat = document.getElementById("range-saturation");
    const holder = document.getElementById("overlay-holder");

    if(id == "reset") { 
        hue.value = 0; sat.value = 100; range("range-hue"); range("range-saturation") 
    } else {
        holder.style.filter = "hue-rotate("+hue.value+"deg) "+" saturate("+sat.value+"%)";
    }
}

/*Icons color invertion*/
function invert() {
    icon_preview = document.getElementById("icon-holder");
    inverted = document.getElementById("current-icons");

    if(icon_preview.style.filter == "invert(100%)") {
        icon_preview.style.filter = "invert(0%)";
        inverted.innerText = "Black";
    } else {
        icon_preview.style.filter = "invert(100%)";
        inverted.innerText = "White";
    }
}

/*Upload by device*/
function setholder(input, holder) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(holder)
            .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
/*Upload by URL*/
function avatarurl(val) {
    warning = document.getElementById("avatar-upload-url");
    extra = document.getElementById("avatar-upload-warning");

    if (check(val)) {
        console.log("Valid image, processing...")
        warning.style.border = "2px solid yellow";
        document.getElementById("avatar-holder").src = val;
        warning.style.border = "2px solid green";
        weblog("success", "Successfully set the given image URL as frame avatar.")
    } else {
        console.error("invalid image, couldn't continue.");
        warning.style.border = "2px solid red"
    }

    if (val.includes(".gif")) {
        console.warn("Unsupported image type GIF (animated) detected.")
        extra.style.display = "initial"
        extra.innerText = "Not supporting GIFs, you still can download the frame in png format."
    } else {
        extra.style.display = "none"
    }
}

const check = (url) => {
    if (typeof url !== 'string') {
        return false;
    }
    return (url.match(/^http[^\?]*.(jpg|jpeg|gif|png|tiff|bmp|webp|svg)(\?(.*))?$/gmi) !== null);
}

/*Loader*/
var load;
function loader() {
    load = setTimeout(loaded, 3000);
}

function loaded() {
    document.getElementById("spinner").style.display = "none";
    document.getElementById("spinner-parent").style.display = "none";
    document.getElementById("content-header").style.opacity = "1";
    document.getElementById("content-body").style.opacity = "1";
}

/*Tabs Handler*/
function newtab(evt, tabname) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabname).style.display = "block";
    evt.currentTarget.className += " active";
}

/*Open Tab set as Default*/
document.getElementById("defaultOpen").click();
