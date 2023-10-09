
// テスト用
shortcut.add("F11", function() {
    alert(term_id);
});

// エンター推移
shortcut.add("Enter", function() {
    switch(document.activeElement.id) {
        case 'Power': {
            document.getElementById("Attack").focus();
            break;
        }
        case 'Attack': {
            document.getElementById("Defense").focus();
            break;
        }
        case 'Defense': {
            document.getElementById("SameType").focus();
            break;
        }
        case 'SameType': {
            document.getElementById("Effective").focus();
            break;
        }
        case 'Effective': {
            calculation();
            break;
        }
        case 'HitPoint': {
            document.getElementById("AttackLevel").focus();
            break;
        }
        case 'AttackLevel': {
            document.getElementById("DefenseLevel").focus();
            break;
        }
        case 'DefenseLevel': {
            document.getElementById("Power").focus();
            break;
        }
    }
});
shortcut.add("Shift+Enter", function() {
    switch(document.activeElement.id) {
        case 'Attack': {
            document.getElementById("Power").focus();
            break;
        }
        case 'Defense': {
            document.getElementById("Attack").focus();
            break;
        }
        case 'SameType': {
            document.getElementById("Defense").focus();
            break;
        }
        case 'Effective': {
            document.getElementById("SameType").focus();
            break;
        }
    }
});

// タブ推移
shortcut.add("Tab", function() {
    switch(document.activeElement.id) {
        case 'Power': 
        case 'Attack': 
        case 'Defense': 
        case 'SameType': 
        case 'Effective': 
        {
            document.getElementById("HitPoint").focus();
            break;
        }
        case 'HitPoint': {
            document.getElementById("Power").focus();
            break;
        }
        default: {
            document.getElementById("Power").focus();
        }
    }
});

// リセット処理
shortcut.add("F12", function() { corReset(); });

function corReset() {
    document.getElementsByName('AttackAbillity').item(0).checked = true;
    cngColor('AttackAbillity', 0);
    
    document.getElementsByName('AttackItem').item(0).checked = true;
    cngColor('AttackItem', 0);
    
    document.getElementsByName('DefenseAbillity').item(0).checked = true;
    cngColor('DefenseAbillity', 0);
    
    document.getElementsByName('DefenseItem').item(0).checked = true;
    cngColor('DefenseItem', 0);
    
    document.getElementsByName('ScaryFace').item(0).checked = true;
    cngColor('ScaryFace', 0);
    
    document.getElementsByName('Weather').item(0).checked = true;
    cngColor('Weather', 0);
    
    document.getElementsByName('Reflect').item(0).checked = true;
    cngColor('Reflect', 0);
    
    document.getElementsByName('Field').item(0).checked = true;
    cngColor('Field', 0);
    
    document.getElementsByName('Burn').item(0).checked = true;
    cngColor('Burn', 0);
    
    document.getElementsByName('CriticalHit').item(0).checked = true;
    cngColor('CriticalHit', 0);
    
    document.getElementsByName('KnockOff').item(0).checked = true;
    cngColor('KnockOff', 0);
    
    document.getElementsByName('Underground').item(0).checked = true;
    cngColor('Underground', 0);
}

// ラジオボタン移動関数
function redioChnange( rdb ) {
    var elements = document.getElementsByName(rdb);
    var len = elements.length;
    var hst_val = '';

    for (let i = 0; i < len; i++){
        if (elements.item(i).checked){
            hst_val = i == (len - 1) ? 0 : i + 1;
        }
    }

    elements.item(hst_val).checked = true;

    cngColor(rdb, hst_val);
}

// 攻撃側特性
shortcut.add("Shift+A", function() { redioChnange('AttackAbillity'); });

// 攻撃側道具
shortcut.add("Shift+S", function() { redioChnange('AttackItem'); });

// 防御側特性
shortcut.add("Shift+D", function() { redioChnange('DefenseAbillity'); });

// 防御側道具
shortcut.add("Shift+F", function() { redioChnange('DefenseItem'); });

// 攻防レベル
shortcut.add("Up", function() { 
    if (AttackLevel.value == "") {
        AttackLevel.value = 1;
    } else if (Number(AttackLevel.value) >= -6 && Number(AttackLevel.value) < 6) {
        AttackLevel.value = Math.floor(Number(AttackLevel.value)) + 1;
    } else if (Number(AttackLevel.value) == 6) {
    } else {
        AttackLevel.value = 0;
    }
});
shortcut.add("Down", function() { 
    if (AttackLevel.value == "") {
        AttackLevel.value = -1;
    } else if (Number(AttackLevel.value) > -6 && Number(AttackLevel.value) <= 6) {
        AttackLevel.value = Math.floor(Number(AttackLevel.value)) - 1;
    } else if (Number(AttackLevel.value) == -6) {
    } else {
        AttackLevel.value = 0;
    }
});
shortcut.add("Shift+Up", function() { 
    if (DefenseLevel.value == "") {
        DefenseLevel.value = 1;
    } else if (Number(DefenseLevel.value) >= -6 && Number(DefenseLevel.value) < 6) {
        DefenseLevel.value = Math.floor(Number(DefenseLevel.value)) + 1;
    } else if (Number(DefenseLevel.value) == 6) {
    } else {
        DefenseLevel.value = 0;
    }
});
shortcut.add("Shift+Down", function() { 
    if (DefenseLevel.value == "") {
        DefenseLevel.value = -1;
    } else if (Number(DefenseLevel.value) > -6 && Number(DefenseLevel.value) <= 6) {
        DefenseLevel.value = Math.floor(Number(DefenseLevel.value)) - 1;
    } else if (Number(DefenseLevel.value) == -6) {
    } else {
        DefenseLevel.value = 0;
    }
});

// その他
shortcut.add("F1", function() { redioChnange('ScaryFace'); });
shortcut.add("F2", function() { redioChnange('Weather'); });
shortcut.add("F3", function() { redioChnange('Reflect'); });
shortcut.add("F4", function() { redioChnange('Field'); });
shortcut.add("F6", function() { redioChnange('Burn'); });
shortcut.add("F7", function() { redioChnange('CriticalHit'); });
shortcut.add("F8", function() { redioChnange('KnockOff'); });
shortcut.add("F9", function() { redioChnange('Underground'); });

// 情報の強調表示
function cngColor( cngid, cngnm ) {
    // №を文字列変換
    cngnm = String(cngnm);
    // その他情報の初期化
    var i = 1;
    do {
        document.getElementById(cngid + '_' + i + '_b').style.backgroundColor = '';
        document.getElementById(cngid + '_' + i + '_i').style.backgroundColor = '';
        i = i + 1;
    } while (document.getElementById(cngid + '_' + i + '_b') != null);

    // 指定箇所の強調表示
    if (cngnm != '0') {
        document.getElementById(cngid + '_' + cngnm + '_b').style.backgroundColor = sel_bk_col;
        document.getElementById(cngid + '_' + cngnm + '_i').style.backgroundColor = sel_bk_col;
    }

    // 補正表示テーブル更新
    var corList = document.getElementById('corList');
    switch (cngid) {
        case 'AttackAbillity': {
            switch (cngnm) {
                case '0': {
                    corList.rows[1].cells[0].innerText = nhsp;
                    break;
                }
                case '1': {
                    corList.rows[1].cells[0].innerText = '威*1.1';
                    break;
                }
                case '2': {
                    corList.rows[1].cells[0].innerText = '威*1.2';
                    break;
                }
                case '3': {
                    corList.rows[1].cells[0].innerText = '威*1.3';
                    break;
                }
                case '4': {
                    corList.rows[1].cells[0].innerText = '威*1.5';
                    break;
                }
                case '5': {
                    corList.rows[1].cells[0].innerText = '攻*1.3';
                    break;
                }
                case '6': {
                    corList.rows[1].cells[0].innerText = '攻*1.5';
                    break;
                }
                case '7': {
                    corList.rows[1].cells[0].innerText = '攻*2';
                    break;
                }
                case '8': {
                    corList.rows[1].cells[0].innerText = '防*0.75';
                    break;
                }
                case '9': {
                    corList.rows[1].cells[0].innerText = 'D*1.5';
                    break;
                }
                case '10': {
                    corList.rows[1].cells[0].innerText = 'D*2';
                    break;
                }
            }
            break;
        }
        case 'AttackItem': {
            switch (cngnm) {
                case '0': {
                    corList.rows[1].cells[1].innerText = nhsp;
                    break;
                }
                case '1': {
                    corList.rows[1].cells[1].innerText = '威*1.09';
                    break;
                }
                case '2': {
                    corList.rows[1].cells[1].innerText = '威*1.1';
                    break;
                }
                case '3': {
                    corList.rows[1].cells[1].innerText = '威*1.2';
                    break;
                }
                case '4': {
                    corList.rows[1].cells[1].innerText = '威*1.3';
                    break;
                }
                case '5': {
                    corList.rows[1].cells[1].innerText = '攻*1.5';
                    break;
                }
                case '6': {
                    corList.rows[1].cells[1].innerText = '攻*2';
                    break;
                }
                case '7': {
                    corList.rows[1].cells[1].innerText = 'D*1.2';
                    break;
                }
                case '8': {
                    corList.rows[1].cells[1].innerText = 'D*1.3';
                    break;
                }
            }
            break;
        }
        case 'DefenseAbillity': {
            switch (cngnm) {
                case '0': {
                    corList.rows[1].cells[2].innerText = nhsp;
                    break;
                }
                case '1': {
                    corList.rows[1].cells[2].innerText = '威*1.25';
                    break;
                }
                case '2': {
                    corList.rows[1].cells[2].innerText = '攻*0.5';
                    break;
                }
                case '3': {
                    corList.rows[1].cells[2].innerText = '攻*0.75';
                    break;
                }
                case '4': {
                    corList.rows[1].cells[2].innerText = '防*1.3';
                    break;
                }
                case '5': {
                    corList.rows[1].cells[2].innerText = '防*1.5';
                    break;
                }
                case '6': {
                    corList.rows[1].cells[2].innerText = 'D*2';
                    break;
                }
                case '7': {
                    corList.rows[1].cells[2].innerText = 'D*0.5';
                    break;
                }
                case '8': {
                    corList.rows[1].cells[2].innerText = 'D*0.75';
                    break;
                }
            }
            break;
        }
        case 'DefenseItem': {
            switch (cngnm) {
                case '0': {
                    corList.rows[1].cells[3].innerText = nhsp;
                    break;
                }
                case '1': {
                    corList.rows[1].cells[3].innerText = '防*1.5';
                    break;
                }
                case '2': {
                    corList.rows[1].cells[3].innerText = '防*2';
                    break;
                }
                case '3': {
                    corList.rows[1].cells[3].innerText = 'D*0.5';
                    break;
                }
            }
            break;
        }
    }

    
    var oth_f1 = getAbitm('ScaryFace');
    var oth_f2 = getAbitm('Weather');
    var oth_f3 = getAbitm('Reflect');
    var oth_f4 = getAbitm('Field');
    var oth_f6 = getAbitm('Burn');
    var oth_f7 = getAbitm('CriticalHit');
    var oth_f8 = getAbitm('KnockOff');
    var oth_f9 = getAbitm('Underground');
    var ot_txt = '';
    if (oth_f1 == '1') ot_txt = '砂';
    if (oth_f2 == '1') ot_txt = ot_txt != '' ? ot_txt + ' , 天気+' : '天気+';
    if (oth_f2 == '2') ot_txt = ot_txt != '' ? ot_txt + ' , 天気-' : '天気-';
    if (oth_f3 == '1') ot_txt = ot_txt != '' ? ot_txt + ' , 壁' : '壁';
    if (oth_f4 == '1') ot_txt = ot_txt != '' ? ot_txt + ' , FLD+' : 'FLD+';
    if (oth_f4 == '2') ot_txt = ot_txt != '' ? ot_txt + ' , FLD-' : 'FLD-';
    if (oth_f6 == '2') ot_txt = ot_txt != '' ? ot_txt + ' , 火' : '火';
    if (oth_f7 == '1') ot_txt = ot_txt != '' ? ot_txt + ' , 急所' : '急所';
    if (oth_f8 == '1') ot_txt = ot_txt != '' ? ot_txt + ' , 技威力+' : '技威力+';
    if (oth_f9 == '1') ot_txt = ot_txt != '' ? ot_txt + ' , 特殊被弾' : '特殊被弾';
    corList.rows[1].cells[4].innerText = ot_txt;
}
