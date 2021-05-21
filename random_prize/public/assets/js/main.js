
function randomprize(req){
    let ran = Math.floor(Math.random() * 999) + 1;
    let strconcat = '0000'+ran.toString();
    let res = strconcat.substring(strconcat.length - 3);

    return res;
}

function randomprize2(req){
    let ran = Math.floor(Math.random() * 99) + 1;
    let strconcat = '0000'+ran.toString();
    let res = strconcat.substring(strconcat.length - 2);

    return res;
}

function neighbors(req){
    let strconcat = '0000'+req.toString();
    let res = strconcat.substring(strconcat.length - 3);
    return res;

}

function prizefirst(req,neigh){
    $('.first-prize0').html(req);
    $('#first-prize0').val(req);
    let arrNeigh = [];
    let neighbor1 = neighbors(parseInt(req)-1);
    arrNeigh.push(neighbor1);
    let neighbor2 = neighbors(parseInt(req)+1);
    arrNeigh.push(neighbor2);

    for (let i = 0; i < neigh; i++) {
        let id_seconde = '.neighbors-prize'+i.toString();
        let id_seconde_input = '#neight-first-prize'+i.toString();
        $(id_seconde).html(arrNeigh[i]);      
        $(id_seconde_input).val(arrNeigh[i]);      
    }

}

function prizeseconde(req){
    for (let i = 0; i < req; i++) {
        let id_seconde = '.second-prize'+i.toString();
        let id_seconde_input = '#seconde-prize'+i.toString();
        let prizeseconde = randomprize();
        $(id_seconde).html(prizeseconde);     
        $(id_seconde_input).val(prizeseconde);     
    }
}

function prizeTwoDigit(req){
    for (let i = 0; i < req; i++) {
        let id_seconde = '.suffix-prize'+i.toString();
        let id_seconde_input = '#two-digit-prize'+i.toString();
        let prizeseconde = randomprize2();
        $(id_seconde).html(prizeseconde);     
        $(id_seconde_input).val(prizeseconde);     
    }
}

function RandomAll(){
    let num = randomprize();
    prizefirst(num,2);
    prizeseconde(3);
    prizeTwoDigit(10);
    $('#btn_save').removeClass('Remove');
    var base_url = window.location.origin;
    // window.location.replace(base_url+'/insert');
}

function checkInput(e)
{
    // stopEvent(e);
    console.log(e);
    // e.stopPropagation();
    // if($('#first-prize0').val() == ''){
    //     console.log('null');
    //     e.preventDefault();
    // }
    // alert('it works!');
    // return  false;
}