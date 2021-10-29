<?php

namespace App\Consts;

class JobConditionConsts
{
    public const TYPE_OF_JOB = [
        'OM独自求人' => false,
        'OMクローリング求人' => true
    ];

    public const WORK_TYPES = [
        0 => '営業系',
        1 => '企画・事務・管理系',
        2 => '販売・接客・サービス系',
        3 => '医療・福祉・介護・教育・その他',
        4 => '金融・不動産・コンサルタント',
        5 => 'クリエイティブ系',
        6 => 'IT・Web・ゲーム・通信',
        7 => '電気・電子・機械',
        8 => '建築・土木',
        9 => '医薬・化学・素材・食品',
        10 => '警備・設備・運輸・軽作業',
        11 => '公務員・団体職員・その他',
    ];
    public const HIRING_SYSTEMS = [
        0 => '正社員',
        1 => '契約社員',
        2 => '派遣社員',
        3 => 'アルバイト・パート',
        4 => '業務委託',
        5 => 'インターシップ',
        6 => '新卒採用',
        8 => 'その他',
        9 => '紹介予定派遣',
        10 => '請負',
        11 => '嘱託職員',
    ];

    public const SALARY_PATTERN = [
        0 => '時給',
        1 => '日給',
        2 => '月給',
        3 => '年収',
        4 => 'その他',
    ];

    public const TRIALS = [
        0 => 'どちらもなし',
        1 => '試用期間あり',
        2 => '研修期間あり',
        3 => '本文中に記載',
    ];

    public const TRAVEL_COSTS = [
        0 => 'なし',
        1 => 'あり',
    ];
    public const JOB_TYPES = [
        0 => '法人営業',
        1 => '個人営業',
        2 => 'インサイドセールス',
        3 => 'ルートセールス・渉外・外商',
        4 => '代理店営業・アライアンス',
        5 => '内勤営業',
        6 => 'カウンターセールス',
        7 => '技術・システム営業',
        8 => 'MR',
        9 => '医療機器営業・その他',
        10 => '海外営業',
        11 => '営業マネージャー・営業管理',
        12 => 'コールセンター管理・運営（SV）',
        13 => 'テレマーケティング・オペレーター',
        14 => '人材コーディネーター',
        15 => 'キャリアカウンセラー',
        16 => '人材系営業',
        17 => 'その他、営業系',
        18 => '一般事務',
        19 => '営業事務・営業アシスタント',
        20 => 'カスタマーサポート・カスタマーサクセス',
        340 => 'コールセンター・電話応対',
        341 => 'スーパーバイザー（コールセンター）',
        21 => '経営企画',
        22 => '事業企画',
        23 => '広告宣伝・PR',
        24 => '広報・IR',
        25 => '営業企画・販促企画',
        26 => '商品企画・商品開発',
        27 => 'Webマーケティング・SEM',
        28 => 'リサーチ・データ分析・解析',
        29 => '経理・経理事務',
        30 => '財務・会計・税務',
        31 => '内部監査',
        32 => '人事・労務',
        33 => '総務',
        34 => '法務・コンプライアンス',
        35 => '特許・知的財産',
        36 => '経営者・経営幹部',
        37 => '秘書',
        38 => '受付',
        39 => '通訳・翻訳',
        40 => '貿易・国際関連業務',
        41 => '物流企画・物流管理',
        42 => '商品管理・在庫管理',
        43 => '勾配・資材調達',
        44 => 'その他、企画・事務・管理系',
        45 => 'マーチャンダイザー・VMD',
        46 => 'バイヤー・仕入れ',
        47 => 'ディストリビューター',
        48 => 'スーパーバイザー・エリアマネージャー（ファッション）',
        49 => 'スーパーバイザー・エリアマネージャー（流通・小売）',
        50 => 'スーパーバイザー・エリアマネージャー（フード）',
        51 => 'スーパーバイザー・エリアマネージャー（アミューズメント・レジャー・エンタメ）',
        52 => '店舗開発・FC開発（ファッション）',
        53 => '店舗開発・FC開発（流通・小売）',
        54 => '店舗開発・FC開発（フード）',
        55 => '店舗開発・FC開発（アミューズメント・レジャー・エンタメ）',
        56 => '店長・店長候補（ファッション）',
        57 => '店長・店長候補（流通・小売）',
        58 => '店長・店長候補（フード）',
        59 => '店長・店長候補（アミューズメント・レジャー・エンタメ）',
        336 => '販売スタッフ・売り場担当（フード）',
        60 => '販売スタッフ・売り場担当（ファッション）',
        61 => '販売スタッフ・売り場担当（流通・小売）',
        62 => 'ホールスタッフ・サービススタッフ（フード）',
        63 => 'ホールスタッフ・サービススタッフ（アミューズメント・レジャー・エンタメ）',
        64 => 'キッチンスタッフ・調理師・シェフ・パティシエ',
        65 => '調理補助',
        66 => 'ナイトワーク',
        67 => 'その他、販売・接客・サービス系',
        99 => 'フロントスタッフ・サービススタッフ',
        68 => '薬剤師・管理薬剤師',
        69 => '登録販売者',
        70 => '医師・歯科医師',
        71 => '看護師・准看護師・保健師・助産師',
        339 => '看護師・准看護師',
        440 => '保健師・助産師',
        72 => '看護助手',
        73 => '歯科技工士・歯科衛生士',
        74 => '歯科助手',
        75 => '理学療法士・作業療法士・整体師・マッサージ師',
        76 => 'カウンセラー・臨床心理士',
        77 => '医療事務・医療秘書',
        78 => '福祉・介護施設長・事業責任者',
        79 => '介護福祉士・ケアマネージャー',
        80 => 'ホームヘルパー',
        81 => '介護助手',
        342 => '介護スタッフ',
        82 => '家事代行・ベビーシッター',
        83 => '管理栄養士・栄養士・フードコーディネーター',
        84 => '教室長・スクール運営',
        85 => '教員・講師',
        86 => '家庭教師',
        87 => '試験監督',
        88 => '生活相談員',
        89 => '保育士・幼稚園教諭',
        90 => '保育補助',
        91 => 'スポーツインストラクター・トレーナー',
        92 => 'インストラクター',
        93 => '教務事務',
        94 => 'ブライダルコーディネーター・ウェディングプランナー',
        95 => 'ドレスコーディネーター',
        96 => '旅行手配・添乗員・ツアーコンダクター',
        97 => 'カウンタースタッフ・予約手配・オペレーター',
        98 => 'ホテル・旅館運営',
        100 => 'その他、医療・福祉・介護・教育系',
        101 => '金融営業（法人）',
        102 => '金融営業（個人）・FP',
        103 => '投資研究・アナリスト・エコノミスト',
        104 => 'ファンドマネージャー、ディーラー、トレーダー',
        105 => 'インベストメントバンキング・M&A',
        106 => 'コーポレートファイナンス',
        107 => 'リスク管理・与信管理・債権管理',
        108 => 'コンプライアンス・監査',
        109 => '金融事務・管理',
        110 => 'アンダーライター・損害調査',
        111 => '金融商品企画・ストラクチャード',
        112 => 'アクチュアリー',
        113 => 'その他、金融系',
        114 => '不動産営業（法人）',
        115 => '不動産営業（個人）',
        116 => '不動産企画・仕入・開発',
        117 => 'アセットマネジメント',
        118 => 'プロパティマネジメント',
        119 => '鑑定・評価・デューデリジェンス',
        120 => '不動産管理',
        121 => 'フロント（マンション・ビル管理）',
        122 => 'その他、不動産系',
        123 => '戦略コンサルタント',
        124 => '財務・会計コンサルタント',
        125 => '組織・人事コンサルタント',
        126 => '調査員・リサーチャー',
        127 => '弁護士・弁理士',
        128 => '会計士・税理士',
        129 => '司法書士・行政書士',
        130 => 'その他、コンサルタント系',
        131 => 'Webプロデューサー・ディレクター・プランナー',
        132 => 'Webデザイナー・UI/UXデザイナー',
        133 => 'Webコンテンツ企画・編集',
        134 => 'Webサイト・ECショップ運営',
        135 => 'その他、Web系',
        136 => 'ゲームプロデューサー・ディレクター・プランナー',
        137 => 'ゲームデザイナー・CGデザイナー',
        138 => 'ゲーム企画・シナリオライター',
        139 => 'ゲームプログラマ',
        140 => 'サウンドクリエイター・サウンドプログラマー',
        141 => 'その他、ゲーム系',
        142 => 'プロデューサー・ディレクター・AP・AD・演出',
        143 => '脚本家・放送作家・シナリオライター',
        144 => '映像制作・編集・技術・カメラ・音響・照明',
        145 => 'アナウンサー・ナレーター・俳優・モデル・イベントコンパニオン',
        146 => '芸能マネージャー',
        147 => 'その他、テレビ・映像・音響・芸能・イベント系',
        148 => 'クリエイティブディレクター',
        149 => 'アートディレクター',
        150 => 'コピーライター',
        151 => 'グラフィフィックデザイナー',
        152 => '制作進行管理',
        153 => 'フォトグラファー',
        154 => 'イラストレーター',
        155 => 'その他、広告・グラフィック系',
        156 => 'ファッションデザイナー・服飾雑貨デザイナー・テキスタイルデザイナー・パタンナー・縫製',
        157 => 'スタイリスト・ヘアメイク',
        158 => '生産管理',
        159 => 'その他、ファッション系',
        160 => 'インテリアデザイナー・プランナー・インテリアコーディネーター',
        161 => '店舗・ディスプレイ・空間デザイナー',
        162 => 'プロダクトデザイナー・工業デザイナー',
        163 => 'その他、インテリア・空間・工業デザイン系',
        164 => '編集・記者・ライター',
        165 => 'DTPオペレーター',
        166 => 'その他、出版・印刷系',
        167 => 'プロジェクトマネージャー（Web・オープン系）',
        168 => 'プロジェクトマネージャー（汎用機系）',
        169 => 'プロジェクトマネージャー（制御・組み込み系）',
        170 => 'プロジェクトマネージャー（パッケージソフト・ミドルウェア）',
        338 => 'IoTエンジニア',
        171 => 'システムエンジニア（Web・オープン系）',
        172 => 'システムエンジニア（汎用機系）',
        173 => 'システムエンジニア（制御・組み込み系）',
        174 => 'システムエンジニア（パッケージソフト・ミドルウェア）',
        175 => 'プログラマ（Web・オープン系）',
        176 => 'プログラマ（汎用機系）',
        177 => 'プログラマ（制御・組み込み系）',
        178 => 'プログラマ（パッケージソフト・ミドルウェア）',
        179 => 'システムアナリスト',
        180 => 'システムコンサルタント（DB・ミドルウェア）',
        181 => 'システムコンサルタント（ネットワーク・通信）',
        182 => 'パッケージ導入コンサルタント',
        337 => 'セキュリティエンジニア',
        183 => 'セキュリティコンサルタント',
        184 => 'プリセールス・セールスエンジニア',
        185 => 'ネットワーク設計・ネットワーク構築',
        186 => 'サーバ設計・サーバ構築',
        187 => 'ネットワーク運用・監視',
        188 => 'サーバ・マシン運用・監視',
        189 => '導入・運用トレーナー',
        190 => '通信インフラ計画策定',
        191 => '通信インフラ設計構築（有線系）',
        192 => '通信インフラ設計構築（無線系）',
        193 => '通信インフラ設置・テスト',
        194 => 'ローカライズ',
        195 => '社内情報戦略・推進',
        196 => 'プログラマ社内システム開発・運用',
        197 => 'テクニカルサポート・ヘルプデスク',
        198 => 'その他、IT・Web・ゲーム・通信系',
        199 => 'デジタル回路設計',
        200 => 'アナログ回路設計',
        201 => 'デジアナ混載回路設計',
        202 => '高周波回路設計',
        203 => 'システムLSI回路設計',
        204 => 'デジタルIC回路設計',
        205 => 'アナログIC回路設計',
        206 => 'デジアナ混載IC回路設計',
        207 => '高周波IC回路設計',
        208 => '電源IC設計',
        209 => '光学設計',
        210 => 'システム設計',
        211 => 'その他、回路・半導体・光学・システム設計',
        212 => '制御設計（家電・AV・通信機器・コンピュータ）',
        213 => '制御設計（精密機器・医療機器）',
        214 => '制御設計（自動車・輸送機器）',
        215 => '制御設計（工作機械・ロボット・重電）',
        216 => 'その他、制御設計系',
        217 => '機械・機構設計（家電・AV・通信機器・コンピュータ）',
        218 => '機械・機構設計（精密機器・医療機器）',
        219 => '機械・機構設計（自動車・輸送機器）',
        220 => '機械・機構設計（工作機械・ロボット・重電）',
        221 => 'その他、機械・機構設計系',
        222 => '金型設計',
        223 => 'CAE解析',
        224 => 'CADオペレーター（電気・電子・機械）',
        225 => '生産・プロセス技術（家電・AV・通信機器・コンピュータ）',
        226 => '生産・プロセス技術（精密機器・医療機器）',
        227 => '生産・プロセス技術（自動車・輸送機器）',
        228 => '生産・プロセス技術（工作機械・ロボット・重電）',
        229 => '生産・プロセス技術（電子部品・半導体）',
        230 => '生産・プロセス技術（機械部品）',
        231 => 'その他、生産・プロセス技術系',
        232 => '品質保証（電気・電子・機械・半導体）',
        233 => '品質管理（電気・電子・機械・半導体）',
        234 => '生産管理・製造管理（電気・電子・機械・半導体）',
        235 => 'その他、品質保証・品質管理・生産管理・製造管理系',
        236 => 'セールスエンジニア（家電・AV・通信機器・コンピュータ）',
        237 => 'セールスエンジニア（精密機器・医療機器）',
        238 => 'セールスエンジニア（自動車・輸送機器）',
        239 => 'セールスエンジニア（工作機械・ロボット・重電）',
        240 => 'セールスエンジニア、FAE（電子部品・半導体）',
        241 => 'その他、セールスエンジニア系',
        242 => 'サービスエンジニア（家電・AV・通信機器・コンピュータ）',
        243 => 'サービスエンジニア（精密機器・医療機器）',
        244 => 'サービスエンジニア（自動車・輸送機器）',
        245 => 'サービスエンジニア（工作機械・ロボット・重電）',
        246 => 'その他、サービスエンジニア系',
        247 => '評価・検査（家電・AV・通信機器・コンピュータ）',
        248 => '評価・検査（精密機器・医療機器）',
        249 => '評価・検査（自動車・輸送機器）',
        250 => '評価・検査（工作機械・ロボット・重電）',
        251 => 'その他、評価・検査系',
        252 => '基礎研究（電気・電子・機械・半導体）',
        253 => '応用研究（電気・電子・機械・半導体）',
        254 => '特許技術者（電気・電子・機械・半導体）',
        255 => 'その他、基礎・応用・特許系',
        256 => '建築コンサルタント',
        257 => 'コンストラクションマネージャー',
        258 => '測量',
        259 => '建築設計',
        260 => '土木設計',
        261 => 'プラント設計',
        262 => '電気設備設計',
        263 => '空調設備設計',
        264 => 'その他、設計系',
        265 => 'CADオペレーター（建築）・製図',
        266 => '積算',
        267 => '構造解析',
        268 => '建築施工管理',
        269 => '土木施工管理',
        270 => 'プラント施工管理',
        271 => '電気設備施工管理',
        272 => '空調設備施工管理',
        273 => 'その他、施工管理系',
        274 => '設備保守管理',
        275 => '環境保全・管理・調査・分析',
        276 => '製品・研究開発（建築・土木・プラント・設備）',
        277 => '生産技術・生産管理（建築・土木・プラント・設備）',
        278 => '品質管理・保障（建築・土木・プラント・設備）',
        279 => '特許技術・調査',
        280 => '基礎・応用研究（化学・素材系）',
        281 => '生産・製造技術（化学・素材系）',
        282 => '設備管理（化学・素材系）',
        283 => '生産管理（化学・素材系）',
        284 => '品質管理・保証（化学・素材系）',
        285 => 'セールスエンジニア（化学・素材系）',
        286 => 'その他、化学・素材系',
        287 => '基礎・応用研究（食品・化粧品系）',
        288 => '商品・製品開発（食品・化粧品系）',
        289 => '生産・製造技術（食品・化粧品系）',
        290 => '生産管理（食品・化粧品系）',
        291 => '品質管理（食品・化粧品系）',
        292 => '申請関連（食品・化粧品系）',
        293 => 'その他、食品・化粧品系',
        294 => '研究（基礎・シーズ探索・ゲノム・バイオ）',
        295 => '前臨床研究',
        296 => '臨床開発',
        297 => '薬事申請',
        298 => '生産・製造技術（医薬品・医療機器・バイオ系）',
        299 => '生産管理（医薬品・医療機器・バイオ系）',
        300 => '品質管理（医薬品・医療機器・バイオ系）',
        301 => '学術',
        302 => 'その他、医薬品・医療機器・バイオ系',
        303 => '警備員・監視員',
        304 => '清掃・クリーニング',
        305 => 'マンション管理士',
        306 => 'ビル管理技術者',
        307 => 'ビル設備管理技能士',
        308 => '設備管理・保守（ガス・空調・上下水・消防等）',
        309 => 'その他、警備・清掃・設備管理系',
        310 => 'ドライバー・セールスドライバー・配送スタッフ',
        311 => 'ドライバー助手',
        312 => '大型ドライバー（トラック・バス・牽引）',
        313 => '引越し',
        314 => 'フォークリフト',
        315 => '新聞配達・集金',
        316 => '倉庫管理・軽作業',
        317 => '仕分け',
        318 => '品出し・ピッキング',
        319 => 'キャビンアテンダント・グランドスタッフ・パイロット',
        320 => '鉄道乗務員・船舶乗務員',
        321 => 'その他、運輸・配送・軽作業系',
        322 => '技能工（整備・メカニック）',
        323 => '技能工（生産・製造・加工・溶接）',
        324 => '技能工（建築・土木）',
        325 => '技能工（電気・通信）',
        326 => 'その他、技能工系',
        327 => '国家公務員',
        328 => '地方公務員',
        329 => '警察官',
        330 => '消防士',
        331 => '自衛隊',
        332 => '団体職員',
        333 => 'NPO・NGO職員',
        334 => '学校法人職員',
        335 => 'その他',
    ];
    public const AREA = [
        0 => '福岡市',
        1 => '福岡地方(福岡市以外)',
        2 => '北九州市',
        3 => '北九州地方(北九州市以外)',
        4 => '筑後地方',
        5 => '筑豊地方',
    ];
    public const CITY = [
        '福岡市' => [
            0 => '福岡市中央区',
            1 => '福岡市博多区',
            2 => '福岡市東区',
            3 => '福岡市南区',
            4 => '福岡市城南区',
            5 => '福岡市早良区',
            6 => '福岡市西区',
        ],
        '福岡地方(福岡市以外)' => [
            7 => '筑紫野市',
            8 => '春日市',
            9  => '大野城市',
            10 => '太宰府市',
            11 => '那珂川市',
            12 => '宗像市',
            13 => '古賀市',
            14 => '福津市',
            15 => '糟屋郡',
            16 => '糸島市',
            17 => '朝倉市',
            18 => '朝倉郡',
        ],
        '北九州市' => [
            19 => '北九州市小倉北区',
            20 => '北九州市小倉南区',
            21 => '北九州市戸畑区',
            21 => '北九州市八幡東区',
            22 => '北九州市八幡西区',
            23 => '北九州市若松区',
        ],
        '北九州地方(北九州市以外)' => [
            24 => '中間市',
            25 => '遠賀郡',
            26 => '行橋市',
            27 => '豊前市',
            28 => '京都郡',
            29 => '築上郡',
        ],
        '筑後地方' => [
            30 => '久留米市',
            31 => '小郡市',
            32 => '三井郡',
            33 => 'うきは市',
            34 => '大川市',
            35 => '三潴郡',
            36 => '八女市',
            37 => '八女郡',
            38 => '筑後市',
            39 => '大牟田市',
            40 => '柳川市',
            41 => 'みやま市',
        ],
        '筑豊地方' => [
            42 => '直方市',
            43 => '宮若市',
            44 => '鞍手郡',
            45 => '飯塚市',
            46 => '嘉麻市',
            47 => '嘉穂郡',
            48 => '田川市',
            49 => '田川郡',
        ]

    ];
}
