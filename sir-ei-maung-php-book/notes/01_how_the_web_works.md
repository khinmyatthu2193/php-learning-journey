# Chapter 1 — How the Web Works 🌐

> Beginner-friendly PHP learning notes inspired by topics studied in Sir Ei Maung's PHP book.

---

# Part A — English 🇬🇧

## 1. What is the World Wide Web (WWW)?

The **World Wide Web** is a collection of web pages and websites that we open using a web browser, such as Chrome or Firefox.

- **Internet:** The worldwide network connecting computers and devices.
- **Web (WWW):** One service that uses the Internet. Websites and web pages belong to the Web.
- **Browser:** Software that helps us visit web pages.

**Example:** When you open `https://example.com`, your browser uses the Internet to access a page on the Web.

**Remember:** Internet ≠ Web. The Web runs *on* the Internet.

## 2. Website vs. Web Application

| Website | Web application |
|---|---|
| Mainly provides information or content | Mainly lets users perform tasks |
| Example: a simple news or information page | Example: an online classroom or rental management system |
| Often focuses on reading and browsing | Often includes forms, accounts, and data updates |

**Important:** This is a useful beginner distinction, not a strict rule. Many modern websites are also web applications.

## 3. Three Main Parts of Web Communication

1. **Client** — requests information or a service.
2. **Server** — receives the request and sends a response.
3. **Protocol** — rules for communication (for example, HTTP).

```text
CLIENT  -- HTTP Request -->  SERVER
CLIENT  <-- HTTP Response -- SERVER
          (communication rules: HTTP)
```

### 3.1 Client: User, Device, User Agent

- **User:** The person using the Web.
- **Device:** The phone, laptop, or computer they use.
- **User agent:** Software acting for the user, usually a web browser such as Chrome.

**Example:** You (user) use a laptop (device) and Chrome (user agent) to visit a website.

### 3.2 Server: Server Computer and Server Software

- **Server computer:** The physical or virtual machine that provides resources.
- **Server software:** A program that listens for requests and sends responses (for example, Apache or Nginx).

**PHP's role:** PHP code can run on the server to create a response. PHP is not itself the same thing as Apache or Nginx.

### 3.3 Protocol

A **protocol** is a set of rules that devices follow to communicate.

- **HTTP:** Rules for web requests and responses.
- **HTTPS:** HTTP protected by encryption using TLS.

## 4. How Does the Web Work?

Example: You visit a PHP page.

```text
1. You enter a URL in your browser.
                ↓
2. The browser finds the server and connects to it.
                ↓
3. The browser sends an HTTP request.
                ↓
4. The server handles the request.
   (PHP may run and read a database.)
                ↓
5. The server sends an HTTP response.
                ↓
6. The browser displays the result.
```

**Key point:** Your browser receives the *result* of PHP execution (often HTML), not the server's original PHP source code.

## 5. HTTP Requests and Responses

**HTTP** stands for **Hypertext Transfer Protocol**. It defines how clients and servers exchange messages.

### Request

A request asks the server to do something.

```http
GET /hello HTTP/1.1
Host: example.com
Accept: text/html
```

- **Method (`GET`):** What action is requested.
- **Path (`/hello`):** Which resource is requested.
- **Headers:** Extra information about the request.
- **Body (optional):** Data sent with some requests, such as form or JSON data.

Common methods:

| Method | Simple meaning |
|---|---|
| GET | Get information |
| POST | Submit data for processing |
| PUT | Create or replace a resource |
| PATCH | Partially update a resource |
| DELETE | Request removal of a resource |

### Response

The response tells the client what happened and may include content.

```http
HTTP/1.1 200 OK
Content-Type: text/html; charset=UTF-8

<h1>Hello!</h1>
```

- **Status code:** The result of the request.
- **Response headers:** Information about the returned content.
- **Response body:** The actual content (HTML, JSON, an image, etc.).

Common status codes:

| Code | Meaning |
|---|---|
| 200 | OK — request succeeded |
| 301 | Moved permanently |
| 400 | Bad request |
| 401 | Authentication required |
| 403 | Forbidden |
| 404 | Not found |
| 500 | Internal server error |

## 6. What Are HTTP Headers?

**Headers** are pieces of extra information included in HTTP messages.

| Request header | Purpose |
|---|---|
| `Host` | Which website the client wants |
| `Accept` | Types of content the client can accept |
| `Authorization` | Credentials for accessing protected resources |
| `Cookie` | Cookies the browser sends to the server |

| Response header | Purpose |
|---|---|
| `Content-Type` | Type of returned data, such as HTML or JSON |
| `Cache-Control` | Rules for caching the response |
| `Set-Cookie` | Tells the browser to store a cookie |
| `Content-Length` | Size of the response body in bytes, when provided |

**Remember:** Headers describe the message; the body carries the main content.

## 7. HTTP Is Stateless

**Stateless** means each HTTP request is treated independently. HTTP itself does not automatically remember earlier requests.

**Example:**

```text
Request 1: "Show the login page."
Request 2: "Show my profile."
```

The second request does not automatically carry the memory of the first. Websites use **cookies, sessions, or tokens** to keep track of users across requests.

### Advantages

- Simpler request handling.
- Easier to spread requests across multiple servers.
- Each request can be handled independently.

### Disadvantages

- Login state and shopping carts need extra mechanisms.
- Cookies, sessions, and tokens add development and security responsibilities.

**Remember:** HTTP is stateless, but websites can still remember you by adding state-management mechanisms.

## 8. HTTP Is Usually Pull-Based

**Pull-based** means the client normally starts the communication by requesting information from the server.

```text
Browser: "Any new messages?"  --> Server
Browser: <-- "Here are the messages."
```

### Advantages

- The client decides when to request data.
- Simple and predictable for normal web pages.
- No need to send updates when nobody asks for them.

### Disadvantages

- The client may need to request repeatedly to check for updates (**polling**).
- Repeated polling can waste requests and delay updates.

**Important exception:** Modern web apps can receive near-real-time updates using **WebSockets**, **Server-Sent Events (SSE)**, or HTTP/2 and HTTP/3 streaming features. So “pull-based” is a good description of the *normal request–response pattern*, not a rule that servers can never send ongoing updates.

## 9. HTTP Versions

| Version | Key idea |
|---|---|
| HTTP/0.9 | Very simple early version |
| HTTP/1.0 | Introduced richer request and response features |
| HTTP/1.1 | Improved persistent connections and other features |
| HTTP/2 | Multiplexes many requests over one TCP connection |
| HTTP/3 | Uses QUIC over UDP, improving connection behavior on some networks |

**HTTP/3 is the latest standardized major HTTP version (as of October 2026).** HTTP/1.1 and HTTP/2 are still used.

Your browser and the server negotiate which version to use. A browser supporting HTTP/3 may still connect with HTTP/2.

**Check in Chrome:** `F12` → **Network** → right-click a column heading → enable **Protocol** → reload.

- `http/1.1` = HTTP/1.1
- `h2` = HTTP/2
- `h3` = HTTP/3

## 10. Quick Review — English

1. **WWW?** Web pages and websites accessed through browsers over the Internet.
2. **Internet vs Web?** Internet = network; Web = service using the network.
3. **Three web communication parts?** Client, server, protocol.
4. **Client parts?** User, device, user agent.
5. **Server parts?** Server computer, server software.
6. **HTTP?** Rules for web requests and responses.
7. **Header?** Extra information about a request or response.
8. **Stateless?** HTTP does not automatically remember previous requests.
9. **Pull-based?** Usually the client asks first.
10. **Latest major HTTP version?** HTTP/3.

---

# Part B — မြန်မာဘာသာ 🇲🇲

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
CLIENT  -- Request -->  SERVER
CLIENT  <-- Response -- SERVER
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

<h1>Hello!</h1>
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

## Self-Test ✍️

Try answering without looking at the notes:

1. What is the difference between the Internet and the Web?
2. Why is a browser called a user agent?
3. What is the difference between a request header and a response body?
4. If HTTP is stateless, how does a website remember that you logged in?
5. Why might Chrome show `h2` even if Chrome supports HTTP/3?

**Learning tip:** Explain each answer aloud in your own words. If you can explain it simply, you probably understand it.
