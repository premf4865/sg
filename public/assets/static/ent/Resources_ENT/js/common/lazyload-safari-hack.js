// Hack Lazyload Safari

var appVersion = navigator.appVersion.split(" ");
var os = [appVersion[1], appVersion[2], appVersion[3], appVersion[4], appVersion[5]].join(" ");
os = os.split("(")[1].split(")")[0];

if (os.toUpperCase().indexOf("OS X") > -1) {
    var imgDataSrc = document.querySelectorAll('[data-src]');
    for (var i = 0; i < imgDataSrc.length; i++) {
        var _this = imgDataSrc[i];
        var attrSrcValue = _this.getAttribute("data-src");
        var attrAltValue = _this.getAttribute("alt");
        _this.setAttribute("style", "display:none;");
        var img = '<img src="' + attrSrcValue + '" alt="' + attrAltValue + '"/>'
        _this.parentNode.insertAdjacentHTML('afterbegin', img);
    }
}