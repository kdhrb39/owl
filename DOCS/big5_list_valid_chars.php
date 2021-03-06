<?php
/*

1) in config/owl.php 
Mark this line --> $default->list_of_valid_chars_in_filename... 
Then add this line --> 
$include($default->owl_fs_root."/DOCS/big5_list_valid_chars.php"}; 
 
2) in download.php 
Mark this line --> header("Content-Disposition: attachment; ...) 
Then, add 3lines --> 
$str = $download_name; 
$str_result = mb_convert_encoding($str,"big5","utf-8"); 
header("Conent-Disposition: attachment; filename = \"$str_result\""); 
 
3) in view.php 
Like 2). 
 
Use khexedit to remove the garbae before the <?php in the begin of the file, DOCS/big5_list_valid_chars.php. 

*/

$default->list_of_valid_chars_in_file_names = "-A-Za-z0-9._[:space:]
丫 呀 亞 阿 迓 啞 啊 訝 婭 椏 鴉 艾 哎 唉 埃 挨 矮 隘 噯 縊 騃 厄 扼 偓 喔 握 渥 
幄 齷 庵 暗 闇 晏 丫 呀 亞 阿 迓 啞 啊 訝 婭 椏 鴉 艾 哎 唉 埃 挨 隘 噯 騃 晏 嬰 
鶯 鴨 押 遏 壓 勾 凹 拗 坳 區 嘔 歐 毆 甌 鷗 鈎 巴 叭 吧 把 爸 芭 疤 笆 靶 罷 霸 
壩 拜 敗 湃 掰 擺 白 百 伯 佰 帛 柏 迫 舶 蔔 扮 阪 板 版 班 舨 斑 頒 辦 闆 坂 蹦 
八 捌 包 胞 苞 飽 鮑 爆 陛 敝 閉 跛 幣 弊 蔽 斃 北 乓 泵 奔 品 柄 病 彬 笨 斌 稟 
賓 餅 儐 濱 檳 殯 瀕 繽 鬢 甭 崩 繃 不 拔 畢 弼 筆 跋 啤 匕 比 庇 卑 彼 泌 秘 被 
備 悲 費 痺 碑 鼻 臂 避 柄 病 餅 迫 辟 逼 碧 壁 璧 卞 弁 便 扁 貶 蝙 辨 鞭 邊 辮 
辯 變 丙 乒 冰 并 兵 並 併 秉 屏 柄 炳 病 摒 餅 必 別 鱉 表 彪 標 錶 鑣 布 佈 步 
怖 保 哺 圃 埔 捕 埠 部 報 堡 補 煲 暴 褒 簿 寶 埗 坡 波 玻 菠 跛 播 簸 噃 泊 剝 
舶 博 搏 雹 膊 駁 魄 縛 薄 邦 傍 綁 榜 膀 磅 幫 鎊 貝 杯 盃 背 狽 輩 卜 僕 瀑 曝 
半 本 伴 叛 胖 畔 般 絆 搬 勃 砵 缽 脖 渤 撥 卜 僕 瀑 曝 奔 品 彬 笨 斌 稟 賓 儐 
濱 檳 殯 瀕 繽 鬢 不 拔 畢 弼 筆 跋 拜 敗 湃 掰 擺 師 叉 岔 查 炸 差 茶 渣 搽 詫 
差 柴 豺 猜 釵 冊 拆 柵 策 賊 鍘 杉 參 慚 慘 懺 攙 蠶 讒 饞 產 殘 粲 餐 燦 鏟 撐 
橙 罉 插 刷 剎 察 擦 吵 抄 炒 巢 鈔 切 仔 沏 制 妻 砌 凄 悽 祭 掣 棲 萋 滯 製 際 
齊 劑 擠 濟 冊 拆 柵 惻 測 策 賊 鍘 杉 沉 侵 參 尋 湛 寢 慚 慘 懺 攙 蠶 讒 讖 饞 
哂 疹 陳 診 趁 塵 稱 親 襯 曾 層 踭 執 習 集 閘 緝 輯 葺 雜 襲 七 漆 質 丑 仇 囚 
抽 秋 酋 臭 惆 湊 嗅 溴 稠 酬 綢 儔 醜 疇 籌 躊 且 扯 車 邪 奢 斜 且 扯 車 邪 奢 
斜 矢 弛 次 此 池 似 豕 侈 刺 始 姒 恃 持 柿 胝 恣 恥 祠 翅 茨 蚩 瓷 疵 笞 啻 廁 
詞 彘 嗤 慈 痴 訾 貲 雉 馳 磁 誌 雌 墀 幟 賜 齒 熾 褫 遲 髭 儗 嚏 臍 癡 辭 齜 尺 
呎 赤 井 青 凈 淨 鄭 囪 昌 倡 唱 娼 猖 窗 嗆 槍 鎗 卓 桌 焯 綽 戳 鵲 丈 仗 匠 囪 
杖 昌 長 倡 唱 娼 將 張 悵 猖 祥 章 場 掌 窗 翔 脹 象 嗆 搶 腸 詳 像 彰 暢 槍 漲 
障 樟 槳 漿 獎 璋 蔣 賬 橡 牆 蟑 醬 鎗 鏘 子 之 支 止 仔 只 矢 字 寺 弛 旨 次 此 
池 自 至 伺 似 吱 址 孜 志 侈 刺 始 姊 枝 治 知 肢 芝 咫 姿 恃 持 指 柿 祇 致 差 
恥 祠 紙 翅 脂 茲 隻 匙 瓷 痔 疵 趾 眥 聇 廁 智 滋 痣 紫 詞 嗣 嗤 慈 稚 置 資 飼 
馳 漬 磁 蜘 雌 幟 摯 賜 質 踟 齒 熾 諮 遲 癡 辭 魑 耻 糍 夕 叱 斥 汐 即 赤 刺 炙 
直 矽 值 席 脊 寂 戚 植 殖 飭 跖 跡 積 縱 織 職 籍 占 尖 佔 沾 粘 詹 漸 潛 暹 瞻 
簽 殲 籤 纖 千 前 展 荐 剪 淺 煎 箋 箭 賤 踐 遷 戰 錢 餞 氈 輾 濺 顜 闡 闡 纏 顫 
井 正 呈 阱 青 拯 政 貞 症 凈 偵 情 清 淨 逞 晴 晶 程 菁 証 睛 靖 稱 精 蒸 蜻 徵 
澄 請 整 靜 騁 懲 妾 切 折 哲 浙 捷 設 掣 睫 節 徹 截 撤 澈 轍 肖 俏 昭 峭 悄 朝 
超 憔 潮 樵 瞧 早 灶 盾 祖 租 草 蚤 做 措 曹 粗 組 造 棗 嘈 槽 遭 醋 噪 操 澡 燥 
糟 糙 躁 坐 初 挫 楚 磋 錯 蹉 礎 雛 才 材 采 財 彩 採 菜 裁 塞 綵 蔡 賽 錯 壯 妝 
床 狀 倉 莊 傖 創 敞 滄 葬 裝 僮 蒼 廠 撞 樁 瘡 艙 藏 藏 闖 贓 臟 髒 戇 䱽 牀 坐 
初 挫 楚 磋 錯 蹉 礎 雛 州 舟 周 洲 週 鄒 謅 主 朱 住 注 株 珠 煮 著 蛛 誅 銖 諸 
豬 駐 鑄 柱 除 處 貯 署 廚 儲 櫥 躇 躕 灼 芍 桌 酌 雀 著 焯 爵 嚼 寸 川 全 吋 存 
忖 串 村 佺 泉 穿 恮 荃 烇 牷 痊 喘 揣 筌 絟 傳 詮 瑔 輇 銓 駩 醛 竄 邨 猝 撮 吹 
取 炊 徐 脆 除 娶 崔 隋 催 搥 摧 翠 廚 趣 隨 趨 錘 鎚  竹 束 足 竺 促 俗 捉 畜 
祝 族 速 逐 筑 粥 軸 搐 蓄 濁 築 燭 觸 續 囑 矗 矚 枕 怎 浸 針 斟 圳 旬 巡 俊 春 
津 珍 准 峻 振 晉 疹 真 秦 陣 循 竣 診 進 準 椿 甄 盡 賑 諄 震 儘 樽 臻 遵 駿 燼 
鎮 蠢 中 充 匆 仲 囪 沖 宗 忠 松 盅 重 冢 衷 從 眾 終 舂 訟 荵 棕 腫 頌 種 粽 綜 
誦 衝 總 縱 聰 鍾 蟲 蹤 寵 鐘 糉 葱 緝 輯 出 打 大 歹 呆 帶 獃 戴 耽 啖 淡 氮 擔 
膽 胆 丹 旦 但 蛋 單 彈 憚 誕 答 踏 蹋 達 大 低 弟 底 抵 邸 帝 第 棣 詆 逮 蒂 遞 
締 諦 隸 特 得 德 墩 潡 燉 躉 驐 登 等 凳 鄧 燈 瞪 櫈 凸 突 斗 抖 豆 蚪 陡 鬥 兜 
逗 荳 痘 竇 讀 爹 啲 地 笛 釘 啄 狄 的 迪 嫡 滴 滌 翟 敵 店 點 甸 典 奠 殿 碘 電 
墊 澱 顛 巔 癲 丁 叮 定 訂 釘 頂 鼎 迭 秩 喋 跌 牒 碟 蝶 諜 疊 迭 秩 跌 刁 弔 丟 
吊 凋 掉 釣 貂 調 雕 鵰 刀 叨 妒 杜 到 度 倒 島 堵 悼 都 渡 盜 搗 睹 道 稻 賭 導 
蹈 鍍 多 朵 惰 躲 墮 代 岱 待 怠 袋 逮 黛 鐸 當 擋 蕩 檔 盪 黨 多 朵 惰 躲 墮 段 
短 端 緞 鍛 斷 奪 兌 堆 隊 對 毒 督 獨 篤 牘 犢 讀 敦 敦 鈍 遁 頓 墩 噸 燉 蹲 冬 
東 洞 凍 動 棟 董 慟 懂 衣 依 化 花 華 快 傀 塊 筷 凡 反 犯 帆 泛 返 范 梵 販 番 
飯 煩 樊 範 繁 翻 瓣 藩 法 發 髮 吠 快 沸 肺 傀 揮 費 塊 筷 廢 輝 徽 分 反 份 吩 
汾 坋 妢 忿 昏 氛 芬 返 昐 枌 玢 砏 秎 粉 紛 訓 羒 翂 衯 婚 酚 焚 番 鈖 雰 熏 蒶 
墳 憤 魵 勳 奮 蕡 糞 翻 薰 醺 瞓 乏 弗 伐 佛 囫 彿 忽 拂 法 發 筏 窟 罰 閥 髮 否 
阜 剖 浮 埠 啡 妃 肥 非 飛 匪 啡 扉 斐 菲 翡 緋 誹 霏 凡 犯 帆 泛 范 梵 販 飯 煩 
樊 範 繁 瓣 藩 妃 非 飛 扉 菲 緋 霏 火 伙 杝 科 貨 棵 稞 夥 蝌 課 顆 騍 火 伙 杝 
科 貨 棵 稞 夥 蝌 課 顆 騍 縛 霍 方 仿 坊 妨 彷 防 房 放 況 肪 芳 怳 恍 晃 紡 舫 
荒 訪 幌 慌 髣 謊 謊 仆 夫 父 乎 付 孚 扶 甫 呼 咐 府 斧 芙 虎 附 俘 枯 苦 訃 負 
赴 俯 庫 釜 副 婦 符 脯 傅 富 腑 孵 腐 腐 輔 撫 敷 膚 賦 褲 灰 奎 恢 悔 晦 詼 賄 
誨 魁 伏 服 幅 復 袱 腹 福 蝠 複 輻 覆 款 寬 歡 闊 仆 夫 父 乎 付 孚 扶 甫 呼 咐 
府 斧 芙 虎 附 俘 枯 苦 訃 負 赴 俯 庫 釜 副 婦 符 脯 傅 富 腑 孵 腐 腐 輔 撫 敷 
膚 賦 褲 灰 奎 恢 悔 晦 詼 賄 誨 魁 伏 服 幅 復 袱 腹 福 蝠 複 輻 覆 分 份 吩 汾 
坋 妢 忿 昏 氛 芬 昐 枌 玢 砏 秎 粉 紛 訓 羒 翂 衯 婚 酚 焚 鈖 雰 熏 蒶 墳 憤 魵 
勳 奮 蕡 糞 薰 醺 丰 奉 封 風 俸 峰 烽 逢 馮 楓 蜂 瘋 鳳 鋒 諷 篷 縫 縫 豐 加 咖 
架 茄 迦 家 假 袈 傢 嫁 賈 嘉 價 稼 駕 介 尬 戒 佳 屆 芥 界 皆 偕 街 階 解 誡 懈 
革 格 胳 隔 減 監 緘 尷 鑑 鑒 奸 姦 柬 揀 間 澗 艱 簡 繭 鹼 更 耕 甲 夾 鉀 頰 交 
姣 狡 郊 校 教 皎 絞 飫 搞 跤 較 酵 餃 膠 覺 攪 計 雞 繼 今 甘 金 柑 敢 感 禁 橄 
鋸 錦 巾 斤 近 觔 根 筋 僅 跟 緊 艱 謹 猄 亙 更 庚 耕 耿 梗 羹 急 蛤 蓋 鴿 吉 訖 
九 久 勾 灸 玖 究 咎 狗 糾 垢 苟 赳 韭 夠 救 釣 溝 詬 構 購 舊 己 肌 妓 忌 技 奇 
既 玳 紀 姬 記 基 寄 幾 畸 箕 機 璣 磯 譏 羈 頸 鏡 腳 姜 薑 疆 韁 棘 極 激 擊 兼 
儉 劍 撿 檢 件 見 肩 建 健 堅 毽 鍵 毡 京 勁 矜 徑 涇 荊 逕 竟 景 敬 經 兢 境 競 
警 驚 劫 傑 痘 結 潔 叫 嬌 撬 澆 矯 繳 轎 驕 告 高 膏 稿 糕 個 哥 歌 改 該 蓋 各 
角 鉻 閣 擱 覺 干 杆 肝 竿 赶 乾 幹 亢 扛 江 肛 岡 缸 降 剛 崗 港 綱 鋼 講 古 估 
固 姑 孤 沽 股 故 辜 菇 賈 鈷 鼓 僱 顧 蠻 官 冠 貫 棺 管 館 灌 罐 觀 割 葛 券 卷 
倦 娟 捐 涓 圈 捲 眷 絹 鵑 句 巨 車 具 居 炬 矩 踞 據 鋸 舉 颶 懼 局 谷 侷 菊 穀 
鞠 工 弓 公 功 共 攻 供 拱 宮 恭 貢 躬 鞏 瓜 卦 呱 挂 掛 寡 褂 乖 怪 拐 摑 慣 綸 
關 刮 颳 圭 季 癸 軌 桂 鬼 悸 貴 詭 跪 瑰 閨 龜 櫃 歸 餽 君 均 昆 軍 郡 棍 鈞 滾 
轟 倔 骨 崛 掘 滑 橘 隙 闃 炯 戈 果 過 裹 國 郭 幗 廓 光 胱 廣 下 吓 哈 夏 蛤 廈 
暇 瑕 遐 蝦 霞 虾  咳 孩 械 揩 解 鞋 懈 諧 駭 骸 邂 蟹 客 赫 嚇 函 咸 涵 陷 喊 
銜 檻 鹹 限 閑 閒 嫻 癇 坑 匣 呷 狎 俠 峽 挾 狹 巧 考 孝 拷 哮 效 校 烤 傚 敲 酵 
兮 系 係 喺 咳 孩 奚 械 揩 解 鞋 懈 諧 駭 骸 邂 繫 蟹 喺 可 克 刻 客 黑 赫 嚇 含 
坎 函 咸 砍 勘 涵 陷 喊 堪 嵌 銜 憾 撼 檻 鹹 很 恨 狠 限 痕 閑 閒 嫻 墾 懇 癇 行 
亨 坑 杏 幸 肯 恨 恆 狠 倖 哼 痕 莖 墾 衡 懇 鏗 合 恰 洽 盒 瞌 哈 蛤 蝦 乞 核 瞎 
轄 口 巧 后 考 吼 孝 侯 厚 後 拷 候 哮 效 校 烤 傚 喉 猴 敲 酵 希 汽 氣 豈 起 棄 
喜 欺 稀 熙 嘻 嬉 器 熹 戲 禧 曦 犧 囍 吃 靴 向 享 香 晌 鄉 餉 嚮 響 饗 欠 歉 險 
謙 衍 軒 掀 牽 蜆 遣 憲 獻 譴 顯 兄 卿 氫 輕 慶 興 罄 馨 協 怯 挾 脅 歉 歇 蝎 梟 
僥 撬 曉 竅 囂 可 好 何 呵 坷 河 苛 浩 耗 毫 荷 號 豪 壕 蠔 可 何 呵 坷 河 苛 荷 
賀 亥 害 氦 海 凱 賀 開 頦 骸 殼 學 鶴 売 刊 汗 旱 罕 看 悍 捍 寒 漢 翰 韓 鼾 瀚 
匡 行 杭 巷 降 香 航 康 腔 項 慷 骯 合 恰 洽 盒 瞌 賀 喝 渴 口 吼 侯 喉 猴 瑄 犬 
券 昍 圈 喧 絢 萱 楦 勸  血 去 栩 許 虛 噓 墟 哭 酷 磡 冚 凶 孔 兇 匈 汞 空 哄 
洪 洶 紅 虹 恐 烘 胸 控 雄 熊 鴻 爾 染 焰 熱 抓 咋 咱 查 炸 渣 詐 搾 榨 債 寨 齋 
宅 咋 窄 責 摘 翟 擇 澤 擲 站 斬 湛 嶄 暫 棧 盞 綻 撰 賺 贊 讚  掙 眨 砸 習 集 
閘 雜 襲 扎 札 軋 紮 爪 找 抓 肘 罩 嘲 驟 仔 制 祭 掣 滯 製 際 劑 擠 濟 仄 則 側 
鰂 枕 怎 浸 針 斟 鉆 圳 珍 振 疹 真 陣 診 甄 賑 震 鎮 爭 猙 曾 睜 僧 箏 增 憎 贈 
汁 執 侄 姪 疾 窒 嫉 質 蟄 甴 州 舟 肘 走 咒 周 宙 帚 奏 洲 酒 晝 袖 就 週 鄒 皺 
謅 驟 姐 者 借 這 嗟 蔗 遮 鍺 謝 藉 鷓 啫 炙 隻 蓆 井 凈 淨 鄭 灼 芍 桌 酌 雀 著 
焯 爵 嚼 着 丈 仗 匠 杖 長 將 帳 張 章 掌 脹 象 像 彰 漲 障 樟 槳 漿 獎 璋 蔣 賬 
橡 蟑 醬 子 之 支 止 仔 只 字 寺 旨 自 至 伺 吱 址 孜 志 姊 枝 治 知 肢 芝 咫 姿 
指 祇 致 紙 脂 茲 隻 痔 趾 眥 智 滋 痣 紫 嗣 稚 置 資 飼 漬 蜘 摯 質 諮 夕 汐 即 
炙 直 矽 值 席 脊 寂 植 殖 跖 跡 積 縱 織 職 籍 占 尖 佔 沾 粘 詹 漸 瞻 展 荐 剪 
煎 箋 箭 賤 戰 餞 氈 輾 濺 顜 闡 顫  井 正 阱 政 貞 症 凈 偵 淨 晶 菁 証 睛 靖 
精 蒸 徵 整 靜 接 摺 輒 折 哲 浙 捷 睫 節 截 召 招 沼 朝 椒 焦 照 趙 蕉 礁 醮 早 
灶 皂 盾 祖 租 蚤 做 組 造 棗 遭 澡 糟 左 佐 助 坐 阻 座 咗 再 在 災 哉 宰 栽 載 
作 昨 鑿 壯 妝 狀 莊 葬 裝 僮 撞 樁 藏 贓 臟 髒 戇 主 朱 住 注 株 珠 煮 著 蛛 誅 
銖 諸 豬 駐 鑄 專 尊 傳 磚 轉 纂 鑽 拙 啜 絀 絕 綴 序 咀 沮 追 敘 最 罪 綴 聚 嘴 
墜 醉 錐 嶼  竹 足 竺 俗 捉 祝 族 逐 筑 粥 軸 濁 築 燭 觸 續 囑 矚 俊 津 准 峻 
晉 竣 進 準 盡 諄 儘 樽 臻 遵 駿 燼 中 仲 宗 忠 盅 重 衷 眾 終 舂 訟 棕 腫 頌 種 
粽 綜 誦 總 縱 鍾 蹤 卒 黜 加 卡 咖 茄 迦 家 袈 傢 嘉 楷 銬 靠 介 尬 戒 佳 屆 芥 
契 界 皆 計 偕 啟 街 階 溪 解 誡 稽 懈 雞 繼  革 格 胳 隔 今 甘 金 咁 柑 敢 琴 
感 禁 禽 擒 橄 鋸 錦 襟 巾 斤 奸 芹 近 姦 柬 觔 根 揀 筋 間 僅 勤 跟 靳 緊 澗 艱 
艱 簡 謹 繭 鹼 猄 亙 更 庚 耕 耿 梗 羹 及 甲 吸 夾 岌 汲 級 給 鉀 頰 曱 咖 架 假 
嫁 賈 價 稼 駕 㗎 吉 咳 九 久 仇 勾 叩 扣 求 灸 玖 究 咎 狗 糾 垢 苟 赳 韭 夠 寇 
救 球 釦 釣 逑 溝 舅 裘 詬 構 蔻 購 舊 韮 伽 茄 瘸 騎 既 記 寄 企 岐 其 奇 歧 祈 
祇 耆 崎 期 棋 祺 旗 暨 冀 騎 麒 鰭 驥 劇 卻 噱 姜 強 薑 疆 韁 羗 己 肌 妓 忌 技 
奇 既 玳 紀 姬 記 基 寄 幾 畸 箕 機 璣 磯 譏 羈 拑 兼 鉗 儉 劍 撿 檢 件 見 肩 建 
虔 乾 健 堅 毽 鍵 京 勁 矜 徑 涇 荊 逕 竟 頃 景 傾 敬 經 兢 境 擎 瓊 鯨 競 警 驚 
琼 杰 契 傑 揭 痘 結 竭 潔 叫 喬 僑 嬌 撬 澆 橋 矯 竅 繳 轎 驕 告 個 哥 高 歌 膏 
稿 糕 丐 改 慨 溉 鈣 概 該 蓋 各 角 确 榷 鉻 閣 愨 確 壑 擱 覺 干 杆 肝 竿 赶 乾 
幹 亢 伉 扛 江 抗 肛 岡 炕 缸 降 剛 崗 港 慷 綱 講 擴 古 估 固 姑 孤 沽 股 故 辜 
菇 賈 鈷 鼓 僱 顧 蠻 會 劊 潰 繪 官 冠 莞 貫 棺 管 館 灌 罐 觀 括 豁 割 葛 古 估 
固 姑 孤 沽 股 故 辜 菇 賈 鈷 鼓 僱 顧 蠻 檜 拳 權 顴 抉 決 缺 訣 厥 獗 闋 句 巨 
車 佢 具 居 拒 拘 炬 俱 矩 區 渠 距 踞 駒 據 鋸 舉 颶 軀 懼 驅 曲 局 谷 侷 焗 菊 
穀 鞠 粬 唂 工 弓 公 功 共 攻 供 拱 宮 恭 貢 躬 窮 鞏 龔 括 垮 誇 跨 框 眶 逛 筐 
圭 季 癸 軌 桂 鬼 悸 盔 規 傀 貴 葵 詭 跪 瑰 愧 閨 窺 龜 虧 櫃 歸 餽 攜 君 困 均 
坤 昆 軍 捆 郡 崑 棍 睏 窘 菌 鈞 絪 群 裙 滾 關 戈 果 過 裹 菓 嗰 國 郭 幗 廓 廓 
擴 光 狂 胱 廣 擴 鄺 曠 礦 啦 喇 辣 罅 拉 賴 癩 肋 婪 濫 檻 藍 籃 艦 覽 攬 欖 纜 
闌 懶 攔 瀾 欄 爛 蘭 冷 立 垃 臘 蠟 辣 撈 例 拉 荔 厲 黎 賴 勵 禮 麗 礪 儷 癩 肋 
勒 林 婪 淋 琳 凜 霖 濫 臨 檻 藍 籃 艦 覽 攬 欖 纜 靚 闌 懶 攔 瀾 欄 爛 蘭 冷 立 
垃 笠 臘 蠟  甩 喇 柳 流 陋 琉 留 硫 溜 摟 榴 漏 劉 樓 瘤 露 裸 羅 騾 囉 蘿 邏 
籮 鑼 哩 吏 利 李 里 俐 俚 厘 哩 浬 狸 梨 理 莉 喱 痢 裡 蒞 履 璃 罹 釐 離 鯉 籬 
尼 吏 你 利 李 里 呢 妮 泥 俐 俚 厘 哩 浬 狸 您 梨 理 莉 喱 痢 裡 蒞 餌 履 璃 罹 
膩 彌 釐 離 鯉 瀰 籬 脷 靚 嶺 掠 略 良 兩 亮 倆 梁 涼 量 粱 樑 諒 輛 糧 両 璃 罹 
釐 離 籬 力 曆 歷 瀝 靂 靂 廉 斂 殮 臉 簾 鐮 連 煉 憐 練 蓮 鍊 鏈 令 另 伶 囹 玲 
凌 聆 陵 愣 菱 鈴 零 綾 領 嶺 齡 靈 獵 躐 列 冽 烈 裂 了 尿 料 聊 鳥 溺 僚 寥 廖 
寮 撩 潦 燎 遼 療 瞭 老 牢 姥 鹵 勞 虜 賂 路 嘮 潦 魯 擄 盧 癆 廬 櫓 爐 蘆 露 顱 
 裸 羅 騾 囉 邏 籮 鑼 耒 來 徠 萊 洛 烙 絡 落 樂 駱 郎 朗 浪 狼 廊 螂 亂 聯 孿 
巒 戀 戀 攣 鑾 劣 耒 呂 侶 旅 淚 累 裡 裏 雷 屢 履 慮 磊 鋁 擂 儡 縷 蕾 褸 壘 濾 
櫚 類 纍 六 陸 鹿 氯 碌 祿 綠 戮 錄 冧 卵 吝 倫 崙 淪 圇 綸 論 輪 鄰 磷 鱗 麟 欒 
躪 鑾 粦 弄 隆 龍 壟 攏 瀧 嚨 朧 瓏 矓 礱 籠 聾 燶 律 栗 率 溧 孖 馬 麻 嗎 媽 痲 
嘛 瑪 碼 螞 蟆 埋 買 賣 邁 曼 晚 萬 幔 慢 漫 蔓 謾 饅 鰻 蠻 孟 盲 猛 蜢 繃 卯 矛 
牡 茅 貌 貓 錨 米 咪 弭 埋 迷 眯 買 賣 謎 邁 陌 脈 麥 墨 默 驀 文 民 吻 炆 紋 紊 
蚊 曼 問 敏 晚 閔 萬 幔 慢 漫 聞 閩 憫 蔓 謾 饅 鰻 蠻 鰵 孟 盲 猛 萌 盟 蜢 繃 鯭 
卯 矛 牡 茅 貌 貓 錨 勿 物 密 蜜 襪 袜 牟 某 茂 畝 貿 謀 繆 謬 踎 未 尾 味 弭 眉 
美 娓 媚 寐 湄 嵋 微 糜 薇 鎂 瀰 蘼 孭 命 未 尾 味 咪 弭 娓 媚 寐 渼 魅 鎂 蘼 覓 
免 勉 面 娩 眠 冕 棉 綿 緬 麵 皿 名 命 明 冥 茗 銘 鳴 瞑 滅 蔑 妙 秒 苗 描 渺 淼 
瞄 廟 緲 繆 藐 亡 冇 毋 毛 戊 母 巫 姆 武 侮 冒 姥 務 帽 無 募 墓 舞 誣 髦 慕 摹 
暮 模 蕪 霧 鵡 摸 麼 摩 磨 魔 剝 莫 寞 幕 摸 漠 膜 亡 妄 忙 忘 芒 氓 茫 惘 望 網 
每 妹 枚 玫 昧 梅 媒 煤 霉 門 炆 們 悶 滿 瞞 末 沒 抹 歿 沫 茉 摸 麼 摩 磨 魔 每 
妹 枚 玫 昧 梅 媒 煤 霉 木 目 沐 牧 睦 穆 乜 夢 蒙 濛 朦 檬 懵 懵 矇 末 沒 抹 歿 
沫 茉 那 哪 娜 拿 乸 嗱 乃 奶 男 南 喃 楠 腩 難 吶 納 捺 撓 鬧 泥 男 南 喃 楠 腩 
能 凹 粒  朽 妞 扭 紐 鈕 呢 尼 你 呢 妮 泥 您 餌 膩 彌 瀰 娘 五 午 伍 吾 吳 唔 
悟 晤 誤 牙 瓦 芽 雅 衙 艾 崖 捱 涯 逆 額 岩 癌 巖 眼 雁 顏 硬 咬 淆 餚 㘭 抝 危 
倪 偽 詣 毅 霓 魏 藝 蟻 巍 囈 壓 岩 癌 巖 奀 眼 雁 銀 顏 靭 兀 屹 迄 訖 勾 牛 偶 
釣 藕 我 臥 俄 哦 娥 峨 訛 傲 蛾 熬 餓 鵝 我 臥 俄 哦 娥 峨 訛 蛾 餓 鵝 外 呆 獃 
礙 岳 愕 樂 噩 嶽 顎 鱷 岸 昂 戇 尼 你 呢 妮 泥 您 餌 膩 彌 瀰 匿 溺 廿 念 唸 粘 
黏 年 寧 擰 檸 捏 聶 尿 鳥 溺 奴 努 佬 弩 怒 惱 腦 娜 挪 懦 糯 內 奈 耐 諾 囊 挪 
暖 嫩 女 能 農 儂 濃 膿 阿 塢 奧 懊 澳 燠 襖 柯 哦 婀 哀 唉 埃 愛 噯 曖 靄 㗒 惡 
安 按 案 氨 鞍 盎 柯 巴 叭 扒 吧 把 怕 杷 爬 爸 芭 疤 笆 琶 靶 罷 霸 壩 派 排 湃 
牌 帕 拍 柏 珀 啪 魄 扳 盼 攀 烹 彭 棒 棚 澎 膨 鵬 刨 咆 拋 泡 炮 砲 豹 跑 批 派 
排 湃 牌 白 百 伯 佰 帕 帛 拍 柏 珀 迫 啪 舶 蔔 魄 扳 扮 阪 板 版 盼 班 舨 貧 斑 
頒 噴 辦 頻 闆 攀 瀕 朋 烹 彭 棒 棚 澎 憑 膨 鵬 八 匹 疋 包 胞 苞 剖 飽 鮑 爆 匕 
比 丕 皮 屁 庇 卑 彼 披 枇 泌 毗 疲 秘 婢 被 備 悲 琵 脾 費 痺 碑 鄙 鼻 臂 避 譬 
肶 劈 辟 碧 僻 壁 璧 癖 闢 片 便 偏 遍 篇 編 翩 騙 平 乒 坪 抨 怦 屏 拼 砰 瓶 萍 
評 聘 蘋 必 別 撇 瞥 鱉 票 嫖 漂 瓢 縹 飄 布 佈 步 甫 怖 抱 泡 保 哺 圃 埔 捕 浦 
埠 脯 袍 部 報 堡 普 菩 溥 葡 補 煲 蒲 暴 褒 鋪 舖 簿 譜 寶 叵 坡 破 婆 頗 泊 剝 
舶 博 搏 雹 膊 駁 撲 魄 樸 縛 薄 乓 彷 旁 蚌 傍 徬 滂 膀 磅 螃 謗 龐 沛 佩 胚 倍 
珮 配 培 徘 陪 蓓 賠 判 拌 拚 盆 胖 番 潘 盤 磐 潑 播 沛 貝 佩 杯 盃 胚 背 倍 狽 
珮 配 培 徘 陪 蓓 賠 輩 仆 半 本 伴 判 拌 拚 叛 盆 胖 胖 畔 般 絆 番 搬 潘 盤 磐 
捧 碰 蓬 勃 砵 缽 脖 渤 撥 薈 冧 卅 沙 砂 耍 洒 紗 莎 啥 鯊 灑 晒 舐 徙 璽 曬 索 
三 杉 衫 參 山 汕 刪 姍 柵 珊 閂 栓 涮 傘 孱 散 潺 篡 生 牲 省 笙 甥 圾 烚 烚 霎 
澀 剎 殺 煞 撒 薩 哨 梢 稍 筲 世 西 使 洗 細 逝 婿 犀 勢 誓 駛 噬 篩 塞 三 什 心 
岑 忱 杉 沁 沈 芯 甚 衫 參 深 森 滲 審 諗 嬸 叁 申 臣 伸 身 辛 辰 呻 神 晨 紳 腎 
慎 新 鋅 薪 生 牲 省 笙 甥 僧 十 什 拾 烚 澀 濕 失 虱 剎 室 殺 煞 瑟 實 撒 膝 薩 
仇 手 守 收 秀 受 狩 首 修 叟 售 宿 授 羞 琇 愁 搜 嗽 壽 漱 瘦 艘 擻 繡 獸 鏽  
綉 佘 些 卸 社 舍 射 捨 蛇 赦 寫 瀉 麝 四 死 肆 石 碩 錫 腥 削 爍 上 尚 相 商 常 
廂 湘 傷 想 嘗 嫦 裳 箱 賞 償 襄 霜 雙 孀 鑲 双 省 衫 山 汕 刪 姍 柵 珊 省 閂 栓 
涮 傘 孱 散 潺 篡 十 什 拾 澀 濕 失 虱 室 瑟 實 膝 仇 手 守 秀 受 狩 首 叟 售 宿 
授 琇 愁 搜 嗽 壽 漱 瘦 擻 繡 獸 鏽 佘 些 卸 社 舍 射 捨 蛇 赦 寫 瀉 麝 石 碩 錫 
上 尚 相 商 常 廂 湘 傷 想 嘗 嫦 裳 箱 賞 償 襄 霜 雙 孀 鑲 双 奭 嬋 蟾 閃 禪 丞 
成 承 城 乘 盛 誠 攝 兆 劭 邵 紹 肇 韶 燒 所 數 蔬 恕 書 殊 舒 澍 樹 水 垂 稅 萃 
瑞 遂 穗 淑 菽 岑 沈 汛 迅 信 純 訊 筍 舜 順 遜 醇 瞬 笋 崇 室 士 氏 仕 司 史 市 
示 死 私 事 侍 使 屎 屍 峙 思 恃 施 是 俬 師 時 匙 豉 斯 絲 視 嗜 弒 獅 肆 試 詩 
廝 撕 澌 式 色 昔 析 拭 食 息 悉 惜 晰 嗇 媳 飾 熄 蝕 適 澀 蟋 識 釋 閃 陝 嬋 禪 
簷 贍 仙 先 冼 倩 扇 凊 茜 單 善 羨 腺 煽 線 擅 膳 禪 鮮 繕 蟬 癬 鱔 綫 升 丞 成 
姓 性 承 昇 城 星 省 乘 陞 盛 剩 勝 惺 猩 聖 腥 誠 醒 聲 繩 涉 攝 舌 泄 契 洩 泚 
屑 燮 薛 褻 竊 蝕 小 少 兆 肖 邵 宵 消 笑 紹 逍 筱 肇 嘯 銷 霄 燒 蕭 簫 素 掃 梭 
甦 訴 酥 塑 嫂 搔 溯 漱 數 穌 蘇 騷 鬚 所 唆 梳 梭 疏 莎 傻 嗦 瑣 蔬 鎖 鰓 朔 索 
數 桑 爽 喪 嗓 須 戍 抒 恕 書 殊 庶 暑 舒 黍 鼠 樞 豎 樹 輸 曙 薯 宣 孫 旋 船 巽 
飧 損 漩 算 蒜 酸 篆 璇 選 雪 說 水 垂 帥 祟 衰 悴 稅 絮 萃 陲 須 歲 瑞 碎 蛻 遂 
墅 摔 睡 粹 緒 說 需 誰 隧 穗 雖 髓 夙 叔 孰 宿 淑 粟 肅 塞 蜀 塾 熟 熟 縮 屬 贖 
心 參 深 森 琛 申 汛 伸 辛 辰 迅 信 殉 神 純 訊 甡 晨 淳 紳 脣 筍 舜 順 慎 新 詢 
馴 遜 篆 醇 燊 瞬 宋 送 崇 崧 從 嵩 慫 聳 鬆 餸 戌 恤 述 率 術 實 摔 蟀 裇 士 斗 
仕 司 史 市 示 私 事 侍 使 泗 思 施 是 師 時 斯 絲 視 獅 肆 詩 他 它 打 她 牠 咑 
祂 太 汰 泰 貸 態 探 貪 毯 痰 潭 談 曇 譚 坦 炭 袒 嘆 碳 彈 歎 壇 檀 攤 灘 癱 塔 
塌 大 太 弟 呔 剃 帝 娣 泰 涕 睇 屜 帶 梯 第 埭 啼 堤 提 替 蒂 蹄 嚏 戴 題 體 軚 
凸 突 特 得 德 淡 潭 談 譚 丹 但 吞 單 壇 褪 檀 躉 灘 疼 登 滕 鄧 燈 藤 騰 籐 稻 
斗 投 豆 偷 透 頭  踢 艇 聽 廳 唾 啄 琢 狄 的 迪 剔 惕 荻 逖 敵 店 恬 添 甜 掂 
舔 點 天 田 甸 典 填 殿 滇 鈿 電 丁 叮 汀 廷 定 亭 庭 挺 釘 停 頂 婷 艇 蜓 鼎 霆 
聽 廳 帖 貼 碟 蝶 跌 鐵 刁 挑 迢 彫 條 眺 跳 調 雕 刀 土 叨 吐 妥 杜 肚 兔 拖 度 
套 島 徒 桃 討 逃 涂 堵 屠 掏 淘 途 都 陶 唾 渡 萄 菟 塗 滔 道 圖 導 濤 禱 妥 拖 
沱 陀 舵 唾 跎 駝 橢 代 台 岱 抬 怠 玳 胎 苔 袋 臺 颱 黛 檯 枱 托 拓 託 魄 倘 唐 
堂 棠 湯 塘 當 瑭 熨 膛 趟 躺 噹 燙 糖 螳 璫 劏 濟 燦 贊 讚 曾 增 贈 踭 雜 七 柒 
漆 走 酒 就 榭 謝 著 爵 匠 翔 象 蔣 牆 席 戚 積 績 尖 詹 漸 暹 千 仟 前 剪 淺 箭 
遷 情 蜻 接 切 左 佐 灶 租 草 造 棗 遭 操 再 宰 載 賽 作 咀 聚 趣 趨 咀 峻 徐 晉 
崔 最 翠 醉 隨 續 寸 川 村 巡 俊 津 穿 唆 泰 浚 尊 循 竣 進 雋 溙 臻 親 駿 纘 鑽 
松 從 叢 次 紫 慈 磁 賜 屯 豚 團 端 臀 脫 退 推 蛻 對 腿 頹 禿 篤 讀 氹 屯 盾 惇 
敦 湍 燉 冬 仝 同 彤 佟 東 洞 桐 動 桶 統 通 棟 痛 童 筒 董 僮 銅 熥 瞳 奪 屋 渥 
鴛 奀 甕 乙 划 哇 娃 畫 華 蛙 話 窪 嘩 蝸 樺 歪 淮 槐 壞 懷 或 惑 畫 劃 幻 玩 宦 
挽 患 頑 寰 環 還 鯇 彎 灣 橫 挖 滑 猾 華 樺 驊 卉 位 委 威 為 畏 胃 韋 桅 偉 唯 
尉 惟 淮 喂 圍 幃 惠 渭 猥 萎 湋 毀 違 暐 煒 瑋 槐 維 慧 慰 緯 蔚 衛 蕙 諱 謂 遺 
燬 餵 穢 懷 譭 畫 獲 尹 云 允 勻 幻 芸 挽 紜 混 渾 雲 暈 溫 運 隕 魂 殞 熨 瘟 澐 
寰 醞 薀 穩 韻 蘊 灣 揾 弘 汐 宏 浤 棋 屈 核 滑 熨 鬱 洧 域 扔 永 泳 詠 榮 穎 顈 
禾 和 窩 鍋 煱 禾 和 渦 禍 窩 蝸 鍋 獲 穫 鑊 王 汪 往 旺 枉 皇 凰 徨 惶 黃 煌 蝗 
璜 互 戶 污 芋 弧 狐 胡 烏 壺 惡 湖 嗚 塢 瑚 滬 滸 糊 蝴 護 活 回 徊 茴 偎 匯 會 
煨 燴 玩 垣 桓 院 浣 惋 喚 援 換 渙 腕 煥 碗 瘓 緩 活 互 戶 污 胡 烏 壺 換 湖 鄔 
滬 蝴 鬍 護 回 迴 匯 會 燴 也 廿 隘 壬 任 吟 妊 音 淫 陰 欽 飪 飲 喑 賃 瘖 蔭 人 
刃 仁 引 孕 印 因 忍 忻 欣 姻 恩 殷 茵 蚓 寅 湮 韌 甄 認 隱 癮 釁 入 邑 泣 一 日 
壹 腋 逸 溢 鎰 又 友 尤 幻 丘 右 幼 由 休 有 朽 佑 攸 酉 油 邱 幽 柔 柚 酋 祐 悠 
蚯 揉 游 猶 郵 猷 遊 釉 鈾 誘 憂 魷 蹂 優 鼬  鮋 廿 冶 夜 耶 野 惹 椰 爺 嘢 二 
以 伊 而 耳 衣 依 兒 宜 怡 易 倚 異 貳 貽 詒 意 義 漪 綺 儀 誼 頤 薏 醫 懿 夜 耶 
野 椰 贏 曰 約 若 虐 弱 瘧 藥 躍 鑰 央 仰 羊 佯 殃 洋 恙 氧 揚 陽 楊 漾 瘍 樣 養 
鴦 嚷 壤 癢 讓 釀 二 已 以 伊 夷 而 耳 衣 矣 依 兒 宜 怡 易 咦 姨 倚 異 移 蛇 椅 
貳 貽 意 義 漪 爾 疑 綺 儀 誼 頤 擬 彝 邇 醫 議 弍 亦 役 抑 易 奕 弈 疫 益 逆 液 
翌 腋 億 憶 翼 繹 譯 炎 染 掩 淹 焰 棪 琰 嫌 厭 燄 閻 簷 嚴 驗 艷 鹽 豔 妍 見 言 
延 弦 咽 彥 研 衍 唁 宴 殷 胭 偃 涎 焉 現 絃 舷 然 硯 毽 煙 嫣 演 筵 鄢 賢 燕 燃 
諺 鴛 嚥 仍 扔 刑 形 邢 迎 型 映 盈 英 瑛 熒 認 影 瑩 凝 縈 螢 嬰 應 營 膺 瀛 蠅 
贏 櫻 纓 鷹 鸚 頁 業 葉 咽 噎 熱 孽 么 夭 妖 姚 要 堯 搖 腰 瑤 遙 嶢 謠 邀 擾 曜 
繞 耀 饒 喲 于 予 如 宇 汝 羽 余 迂 乳 於 盂 臾 雨 俞 禹 竽 圄 娛 茹 庾 御 淤 酗 
魚 喻 寓 愉 渝 隅 愚 愈 榆 瑜 瘀 虞 裕 遇 逾 預 嫗 漁 瘉 與 語 諛 餘 儒 禦 諭 豫 
孺 嶼 輿 譽 籲 丸 元 玄 完 阮 宛 沿 芫 怨 炫 苑 冤 原 員 眩 袁 院 婉 惋 淵 軟 衒 
須 園 圓 源 猿 鉛 愿 蜿 遠 緣 縣 鴛 轅 願 懸 乙 曰 月 穴 悅 越 粵 說 閱 裔 銳 蕊 
玉 旭 肉 沃 育 郁 浴 辱 勗 欲 毓 煜 鈺 獄 慾 褥 鑫 閏 潤 冗 用 戎 佣 勇 容 翁 茸 
庸 恿 湧 絨 傭 溶 雍 榕 熔 蓉 踊 擁 融 鎔 咨 咱 炸 痄 渣 詐 搾 楂 溠 榨 蜡 樝 鮓 
髽 仔 囝 制 泲 祭 猘 滯 製 際 劌 劑 擠 濟 躋 齎 霽 虀 齏 砦 債 寨 齊 瘵 齋 宅 咋 
窄 蚱 責 舴 嘖 摘 翟 磔 擇 澤 簀 擲 謫 賾 躑 站 斬 湛 嶄 暫 簪 鏨 臢 蘸 棧 琖 盞 
綻 撰 賺 贊 饌 攢 瓚 讚 趲 丁 爭 崢 掙 猙 琤 睜 箏 諍 錚 找 抓 笊 棹 罩 嘲 櫂 匝 
咂 眨 砸 習 唼 集 閘 隰 雜 襲 扎 札 軋 拶 哳 紮 鍘 州 舟 肘 走 咒 周 宙 岫 帚 侜 
冑 奏 洲 紂 酒 酎 啁 晝 袖 陬 啾 就 揍 揪 週 湫 鄒 僦 甃 皺 僽 諏 賙 縐 鄹 盩 謅 
鵃 籀 鯫 騶 鷲 驟 姐 者 柘 借 罝 這 嗟 榭 蔗 赭 遮 謝 藉 鷓 脊 隻 跖 摭 鄭 仄 昃 
則 側 枕 怎 朕 浸 砧 針 祲 斟 寖 箴 鴆 譖 圳 珍 振 疹 真 陣 畛 診 軫 甄 賑 震 縝 
鎮 鬒 曾 增 憎 噌 甑 矰 罾 繒 贈 汁 執 縶 厔 姪 庢 郅 疾 桎 窒 蛭 嫉 質 膣 蟄 鑕 
且 序 足 咀 沮 狙 隹 苴 疽 追 敘 最 惴 菹 趄 睢 罪 綴 聚 漵 嘴 墜 醉 蕞 錐 縋 嶼 
檇 贅 騅 齟 巳 之 支 止 氏 仔 卮 只 字 寺 旨 自 至 伺 吱 址 孜 志 忮 扺 豸 阯 兕 
姊 枝 治 知 祀 肢 芝 芷 俟 咨 咫 姿 指 祉 籽 胝 致 枳 耔 恣 祗 紙 脂 茲 剚 涘 秭 
梓 梔 淄 痔 耜 趾 笥 笫 孳 智 滋 痣 紫 嵫 彘 粢 胾 胔 菑 軹 黹 嗣 滓 稚 置 訾 資 
貲 輊 雉 飼 廌 搘 觜 漬 緇 蜘 誌 齊 疐 摯 質 輜 諮 錙 髭 鼒 懥 贄 識 齜 躓 孌 鷙 
夕 汐 即 炙 直 矽 穸 值 唧 席 脊 陟 寂 埴 植 殖 湜 勣 蓆 幘 瘠 稷 踖 磧 積 績 蹐 
職 藉 蹟 鯽 蹠 籍 占 尖 佔 沾 粘 覘 詹 漸 颭 霑 幨 瞻 譫 戔 洊 牮 展 荐 旃 剪 湔 
煎 搌 箋 戩 箭 緘 賤 踐 翦 戰 餞 氈 輾 邅 濺 薦 羶 鬋 闡 顫 籛 譾 鱣 鸇 韉 井 正 
阱 征 怔 政 症 凊 烝 偵 旌 淨 幀 晶 菁 楨 睛 靖 鉦 禎 精 蒸 箐 徵 靚 整 靜 證 鯖 
鶄 癥 浹 接 楫 摺 輒 慴 褶 囁 懾 折 哲 浙 捷 婕 睫 節 蜇 截 櫛 癤 召 招 沼 昭 晁 
朝 椒 焦 詔 湫 剿 勦 照 趙 僬 蕉 礁 醮 皭 鷦 釂 左 佐 助 坐 阻 阼 俎 座 祚 詛 妁 
灼 芍 卓 斫 桌 酌 雀 棹 著 爵 繳 嚼 屯 肫 迍 俊 津 窀 准 峻 晉 隼 朘 皴 竣 進 畯 
準 搢 溱 榛 盡 蓁 諄 餕 儘 儔 樽 縉 臻 遵 濬 駿 燼 藎 鐫 贐 丈 仉 仗 匠 杖 長 將 
帳 張 章 脹 象 像 幛 彰 漳 漲 障 嫜 嶂 樟 槳 漿 獎 璋 蔣 賬 橡 瘴 蟑 醬 卒 捽 再 
在 災 哉 宰 栽 崽 菑 載 作 怍 柞 酢 筰 擢 濯 鷟 鑿 壯 妝 狀 莊 葬 裝 臧 撞 樁 駔 
藏 贓 臟 髒 戇 早 皂 皁 胙 祖 租 蚤 做 組 造 棗 遭 澡 糟 簉 蹧 藻 竹 足 妯 竺 俗 
柚 捉 祝 浞 族 逐 舳 筑 粥 軸 濁 築 燭 鏃 蠋 躅 屬 續 鐲 囑 矚 中 仲 忪 宗 忠 盅 
重 從 眾 舂 訟 棕 傯 腫 頌 種 粽 粽 綜 誦 總 縱 鍾 螽 蹤 鬃 鐘 主 朱 住 侏 拄 注 
洙 炷 株 珠 茱 疰 渚 硃 蛀 煮 著 蛛 註 誅 箸 銖 翥 諸 豬 駐 麈 櫫 鑄 耑 專 尊 傳 
撙 遵 顓 纂 囀 鐫 鱒 纘 鑽
()@#$\{}+,&;"; 
?>
