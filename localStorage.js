function compOnCpu() {
    
    let result = localStorage.getItem('cpu');
    document.getElementById('res').innerHTML = result;
}

function compOnSoft(){

    let result = localStorage.getItem('soft');
    document.getElementById('res').innerHTML = result;
}

function out_guarantee() {
    let result = localStorage.getItem('out');
    document.getElementById('res').innerHTML = result;
}