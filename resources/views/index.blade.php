<!DOCTYPE html>

<head>

<title>理にかなったダメ計ツール</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta charset="UTF-8">
<script type="text/javascript" src="/js/shortcut.js"></script>
<script type="text/javascript" src="/js/bk/constant.js"></script>
<script type="text/javascript" src="/js/bk/operation.js"></script>
<script type="text/javascript" src="/js/bk/calculation.js"></script>
<script type="text/javascript" src="/js/bk/correction.js"></script>
<link rel="stylesheet" type="text/css" href="/css/neat.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <h1 style="font-size: 1.5em; width: 250px;">理にかなったダメ計ツール</h1>
    <h1 style="font-size: 0.9em;">動かない!ってなったらスーパーリロードShift+F5お願いします</h1>
    <label class="open" for="pop-up" style="font-size: 16px;">＜リドルさんへ＞</label>
    <button class="cng" onclick="tabCng()" id="cng_btn">ダメージ確認</button>
    <h1 style="font-size: 1.5em;"><a href="http://www.iarwcal.shop/calculation">サイトの見た目工事中のサイト</a><font style="font-size: 0.9em">　←動作確認まだですが一応動きます。要望あれば</font></h1>
    <div class="row" style="margin: 1em 0 1em 0;">
        <div class="hdn">
            <div class="row" style="font-size: 0.9em; padding: 0.2em; padding-top: 1.3em;">
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
        <div id="sel_1" style="padding-bottom: 50px;">
            <div class="row smp_top" style="margin: 1em 0 1em 0;">
                <div style="width:48px; text-align:center;">
                    <button class="center" style="width:48px;" onclick="calculation()">実行</button>
                </div>
                <div style="width:60px; text-align:center;">
                    <button class="center" style="width:60px;" onclick="calculation(1)">保存実行</button>
                </div>
                <div></div>
                <div style="width:48px; text-align:center;">
                    <button class="center" style="width:48px;" onclick="addition()">加算</button>
                </div>
                <div style="width:60px; text-align:center;">
                    <button class="center" style="width:60px;" onclick="adddel(0)">加算解除</button>
                </div>
                <div style="width:60px; text-align:center;">
                    <button class="center" style="width:60px;" onclick="adddel(1)">加算表示</button>
                </div>
            </div>
            <div class="row smp_1b" style="margin: 1em 0 1em 0;">
                <div class="atk_txt">
                    威力</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="Power" class="smp_dm1" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    攻撃力</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="Attack" class="smp_dm1" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    防御力</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="Defense" class="smp_dm1" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    一致</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="SameType" class="smp_dm2" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    相性</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="Effective" class="smp_dm2" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    HP</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="HitPoint" class="smp_dm2" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    ALv</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="AttackLevel" class="smp_dm3" onfocus="this.select();">
                </div>
                <div class="atk_txt">
                    DLv</br>
                    <input type="number" onpaste="return false;" ondrop="return false;" autocomplete="off" id="DefenseLevel" class="smp_dm3" onfocus="this.select();">
                </div>
            </div>
            <div class="row" style="margin: 1em 0 1em 0;">
                <table>
                    <tbody id="corList">
                        <tr>
                            <th width="54">A.Abl</th>
                            <th width="54">A.Itm</th>
                            <th width="54">D.Abl</th>
                            <th width="54">D.Itm</th>
                            <th width="324">Others</th>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="font-size: 1em; padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_h">
                    <b>攻撃側特性 (Shift+A)</b>
                </div>
            </div>
            <div class="row" style="padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_1_1">
                    <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '0')" value="0" checked="">x1.0
                </div>
            </div>
            <div class="row" style="padding-top: 0em; padding-bottom: 0em; border-left: 1px solid var(--dark); border-right: 1px solid var(--dark);">
                <div class="hst_b">
                    <div class="hst_b_h"><b>威力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '1')" value="1">×1.1(大将1)<br>
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '2')" value="2">×1.2(大将2)<br>
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '3')" value="3">×1.3(力ずく)<br>
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '4')" value="4">×1.5(ﾃｸﾆｼｬﾝ)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>攻撃力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '5')" value="5">×1.3(ﾌﾞｰｽﾄ)<br>
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '6')" value="6">×1.5(根性)<br>
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '7')" value="7">×2(力持ち)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>防御力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '8')" value="8">×0.75(4災)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>ダメージ補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '9')" value="9">×1.5(ｽﾅｲﾊﾟｰ)<br>
                        <input type="radio" name="AttackAbillity" id="AttackAbillity" onclick="cngColor('AttackAbillity', '10')" value="10">×2(色眼鏡)<br>
                    </div>
                </div>
            </div>
            <div class="row" style="font-size: 1em; padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_h">
                    <b>攻撃側道具 (Shift+S)</b>
                </div>
            </div>
            <div class="row" style="padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_1_1">
                    <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '0')" value="0" checked="">x1.0
                </div>
            </div>
            <div class="row" style="padding-top: 0em; padding-bottom: 0em; border-left: 1px solid var(--dark); border-right: 1px solid var(--dark);">
                <div class="hst_b">
                    <div class="hst_b_h"><b>威力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '1')" value="1">×1.09<br>
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '2')" value="2">×1.1(ﾊﾟﾝｸﾞﾛ)<br>
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '3')" value="3">×1.2(専用)<br>
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '4')" value="4">×1.3(ｼﾞｭｴﾙ)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>攻撃力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '5')" value="5">×1.5(拘り)<br>
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '6')" value="6">×2(骨)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>防御力補正</b></div>
                    <div class="hst_b_item">
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>ダメージ補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '7')" value="7">×1.2(達人)<br>
                        <input type="radio" name="AttackItem" id="AttackItem" onclick="cngColor('AttackItem', '8')" value="8">×1.3(命珠)<br>
                    </div>
                </div>
            </div>
            <div class="row" style="font-size: 1em; padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_h">
                    <b>防御側特性 (Shift+D)</b>
                </div>
            </div>
            <div class="row" style="padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_1_1">
                    <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '0')" value="0" checked="">x1.0
                </div>
            </div>
            <div class="row" style="padding-top: 0em; padding-bottom: 0em; border-left: 1px solid var(--dark); border-right: 1px solid var(--dark);">
                <div class="hst_b">
                    <div class="hst_b_h"><b>威力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '1')" value="1">×1.25(乾燥)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>攻撃力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '2')" value="2">×0.5(耐熱)<br>
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '3')" value="3">×0.75(4災)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>防御力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '4')" value="4">×1.3(ﾌﾞｰｽﾄ)<br>
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '5')" value="5">×1.5(鱗)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>ダメージ補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '6')" value="6">×2(もふ炎)<br>
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '7')" value="7">×0.5(ﾏﾙｽｹ)<br>
                        <input type="radio" name="DefenseAbillity" id="DefenseAbillity" onclick="cngColor('DefenseAbillity', '8')" value="8">×0.75(ﾌｨﾙﾀｰ)<br>
                    </div>
                </div>
            </div>
            <div class="row" style="font-size: 1em; padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_h">
                    <b>防御側道具 (Shift+F)</b>
                </div>
            </div>
            <div class="row" style="padding-top: 0px; padding-bottom: 0em;">
                <div class="hst_1_1">
                    <input type="radio" name="DefenseItem" id="DefenseItem" onclick="cngColor('DefenseItem', '0')" value="0" checked="">x1.0
                </div>
            </div>
            <div class="row" style="padding-top: 0em; padding-bottom: 0em; border-left: 1px solid var(--dark); border-right: 1px solid var(--dark); border-bottom: 1px solid var(--dark);">
                <div class="hst_b">
                    <div class="hst_b_h"><b>威力補正</b></div>
                    <div class="hst_b_item">
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>攻撃力補正</b></div>
                    <div class="hst_b_item">
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>防御力補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="DefenseItem" id="DefenseItem" onclick="cngColor('DefenseItem', '1')" value="1">×1.5(輝石)<br>
                        <input type="radio" name="DefenseItem" id="DefenseItem" onclick="cngColor('DefenseItem', '2')" value="2">×2(ﾒﾀﾊﾟ)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>ダメージ補正</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="DefenseItem" id="DefenseItem" onclick="cngColor('DefenseItem', '3')" value="3">×0.5(半減実)<br>
                    </div>
                </div>
            </div>
            
            <div class="row" style="font-size: 1em; padding-top: 12px; padding-bottom: 0em;">
                <div class="hst_h"><b>その他</b></div>
            </div>
            <div class="row" style="font-size: 1em; padding-top: 0em; padding-bottom: 0em; border-left: 1px solid var(--dark); border-right: 1px solid var(--dark); ">
                <div class="hst_b">
                    <div class="hst_b_h"><b>砂(F1)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="ScaryFace" id="ScaryFace" onclick="cngColor('ScaryFace', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="ScaryFace" id="ScaryFace" onclick="cngColor('ScaryFace', '1')" value="1">砂嵐<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>天候(F2)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="Weather" id="Weather" onclick="cngColor('Weather', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="Weather" id="Weather" onclick="cngColor('Weather', '1')" value="1">天候+<br>
                        <input type="radio" name="Weather" id="Weather" onclick="cngColor('Weather', '2')" value="2">天候-<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>壁(F3)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="Reflect" id="Reflect" onclick="cngColor('Reflect', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="Reflect" id="Reflect" onclick="cngColor('Reflect', '1')" value="1">壁<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>ﾌｨｰﾙﾄﾞ(F4)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="Field" id="Field" onclick="cngColor('Field', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="Field" id="Field" onclick="cngColor('Field', '1')" value="1">FLD+<br>
                        <input type="radio" name="Field" id="Field" onclick="cngColor('Field', '2')" value="2">FLD-<br>
                    </div>
                </div>
            </div>
            <div class="row" style="font-size: 1em; padding-top: 0em; padding-bottom: 0em; border-left: 1px solid var(--dark); border-right: 1px solid var(--dark); border-bottom: 1px solid var(--dark);">
                <div class="hst_b">
                    <div class="hst_b_h"><b>火傷(F6)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="Burn" id="Burn" onclick="cngColor('Burn', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="Burn" id="Burn" onclick="cngColor('Burn', '1')" value="1">火傷<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>確定急所(F7)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="CriticalHit" id="CriticalHit" onclick="cngColor('CriticalHit', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="CriticalHit" id="CriticalHit" onclick="cngColor('CriticalHit', '1')" value="1">急所<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>威力変化(F8)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="KnockOff" id="KnockOff" onclick="cngColor('KnockOff', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="KnockOff" id="KnockOff" onclick="cngColor('KnockOff', '1')" value="1">×1.5(はたき)<br>
                        <input type="radio" name="KnockOff" id="KnockOff" onclick="cngColor('KnockOff', '2')" value="2">×2(敵討ち)<br>
                    </div>
                </div>
                <div class="hst_b">
                    <div class="hst_b_h"><b>特殊被弾(F9)</b></div>
                    <div class="hst_b_item">
                        <input type="radio" name="Underground" id="Underground" onclick="cngColor('Underground', '0')" value="0" checked="">×1.0<br>
                        <input type="radio" name="Underground" id="Underground" onclick="cngColor('Underground', '1')" value="1">×2(地中等)<br>
                    </div>
                </div>
            </div>
        </div>
        <div id="sel_2" class="smp_top" style="padding-bottom: 50px;">
            <table class="dst_result" id="smp_width_1">
                <tbody id="dstList">
                    <tr>
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
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
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
            <table class="dst_result" style="padding-bottom: 0em; margin-bottom: 0em;" id="smp_width_2">
                <tbody id="dstOtList_1">
                    <tr>
                        <th>急所</th>
                        <th>前回との合算</th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <table  class="dst_result" style="padding-top: 0px; margin-top: 0em; border-top: 0px solid var(--dark); " id="smp_width_3">
                <tbody id="dstOtList_2">
                    <tr>
                        <th style="width: 48px;">HP</th>
                        <th style="width: 179.5px;">撃破必要数(確定)</th>
                        <th>撃破必要数(乱数)</th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <details id="addList"> <summary><strong>加算情報</strong></summary>
            <table class="dst_result" style="padding-bottom: 0em; margin-bottom: 0em;" id="smp_width_4">
                <tbody id="addList_1">
                    <colgroup>
                        <col style="width: 5%;">
                        <col style="width: 20%;">
                        <col style="width: 5%;">
                        <col style="width: 20%;">
                        <col style="width: 5%;">
                        <col style="width: 20%;">
                        <col style="width: 5%;">
                        <col style="width: 20%;">
                    </colgroup>
                    <tr>
                        <th colspan="8">加算ダメージ</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td id="no_1">&nbsp;</td>
                        <td>3</td>
                        <td id="no_3">&nbsp;</td>
                        <td>5</td>
                        <td id="no_5">&nbsp;</td>
                        <td>7</td>
                        <td id="no_7">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td id="no_2">&nbsp;</td>
                        <td>4</td>
                        <td id="no_4">&nbsp;</td>
                        <td>6</td>
                        <td id="no_6">&nbsp;</td>
                        <td>8</td>
                        <td id="no_8">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <table class="dst_result" style="padding-bottom: 0em; margin-bottom: 0em;" id="smp_width_5">
                <tbody id="addList_2">
                    <tr>
                        <th colspan="4">合計</th>
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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
                    </tr>
                </tbody>
            </table>
            </details>
            <table class="dst_result" id="smp_width_6">
                <tbody id="dstPerList">
                    <tr>
                        <th>攻撃力周囲値</th>
                        <th>防御力周囲値</th>
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
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <table class="hst_result" id="hstTbl">
                <tbody id="hstList">
                    <tr>
                        <th colspan="7">計算履歴</th>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td class="hst_st">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="hst_dm">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <form method="post" action="/">
            @csrf
                <div style="text-align:left;padding-top: 12px; ">
                    <p>改善要望 : <input type="text" style="width:350px; padding-right:20px;" name="Request"> <button>送信</button></p>
                    <table class="dst_result">
                        <tbody>
                            <tr>
                                <th style="width:340px;">改善要望</th>
                                <th style="width:80px;">対応予定日</th>
                                <th>進捗</th>
                            </tr>
                            <?php for ($i = 0; $i < count($items); $i++) { ?>
                                <tr>
                                    <td style="text-align:left"><?php echo $items[$i]->REQUEST ?></td>
                                    <td><?php echo $items[$i]->SCHEDULE ?></td>
                                    <td><?php echo $items[$i]->ANSWER ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <input type="checkbox" id="pop-up">
    <div class="overlay">
        <div class="window"><label class="close" for="pop-up">閉じる</label>
            <h2 class="exp_h2">リドルさんへ</h2><br>
            おかげさまで機能についてはだいたい確認が取れました。<br>
            今後のロードマップについては以下の通りです。<br>
            <br>
            ・サイトの見た目をキレイにする。<br>
            ↓<br>
            ・新URLの発行（今のサイトのままだとセキュリティ的にアレなので）<br>
            ↓<br>
            ・公開<br>
            <br>
            機能自体は利用可能なのでそのまま使い続けていただいて問題ないのですが、<br>
            現状のサイトはプレハブ小屋みたいなものなので、これからキレイにしていきます。<br>
            つきましては以下要望などあれば<br>
            <br>
            1.サイト名（現在は仮名なので希望があれば）<br>
            2.好みの色、フォント（サイトの見た目に反映します）<br>
            3.ロゴやタイトル等に使用してほしいキャラ（自由枠くんみたいな）<br>
            4.補正特性・道具について、表記は「倍率(代表特性or道具)」がいいですか？<br>
              どちらか片方でも問題ないでしょうか？（倍率のみ、代表特性・道具のみなど）<br>
            
            <br>
            もし希望がありましたら番号付きで改善要望に記載をお願いします。<br>
            <!-- <label class="close" for="pop-up">閉じる</label>
            <h2 class="exp_h2">このサイトについて</h2><br>
            このサイトは<a href="https://youtube.com/@riddlechan?si=fepYrqcqDLWBfUaa" target="_blank" style="color: #d7b; font-weight: bold;">実況者のリドルさん</a>の理想を実現するために、<br>
            <a href="https://mystic.silk.to/calc.html" target="_blank" style="color: #d7b; font-weight: bold;">1sec.calc</a>を参考に作成したダメージ計算ツールになります。<br><br>
            リドルさんが使いやすいようにすることが最大の課題なので、<br>
            レイアウトや機能はリドルさんが必要としない限り実装する予定はありません。<br>
            現状スマホ対応はしていませんが、リドルさんが普段PCでダメ計をしているため、<br>
            対応する予定も今のところありません。<br><br>
            <h2 class="exp_h2">説明</h2><br>
            基本的な見方や利用方法は1sec.calcとだいたい同じです。<br>
            ショートカットは必要最低限にしています。<br><br>
            <h3 class="exp_h3">Enter</h3>
            威力～相性を順に推移します。相性でEnterすると計算を実施します。
            <h3 class="exp_h3">Tab</h3>
            威力～相性からTabでHPに推移します。それ以外の場所からは威力に推移します。
            <h3 class="exp_h3">(Shift+)Up,Down</h3>
            十字キーの上下でALvを変更できます。<br>
            Shift+十字キーの上下でDLvを変更できます。
            <h3 class="exp_h3">Shift+A~F</h3>
            攻撃側、防御側の補正内容を設定できます。
            <h3 class="exp_h3">F1~F9</h3>
            その他の補正を設定します。<br>
            F1~F4は場に干渉する補正です。<br>
            F6~F9は技を出す/受ける側に干渉する補正です。
            <br><br><br>
            HPを入力していると撃破数が算出されたり、<br>
            加算時に撃破ダメージに到達しているエリアの背景色が変更されます。<br>
            補正を選択していると、左の参照補正値の背景色が変更され見やすくなっています。<br>
            一致項について、元タイプ&テラスタイプ一致の場合は2、元タイプ&テラスタイプ一致+適応力の場合は2.25を入力してください。<br>
            元タイプ一致+適応力の場合は今まで通り2を入力で問題ありません。<br><br>
            <h2 class="exp_h2">special thanks</h2><br>
            ・<a href="https://youtube.com/@riddlechan?si=fepYrqcqDLWBfUaa" target="_blank" style="color: #d7b; font-weight: bold;">実況者のリドルさん</a><br>
            ・<a href="https://mystic.silk.to/calc.html" target="_blank" style="color: #d7b; font-weight: bold;">1sec.calc</a><br>
            ・<a href="https://youtu.be/AleYITy8Asg?t=418" target="_blank" style="color: #d7b; font-weight: bold;">とくせいガードムウマージを使ってめちゃくちゃガチグマにイキりちらかした挙句ブラッドムーンを被弾してめちゃめちゃ焦って「うるさいうるさいうるさいうるさい黙れ黙れ黙れ黙れ！」って言ってたあゆみんさん</a> -->
        </div>
    </div>
</body>
<footer>
</footer>
</html>