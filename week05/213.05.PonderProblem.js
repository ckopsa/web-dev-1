function problem1() {
    console.log("Hello World");
}
function problem2(formName, textName) {
    console.log(textName.replace(/RICH_GUY/g, formName));
}
function problem3(temperature) {
    console.log(Number(Math.round((temperature -32) * 5 / 9 + 'e1')+'e-1'));
}
function problem4(value){
    switch(value) {
    case '1':
        console.log("$0.98");
        break;
    case '2':
        console.log("$1.19");
        break;
    case '3':
        console.log("$1.40");
        break;
    case '4':
        console.log("$1.61");
        break;
    case '5':
        console.log("$1.82");
        break;
    default:
        console.log("Invalid weight");
    }
}
function problem5(apr, term, amount) {
    for ( i = 1; i <= term; i++ ) {
        amount = amount * (1 + apr/100);
    }
    console.log('$' + Number(Math.round(amount+'e2')+'e-2'));
}
