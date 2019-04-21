var oldcolor;

function haveColor(o) {
    oldcolor = o.style.backgroundColor;
    o.style.backgroundColor = '#ff0000';
}

function noColor(o) {
    o.style.backgroundColor = oldcolor;
}