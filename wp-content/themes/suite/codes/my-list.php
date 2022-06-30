<?php

class Codes_My_List
{

    public function PlaceList()
    {
        $_list = array(
            '00' => "選擇地區",
            '01' => "Thành phố Hà Nội - 河內市",
            '02' => "Thành phố Hồ Chí Minh - 胡志明市",
            '03' => "Hải Phòng - 海防市",
            '04' => "Đà Nẵng - 峴港市",
            '05' => "Bà Rịa-Vũng Tàu - 巴地頭頓省",
            '06' => "Bắc Ninh - 北寧省",
            '07' => "Bình Dương - 平陽省",
            '08' => "Đồng Nai - 同奈省",
            '09' => "Hà Tĩnh - 河靜省",
            '10' => "Long An - 隆安省",
            '11' => "Tây Ninh - 西寧省",
            '12' => "Thái Bình - 太平省",
            '13' => "Thành phố Cần Thơ - 芹苴市",
            '14' => "An Giang - 安江省",
            '15' => "Bạc Liêu - 薄遼省",
            '16' => "Bắc Giang - 北江省",
            '17' => "Bắc cạn - 北幹省",
            '18' => "Bến Tre - 檳椥省",
            '19' => "Bình Định - 平定省",
            '20' => "Bình Phước - 平福省",
            '21' => "Bình Thuận -  平順省",
            '22' => "Cao Bằng - 高平省",
            '23' => "Cà Mau - 金甌省",
            '24' => "Đắk Lắk - 得樂省",
            '25' => "Đắk Nông - 得農省",
            '26' => "Điện Biên - 奠邊省",
            '27' => "Đồng Tháp - 同塔省",
            '28' => "Gia Lai - 嘉萊省",
            '29' => "Hà Giang - 河江省",
            '30' => "Hà Nam - 河南省",
            '31' => "Hà Tây - 河西省",
            '32' => "Hải Dương - 海陽省",
            '33' => "Hậu Giang - 後江省",
            '34' => "Hoà Bình - 和平省",
            '35' => "Hưng Yên - 興安省",
            '36' => "Khánh Hòa - 慶和省",
            '37' => "Kiên Giang - 堅江省",
            '38' => "Kon Tum - 崑嵩省",
            '39' => "Lai Châu - 萊州省",
            '40' => "Lạng Sơn - 諒山省",
            '41' => "Lào Cai - 老街省",
            '42' => "Nam Định - 南定省",
            '43' => "Nghệ An - 義安省",
            '44' => "Ninh Bình - 寧平省",
            '45' => "Ninh Thuận - 寧順省",
            '46' => "Phú Thọ - 富壽省",
            '47' => "Phú Yên- 富安省",
            '48' => "Quảng Bình - 廣平省",
            '49' => "Quảng Nam - 廣南省",
            '50' => "Quảng Ngãi - 廣義省",
            '51' => "Quảng Ninh - 廣寧省",
            '52' => "Quảng Trị - 廣治省",
            '53' => "Sóc Trăng - 蓄臻省",
            '54' => "Sơn La - 山羅省",
            '55' => "Thái Nguyên - 太原省",
            '56' => "Thanh Hóa - 清化省",
            '57' => "Thừa Thiên–Huế - 承天順化省",
            '58' => "Tiền Giang - 前江省",
            '59' => "Trà Vinh - 茶榮省",
            '60' => "Tuyên Quang - 宣光省",
            '61' => "Vĩnh Long - 永隆省",
            '62' => "Vĩnh Phúc - 永福省",
            '63' => "Yên Bái - 安沛省",
            '64' => "Nơi khác 其他",
        );

        return $_list;
    }

    public function CareerList()
    {
        $_list = array(
            '00' => "選擇職務",
            '01' => "經營╱人資類 - 經營╱幕僚類人員",
            '02' => "經營╱人資類 -人力資源類人員",
            '03' => "行政╱總務╱法務類",
            '04' => "行政╱總務類人員",
            '05' => "行政╱總務╱法務類",
            '06' => "法務╱智財類人員",
            '07' => "行銷╱企劃╱專案管理類 - 行銷類人員",
            '08' => "行銷╱企劃╱專案管理類 - 產品企劃類人員",
            '09' => "行銷╱企劃╱專案管理類 ",
            '10' => "專案╱產品管理類人員",
            '11' => "客服╱門市╱業務╱貿易類 - 客戶服務類人員",
            '12' => "客服╱門市╱業務╱貿易類 - 門市營業類人員",
            '13' => "客服╱門市╱業務╱貿易類 - 業務銷售類人員",
            '14' => "客服╱門市╱業務╱貿易類 - 貿易類人員",
            '15' => "餐飲╱旅遊類 - 餐飲類人員",
            '16' => "餐飲╱旅遊類 - 旅遊休閒類人員",
            '17' => "資訊軟體系統類 - 軟體╱工程類人員",
            '18' => "資訊軟體系統類 - MIS╱網管類人員",
            '19' => "操作╱技術╱維修類 操作╱技術類人員",
            '20' => "操作╱技術╱維修類 維修╱技術服務類人員",
            '21' => "資材╱物流類 採購╱資材╱倉管類人員",
            '22' => "資材╱物流類 - 運輸物流類人員",
            '23' => "營建╱製圖類 - 營建規劃類人員",
            '24' => "營建╱製圖類 - 營建施作類人員",
            '25' => "營建╱製圖類 - 製圖╱測量類人員",
            '26' => "醫療╱保健服務類 - 醫療專業類人員",
            '27' => "醫療╱保健服務類 - 醫療╱保健服務人員",
            '28' => "學術╱教育╱輔導類 - 學術研究類人員",
            '29' => "學術╱教育╱輔導類 - 教育輔導類人員",
            '30' => "研發相關類 - 工程研發類人員",
            '31' => "研發相關類 - 化工材料研發類人員",
            '32' => "研發相關類 - 生技╱醫療研發類人員",
            '33' => "生產製造╱品管╱環衛類 - 生產管理類人員 - 生產管理主管",
            '34' => "生產製造╱品管╱環衛類 - 生產管理類人員 - 工廠主管",
            '35' => "生產製造╱品管╱環衛類 - 生產管理類人員 工業工程師╱生產線規劃",
            '36' => "生產製造╱品管╱環衛類 - 生產管理類人員 生管",
            '37' => "生產製造╱品管╱環衛類 - 生產管理類人員 生管助理",
            '38' => "生產製造╱品管╱環衛類 - 製程規劃類人員 生產技術╱製程工程師",
            '39' => "生產製造╱品管╱環衛類 - 製程規劃類人員 生產設備工程師",
            '40' => "生產製造╱品管╱環衛類 - 製程規劃類人員 自動控制工程師",
            '41' => "生產製造╱品管╱環衛類 - 製程規劃類人員 SMT工程師",
            '42' => "生產製造╱品管╱環衛類 - 製程規劃類人員 半導體製程工程師",
            '43' => "生產製造╱品管╱環衛類 - 製程規劃類人員 LCD製程工程師",
            '44' => "生產製造╱品管╱環衛類 - 製程規劃類人員 半導體設備工程師",
            '45' => "生產製造╱品管╱環衛類 - 製程規劃類人員 LCD設備工程師",
            '46' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 品管╱品保主管",
            '47' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 品管╱品保工程師",
            '48' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 可靠度工程師",
            '49' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 硬體測試工程師",
            '50' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 測試人員",
            '51' => "生產製造╱品管╱環衛類 - 品保╱品管類人員  IC封裝╱測試工程師",
            '52' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 軟韌體測試工程師",
            '53' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 EMC╱電子安規工程師",
            '54' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 ISO╱品保人員",
            '55' => "生產製造╱品管╱環衛類 - 品保╱品管類人員 品管╱檢驗人員",
            '56' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 職業安全衛生管理師",
            '57' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 安全╱衛生相關檢驗人員",
            '58' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 環境工程人員 / 工程師",
            '59' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 防火及建築檢驗人員",
            '60' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 公共衛生人員",
            '61' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 廠務",
            '62' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 廠務助理",
            '63' => "生產製造╱品管╱環衛類 - 環境安全衛生類人員 職業安全衛生管理員",
            '64' => "財會╱金融專業類 - 金融專業相關類人員",
            '65' => "財會╱金融專業類 - 財務╱會計╱稅務人員",
            '66' => "農林漁牧相關類 - 農藝作物栽培工作者",
            '67' => "農林漁牧相關類 - 一般動物飼育工作者",
            '68' => "農林漁牧相關類 - 林木伐運工作者 ",
            '69' => "農林漁牧相關類 - 水產養殖工作者",
            '70' => "其他",
        );

        return $_list;
    }

    public function countryList()
    {
        $brachArr = array(
            '0000' => '選擇分會',
            '0001' => '越南總會',
            '0080' => '胡志明分會',
            '0390' => '河靜分會',
            '0640' => '頭頓分會',
            '0081' => '新順分會',
            '0241' => '北寧分會',
            '0660' => '西寧分會',
            '0720' => '隆安分會',
            '0650' => '平陽分會',
            '0610' => '同奈分會',
            '0630' => '林同分會',
            '0511' => '峴港分會',
            '0310' => '海防分會',
            '0360' => '太平分會',
            '0040' => '河內分會',
            '0808' => '青商會'
        );
        return $brachArr;
    }

    public function get_country($countryCode)
    {
        switch ($countryCode) {
            case '0001':
                $country = '越南總會';
                break;
            case '0080':
                $country = '胡志明分會';
                break;
            case '0390':
                $country = '河靜分會';
                break;
            case '0640':
                $country = '頭頓分會';
                break;
            case '0081':
                $country = '新順分會';
                break;
            case '0241':
                $country = '北寧分會';
                break;
            case '0660':
                $country = '西寧分會';
                break;
            case '0720':
                $country = '隆安分會';
                break;
            case '0650':
                $country = '平陽分會';
                break;
            case '0610':
                $country = '同奈分會';
                break;
            case '0630':
                $country = '林同分會';
                break;
            case '0511':
                $country = '峴港分會';
                break;
            case '0310':
                $country = '海防分會';
                break;
            case '0360':
                $country = '太平分會';
                break;
            case '0040':
                $country = '河內分會';
                break;
            case '0808':
                $country = '青商會';
                break;
        }
        return $country;
    }

    public function DownloadList()
    {
        $list = array(
            '1' => '會刊',
            '2' => '人物專訪',
        );
        return $list;
    }

    public function Get_download($id)
    {
        switch ($id) {
            case '1':
                $val = '會刊';
                break;
            case '2':
                $val = '人物專訪';
                break;
        }
        return $val;
    }
}
