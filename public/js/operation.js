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

function calculation() {
    // =============
    // 威力算出
    var pw = 0;
    var pw_num = !Power.value ? 0 : Number(Power.value);
    //【1】威力の補正値 todo
    var pw_1 = init_val;
    //【2】最終威力
    pw = Math.round(Math.ceil(pw_num * pw_1 / init_val * 10) / 10);
    pw = pw < 1 ? 1 : pw;
    // =============
    
    // =============
    // 攻撃算出
    var atk = 0;
    var atk_num = !Attack.value ? 0 : Number(Attack.value);
    var atk_lvl = !AttackLevel.value ? 0 : Number(AttackLevel.value);
    var atk_up = atk_lvl > 0 ? atk_lvl : 0;
    var atk_down = atk_lvl < 0 ? atk_lvl : 0;
    //【3】攻撃の補正値 todo
    var atl_3 = init_val;
    //【4】最終攻撃
    atk = Math.floor(atk_num * ((2 + atk_up) / (2 - atk_down)));
    // if (はりきり補正条件) { atk = Math.floor(atk * init_val_1_50 / init_val); }
    atk = Math.round(Math.ceil(atk * atl_3 / init_val * 10) / 10);
    atk = atk < 1 ? 1 : atk;
    // =============
    
    // =============
    // 防御算出
    var def = 0;
    var def_num = !Defense.value ? 0 : Number(Defense.value);
    var def_lvl = !DefenseLevel.value ? 0 : Number(DefenseLevel.value);
    var def_up = def_lvl > 0 ? def_lvl : 0;
    var def_down = def_lvl < 0 ? def_lvl : 0;
    //【5】防御の補正値 todo
    var def_5 = init_val;
    //【6】最終防御
    def = Math.floor(def_num * ((2 + def_up) / (2 - def_down)));
    // if (天候補生条件) { def = Math.floor(def * init_val_1_50 / init_val); }
    def = Math.round(Math.ceil(def * def_5 / init_val * 10) / 10);
    def = def < 1 ? 1 : def;
    // =============
    
    // =============
    // ダメージ算出
    var dm = 0;
    var eff_num = !Effective.value ? 1 : Number(Effective.value);
    //【7】ダメージの補正値 todo
    var dm_7 = init_val;
    //【8】最終ダメージ
    dm = Math.floor(level_val * pw * atk / def);
    dm = Math.floor(dm / 50 + 2);
    // if (複数対象補正) { dm = Math.round(Math.ceil(dm * init_val_0_75 / init_val * 10) / 10); }
    // if (天候弱化補正) { dm = Math.round(Math.ceil(dm * init_val_0_50 / init_val * 10) / 10); }
    // if (天候強化補正) { dm = Math.round(Math.ceil(dm * init_val_1_50 / init_val * 10) / 10); }
    // if (急所補正) { dm = Math.round(Math.ceil(dm * init_val_1_50 / init_val * 10) / 10); }

    var dstList = document.getElementById('dstList');
    for (var i = 0, colLen = dstList.rows[0].cells.length; i < colLen; i++) {
        var rnd_num = Number(dstList.rows[0].cells[i].innerHTML) / 100;
        var rnd_dm = Math.floor(dm * rnd_num);
        // if (タイプ一致orテラスタイプ補正) { 
        //     if (てきおうりょく補正) { rnd_dm = Math.round(Math.ceil(rnd_dm * init_val_2_00 / init_val * 10) / 10); }
        //     else { rnd_dm = Math.round(Math.ceil(rnd_dm * init_val_1_50 / init_val * 10) / 10); }
        // } else if (タイプ一致+テラスタイプ補正) { 
        //     if (てきおうりょく補正) { rnd_dm = Math.round(Math.ceil(rnd_dm * init_val_2_25 / init_val * 10) / 10); }
        //     else { rnd_dm = Math.round(Math.ceil(rnd_dm * init_val_2_00 / init_val * 10) / 10);  }
        // } 
        rnd_dm = Math.floor(rnd_dm * eff_num);
        // if (やけど補正) { dm = Math.round(Math.ceil(dm * init_val_0_50 / init_val * 10) / 10); }
        rnd_dm = Math.round(Math.ceil(rnd_dm * dm_7 / init_val * 10) / 10);
        rnd_dm = rnd_dm < 1 ? 1 : rnd_dm;
        
        dstList.rows[1].cells[i].innerText = rnd_dm;
    }
}