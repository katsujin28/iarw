<!DOCTYPE html>

<head>

<title>理にかなったダメージ計算</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta charset="UTF-8">
<script type="text/javascript" src="/js/shortcut.js"></script>
<script type="text/javascript" src="/js/constant.js"></script>
<script type="text/javascript" src="/js/operation.js"></script>
<script type="text/javascript" src="/js/calculation.js"></script>
<script type="text/javascript" src="/js/correction.js"></script>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/main_desk.css">
<link rel="stylesheet" type="text/css" href="/css/main_smp.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<div class="scr_iso">
    <header>
        <div class="scr_iso_top">理にかなったダメージ計算ツール<font style="font-size: 0.5rem; margin: 0; padding: 0;">※アイコンとかロゴとか入れます</font></div>
    </header>
    <div class="scr_iso_list scr_iso_left">
        
        <div>
            <div>
                <div style="border-top: 1px solid var(--dark); margin-right: 0px;">
                    <div class="cor_tbl_l_h"><b>特性(攻撃側)</b></div>
                    <div class="cor_tbl_l_b">[威力] ×0.75</div>
                    <div class="cor_tbl_l_i">
                        とうそうしん弱化
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_1_b">[威力] ×1.1</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_1_i">
                        そうだいしょう(1体)
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_2_b">[威力] ×1.2</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_2_i">
                        そうだいしょう(2体)<br>
                        エレキスキン<br>
                        フェアリースキン<br>
                        てつのこぶし<br>
                        すてみ
                    </div>
                    <div class="cor_tbl_l_b">[威力] ×1.25</div>
                    <div class="cor_tbl_l_i">
                        とうそうしん強化
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_3_b">[威力] ×1.3</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_3_i">
                        バッテリー<br>
                        ちからずく<br>
                        すなのちから<br>
                        アナライズ<br>
                        かたいツメ<br>
                        パンクロック<br>
                        パワースポット
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_4_b">[威力] ×1.5</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_4_i">
                        きれあじ<br>
                        テクニシャン<br>
                        ねつぼうそう<br>
                        どくぼうそう<br>
                        がんじょうあご<br>
                        メガランチャー<br>
                        はがねのせいしん
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_5_b">[攻撃力] ×1.3</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_5_i">
                        クォークチャージ<br>
                        こだいかっせい<br>
                        トランジスタ
                    </div>
                    <div class="cor_tbl_l_b">[攻撃力] ×1.33</div>
                    <div class="cor_tbl_l_i">
                        ハドロンエンジン<br>
                        ひひいろのこどう
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_6_b">[攻撃力] ×1.5</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_6_i">
                        こんじょう<br>
                        しんりょく<br>
                        もうか<br>
                        げきりゅう<br>
                        むしのしらせ<br>
                        もらいび<br>
                        サンパワー<br>
                        いわはこび
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_7_b">[攻撃力] ×2</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_7_i">
                        ちからもち<br>
                        ヨガパワー
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_8_b">[防御力] ×0.75</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_8_i">
                        わざわいのたま<br>
                        わざわいのつるぎ
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_9_b">[ダメージ] ×1.5</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_9_i">
                        スナイパー
                    </div>
                    <div class="cor_tbl_l_b" id="AttackAbillity_10_b">[ダメージ] ×2</div>
                    <div class="cor_tbl_l_i" id="AttackAbillity_10_i">
                        いろめがね
                    </div>
                </div>
                <div style="margin-right: 0px; border-top: 1px solid var(--dark);border-left: 1px solid var(--dark);">
                    <div class="cor_tbl_r_h"><b>道具(攻撃側)</b></div>
                    <div class="cor_tbl_r_b" id="AttackItem_1_b">[威力] ×1.09</div>
                    <div class="cor_tbl_r_i" id="AttackItem_1_i">
                        ちからのハチマキ<br>
                        ものしりメガネ
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_2_b">[威力] ×1.1</div>
                    <div class="cor_tbl_r_i" id="AttackItem_2_i">
                        パンチグローブ
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_3_b">[威力] ×1.2</div>
                    <div class="cor_tbl_r_i" id="AttackItem_3_i">
                        タイプ別専用<br>
                        シンオウ伝説専用<br>
                        オーガポンおめん
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_4_b">[威力] ×1.3</div>
                    <div class="cor_tbl_r_i" id="AttackItem_4_i">
                        ノーマルジュエル
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_5_b">[攻撃力] ×1.5</div>
                    <div class="cor_tbl_r_i" id="AttackItem_5_i">
                        こだわりハチマキ<br>
                        こだわりメガネ
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_6_b">[攻撃力] ×2</div>
                    <div class="cor_tbl_r_i" id="AttackItem_6_i">
                        ふといホネ<br>
                        しんかいのキバ<br>
                        でんきだま
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_7_b">[ダメージ] ×1.2</div>
                    <div class="cor_tbl_r_i" id="AttackItem_7_i">
                        たつじんのおび
                    </div>
                    <div class="cor_tbl_r_b" id="AttackItem_8_b">[ダメージ] ×1.3</div>
                    <div class="cor_tbl_r_i" id="AttackItem_8_i">
                        いのちのたま
                    </div>
                    <div class="cor_tbl_r_h"><b>特性(防御側)</b></div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_1_b">[威力] ×1.25</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_1_i">
                        かんそうはだ
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_2_b">[攻撃力] ×0.5</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_2_i">
                        あついしぼう<br>
                        たいねつ<br>
                        きよめのしお
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_3_b">[攻撃力] ×0.75</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_3_i">
                        わざわいのうつわ<br>
                        わざわいのおふだ
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_4_b">[防御力] ×1.3</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_4_i">
                        クォークチャージ<br>
                        こだいかっせい
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_5_b">[防御力] ×1.5</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_5_i">
                        ふしぎなうろこ<br>
                        くさのけがわ
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_6_b">[ダメージ] ×2</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_6_i">
                        もふもふ(炎)
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_7_b">[ダメージ] ×0.5</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_7_i">
                        マルチスケイル<br>
                        もふもふ<br>
                        パンクロック<br>
                        こおりのりんぷん
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseAbillity_8_b">[ダメージ] ×0.75</div>
                    <div class="cor_tbl_r_i" id="DefenseAbillity_8_i">
                        ハードロック<br>
                        フィルター
                    </div>
                    <div class="cor_tbl_r_h"><b>道具(防御側)</b></div>
                    <div class="cor_tbl_r_b" id="DefenseItem_1_b">[防御力] ×1.5</div>
                    <div class="cor_tbl_r_i" id="DefenseItem_1_i">
                        しんかのきせき<br>
                        とつげきチョッキ
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseItem_2_b">[防御力] ×2</div>
                    <div class="cor_tbl_r_i" id="DefenseItem_2_i">
                        メタルパウダー
                    </div>
                    <div class="cor_tbl_r_b" id="DefenseItem_3_b">[ダメージ] ×0.5</div>
                    <div class="cor_tbl_r_i" id="DefenseItem_3_i">
                        半減きのみ
                    </div>
                </div>
                <div style="margin-right: 0px; border-top: 1px solid var(--dark);">
                    <div class="cor_tbl_r_h"><b>その他(ﾌｨｰﾙﾄﾞ干渉)</b></div>
                    <div class="cor_tbl_r_b" id="ScaryFace_1_b">[防御力] ×1.5</div>
                    <div class="cor_tbl_r_i" id="ScaryFace_1_i">
                        すなあらし+いわタイプ<br>
                        ゆき+こおりタイプ
                    </div>
                    <div class="cor_tbl_r_b" id="Weather_1_b">[ダメージ] ×1.5</div>
                    <div class="cor_tbl_r_i" id="Weather_1_i">
                        はれ+ほのお技<br>
                        あめ+みず技
                    </div>
                    <div class="cor_tbl_r_b" id="Weather_2_b">[ダメージ] ×0.5</div>
                    <div class="cor_tbl_r_i" id="Weather_2_i">
                        はれ+みず技<br>
                        あめ+ほのお技
                    </div>
                    <div class="cor_tbl_r_b" id="Reflect_1_b">[ダメージ] ×0.5</div>
                    <div class="cor_tbl_r_i" id="Reflect_1_i">
                        リフレクター<br>
                        ひかりのかべ<br>
                        オーロラベール
                    </div>
                    <div class="cor_tbl_r_b" id="Field_1_b">[威力] ×1.5</div>
                    <div class="cor_tbl_r_i" id="Field_1_i">
                        サイコフィールド+エスパー技<br>
                        エレキフィールド+でんき技<br>
                        グラスフィールド+くさ技
                    </div>
                    <div class="cor_tbl_r_b" id="Field_2_b">[威力] ×0.5</div>
                    <div class="cor_tbl_r_i" id="Field_2_i">
                        ミストフィールド+ドラゴン技<br>
                        グラスフィールド+じしん等
                    </div>
                    <div class="cor_tbl_r_h"><b>その他(ﾎﾟｹﾓﾝ干渉)</b></div>
                    <div class="cor_tbl_r_b" id="Burn_1_b">[ダメージ] ×0.5</div>
                    <div class="cor_tbl_r_i" id="Burn_1_i">
                        やけど
                    </div>
                    <div class="cor_tbl_r_b" id="CriticalHit_1_b">[ダメージ] ×1.5</div>
                    <div class="cor_tbl_r_i" id="CriticalHit_1_i">
                        あんこくきょうだ<br>
                        こおりのいぶき<br>
                        すいりゅうれんだ<br>
                        トリックフラワー
                    </div>
                    <div class="cor_tbl_r_b" id="KnockOff_1_b">[威力] ×1.5</div>
                    <div class="cor_tbl_r_i" id="KnockOff_1_i">
                        はたきおとす<br>
                        Gのちから<br>
                        ワイドフォース
                    </div>
                    <div class="cor_tbl_r_b" id="KnockOff_2_b">[威力] ×2</div>
                    <div class="cor_tbl_r_i" id="KnockOff_2_i">
                        じゅうでん+でんき技<br>
                        からげんき<br>
                        しおみず<br>
                        ベノムショック
                    </div>
                    <div class="cor_tbl_r_b" id="Underground_1_b">[ダメージ] ×2</div>
                    <div class="cor_tbl_r_i" id="Underground_1_i">
                        じしん等+あなをほる<br>
                        ふみつけ等+ちいさくなる<br>
                        なみのり+ダイビング
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scr_iso_list scr_iso_center" id="scr_iso_center">
        <div class="">
            <table class="exe_area">
                <tbody><tr>
                    <td>　それっぽい画像あれば</td>
                    <td>
                        <label class="exe_label">
                            <input type="checkbox" id="Double"><span>複数</span>
                        </label>
                    </td>
                    <td>
                        <label class="exe_label">
                            <input type="checkbox" id="SaveExe"><span>保存</span>
                        </label>
                    </td>
                    <td><button onclick="calculation()">実行</button></td>
                </tr></tbody>
            </table>
            <table class="input_area">
                <thead><tr>
                    <th>威力</th>
                    <th>攻撃</th>
                    <th>防御</th>
                    <th>一致</th>
                    <th>相性</th>
                    <th>HP</th>
                    <th>ALv</th>
                    <th>DLv</th>
                </tr></thead>
                <tbody><tr>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="Power" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="Attack" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="Defense" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="SameType" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="Effective" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="HitPoint" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="AttackLevel" onfocus="this.select();">
                    </td>
                    <td>
                        <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" class="input_number no-spin" name="input_num" id="DefenseLevel" onfocus="this.select();">
                    </td>
                </tr></tbody>
            </table>
            <table class="conf_area">
                <thead><tr>
                    <th style="width: 15%">A.Abl</th>
                    <th style="width: 15%">A.Itm</th>
                    <th style="width: 15%">D.Abl</th>
                    <th style="width: 15%">D.Itm</th>
                    <th>Others</th>
                </tr></thead>
                <tbody id="corList"><tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr></tbody>
            </table>
        </div>
        <table class="select_header">
            <tbody><tr>
                <td style="width: 80%"><h2 class="attack">攻撃側特性(Shift+A)</h2></td>
                <td style="text-align: center; width: 20%"><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_0" onclick="cngColor('AttackAbillity', '0')" value="0" checked=""><span>× 1.0</span></label></td>
            </tr></tbody>
        </table>
        <table class="select_area">
            <thead><tr>
                <th>威力補正</th>
                <th>攻撃力補正</th>
                <th>防御力補正</th>
                <th>ダメージ補正</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_1" onclick="cngColor('AttackAbillity', '1')" value="1"><span>× 1.1<font class="select_font">(大将1)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_5" onclick="cngColor('AttackAbillity', '5')" value="5"><span>× 1.3<font class="select_font">(ﾌﾞｰｽﾄ)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_8" onclick="cngColor('AttackAbillity', '8')" value="8"><span>× 0.75<font class="select_font">(4災)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_9" onclick="cngColor('AttackAbillity', '9')" value="9"><span>× 1.5<font class="select_font">(ｽﾅｲﾊﾟｰ)</font></span></label></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_2" onclick="cngColor('AttackAbillity', '2')" value="2"><span>× 1.2<font class="select_font">(捨身)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_6" onclick="cngColor('AttackAbillity', '6')" value="6"><span>× 1.5<font class="select_font">(根性)</font></span></label></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_10" onclick="cngColor('AttackAbillity', '10')" value="10"><span>× 1.1<font class="select_font">(色眼鏡)</font></span></label></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_3" onclick="cngColor('AttackAbillity', '3')" value="3"><span>× 1.3<font class="select_font">(力ずく)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_7" onclick="cngColor('AttackAbillity', '7')" value="7"><span>× 2<font class="select_font">(力持ち)</font></span></label></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackAbillity" id="AttackAbillity_4" onclick="cngColor('AttackAbillity', '4')" value="4"><span>× 1.5<font class="select_font">(ﾃｸﾆｼｬﾝ)</font></span></label></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="select_header">
            <tbody><tr>
                <td style="width: 80%"><h2 class="attack">攻撃側道具(Shift+S)</h2></td>
                <td style="text-align: center; width: 20%"><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_0" onclick="cngColor('AttackItem', '0')" value="0" checked=""><span>× 1.0</span></label></td>
            </tr></tbody>
        </table>
        <table class="select_area">
            <thead><tr>
                <th>威力補正</th>
                <th>攻撃力補正</th>
                <th>防御力補正</th>
                <th>ダメージ補正</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_1" onclick="cngColor('AttackItem', '1')" value="1"><span>× 1.09<font class="select_font"></font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_5" onclick="cngColor('AttackItem', '5')" value="5"><span>× 1.5<font class="select_font">(拘り)</font></span></label></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_7" onclick="cngColor('AttackItem', '7')" value="7"><span>× 1.2<font class="select_font">(達人)</font></span></label></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_2" onclick="cngColor('AttackItem', '2')" value="2"><span>× 1.1<font class="select_font">(ﾊﾟﾝｸﾞﾛ)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_6" onclick="cngColor('AttackItem', '6')" value="6"><span>× 2<font class="select_font">(骨)</font></span></label></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_8" onclick="cngColor('AttackItem', '8')" value="8"><span>× 1.3<font class="select_font">(命珠)</font></span></label></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_3" onclick="cngColor('AttackItem', '3')" value="3"><span>× 1.2<font class="select_font">(おめん)</font></span></label></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="AttackItem" id="AttackItem_4" onclick="cngColor('AttackItem', '4')" value="4"><span>× 1.3<font class="select_font">(ｼﾞｭｴﾙ)</font></span></label></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="select_header">
            <tbody><tr>
                <td style="width: 80%"><h2 class="defense">防御側特性(Shift+D)</h2></td>
                <td style="text-align: center;"><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_0" onclick="cngColor('DefenseAbillity', '0')" value="0" checked=""><span>× 1.0</span></label></td>
            </tr></tbody>
        </table>
        <table class="select_area">
            <thead><tr>
                <th>威力補正</th>
                <th>攻撃力補正</th>
                <th>防御力補正</th>
                <th>ダメージ補正</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_1" onclick="cngColor('DefenseAbillity', '1')" value="1"><span>× 1.25<font class="select_font">(乾燥)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_2" onclick="cngColor('DefenseAbillity', '2')" value="2"><span>× 0.5<font class="select_font">(耐熱)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_4" onclick="cngColor('DefenseAbillity', '4')" value="4"><span>× 1.3<font class="select_font">(ﾌﾞｰｽﾄ)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_6" onclick="cngColor('DefenseAbillity', '6')" value="6"><span>× 2<font class="select_font">(もふ炎)</font></span></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_3" onclick="cngColor('DefenseAbillity', '3')" value="3"><span>× 0.75<font class="select_font">(4災)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_5" onclick="cngColor('DefenseAbillity', '5')" value="5"><span>× 1.5<font class="select_font">(鱗)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_7" onclick="cngColor('DefenseAbillity', '7')" value="7"><span>× 0.5<font class="select_font">(ﾏﾙｽｹ)</font></span></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="DefenseAbillity" id="DefenseAbillity_8" onclick="cngColor('DefenseAbillity', '8')" value="8"><span>× 0.75<font class="select_font">(ﾌｨﾙﾀｰ)</font></span></label></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="select_header">
            <tbody><tr>
                <td style="width: 80%"><h2 class="defense">防御側道具(Shift+F)</h2></td>
                <td style="text-align: center;"><label class="select_label"><input type="radio" name="DefenseItem" id="DefenseItem_0" onclick="cngColor('DefenseItem', '0')" value="0" checked=""><span>× 1.0</span></label></td>
            </tr></tbody>
        </table>
        <table class="select_area">
            <thead><tr>
                <th>威力補正</th>
                <th>攻撃力補正</th>
                <th>防御力補正</th>
                <th>ダメージ補正</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="DefenseItem" id="DefenseItem_1" onclick="cngColor('DefenseItem', '1')" value="1"><span>× 1.5<font class="select_font">(輝石)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="DefenseItem" id="DefenseItem_3" onclick="cngColor('DefenseItem', '3')" value="3"><span>× 0.5<font class="select_font">(半減実)</font></span></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="DefenseItem" id="DefenseItem_2" onclick="cngColor('DefenseItem', '2')" value="2"><span>× 2<font class="select_font">(ﾒﾀﾊﾞ)</font></span></label></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table class="select_header">
            <tbody><tr>
                <td style="width: 80%"><h2 class="other">その他</h2></td>
                <td></td>
            </tr></tbody>
        </table>
        <table class="select_area">
            <thead><tr>
                <th>砂(F1)</th>
                <th>天候(F2)</th>
                <th>壁(F3)</th>
                <th>ﾌｨｰﾙﾄﾞ(F4)</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td><label class="select_label"><input type="radio" name="ScaryFace" id="ScaryFace_0" onclick="cngColor('ScaryFace', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Weather" id="Weather_0" onclick="cngColor('Weather', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Reflect" id="Reflect_0" onclick="cngColor('Reflect', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Field" id="Field_0" onclick="cngColor('Field', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="ScaryFace" id="ScaryFace_1" onclick="cngColor('ScaryFace', '1')" value="1"><span>砂嵐</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Weather" id="Weather_1" onclick="cngColor('Weather', '1')" value="1"><span>天候+</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Reflect" id="Reflect_1" onclick="cngColor('Reflect', '1')" value="1"><span>壁</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Field" id="Field_1" onclick="cngColor('Field', '1')" value="1"><span>FLD+</span></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="Weather" id="Weather_2" onclick="cngColor('Weather', '2')" value="2"><span>天候-</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Reflect" id="Reflect_2" onclick="cngColor('Reflect', '2')" value="2"><span>壁(複)</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Field" id="Field_2" onclick="cngColor('Field', '2')" value="2"><span>FLD-</span></label></td>
                </tr>
            </tbody>
        </table>
        <table class="select_area">
            <thead><tr>
                <th>火傷(F6)</th>
                <th>確定急所(F7)</th>
                <th>威力変化(F8)</th>
                <th>特殊被弾(F9)</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td><label class="select_label"><input type="radio" name="Burn" id="Burn_0" onclick="cngColor('Burn', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                    <td><label class="select_label"><input type="radio" name="CriticalHit" id="CriticalHit_0" onclick="cngColor('CriticalHit', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                    <td><label class="select_label"><input type="radio" name="KnockOff" id="KnockOff_0" onclick="cngColor('KnockOff', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                    <td><label class="select_label"><input type="radio" name="Underground" id="Underground_0" onclick="cngColor('Underground', '0')" value="0" checked=""><span>× 1.0</span></label></td>
                </tr>
                <tr>
                    <td><label class="select_label"><input type="radio" name="Burn" id="Burn_1" onclick="cngColor('Burn', '1')" value="1"><span>火傷</span></label></td>
                    <td><label class="select_label"><input type="radio" name="CriticalHit" id="CriticalHit_1" onclick="cngColor('CriticalHit', '1')" value="1"><span>急所</span></label></td>
                    <td><label class="select_label"><input type="radio" name="KnockOff" id="KnockOff_1" onclick="cngColor('KnockOff', '1')" value="1"><span>× 1.5<font class="select_font">(はたき)</font></span></label></td>
                    <td><label class="select_label"><input type="radio" name="Underground" id="Underground_1" onclick="cngColor('Underground', '1')" value="1"><span>× 2<font class="select_font">(踏+小)</font><span></span></label></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><label class="select_label"><input type="radio" name="KnockOff" id="KnockOff_2" onclick="cngColor('KnockOff', '2')" value="2"><span>× 2<font class="select_font">(敵討ち)</font></span></label></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="scr_iso_list scr_iso_right" id="scr_iso_right">
        <table border="1px" class="rnd_dm_area" id="smp_width_1">
            <thead id="dstHead"><tr>
                <th>85</th>
                <th>86</th>
                <th>87</th>
                <th>88</th>
                <th>89</th>
                <th>90</th>
                <th>91</th>
                <th>92</th>
                <th>93</th>
                <th>94</th>
                <th>95</th>
                <th>96</th>
                <th>97</th>
                <th>98</th>
                <th>99</th>
                <th>100</th>
            </tr></thead>
            <tbody id="dstList"><tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr></tbody>
        </table>
        <table class="rnd_cl_area">
            <thead>
                <tr>
                    <th>急所</th>
                    <th>前回との合算</th>
                </tr>
            </thead>
            <tbody id="dstOtList_1">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <table  class="rnd_ko_area">
            <thead>
                <tr>
                    <th>HP</th>
                    <th>撃破必要数(確定)</th>
                    <th>撃破必要数(乱数)</th>
                </tr>
            </thead>
            <tbody id="dstOtList_2">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <details id="addList"> <summary><strong>加算情報</strong></summary>
            <table class="add_btn_area">
                <tbody><tr>
                    <td style="width: 60%; text-align: center;"></td>
                    <td style="width: 20%; text-align: right;"><button onclick="addition()">加算</button></td>
                    <td style="width: 20%; text-align: right;"><button onclick="adddel(0)">解除</button></td>
                </tr></tbody>
            </table>
            <table class="add_dm_area" id="smp_width_4">
                <thead><tr><th colspan="8">加算ダメージ</th></tr></thead>
                <tbody id="addList_1">
                    <tr>
                        <td>1.</td>
                        <td id="no_1">&nbsp;</td>
                        <td>3.</td>
                        <td id="no_3">&nbsp;</td>
                        <td>5.</td>
                        <td id="no_5">&nbsp;</td>
                        <td>7.</td>
                        <td id="no_7">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td id="no_2">&nbsp;</td>
                        <td>4.</td>
                        <td id="no_4">&nbsp;</td>
                        <td>6.</td>
                        <td id="no_6">&nbsp;</td>
                        <td>8.</td>
                        <td id="no_8">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <table class="add_area" id="smp_width_5">
                <thead><tr><th colspan="3">合計</th></tr></thead>
                <tbody id="addList_2">
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </details>
        <table border="1px" class="amb_val_area" id="smp_width_6">
            <thead><tr>
                <th>攻撃力周囲値</th>
                <th>防御力周囲値</th>
            </tr></thead>
            <tbody id="dstPerList">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <table border="1px" class="col_his_area" id="hstTbl">
            <thead><tr>
                <th colspan="7">計算履歴</th>
            </tr></thead>
            <tbody id="hstList">
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="footer_area">
    <ul class="footer_tab">
    <li><a href="#scr_iso_center">入力</a></li>
    <li><a href="#scr_iso_right">結果</a></li>
    </ul>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/animation.js"></script>
</body>
<footer>
</footer>
</html>