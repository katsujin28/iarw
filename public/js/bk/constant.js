const init_val = 4096;          // 初期値
const init_val_2_25 = 9216;     // 2.25倍
const init_val_2_00 = 8192;     // 2倍
const init_val_1_80 = 7372;     // 1.8倍
const init_val_1_60 = 6553;     // 1.6倍
const init_val_1_50 = 6144;     // 1.5倍
const init_val_1_40 = 5734;     // 1.4倍
const init_val_1_33_1 = 5461;   // 1.3332倍
const init_val_1_33_0 = 5448;   // 1.33倍
const init_val_1_30 = 5325;     // 1.3倍
const init_val_1_29 = 5324;     // 1.2998倍
const init_val_1_25 = 5120;     // 1.25倍
const init_val_1_20 = 4915;     // 1.2倍
const init_val_1_10 = 4506;     // 1.1倍
const init_val_1_09 = 4505;     // 1.0998倍
const init_val_0_75 = 3072;     // 0.75倍
const init_val_0_66 = 2732;     // 0.6669倍
const init_val_0_50 = 2048;     // 0.5倍
const init_val_0_33 = 1352;     // 0.33倍
const level_val = 22;           // ダメージ初期値（50レベルの時）

const nhsp = String.fromCharCode(160);

const sel_bk_col = window.matchMedia('(prefers-color-scheme: dark)').matches ? '#446688' : '#ffeebb';

const asc_o = (l, r) => {
    if (l.ad < r.ad) {
      return -1;
    } else if (l.ad > r.ad) {
      return 1;
    }
  
    return 0;
};

let AttackAbillity_val = "0";
let AttackItem_val = "0";
let DefenseAbillity_val = "0";
let DefenseItem_val = "0";
let ScaryFace_val = "0";
let Weather_val = "0";
let Reflect_val = "0";
let Field_val = "0";
let Burn_val = "0";
let CriticalHit_val = "0";
let KnockOff_val = "0";
let Underground_val = "0";

let add_tbl = [];

window.onload = function(){
    if (window.innerWidth < 600) {hstTbl
        document.getElementById("smp_width_1").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_2").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_3").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_4").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_5").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_6").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("hstTbl").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("sel_2").style.display = "none";
        document.getElementById("cng_btn").innerText = "ダメージ確認";
    } else {
        document.getElementById("smp_width_1").style.width = "";
        document.getElementById("smp_width_2").style.width = "";
        document.getElementById("smp_width_3").style.width = "";
        document.getElementById("smp_width_4").style.width = "";
        document.getElementById("smp_width_5").style.width = "";
        document.getElementById("smp_width_6").style.width = "";
        document.getElementById("hstTbl").style.width = "";
        document.getElementById("sel_1").style.display = "";
        document.getElementById("sel_2").style.display = "";
    } 
}
window.addEventListener('resize', resizeWindow);
function resizeWindow(event){
    if (window.innerWidth < 600) {
        document.getElementById("smp_width_1").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_2").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_3").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_4").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_5").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("smp_width_6").style.width = String(window.innerWidth -40) + "px";
        document.getElementById("hstTbl").style.width = String(window.innerWidth -40) + "px";
        if (document.getElementById("sel_1").style.display != "none" &&
            document.getElementById("sel_2").style.display != "none") {
            document.getElementById("sel_2").style.display = "none";
            document.getElementById("cng_btn").innerText = "ダメージ確認";
        } 
    } else {
        document.getElementById("smp_width_1").style.width = "";
        document.getElementById("smp_width_2").style.width = "";
        document.getElementById("smp_width_3").style.width = "";
        document.getElementById("smp_width_4").style.width = "";
        document.getElementById("smp_width_5").style.width = "";
        document.getElementById("smp_width_6").style.width = "";
        document.getElementById("hstTbl").style.width = "";
        document.getElementById("sel_1").style.display = "";
        document.getElementById("sel_2").style.display = "";
    } 
}

/**
 * 補正値設定
 * @param {履歴で保持している補正値} setArr 
 */
function setHst( setArr = '' ) {
    if (setArr != '') {
        AttackAbillity_val = "0";
        AttackItem_val = "0";
        DefenseAbillity_val = "0";
        DefenseItem_val = "0";
        ScaryFace_val = "0";
        Weather_val = "0";
        Reflect_val = "0";
        Field_val = "0";
        Burn_val = "0";
        CriticalHit_val = "0";
        KnockOff_val = "0";
        Underground_val = "0";

        var setArrTbl = String(setArr).split(',');
        for (var i = "0"; i < setArrTbl.length; i++) {
            var setArrItem = setArrTbl[i].split(':');

            if (setArrItem[0] == 'AttackAbillity') AttackAbillity_val = setArrItem[1];
            if (setArrItem[0] == 'AttackItem') AttackItem_val = setArrItem[1];
            if (setArrItem[0] == 'DefenseAbillity') DefenseAbillity_val = setArrItem[1];
            if (setArrItem[0] == 'DefenseItem') DefenseItem_val = setArrItem[1];
            if (setArrItem[0] == 'ScaryFace') ScaryFace_val = setArrItem[1];
            if (setArrItem[0] == 'Weather') Weather_val = setArrItem[1];
            if (setArrItem[0] == 'Reflect') Reflect_val = setArrItem[1];
            if (setArrItem[0] == 'Field') Field_val = setArrItem[1];
            if (setArrItem[0] == 'Burn') Burn_val = setArrItem[1];
            if (setArrItem[0] == 'CriticalHit') CriticalHit_val = setArrItem[1];
            if (setArrItem[0] == 'KnockOff') KnockOff_val = setArrItem[1];
            if (setArrItem[0] == 'Underground') Underground_val = setArrItem[1];
        }
    } else {
        AttackAbillity_val = getAbitm('AttackAbillity');
        AttackItem_val = getAbitm('AttackItem');
        DefenseAbillity_val = getAbitm('DefenseAbillity');
        DefenseItem_val = getAbitm('DefenseItem');
        ScaryFace_val = getAbitm('ScaryFace');
        Weather_val = getAbitm('Weather');
        Reflect_val = getAbitm('Reflect');
        Field_val = getAbitm('Field');
        Burn_val = getAbitm('Burn');
        CriticalHit_val = getAbitm('CriticalHit');
        KnockOff_val = getAbitm('KnockOff');
        Underground_val = getAbitm('Underground');
    }
}

/**
 * 補正選択取得
 * @param {取得する補正名} idNm 
 * @returns 選択されている値
 */
function getAbitm( idNm ) {
    var elements = document.getElementsByName(idNm);
    var len = elements.length;

    for (let i = "0"; i < len; i++){
        if (elements.item(i).checked){
            return String(elements.item(i).value);
        }
    }

    return '0';
}
