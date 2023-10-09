
/**
 * ダメージ算出
 * @param {威力} pw_num 
 * @param {攻撃力} atk_num 
 * @param {ALv} atk_lvl 
 * @param {防御力} def_num 
 * @param {DLv} def_lvl 
 * @param {相性} eff_num 
 * @param {一致} sm_type 
 * @param {急所} cri_val 
 * @returns ダメージ幅テーブル
 */
function col_all_get(pw_num, atk_num, atk_lvl, def_num, def_lvl, eff_num, sm_type, cri_val) {
    /**
     * 参照 : https://latest.pokewiki.net/%E3%83%80%E3%83%A1%E3%83%BC%E3%82%B8%E8%A8%88%E7%AE%97%E5%BC%8F
     */

    // =============
    // 威力算出
    var pw = 0;
    
    // 【1】威力の補正値
    var col_1 = col_1_get();

    //【2】最終威力
    pw = fCfoD(pw_num * col_1);
    pw = pw < 1 ? 1 : pw;
    // =============
    
    // =============
    // 攻撃算出
    var atk = 0;
    var atk_up = atk_lvl > 0 ? atk_lvl : 0;
    var atk_down = atk_lvl < 0 && CriticalHit_val == "0" && cri_val == "0" ? atk_lvl : 0;

    //【3】攻撃の補正値
    var col_3 = col_3_get();

    //【4】最終攻撃
    atk = Math.floor(atk_num * ((2 + atk_up) / (2 - atk_down)));
    // if (はりきり補正条件) { atk = Math.floor(atk * init_val_1_50 / init_val); }
    atk = fCfoD(atk * col_3);
    atk = atk < 1 ? 1 : atk;
    // =============
    
    // =============
    // 防御算出
    var def = 0;
    var def_up = def_lvl > 0 && CriticalHit_val == "0" && cri_val == "0" ? def_lvl : 0;
    var def_down = def_lvl < 0 ? def_lvl : 0;

    //【5】防御の補正値
    var col_5 = col_5_get();

    //【6】最終防御
    def = Math.floor(def_num * ((2 + def_up) / (2 - def_down)));
    if (ScaryFace_val == '1') { def = Math.round(def * init_val_1_50 / init_val); } // すなあらし+いわタイプ等
    def = fCfoD(def * col_5);
    def = def < 1 ? 1 : def;
    // =============
    
    // =============
    // ダメージ算出
    var dm = 0;
    
    //【7】ダメージの補正値
    var col_7 = col_7_get(cri_val);

    //【8】最終ダメージ
    // 1 (攻撃側のレベル×2÷5+2→切り捨て×【2】最終威力×【4】最終攻撃÷【6】最終防御→切り捨て)
    dm = Math.floor(level_val * pw * atk / def);
    // 2 (÷50+2→切り捨て)
    dm = Math.floor(dm / 50 + 2);
    // 3 (×複数対象3072÷4096→五捨五超入)
    if (Double_flg) { dm = fCfoD(dm * init_val_0_75 / init_val); } // はれ+みず技等
    // 4 (×おやこあい(2発目)1024÷4096→五捨五超入)
    // 未設定
    // 5 (×天気弱化 2048÷4096→五捨五超入)
    if (Weather_val == '2') { dm = fCfoD(dm * init_val_0_50 / init_val); } // はれ+みず技等
    // 6 (×天気強化 6144÷4096→五捨五超入)
    if (Weather_val == '1') { dm = fCfoD(dm * init_val_1_50 / init_val); } // はれ+ほのお技等
    // 7 (×きょけんとつげき 8192÷4096→五捨五超入)
    // 未設定
    // 8 (×急所 6144÷4096→五捨五超入)
    if (cri_val == '1') { dm = fCfoD(dm * init_val_1_50 / init_val); } // あんこくきょうだ等
    // 9 (×乱数(0.85, 0.86, …… 0.99, 1.00 の何れか)→切り捨て)
    var ret_arr = [];
    var dstHead = document.getElementById('dstHead');
    for (var i = 0; i < 16; i++) {
        var rnd_num = Number(dstHead.rows[0].cells[i].innerHTML) / 100;
        var rnd_dm = Math.floor(dm * rnd_num);
        
        rnd_dm = fCfoD(rnd_dm * sm_type);
        // 11 (×タイプ相性→切り捨て)
        rnd_dm = Math.floor(rnd_dm * eff_num);
        // 12 (×やけど 2048÷4096→五捨五超入)
        if (Burn_val == '1') { rnd_dm = fCfoD(rnd_dm * init_val_0_50 / init_val); } // やけど
        // 13 (×【7】ダメージの補正値÷4096→五捨五超入)
        rnd_dm = fCfoD(rnd_dm * col_7);
        // 14 (×Z技まもる1024÷4096→五捨五超入)
        // 未設定
        // 15 (×ダイマックス技まもる1024÷4096→五捨五超入)
        // 未設定
        
        rnd_dm = rnd_dm < 1 ? 1 : rnd_dm;
        if (eff_num == 0) rnd_dm = 0;
        
        ret_arr.push(rnd_dm);
    }

    return ret_arr;
}


/**
 * 【1】威力の補正値
 * @returns 補正値（小数点以下ママ）
 */
function col_1_get() {
    //【1】威力の補正値
    var pw_1 = init_val;
    // 1 (オーラブレイク...)
    // 未設定
    // 2 (そうだいしょう(1体))
    if (AttackAbillity_val == '1') { pw_1 = Math.round(pw_1 * init_val_1_10 / init_val); } // そうだいしょう1体
    // 3 (エレキスキン...)
    if (AttackAbillity_val == '2') { pw_1 = Math.round(pw_1 * init_val_1_20 / init_val); } // そうだいしょう2体等
    // 4 (バッテリー...)
    if (AttackAbillity_val == '3') { pw_1 = Math.round(pw_1 * init_val_1_30 / init_val); } // ちからずく等
    // 5 (フェアリーオーラ...)
    // 未設定
    // 6 (そうだいしょう(4体))
    // 未設定
    // 7 (きれあじ...)
    if (AttackAbillity_val == '4') { pw_1 = Math.round(pw_1 * init_val_1_50 / init_val); } // テクニシャン等
    // 8 (かんそうはだ)
    if (DefenseAbillity_val == '1') { pw_1 = Math.round(pw_1 * init_val_1_25 / init_val); } // かんそうはだ
    // 9 (ちからのハチマキ...)
    if (AttackItem_val == '1') { pw_1 = Math.round(pw_1 * init_val_1_09 / init_val); } // ちからのハチマキ等
    // 10 (パンチグローブ)
    if (AttackItem_val == '2') { pw_1 = Math.round(pw_1 * init_val_1_10 / init_val); } // パンチグローブ
    // 11 (プレート、もくたん、おこう等...)
    if (AttackItem_val == '3') { pw_1 = Math.round(pw_1 * init_val_1_20 / init_val); } // 専用アイテム等
    // 12 (ノーマルジュエル)
    if (AttackItem_val == '4') { pw_1 = Math.round(pw_1 * init_val_1_30 / init_val); } // ノーマルジュエル
    // 13 (ソーラービーム+雨等...)
    // 未設定
    // 14 (さきどり...)
    if (KnockOff_val == '1') { pw_1 = Math.round(pw_1 * init_val_1_50 / init_val); } // はたきおとす等
    // 15 (じゅうでん...)
    if (KnockOff_val == '2') { pw_1 = Math.round(pw_1 * init_val_2_00 / init_val); } // かたきうち等
    // 16 (フィールド弱化)
    if (Field_val == '2') { pw_1 = Math.round(pw_1 * init_val_0_50 / init_val); } // ミストフィールド+ドラゴン技等
    // 17 (フィールド強化)
    if (Field_val == '1') { pw_1 = Math.round(pw_1 * init_val_1_30 / init_val); } // グラスフィールド+くさ技等
    // 18 (みずあそび...)
    // 未設定

    return pw_1 / init_val;
}

/**
 * 【3】攻撃の補正値
 * @returns 補正値（小数点以下ママ）
 */
function col_3_get() {
    //【3】攻撃の補正値
    var atl_3 = init_val;
    // 1 (スロースタート...)
    // 未設定
    // 2 (わざわいのうつわ...)
    if (DefenseAbillity_val == '3') { atl_3 = Math.round(atl_3 * init_val_0_75 / init_val); } // わざわいのうつわ等
    // 3 (クォークチャージ...)
    if (AttackAbillity_val == '5') { atl_3 = Math.round(atl_3 * init_val_1_30 / init_val); } // こだいかっせい等
    // 4 (ハドロンエンジン...)
    // 未設定
    // 5 (フラワーギフト...)
    if (AttackAbillity_val == '6') { atl_3 = Math.round(atl_3 * init_val_1_50 / init_val); } // こんじょう等
    // 6 (ちからもち...)
    if (AttackAbillity_val == '7') { atl_3 = Math.round(atl_3 * init_val_2_00 / init_val); } // ちからもち等
    // 7 (あついしぼう...)
    if (DefenseAbillity_val == '2') { atl_3 = Math.round(atl_3 * init_val_0_50 / init_val); } // あついしぼう等
    // 8 (こだわりハチマキ...)
    if (AttackItem_val == '5') { atl_3 = Math.round(atl_3 * init_val_1_50 / init_val); } // こだわりのハチマキ等
    // 9 (ふといホネ...)
    if (AttackItem_val == '6') { atl_3 = Math.round(atl_3 * init_val_2_00 / init_val); } // ふといホネ等

    return atl_3 / init_val;
}

/**
 * 【5】防御の補正値
 * @returns 補正値（小数点以下ママ）
 */
function col_5_get() {
    var def_5 = init_val;
    // 1 (わざわいのたま...)
    if (AttackAbillity_val == '8') { def_5 = Math.round(def_5 * init_val_0_75 / init_val); } // わざわいのたま等
    // 2 (クォークチャージ...)
    if (DefenseAbillity_val == '4') { def_5 = Math.round(def_5 * init_val_1_30 / init_val); } // こだいかっせい等
    // 3 (フラワーギフト...)
    if (DefenseAbillity_val == '5') { def_5 = Math.round(def_5 * init_val_1_50 / init_val); } // ふしぎなうろこ等
    // 4 (ファーコート)
    // 未設定
    // 5 (しんかのきせき...)
    if (DefenseItem_val == '1') { def_5 = Math.round(def_5 * init_val_1_50 / init_val); } // しんかのきせき等
    // 6 (しんかいのウロコ...)
    if (DefenseItem_val == '2') { def_5 = Math.round(def_5 * init_val_2_00 / init_val); } // メタルパウダー

    return def_5 / init_val;
}

/**
 * 【7】ダメージの補正値
 * @returns 補正値（小数点以下ママ）
 */
function col_7_get(cri_val) {
    //【7】ダメージの補正値 todo
    var dm_7 = init_val;
    // 1 (リフレクター...)
    if (Reflect_val == '1' && CriticalHit_val == "0" && cri_val == "0") { dm_7 = Math.round(dm_7 * init_val_0_50 / init_val); } // 壁
    if (Reflect_val == '2' && CriticalHit_val == "0" && cri_val == "0") { dm_7 = Math.round(dm_7 * init_val_0_66 / init_val); } // 壁(複)
    // 2 (ブレインフォース)
    // 未設定
    // 3 (アクセルブレイク...)
    // 未設定
    // 4 (スナイパー)
    if (AttackAbillity_val == '9') { dm_7 = Math.round(dm_7 * init_val_1_50 / init_val); } // スナイパー
    // 5 (いろめがね...)
    if (AttackAbillity_val == '10') { dm_7 = Math.round(dm_7 * init_val_2_00 / init_val); } // いろめがね
    if (DefenseAbillity_val == '6') { dm_7 = Math.round(dm_7 * init_val_2_00 / init_val); } // もふもふ+ほのおタイプ技
    // 6 (マルチスケイル...)
    if (DefenseAbillity_val == '7') { dm_7 = Math.round(dm_7 * init_val_0_50 / init_val); } // マルチスケイル等
    // 7 (フレンドガード...)
    if (DefenseAbillity_val == '8') { dm_7 = Math.round(dm_7 * init_val_0_75 / init_val); } // ハードロック等
    // 8 メトロノームは一旦無視
    // 9 (たつじんのおび)
    if (AttackItem_val == '7') { dm_7 = Math.round(dm_7 * init_val_1_20 / init_val); } // たつじんのおび
    // 10 (いのちのたま)
    if (AttackItem_val == '8') { dm_7 = Math.round(dm_7 * init_val_1_29 / init_val); } // いのちのたま
    // 11 (半減きのみ)
    if (DefenseItem_val == '3') { dm_7 = Math.round(dm_7 * init_val_0_50 / init_val); } // 半減きのみ
    // 12 (ふみつけ+ちいさくなる...)
    if (Underground_val == '1') { dm_7 = Math.round(dm_7 * init_val_2_00 / init_val); } // じしん+あなをほる等

    return dm_7 / init_val;
}

/**
 * 保持する補正値取得
 * @returns 補正値
 */
function getOthVal() {
    var ret_val = AttackAbillity_val != 0 ? 'AttackAbillity:' + AttackAbillity_val : '';
    if (AttackItem_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'AttackItem:' + AttackItem_val : ret_val + 'AttackItem:' + AttackItem_val;
    if (DefenseAbillity_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'DefenseAbillity:' + DefenseAbillity_val : ret_val + 'DefenseAbillity:' + DefenseAbillity_val;
    if (DefenseItem_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'DefenseItem:' + DefenseItem_val : ret_val + 'DefenseItem:' + DefenseItem_val;
    if (ScaryFace_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'ScaryFace:' + ScaryFace_val : ret_val + 'ScaryFace:' + ScaryFace_val;
    if (Weather_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'Weather:' + Weather_val : ret_val + 'Weather:' + Weather_val;
    if (Reflect_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'Reflect:' + Reflect_val : ret_val + 'Reflect:' + Reflect_val;
    if (Field_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'Field:' + Field_val : ret_val + 'Field:' + Field_val;
    if (Burn_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'Burn:' + Burn_val : ret_val + 'Burn:' + Burn_val;
    if (CriticalHit_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'CriticalHit:' + CriticalHit_val : ret_val + 'CriticalHit:' + CriticalHit_val;
    if (KnockOff_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'KnockOff:' + KnockOff_val : ret_val + 'KnockOff:' + KnockOff_val;
    if (Underground_val != 0) ret_val = ret_val != '' ? ret_val + ',' + 'Underground:' + Underground_val : ret_val + 'Underground:' + Underground_val;

    if (ret_val == '') ret_val = 'notselect';
    return ret_val;
}

/**
 * 撃破数取得
 * @param {ダメージ幅テーブル} arr 
 * @param {入力HP} hp 
 * @returns 撃破数テーブル[確定 , 乱数]
 */
function getRndCnt( arr, hp ) {
    var ret_arr = [];
    var rnd_cnt = Math.ceil(hp / Number(arr[15]));
    ret_arr.push(Math.ceil(hp / Number(arr[0])));
    var rep_cnt = arr.length ** rnd_cnt;
    var ko_cnt = 0;

    if (rnd_cnt < 6) {
        for (var i = 0; i < rep_cnt; i++) {
            var dm = 0;
            for (var c = 0; c < rnd_cnt; c++) {
                dm = dm + Number(arr[Math.floor(i / (arr.length ** c)) % arr.length]);
            }
            if (dm >= hp) ko_cnt++;
        }
        var per = Math.round(ko_cnt / rep_cnt * 10000) / 100;
        if (per == 0) per = 0.01;
        if (per == 100 && rnd_cnt != ret_arr[0]) per = 99.99;
        ret_arr.push(rnd_cnt + ' ( ' + per + '% )');
    } else {
        ret_arr.push(rnd_cnt);
    }
    
    return ret_arr;
}
