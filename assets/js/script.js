function updater(val) {
warning = document.getElementById("warning");
extra = document.getElementById("extra");
if(check(val)){
console.log("Valid image, processing...")
warning.style.border = "2px solid yellow"
document.getElementById("user-avatar").src = val;
warning.style.border = "2px solid green"
} else {
console.error("invalid image, couldn't continue.");
warning.style.border = "2px solid red"
}
if(val.includes(".gif")){
    console.warn("Unsupported image type GIF (animated) detected.")
    extra.display = "initial"
    extra.innerText = "Not currently supporting GIFs, you still can download the frame, but it won't be animated."
  }
}
const check = (url) => {
  if (typeof url !== 'string') {
    return false;
  }
  return (url.match(/^http[^\?]*.(jpg|jpeg|gif|png|tiff|bmp|webp|svg)(\?(.*))?$/gmi) !== null);
}
var load;
function loader() {
  load = setTimeout(loaded, 3000);
}
function loaded() {
  document.getElementById("spinner").style.display = "none";
  document.getElementById("spinner-parent").style.display = "none";
  document.getElementById("content").style.display = "block";
  document.getElementById("header-info").style.display = "initial";
  document.getElementById("footer-info").style.display = "initial";
}
var loadFile = function(event) {
	var image = document.getElementById('user-avatar');
	image.src = URL.createObjectURL(event.target.files[0]);
};

$("#btn_dwl").on('click', function () {
var node = document.getElementById('holder');
 
domtoimage.toPng(node)
    .then(function (dataUrl) {
        var a = $("<a>").attr("href", dataUrl).attr("download", "overlay.png").appendTo("body");
        a[0].click();
        a.remove();
        var img = new Image();
        img.src = dataUrl;
        document.getElementById("downloads").style.display = "initial";
        document.getElementById("preview-list").appendChild(img);
    })
    .catch(function (error) {
        console.error('oops, something went wrong!', error);
    });
});

/* old button using html2canvas
$("#btn_dwl").on('click', function () {
        document.getElementById("downloads").style.display = "initial";
		html2canvas(document.getElementById("holder"),		{
			allowTaint: false,
			useCORS: true
		}).then(function (canvas) {
			var anchorTag = document.createElement("a");
			document.body.appendChild(anchorTag);
			document.getElementById("preview-list").appendChild(canvas);			anchorTag.download = "overlay.png";
			anchorTag.href = canvas.toDataURL();
			anchorTag.target = '_blank';
			anchorTag.click();
		});
});
*/
function select(id) {
const colorsettings = document.getElementById("overlay-settings"); 
const option = document.getElementById(id);
const overlay = option.src;
const overpreview = document.getElementById("overlay-preview");
colorsettings.style.display = "initial";
overpreview.src = overlay;
}
function icon(id) {
const iconsettings = document.getElementById("icon-settings"); 
const option = document.getElementById(id);
const overlay = option.src;
const overpreview = document.getElementById("icon-preview");
iconsettings.style.display = "initial";
overpreview.src = overlay;
}
function range(id) {
hue = document.getElementById("range-hue").value;
sat = document.getElementById("range-saturation").value;
document.getElementById("overlay-preview").style.filter = "hue-rotate("+hue+"deg) "+" saturate("+sat+"%)";
}

function invert() {
icon_preview = document.getElementById("icon-preview");
inverted = document.getElementById("current-icons");
if(icon_preview.style.filter == "invert(100%)") {
icon_preview.style.filter = "invert(0%)";
inverted.innerText = "Black";
  } else {
icon_preview.style.filter = "invert(100%)";
inverted.innerText = "White";
       }
}
function ui(id) {
const selection = document.getElementById(id);
selection.className = "nav-link active";

const ui_overlay = document.getElementById("ui-overlay");
 const col_overlay = document.getElementById("col-overlay");
 
const ui_icons = document.getElementById("ui-icons");
 const col_icons = document.getElementById("col-icons");
 
const ui_pets = document.getElementById("ui-pets");
 const col_pets = document.getElementById("col-pets");
if(id == "ui-icons"){
    ui_overlay.className = "nav-link";
    col_overlay.className = "overlay-types d-none";
    ui_pets.className = "nav-link";
    col_pets.className = "pets-types d-none";
    col_icons.className = "icons-types";
  }
if(id == "ui-overlay"){
    ui_icons.className = "nav-link";
    col_icons.className = "icons-types d-none";
    ui_pets.className = "nav-link";
    col_pets.className = "pets-types d-none";
    col_overlay.className = "overlay-types";
  }
if(id == "ui-pets"){
    ui_overlay.className = "nav-link";
    col_overlay.className = "overlay-types d-none";
    ui_icons.className = "nav-link";
    col_icons.className = "icons-types d-none";
    col_pets.className = "pets-types";
  }
}
