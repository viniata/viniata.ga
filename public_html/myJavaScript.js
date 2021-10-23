function sfsd(d) {
    document.location.href = d
}

var old_

function f_sfsd_ov (obj) {
    old_ = obj.className;
    if (obj.className == "div_href_1") {return false}
    obj.className = "div_href_ov"
}

function f_sfsd_ou (obj) {
    if (obj.className == "div_href_1") {return false}
    obj.className = old_
}

function f_reg() {
    document.location.href = "start_u.html"
}