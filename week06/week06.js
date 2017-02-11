function validateAge(element) {
    var pattern = /^([0-9]|[1-9][0-9]|1[0-1][0-8])$/;
    if (pattern.test(element.value)) {
        element.parentElement.children[1].style.display='none';
    }
    else {
        element.parentElement.children[1].style.display='initial';
    }
}

function validateSSN(element) {
    var pattern = /^\d{3}-\d{2}-\d{4}$/;
    if (pattern.test(element.value)) {
        element.parentElement.children[1].style.display='none';
    }
    else {
        element.parentElement.children[1].style.display='initial';
    }
}

function validateCCN(element) {
    var pattern = /^\d{4} ?\d{4} ?\d{4} ?\d{4}$/;
    if (pattern.test(element.value)) {
        element.parentElement.children[1].style.display='none';
    }
    else {
        element.parentElement.children[1].style.display='initial';
    }
}

function validateDate(element) {
    var pattern = /^(0?[0-9]|1[0-2])\/([0-2]?[0-9]|3[0-1])\/(175[3-9]|17[6-9][0-9]|1[8-9][0-9][0-9]|20[0-9][0-9]|2100)$/;
    if (pattern.test(element.value)) {
        element.parentElement.children[1].style.display='none';
    }
    else {
        element.parentElement.children[1].style.display='initial';
    }
}

function validateStateAbb(element) {
    var pattern = /^(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY])$/;
    if (pattern.test(element.value)) {
        element.parentElement.children[1].style.display='none';
    }
    else {
        element.parentElement.children[1].style.display='initial';
    }
}

function validateDollar(element) {
    var pattern = /^ *\$?(\d+|\d{1,3}(,\d{3})*)(\.\d{2})? *$/;
    if (pattern.test(element.value)) {
        element.parentElement.children[1].style.display='none';
    }
    else {
        element.parentElement.children[1].style.display='initial';
    }
}
