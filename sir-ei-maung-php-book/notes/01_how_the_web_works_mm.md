# အခန်း (၁) — Web အလုပ်လုပ်ပုံ 🌐 (မြန်မာဘာသာ)

## ၁။ World Wide Web (WWW) ဆိုတာဘာလဲ။

**World Wide Web (WWW)** ဆိုတာ Browser ကနေ ဝင်ကြည့်လို့ရတဲ့ Web Page တွေ၊ Website တွေ စုစည်းထားတဲ့ စနစ်ဖြစ်ပါတယ်။

- **Internet:** ကမ္ဘာတစ်ဝန်းက Computer နဲ့ Device တွေကို ချိတ်ဆက်ပေးထားတဲ့ Network ကြီး။

- **Web (WWW):** Internet ကို အသုံးပြုထားတဲ့ Service တစ်မျိုး။ Website တွေဟာ Web ရဲ့ အစိတ်အပိုင်းတွေ ဖြစ်ပါတယ်။

- **Browser:** Website တွေကို ဖွင့်ကြည့်ဖို့ အသုံးပြုတဲ့ Software (ဥပမာ Chrome, Firefox)။

**ဥပမာ:** Chrome မှာ `https://example.com` ကို ဖွင့်တဲ့အခါ Internet ကတစ်ဆင့် Web Page ကို သွားယူကြည့်တာ ဖြစ်ပါတယ်။

**မှတ်ရန်:** Internet နဲ့ Web က မတူပါဘူး။ Web က Internet ပေါ်မှာ အလုပ်လုပ်တာပါ။

## ၂။ Website နဲ့ Web Application ဘာကွာလဲ။

| Website | Web Application |
|---|---|
| အချက်အလက်၊ စာတွေကို အဓိက ဖော်ပြပေးတယ် | အသုံးပြုသူကို လုပ်ငန်းတစ်ခုခု လုပ်ဆောင်ခွင့်ပေးတယ် |
| ဥပမာ — သတင်းဖတ်တဲ့ Page | ဥပမာ — Online Classroom၊ Laptop Rental System |
| ဖတ်ရှုကြည့်ရှုတာကို အဓိကထားတယ် | Login ဝင်တာ၊ Form ဖြည့်တာ၊ Data ပြင်တာတွေ ပါနိုင်တယ် |

**သတိပြုရန်:** ဒါက စလေ့လာသူတွေအတွက် လွယ်အောင် ခွဲပြထားတာပါ။ အခုခေတ် Website အများကြီးက Web Application လည်း ဖြစ်ပါတယ်။

## ၃။ Web ဆက်သွယ်မှုမှာ အဓိက အပိုင်း (၃) ပိုင်း

1. **Client** — လိုချင်တဲ့အချက်အလက်ကို တောင်းဆိုတဲ့ဘက်။

2. **Server** — တောင်းဆိုချက်ကို လက်ခံပြီး ပြန်လည်ဖြေကြားတဲ့ဘက်။

3. **Protocol** — နှစ်ဖက်ဆက်သွယ်ရာမှာ လိုက်နာရတဲ့ စည်းမျဉ်းတွေ။

```text

CLIENT  -- Request -->  SERVER

CLIENT  <-- Response -- SERVER

      HTTP စည်းမျဉ်းများဖြင့် ဆက်သွယ်သည်

```

### ၃.၁ Client ရဲ့ အပိုင်း (၃) ပိုင်း

- **User:** Website ကို အသုံးပြုနေတဲ့ လူ။

- **Device:** အသုံးပြုနေတဲ့ Laptop၊ Phone၊ Computer။

- **User Agent:** User အစား Web နဲ့ ဆက်သွယ်ပေးတဲ့ Software (များသောအားဖြင့် Browser)။

**ဥပမာ:** သင် (User) က Laptop (Device) ပေါ်မှာ Chrome (User Agent) နဲ့ Website တစ်ခု ဖွင့်ကြည့်တယ်။

### ၃.၂ Server ရဲ့ အပိုင်း (၂) ပိုင်း

- **Server Computer:** Website အတွက် လိုအပ်တဲ့ Resource တွေကို ပေးနိုင်တဲ့ Physical သို့မဟုတ် Virtual Computer။

- **Server Software:** Request ကို လက်ခံပြီး Response ပြန်ပို့ပေးတဲ့ Program (ဥပမာ Apache, Nginx)။

**PHP ရဲ့အလုပ်:** Server ပေါ်မှာ PHP Code ကို Run ပြီး HTML စတဲ့ Result တွေ ထုတ်ပေးနိုင်တယ်။ PHP နဲ့ Apache/Nginx က တစ်ခုတည်း မဟုတ်ပါဘူး။

### ၃.၃ Protocol ဆိုတာဘာလဲ။

**Protocol** ဆိုတာ Device တွေ အချင်းချင်း ဆက်သွယ်တဲ့အခါ လိုက်နာရတဲ့ စည်းမျဉ်းတွေပါ။

- **HTTP:** Web Request နဲ့ Response ပို့ဖို့ သတ်မှတ်ထားတဲ့ စည်းမျဉ်း။

- **HTTPS:** TLS Encryption နဲ့ ကာကွယ်ထားတဲ့ HTTP ဆက်သွယ်မှု။

## ၄။ Web က ဘယ်လို အလုပ်လုပ်သလဲ။

```text

၁။ Browser မှာ URL ရိုက်ထည့်တယ်။

                 ↓

၂။ Browser က Server ကို ရှာပြီး ချိတ်ဆက်တယ်။

                 ↓

၃။ HTTP Request ပို့တယ်။

                 ↓

၄။ Server က Request ကို လုပ်ဆောင်တယ်။

   (လိုအပ်ရင် PHP Run တယ်၊ Database ဖတ်တယ်။)

                 ↓

၅။ HTTP Response ပြန်ပို့တယ်။

                 ↓

၆။ Browser က ရလာတဲ့ Result ကို ပြသတယ်။

```

**အဓိက မှတ်ရန်:** Browser က PHP Source Code ကို တိုက်ရိုက်မရပါဘူး။ Server က PHP ကို Run ပြီး ထွက်လာတဲ့ Result (ဥပမာ HTML) ကို ရတာပါ။

## ၅။ HTTP Request နဲ့ Response

**HTTP = Hypertext Transfer Protocol** ဖြစ်ပြီး Client နဲ့ Server ကြား Message တွေ ဘယ်လိုပို့မလဲဆိုတာ သတ်မှတ်ပေးပါတယ်။

### Request (တောင်းဆိုချက်)

```http

GET /hello HTTP/1.1

Host: example.com

Accept: text/html

```

- **Method (`GET`):** ဘာလုပ်ချင်လဲဆိုတာ ဖော်ပြတယ်။

- **Path (`/hello`):** ဘယ် Resource ကို လိုချင်လဲဆိုတာ ဖော်ပြတယ်။

- **Headers:** Request အကြောင်း အပိုအချက်အလက်တွေ။

- **Body:** လိုအပ်ရင် ပို့တဲ့ Data (ဥပမာ Form Data၊ JSON)။

| Method | အလွယ်မှတ်ရန် |
|---|---|
| GET | Data ယူမယ် |
| POST | Data ပို့ပြီး လုပ်ဆောင်ခိုင်းမယ် |
| PUT | Resource တစ်ခုကို အသစ်ဖန်တီး/အစားထိုးမယ် |
| PATCH | Resource ရဲ့ တစ်စိတ်တစ်ပိုင်းကို ပြင်မယ် |
| DELETE | Resource ဖျက်ဖို့ တောင်းဆိုမယ် |

### Response (ပြန်ကြားချက်)

```http

HTTP/1.1 200 OK

Content-Type: text/html; charset=UTF-8

\<h1>Hello!\</h1>

```

- **Status Code:** Request အောင်မြင်လား၊ Error ဖြစ်လားဆိုတာ။

- **Response Headers:** ပြန်ပို့တဲ့ Data အကြောင်း အချက်အလက်တွေ။

- **Response Body:** အမှန်တကယ် ပြန်ပို့တဲ့ Content (HTML၊ JSON၊ Image စသည်)။

| Code | အဓိပ္ပာယ် |
|---|---|
| 200 | အောင်မြင်တယ် |
| 301 | နေရာအသစ်ကို အမြဲတမ်း ပြောင်းထားတယ် |
| 400 | Request မှာ ပြဿနာရှိတယ် |
| 401 | Authentication လိုအပ်တယ် |
| 403 | ဝင်ရောက်ခွင့်မရှိဘူး |
| 404 | ရှာမတွေ့ဘူး |
| 500 | Server ဘက်မှာ Error ဖြစ်တယ် |

## ၆။ HTTP Headers ဆိုတာဘာလဲ။

**Headers** ဆိုတာ Request/Response Message နဲ့ပတ်သက်တဲ့ အပိုအချက်အလက်တွေ ဖြစ်ပါတယ်။

| Request Header | အသုံးဝင်ပုံ |
|---|---|
| `Host` | ဘယ် Website ကို လိုချင်လဲ |
| `Accept` | ဘယ် Content Type တွေကို လက်ခံနိုင်လဲ |
| `Authorization` | Protected Resource အတွက် အထောက်အထား |
| `Cookie` | Browser က Server ကို ပြန်ပို့တဲ့ Cookie |
| Response Header | အသုံးဝင်ပုံ |
|---|---|
| `Content-Type` | ပြန်လာတဲ့ Data အမျိုးအစား |
| `Cache-Control` | Cache သိမ်းဆည်းမှုဆိုင်ရာ စည်းမျဉ်း |
| `Set-Cookie` | Browser ကို Cookie သိမ်းခိုင်းတယ် |
| `Content-Length` | ပါရှိခဲ့ရင် Body ရဲ့ Byte အရွယ်အစား |

**မှတ်ရန်:** Header က Message အကြောင်း ပြောပြတယ်။ Body က အဓိက Content ကို သယ်ဆောင်တယ်။

## ၇။ HTTP က Stateless Protocol ဖြစ်တယ်

**Stateless** ဆိုတာ HTTP Request တစ်ခုစီကို သီးခြားစီ ကိုင်တွယ်တာဖြစ်ပြီး HTTP ကိုယ်တိုင်က အရင် Request တွေကို အလိုအလျောက် မမှတ်မိတာပါ။

**ဥပမာ:**

```text

Request 1: Login Page ပြပါ။

Request 2: ကျွန်တော့် Profile ပြပါ။

```

Request 2 မှာ Request 1 ရဲ့ အကြောင်းအရာကို HTTP က အလိုအလျောက် မမှတ်မိပါဘူး။ ဒါကြောင့် Website တွေက **Cookies, Sessions, Tokens** တွေကို သုံးပြီး User ကို မှတ်သားထားကြပါတယ်။

### အားသာချက်များ

- Request တစ်ခုချင်းစီကို ကိုင်တွယ်ရတာ ရိုးရှင်းတယ်။

- Server အများကြီးနဲ့ Request တွေ ခွဲဝေလုပ်ဆောင်ဖို့ ပိုလွယ်တယ်။

- Request တွေကို သီးခြားစီ လုပ်ဆောင်နိုင်တယ်။

### အားနည်းချက်များ

- Login အခြေအနေ၊ Shopping Cart စတာတွေ မှတ်ထားဖို့ နည်းလမ်းအပိုလိုတယ်။

- Session၊ Cookie၊ Token တွေကို လုံခြုံအောင် စီမံရတယ်။

**မှတ်ရန်:** HTTP က Stateless ဖြစ်ပေမဲ့ Website က User ကို မမှတ်မိနိုင်ဘူးလို့ မဆိုလိုပါဘူး။

## ၈။ HTTP က ပုံမှန်အားဖြင့် Pull-Based ဖြစ်တယ်

**Pull-Based** ဆိုတာ Client က အရင်တောင်းဆိုပြီးမှ Server က Response ပြန်ပေးတဲ့ ပုံစံပါ။

```text

Browser: "Message အသစ်ရှိလား?" --> Server

Browser: <-- "ဒီမှာ Message တွေပါ။"

```

### အားသာချက်များ

- Client က Data ကို ဘယ်အချိန်ယူမလဲ ဆုံးဖြတ်နိုင်တယ်။

- သာမန် Website တွေအတွက် နားလည်ရလွယ်တယ်။

- မတောင်းဆိုတဲ့အချိန် Update တွေ အမြဲပို့နေဖို့ မလိုဘူး။

### အားနည်းချက်များ

- Update အသစ်ရှိမရှိ သိဖို့ ခဏခဏ Request ပို့ရနိုင်တယ် (**Polling**)။

- Polling များရင် မလိုအပ်တဲ့ Request တွေ တိုးလာပြီး Update ရတာ နောက်ကျနိုင်တယ်။

**သတိပြုရန်:** Modern Web App တွေမှာ **WebSocket**, **Server-Sent Events (SSE)** နဲ့ Streaming နည်းလမ်းတွေကို သုံးပြီး Real-Time Update တွေ ပို့နိုင်ပါတယ်။ ဒါကြောင့် Pull-Based ဆိုတာ ပုံမှန် HTTP Request–Response ပုံစံကို ရှင်းပြတာဖြစ်ပြီး Server က Update မပို့နိုင်ဘူးဆိုတဲ့ အဓိပ္ပာယ် မဟုတ်ပါဘူး။

## ၉။ HTTP Version များ

| Version | အဓိက မှတ်ရန် |
|---|---|
| HTTP/0.9 | အစောပိုင်း ရိုးရှင်းတဲ့ Version |
| HTTP/1.0 | Request/Response Feature တွေ ပိုပါလာတယ် |
| HTTP/1.1 | Connection ကို ဆက်လက်အသုံးပြုနိုင်မှု စတာတွေ တိုးတက်လာတယ် |
| HTTP/2 | TCP Connection တစ်ခုတည်းပေါ်မှာ Request အများကြီးကို Multiplex လုပ်နိုင်တယ် |
| HTTP/3 | UDP ပေါ်က QUIC ကို သုံးပြီး Network အချို့မှာ Connection ပိုကောင်းစေတယ် |

**၂၀၂၆ အောက်တိုဘာလအထိ နောက်ဆုံး Standardized Major Version က HTTP/3 ဖြစ်ပါတယ်။** ဒါပေမဲ့ HTTP/1.1 နဲ့ HTTP/2 ကိုလည်း ဆက်လက်အသုံးပြုနေကြပါတယ်။

Browser နဲ့ Server နှစ်ဖက်လုံး Support လုပ်တဲ့ Version ကို ဆက်သွယ်အသုံးပြုကြပါတယ်။ Browser က HTTP/3 Support လုပ်နေလည်း Website တစ်ခုမှာ HTTP/2 နဲ့ ဆက်သွယ်နေနိုင်ပါတယ်။

**Chrome မှာ စစ်ရန်:** `F12` → **Network** → Column Header ကို Right-click → **Protocol** ကို ဖွင့် → Reload လုပ်ပါ။

- `http/1.1` = HTTP/1.1

- `h2` = HTTP/2

- `h3` = HTTP/3

## ၁၀။ အမြန်ပြန်လည်လေ့ကျင့်ရန် (Quick Review)

1. **WWW?** Browser နဲ့ ကြည့်နိုင်တဲ့ Web Page/Website တွေရဲ့ စနစ်။

2. **Internet နဲ့ Web?** Internet က Network၊ Web က အဲဒီ Network ကို အသုံးပြုတဲ့ Service။

3. **Web ဆက်သွယ်မှု အပိုင်း (၃) ပိုင်း?** Client၊ Server၊ Protocol။

4. **Client အပိုင်း (၃) ပိုင်း?** User၊ Device၊ User Agent။

5. **Server အပိုင်း (၂) ပိုင်း?** Server Computer၊ Server Software။

6. **HTTP?** Web Request/Response ဆက်သွယ်ရေး စည်းမျဉ်း။

7. **Header?** Message အကြောင်း အပိုအချက်အလက်။

8. **Stateless?** အရင် Request ကို HTTP က အလိုအလျောက် မမှတ်မိ။

9. **Pull-Based?** ပုံမှန်အားဖြင့် Client က အရင်တောင်းဆိုတယ်။

10. **နောက်ဆုံး Major HTTP Version?** HTTP/3။

---

---

## ကိုယ်တိုင်စမ်းဖြေကြည့်ရန် ✍️ (Self-Test)

မှတ်စုကို ပြန်မကြည့်ဘဲ ဖြေကြည့်ပါ။

1. Internet နဲ့ Web တို့ ဘာကွာခြားသလဲ။
2. Browser ကို User Agent လို့ ဘာကြောင့် ခေါ်သလဲ။
3. Request Header နဲ့ Response Body တို့ ဘာကွာခြားသလဲ။
4. HTTP က Stateless ဖြစ်ပေမဲ့ Website က Login ဝင်ထားတာကို ဘယ်လို မှတ်မိသလဲ။
5. Chrome က HTTP/3 ကို Support လုပ်ပေမဲ့ ဘာကြောင့် `h2` လို့ ပြနိုင်သလဲ။

**လေ့လာရေး အကြံပြုချက်:** အဖြေတွေကို ကိုယ့်စကားနဲ့ ပြန်ရှင်းပြကြည့်ပါ။ ရိုးရိုးရှင်းရှင်း ပြန်ရှင်းပြနိုင်ရင် နားလည်နေပြီလို့ ယူဆနိုင်ပါတယ်။
