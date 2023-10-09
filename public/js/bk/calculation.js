function calculation(save_flg = "") {
    // =============
    // 特性・道具取得
    // =============
    setHst();
    var pw_num = !Power.value ? 1 : Number(Power.value);
    var atk_num = !Attack.value ? 1 : Number(Attack.value);
    var atk_lvl = !AttackLevel.value ? 0 : Number(AttackLevel.value);
    var def_num = !Defense.value ? 1 : Number(Defense.value);
    var def_lvl = !DefenseLevel.value ? 0 : Number(DefenseLevel.value);
    var eff_num = !Effective.value ? 1 : Number(Effective.value);
    var sm_type = !SameType.value ? 1 : Number(SameType.value);
    var dm_arr = col_all_get(
        pw_num,
        atk_num,
        atk_lvl,
        def_num,
        def_lvl,
        eff_num,
        sm_type,
        CriticalHit_val
    );
    var dstList = document.getElementById('dstList');
    for (var i = 0, colLen = dstList.rows[0].cells.length; i < colLen; i++) {
        dstList.rows[1].cells[i].innerText = dm_arr[i];
    }
    var back_dm = String(hstList.rows[1].cells[6].innerText).trim() != "" ? String(hstList.rows[1].cells[6].innerText).split(' ～ ') : [0, 0];
    var total_dm_fst = Number(back_dm[0]) + dm_arr[0];
    var total_dm_lst = Number(back_dm[1]) + dm_arr[colLen - 1];

    var dm_arr_cri = col_all_get(
        pw_num,
        atk_num,
        atk_lvl,
        def_num,
        def_lvl,
        eff_num,
        sm_type,
        '1'
    );
    
    var dstOtList = document.getElementById('dstOtList_1');
    dstOtList.rows[1].cells[0].innerText = String(dm_arr_cri[0]) + ' ～ ' + String(dm_arr_cri[colLen - 1]);      // 急所
    dstOtList.rows[1].cells[1].innerText = String(total_dm_fst) + ' ～ ' + String(total_dm_lst);      // 前回との合算

    // 確定・乱数回数
    dstOtList = document.getElementById('dstOtList_2');
    if (!HitPoint.value) {
        dstOtList.rows[1].cells[0].innerText = '-';
        dstOtList.rows[1].cells[1].innerText = '-';
        dstOtList.rows[1].cells[2].innerText = '-';
    } else {
        var dm_arr_rc = getRndCnt(dm_arr, Number(HitPoint.value));
        dstOtList.rows[1].cells[0].innerText = HitPoint.value;
        dstOtList.rows[1].cells[1].innerText = dm_arr_rc[0];
        dstOtList.rows[1].cells[2].innerText = dm_arr_rc[1];
    }

    // 攻撃力・防御力周回値
    var rng_setArr_atk = [
        [0, '', 0],
        [0, '', 0],
        [atk_num, String(dm_arr[0]) + ' ～ ' + String(dm_arr[colLen - 1]), atk_num],
        [0, '', 0],
        [0, '', 0]
    ];
    for (var atk_rng = atk_num - 1, rng_cnt = 2; atk_rng > 0; atk_rng--) {
        var dm_rng = col_all_get(pw_num,atk_rng,atk_lvl,def_num,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_atk[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_atk[rng_cnt][0] = atk_rng;
        } else {
            rng_cnt--;
            if (rng_cnt < 0) break;
            rng_setArr_atk[rng_cnt][0] = atk_rng;
            rng_setArr_atk[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_atk[rng_cnt][2] = atk_rng;
        }
    }
    for (var atk_rng = atk_num + 1, rng_cnt = 2; rng_cnt < 5; atk_rng++) {
        var dm_rng = col_all_get(pw_num,atk_rng,atk_lvl,def_num,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_atk[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_atk[rng_cnt][2] = atk_rng;
        } else {
            rng_cnt++;
            if (rng_cnt > 4) break;
            rng_setArr_atk[rng_cnt][0] = atk_rng;
            rng_setArr_atk[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_atk[rng_cnt][2] = atk_rng;
        }
    }
    var rng_setArr_def = [
        [0, '', 0],
        [0, '', 0],
        [def_num, String(dm_arr[0]) + ' ～ ' + String(dm_arr[colLen - 1]), def_num],
        [0, '', 0],
        [0, '', 0]
    ];
    for (var def_rng = def_num - 1, rng_cnt = 2; def_rng > 0; def_rng--) {
        var dm_rng = col_all_get(pw_num,atk_num,atk_lvl,def_rng,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_def[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_def[rng_cnt][0] = def_rng;
        } else {
            rng_cnt--;
            if (rng_cnt < 0) break;
            rng_setArr_def[rng_cnt][0] = def_rng;
            rng_setArr_def[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_def[rng_cnt][2] = def_rng;
        }
    }
    for (var def_rng = def_num + 1, rng_cnt = 2; rng_cnt < 5; def_rng++) {
        var dm_rng = col_all_get(pw_num,atk_num,atk_lvl,def_rng,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_def[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_def[rng_cnt][2] = def_rng;
        } else {
            rng_cnt++;
            if (rng_cnt > 4) break;
            rng_setArr_def[rng_cnt][0] = def_rng;
            rng_setArr_def[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_def[rng_cnt][2] = def_rng;
        }
    }

    dstOtList = document.getElementById('dstPerList');
    for (i = 1; i < 6; i++) {
        dstOtList.rows[i].cells[0].innerText = rng_setArr_atk[i-1][0] + ' ～ ' + rng_setArr_atk[i-1][2] + ' ( ' + rng_setArr_atk[i-1][1] + ' )';
        dstOtList.rows[i].cells[1].innerText = rng_setArr_def[i-1][0] + ' ～ ' + rng_setArr_def[i-1][2] + ' ( ' + rng_setArr_def[i-1][1] + ' )';
    }
    dstOtList.rows[3].setAttribute("style","background-color: "+sel_bk_col+";");

    // 履歴テーブル
    var hstTbl = document.getElementById('hstTbl');
    var ot_txt = '';
    var ot_val = getOthVal();
    var col_1 = col_1_get();
    var col_3 = col_3_get();
    var col_5 = col_5_get();
    var col_7 = col_7_get();
    if (col_1 != 1) ot_txt = '威*' + String(RndOf_2(col_1));
    if (col_3 != 1) ot_txt = ot_txt != '' ? ot_txt + ',' + '攻*' + String(RndOf_2(col_3)) : '攻*' + String(RndOf_2(col_3));
    if (col_5 != 1) ot_txt = ot_txt != '' ? ot_txt + ',' + '防*' + String(RndOf_2(col_5)) : '防*' + String(RndOf_2(col_5));
    if (col_7 != 1) ot_txt = ot_txt != '' ? ot_txt + ',' + 'D*' + String(RndOf_2(col_7)) : 'D*' + String(RndOf_2(col_7));
    if (atk_lvl > 0) ot_txt = ot_txt != '' ? ot_txt + ',' + 'A+' + String(RndOf_2(atk_lvl)) : 'A+' + String(RndOf_2(atk_lvl));
    if (atk_lvl < 0) ot_txt = ot_txt != '' ? ot_txt + ',' + 'A' + String(RndOf_2(atk_lvl)) : 'A' + String(RndOf_2(atk_lvl));
    if (def_lvl > 0) ot_txt = ot_txt != '' ? ot_txt + ',' + 'D+' + String(RndOf_2(def_lvl)) : 'D+' + String(RndOf_2(def_lvl));
    if (def_lvl < 0) ot_txt = ot_txt != '' ? ot_txt + ',' + 'D' + String(RndOf_2(def_lvl)) : 'D' + String(RndOf_2(def_lvl));
    if (ScaryFace_val == '1') ot_txt = ot_txt != '' ? ot_txt + ',砂' : '砂';
    if (Weather_val == '1') ot_txt = ot_txt != '' ? ot_txt + ',天気+' : '天気+';
    if (Weather_val == '2') ot_txt = ot_txt != '' ? ot_txt + ',天気-' : '天気-';
    if (Burn_val == '2') ot_txt = ot_txt != '' ? ot_txt + ',火' : '火';
    if (CriticalHit_val == '1') ot_txt = ot_txt != '' ? ot_txt + ',急所' : '急所';

    for (i = hstTbl.tBodies[0].rows.length - 1; i > 1; i--) {
        if (String(hstTbl.tBodies[0].rows[i - 1].cells[0].innerText).trim() != "") {
            hstTbl.tBodies[0].rows[i].setAttribute("onmouseover","this.style.backgroundColor='"+sel_bk_col+"';hstSelect(" + i + ")");
            hstTbl.tBodies[0].rows[i].setAttribute("onmouseout","this.style.backgroundColor='';hstSelect(1)");
            hstTbl.tBodies[0].rows[i].setAttribute("onclick","this.style.backgroundColor='"+sel_bk_col+"';hstClick(" + i + ")");
            hstTbl.tBodies[0].rows[i].cells[0].innerText = hstTbl.tBodies[0].rows[i - 1].cells[0].innerText;
            hstTbl.tBodies[0].rows[i].cells[1].innerText = hstTbl.tBodies[0].rows[i - 1].cells[1].innerText;
            hstTbl.tBodies[0].rows[i].cells[2].innerText = hstTbl.tBodies[0].rows[i - 1].cells[2].innerText;
            hstTbl.tBodies[0].rows[i].cells[3].innerText = hstTbl.tBodies[0].rows[i - 1].cells[3].innerText;
            hstTbl.tBodies[0].rows[i].cells[4].innerText = hstTbl.tBodies[0].rows[i - 1].cells[4].innerText;
            hstTbl.tBodies[0].rows[i].cells[5].innerText = hstTbl.tBodies[0].rows[i - 1].cells[5].innerText;
            hstTbl.tBodies[0].rows[i].cells[5].setAttribute("value", hstTbl.tBodies[0].rows[i - 1].cells[5].getAttribute("value"));
            hstTbl.tBodies[0].rows[i].cells[6].innerText = hstTbl.tBodies[0].rows[i - 1].cells[6].innerText;
        }
    }
    hstTbl.tBodies[0].rows[i].setAttribute("onmouseover","this.style.backgroundColor='"+sel_bk_col+"';");
    hstTbl.tBodies[0].rows[i].setAttribute("onmouseout","this.style.backgroundColor='';");
    hstTbl.tBodies[0].rows[i].setAttribute("onclick","this.style.backgroundColor='"+sel_bk_col+"';hstClick(1)");
    hstTbl.tBodies[0].rows[i].cells[0].innerText = pw_num;
    hstTbl.tBodies[0].rows[i].cells[1].innerText = atk_num;
    hstTbl.tBodies[0].rows[i].cells[2].innerText = def_num;
    hstTbl.tBodies[0].rows[i].cells[3].innerText = sm_type;
    hstTbl.tBodies[0].rows[i].cells[4].innerText = eff_num;
    hstTbl.tBodies[0].rows[i].cells[5].setAttribute("value", ot_val);
    hstTbl.tBodies[0].rows[i].cells[5].innerText = ot_txt;
    hstTbl.tBodies[0].rows[i].cells[6].innerText = String(dstList.rows[1].cells[0].innerText) + ' ～ ' + String(dstList.rows[1].cells[colLen - 1].innerText);

    if (save_flg == "") {
        Power.value = "";
        Attack.value = "";
        Defense.value = "";
        SameType.value = "";
        Effective.value = "";
        AttackLevel.value = "";
        DefenseLevel.value = "";
        
        corReset();
    }
    
    document.getElementById("Power").focus();
    
    if (document.getElementById("sel_1").style.display == "none" ||
        document.getElementById("sel_2").style.display == "none") {
        document.getElementById("sel_1").style.display = "none";
        document.getElementById("sel_2").style.display = "";
        document.getElementById("cng_btn").innerText = "数値入力";
    } 
}

function addition() {
    var dstList = document.getElementById('dstList');

    for (var i = 0; i < 8; i++) {
        if (String(document.getElementById('no_' + String(i+1)).innerText).trim() == "") {
            document.getElementById('no_' + String(i+1)).innerText = dstList.rows[1].cells[0].innerText + ' ～ ' + dstList.rows[1].cells[15].innerText;
            break;
        }
    }

    var dm_all = [];
    for (i = 0; i < dstList.rows[1].cells.length; i++) {
        if (dm_all.some(item => item.ad === Number(dstList.rows[1].cells[i].innerText))) {
            dm_all[dm_all.findIndex(item => item.ad === Number(dstList.rows[1].cells[i].innerText))]['cnt']++;
        } else {
            dm_all.push({ad: Number(dstList.rows[1].cells[i].innerText), cnt: 1});
        }
    }
    
    var add_tbl_back = add_tbl;
    add_tbl = [];
    var al_cnt = 0;
    if (add_tbl_back.length === 0) {
        for (var i = 0; i < dm_all.length; i++) {
            al_cnt += dm_all[i]['cnt'];
            add_tbl.push({ad: dm_all[i]['ad'], cnt: dm_all[i]['cnt']});
        }
    } else {
        for (var i = 0; i < dm_all.length; i++) {
            for (var c = 0; c < add_tbl_back.length; c++) {
                var dm = dm_all[i]['ad'] + add_tbl_back[c]['ad'];
                var ad_cnt = dm_all[i]['cnt'] * add_tbl_back[c]['cnt'];
                al_cnt += ad_cnt;
            
                if (add_tbl.some(item => item.ad == dm)) {
                    add_tbl[add_tbl.findIndex(item => item.ad === dm)]['cnt'] += ad_cnt;
                } else {
                    add_tbl.push({ad: dm, cnt: ad_cnt});
                }
            }
        }
    }

    add_tbl.sort(asc_o); 

    var addList_2 = document.getElementById('addList_2');
    var numer = 0;
    for (i = 0; i < 80; i++) {
        if (i >= add_tbl.length) break;
        addList_2.rows[i % 20 + 1].cells[(Math.floor(i / 20))].innerText = 
            add_tbl[i]['ad'] + '(' + 
            String(Math.floor(add_tbl[i]['cnt'] / al_cnt * 10000) / 100) + '%/' + 
            String(Math.floor((al_cnt - numer) / al_cnt * 10000) / 100) + '%)';
        
        if (!HitPoint.value) {
            addList_2.rows[i % 20 + 1].cells[(Math.floor(i / 20))].style.backgroundColor = '';
        } else {
            if (Number(HitPoint.value) <= add_tbl[i]['ad']) { addList_2.rows[i % 20 + 1].cells[(Math.floor(i / 20))].style.backgroundColor = sel_bk_col; }
            else { addList_2.rows[i % 20 + 1].cells[(Math.floor(i / 20))].style.backgroundColor = ''; } 
        }
        numer = numer + add_tbl[i]['cnt'];
    }

    document.getElementById('addList').open = true;

    if (document.getElementById("sel_1").style.display == "none" ||
        document.getElementById("sel_2").style.display == "none") {
        document.getElementById("sel_1").style.display = "none";
        document.getElementById("sel_2").style.display = "";
        document.getElementById("cng_btn").innerText = "数値入力";
    } 
}

function adddel( flg ) {
    if (flg == 0) {
        for (var i = 0; i < 8; i++) {
            document.getElementById('no_' + String(i+1)).innerText = ' ';
        }
        for (i = 0; i < 80; i++) {
            document.getElementById('addList_2').rows[i % 20 + 1].cells[(Math.floor(i / 20))].innerText = ' ';
            document.getElementById('addList_2').rows[i % 20 + 1].cells[(Math.floor(i / 20))].style.backgroundColor = '';
        }

        document.getElementById('addList').open =false;
        add_tbl = [];
    } else {
        if (document.getElementById('addList').open) {
            document.getElementById('addList').open =false;
        } else {
            document.getElementById('addList').open = true;
        }
    }
}

function hstSelect( tbl_num ) {
    var oth = String(hstTbl.tBodies[0].rows[tbl_num].cells[5].innerText);
    setHst(hstTbl.tBodies[0].rows[tbl_num].cells[5].getAttribute("value"));
    var pw_num = Number(hstTbl.tBodies[0].rows[tbl_num].cells[0].innerText);
    var atk_num = Number(hstTbl.tBodies[0].rows[tbl_num].cells[1].innerText);
    var def_num = Number(hstTbl.tBodies[0].rows[tbl_num].cells[2].innerText);
    var eff_num = Number(hstTbl.tBodies[0].rows[tbl_num].cells[4].innerText);
    var sm_type = Number(hstTbl.tBodies[0].rows[tbl_num].cells[3].innerText);
    var atk_lvl = get_col(oth, 'A+', 0);
    if (atk_lvl == 0) atk_lvl = 0 - get_col(oth, 'A-', 0);
    var def_lvl = get_col(oth, 'D+', 0);
    if (def_lvl == 0) def_lvl = 0 - get_col(oth, 'D-', 0);
    var dm_arr = col_all_get(
        pw_num,
        atk_num,
        atk_lvl,
        def_num,
        def_lvl,
        eff_num,
        sm_type,
        CriticalHit_val
    )
    var dstList = document.getElementById('dstList');
    for (var i = 0, colLen = dstList.rows[0].cells.length; i < colLen; i++) {
        dstList.rows[1].cells[i].innerText = dm_arr[i];
    }

    var rng_setArr_atk = [
        [0, '', 0],
        [0, '', 0],
        [atk_num, String(dm_arr[0]) + ' ～ ' + String(dm_arr[colLen - 1]), atk_num],
        [0, '', 0],
        [0, '', 0]
    ];
    for (var atk_rng = atk_num - 1, rng_cnt = 2; atk_rng > 0; atk_rng--) {
        var dm_rng = col_all_get(pw_num,atk_rng,atk_lvl,def_num,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_atk[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_atk[rng_cnt][0] = atk_rng;
        } else {
            rng_cnt--;
            if (rng_cnt < 0) break;
            rng_setArr_atk[rng_cnt][0] = atk_rng;
            rng_setArr_atk[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_atk[rng_cnt][2] = atk_rng;
        }
    }
    for (var atk_rng = atk_num + 1, rng_cnt = 2; rng_cnt < 5; atk_rng++) {
        var dm_rng = col_all_get(pw_num,atk_rng,atk_lvl,def_num,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_atk[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_atk[rng_cnt][2] = atk_rng;
        } else {
            rng_cnt++;
            if (rng_cnt > 4) break;
            rng_setArr_atk[rng_cnt][0] = atk_rng;
            rng_setArr_atk[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_atk[rng_cnt][2] = atk_rng;
        }
    }
    var rng_setArr_def = [
        [0, '', 0],
        [0, '', 0],
        [def_num, String(dm_arr[0]) + ' ～ ' + String(dm_arr[colLen - 1]), def_num],
        [0, '', 0],
        [0, '', 0]
    ];
    for (var def_rng = def_num - 1, rng_cnt = 2; def_rng > 0; def_rng--) {
        var dm_rng = col_all_get(pw_num,atk_num,atk_lvl,def_rng,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_def[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_def[rng_cnt][0] = def_rng;
        } else {
            rng_cnt--;
            if (rng_cnt < 0) break;
            rng_setArr_def[rng_cnt][0] = def_rng;
            rng_setArr_def[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_def[rng_cnt][2] = def_rng;
        }
    }
    for (var def_rng = def_num + 1, rng_cnt = 2; rng_cnt < 5; def_rng++) {
        var dm_rng = col_all_get(pw_num,atk_num,atk_lvl,def_rng,def_lvl,eff_num,sm_type,CriticalHit_val);

        if (rng_setArr_def[rng_cnt][1] == String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1])) {
            rng_setArr_def[rng_cnt][2] = def_rng;
        } else {
            rng_cnt++;
            if (rng_cnt > 4) break;
            rng_setArr_def[rng_cnt][0] = def_rng;
            rng_setArr_def[rng_cnt][1] = String(dm_rng[0]) + ' ～ ' + String(dm_rng[colLen - 1]);
            rng_setArr_def[rng_cnt][2] = def_rng;
        }
    }

    dstOtList = document.getElementById('dstPerList');
    for (i = 1; i < 6; i++) {
        dstOtList.rows[i].cells[0].innerText = rng_setArr_atk[i-1][0] + ' ～ ' + rng_setArr_atk[i-1][2] + ' ( ' + rng_setArr_atk[i-1][1] + ' )';
        dstOtList.rows[i].cells[1].innerText = rng_setArr_def[i-1][0] + ' ～ ' + rng_setArr_def[i-1][2] + ' ( ' + rng_setArr_def[i-1][1] + ' )';
    }
    dstOtList.rows[3].setAttribute("style","background-color: "+sel_bk_col+";");
}

function hstClick( tbl_num ) {
    // =============
    // 情報取得
    // =============
    // 履歴テーブル
    var hstTbl = document.getElementById('hstTbl');
    Power.value = String(hstTbl.tBodies[0].rows[tbl_num].cells[0].innerText);
    Attack.value = String(hstTbl.tBodies[0].rows[tbl_num].cells[1].innerText);
    Defense.value = String(hstTbl.tBodies[0].rows[tbl_num].cells[2].innerText);
    SameType.value = String(hstTbl.tBodies[0].rows[tbl_num].cells[3].innerText);
    Effective.value = String(hstTbl.tBodies[0].rows[tbl_num].cells[4].innerText);
    var oth = String(hstTbl.tBodies[0].rows[tbl_num].cells[5].innerText);
    var atk = get_col(oth, 'A+', 0) - get_col(oth, 'A-', 0);
    var def = get_col(oth, 'D+', 0) - get_col(oth, 'D-', 0);
    AttackLevel.value = atk != 0 ? String(atk) : '';
    DefenseLevel.value = def != 0 ? String(def) : '';

    corReset();
    var setArrTbl = String(hstTbl.tBodies[0].rows[tbl_num].cells[5].getAttribute("value")).split(',');
    if (setArrTbl != 'notselect') { 
        for (var i = "0"; i < setArrTbl.length; i++) {
            var setArrItem = setArrTbl[i].split(':');
            var elements = document.getElementsByName(setArrItem[0]);
            var hst_val = Number(setArrItem[1]);
        
            elements.item(hst_val).checked = true;
        
            cngColor(setArrItem[0], hst_val);
        }
    }
}

function get_col( list, chk_str, ret_num = 1 ) {
    var arr = list.split(',');

    for (var i = 0, col = arr.length; i < col; i++) {
        if (String(arr[i]).indexOf(chk_str) >= 0) return Number(String(arr[i]).replace(chk_str, ''));
    }

    return ret_num;
}

function get_oth( list, chk_str ) {
    var arr = list.split(',');

    for (var i = 0, col = arr.length; i < col; i++) {
        if (String(arr[i]) == chk_str) return true;
    }
    
    return false;
}

function tabCng() {
    if (document.getElementById("sel_2").style.display == "none") {
        document.getElementById("sel_1").style.display = "none";
        document.getElementById("sel_2").style.display = "";
        document.getElementById("cng_btn").innerText = "数値入力";
    } else {
        document.getElementById("sel_1").style.display = "";
        document.getElementById("sel_2").style.display = "none";
        document.getElementById("cng_btn").innerText = "ダメージ確認";
    }
}

/**
 * 五捨五超入
 * @param {*} num 
 * @returns 五捨五超入結果
 */
function fCfoD( num ) {
    var flr_int = Math.floor(num);
    var chk_num = num - flr_int;

    if (chk_num > 0.5) {
        return Math.ceil(num);
    } else {
        return flr_int;
    }
}

/**
 * 2桁四捨五入
 * @param {*} num 
 * @returns 2桁四捨五入結果
 */
function RndOf_2( num ) {
    num = num * 100;
    num = Math.round(num);
    num = num / 100;

    return num;
}