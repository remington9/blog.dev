function maxrep1calculate()
{
    var lifted = parseFloat(document.maxrep1.lifted.value);
    // alert(lifted);
    var reps = document.maxrep1.reps.options[document.maxrep1.reps.selectedIndex].value;
    var answer = 0;
    if ((reps == 0) || (lifted <= 0) || (lifted == '') || isNaN(lifted)) {
        alert('Please enter the weight you lifted & select the number of reps you completed.');
        return false;
    }
    else if (reps == 10) {
        answer = Math.round(lifted*(4/3));
    } else {
        answer = Math.round(lifted*(1/(1.0278-(reps*.0278))));
    }
    document.maxrep1.onehundred.value = Math.round(answer*10)/10;
    document.maxrep1.ninetyfive.value = Math.round((answer/(20/19))*10)/10;
    document.maxrep1.ninety.value = Math.round((answer/(10/9))*10)/10;
    document.maxrep1.eightyfive.value = Math.round((answer/(20/17))*10)/10;
    document.maxrep1.eighty.value = Math.round((answer/(5/4))*10)/10;
    document.maxrep1.seventyfive.value = Math.round((answer/(4/3))*10)/10;
    document.maxrep1.seventy.value = Math.round((answer/(10/7))*10)/10;
    document.maxrep1.sixtyfive.value = Math.round((answer/(20/13))*10)/10;
    document.maxrep1.sixty.value = Math.round((answer/(5/3))*10)/10;
    document.maxrep1.fiftyfive.value = Math.round((answer/(20/11))*10)/10;
    document.maxrep1.fifty.value = Math.round((answer/2)*10)/10;
}